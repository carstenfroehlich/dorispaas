<?php

    $user_id = $_GET['uid'];

    $raw_post_data = file_get_contents('php://input');
    $raw_post_array = explode('&', $raw_post_data);
    $myPost = array();
    foreach ($raw_post_array as $keyval) {
        $keyval = explode ('=', $keyval);
        if (count($keyval) == 2)
            $myPost[$keyval[0]] = urldecode($keyval[1]);
    }

    $req = 'cmd=_notify-validate';
    foreach ($myPost as $key => $value) {
        $value = urlencode($value);
       $req .= "&$key=$value";
       createPaypalIpnData($user_id, $key, $value);
    }

    $ch = curl_init(PAYPAL_URL);
    curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $req);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
    curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Connection: Close'));

    if( !($res = curl_exec($ch)) ) {
        $ch = null;
        exit;
    }
    $ch = null;
    
    if (strcmp ($res, "VERIFIED") == 0) {
        $shopcookie = loadUserCart($_GET['cart'])->token;
        $user_id = $_GET['uid'];
        
        $cart_entries = getCartEntriesByToken($shopcookie);
        $totalprice = 0.00;
        $needshipping = false;
        foreach($cart_entries AS $cartentry) {
            $article = loadArticle($cartentry->article_id);
            $totalprice = $totalprice + ($cartentry->amount * $article->price);
            if($article->need_shipping) { $needshipping = true; }
        }
        
        $user = loadUser($user_id);
        $country = loadCountry( $user->country_id );
        
        // $shipping = 90; // kostenfreier Versand innerhalb Deutschlands
        $shipping = 91; // kostenpflichtiger Versand innerhalb Deutschlands
        if($needshipping) {
            if($country->shipping_type == 1 && $totalprice < 9.8) {
                $shipping = 91;
            } elseif($country->shipping_type == 2) {
                $shipping = 92;
            } elseif($country->shipping_type == 3) {
                $shipping = 93;
            }
        } else {
            $shipping = 90; // kostenfreier Versand innerhalb Deutschlands, da kein Versand notwendig
        }
        $shipping_article = loadArticle($shipping);
        $totalprice = $totalprice + $shipping_article->price;
        
        $order_id = createOrder($user->id, $totalprice, true, true);
        $returnvalues = createOrderItemsByCartEntries($order_id, $country->id, $cart_entries);
        
        if($returnvalues['date_add'] > 0) {
            $expiration_date = date('Y-m-d');
            $actual_order_expiration_date = date('Y-m-d', strtotime($user->actual_order_expiration_date));
            if(strtotime($actual_order_expiration_date) < strtotime($expiration_date)) {
                $expiration_date = strtotime(date("Y-m-d", strtotime($expiration_date)) . " +".$returnvalues['date_add']." month");
            } else {
                $expiration_date = strtotime(date("Y-m-d", strtotime($actual_order_expiration_date)) . " +".$returnvalues['date_add']." month");
            }
            $user = loadUser(updateActualOrderExpirationDate($user, date('Y-m-d', $expiration_date)));
        }
        
        $password = '';
        $needpassword = false;
        $three_months_in_past = strtotime('-3 month', strtotime(date('Y-m-d')));
        $actual_order_expiration_date_date = strtotime($actual_order_expiration_date);
        $password_to_old = $actual_order_expiration_date_date <= $three_months_in_past;
        if(($password_to_old && $returnvalues['needpassword']) || ($returnvalues['needpassword'] && (!isset($user->password) || $user->password == ''))) {
            $password = createPassword();
            $secure_pw = securePassword($password);
            updatePassword($user, $secure_pw);
            $needpassword = true;
        }
        
        $articles = array();
        $complete = 0.00;

        $from = "bestellung@dorispaas.de";
        $to  = $user->firstname . " " . $user->lastname . " <" . $user->email . ">";
        $mail_subject = 'Vielen Dank für Ihre Bestellung';
        $mail_body  = "Sehr geehrte/r Herr/Frau " . $user->firstname . " " . $user->lastname . ",\n\n";
        $mail_body .= "vielen Dank für Ihre Bestellung. Ihre Zahlung über PayPal wurde verifiziert.  
        \nFalls Sie Bücher bestellt haben, werde ich diese umgehend versenden. 
        \nFalls Sie zum ersten Mal ein Abonnement der DorisPaas.de - Lebensmittel-Datenbank bestellt haben, 
        finden Sie unten die Zugangsdaten. Bei einer Verlängerung können Sie sich mit den alten Daten anmelden. 
        \nBei Buchung einer Beratungsleistung werde ich Sie kontaktieren, um einen Termin zu vereinbaren bzw. 
        habe diesen bereits mit Ihnen abgesprochen. \nWenn Sie eine eMail-Anfrage gebucht haben, senden Sie mir nun bitte Ihre Frage.";
        $mail_body .= "\n\nIhre Kundenummer lautet " . $user->customer_id . ".\n\nIhre Bestellung umfasst folgende Artikel:\n";
        foreach($cart_entries AS $cartentry) {
            $article = loadArticle($cartentry->article_id);
            $mail_body .= $cartentry->amount . "x " . $article->description . " " . number_format( $article->price, 2, ',', '.' )." Euro, Summe: ";
            $mail_body .= number_format( ($article->price*$cartentry->amount), 2, ',', '.' )." Euro\n";
            $complete = $complete + ($article->price*$cartentry->amount);
        }
        $mail_body .= "1x " . $shipping_article->description . " " . number_format( $shipping_article->price, 2, ',', '.' )." Euro, Summe: ";
        $mail_body .= number_format( $shipping_article->price, 2, ',', '.' )." Euro\n";
        $complete = $complete + $shipping_article->price;
        $mail_body .= "Gesamt: ".number_format( $complete, 2, ',', '.' )." Euro\n\n";
        if($needpassword) {
            $mail_body .= "Sie haben einen Zugang zur Lebensmitteldatenbank auf www.dorispaas.de gebucht. Ihre Zugangsdaten hierzu lauten:\n";
            $mail_body .= "Benutzername: " . $user->email . ", Passwort: ".$password.".\n\n";
        }
        $mail_body .= "Bitte kontrollieren Sie noch einmal die Lieferadresse: \n\n";
        $mail_body .= "Herrn/Frau " . $user->firstname . " " . $user->lastname . "\n" . $user->street . "\n" . $user->zipcode . " " . $user->cityname . "\n" . loadCountry($user->country_id)->name . " \n";
        $mail_body .= "Wenn die Daten nicht korrekt sind, senden Sie mir bitte noch heute ein eMail!\n\n";
        
        if($user->newsletter_approve) {
            $mail_body .= "Sie haben zugestimmt, den Newsletter von Dorispaas.de zu erhalten. Dem können Sie jederzeit widersprechen, indem Sie mir eine kurze Email senden.";
        }
        
        $mail_body .= "\n\nMit freundlichen Grüßen\nDoris Paas";
        
        sendMyMail("Doris Paas", $from, "Doris Paas", $mail_subject, $mail_body, nl2br($mail_body), $user->email);
        sendMyMail("Doris Paas", $from, "Doris Paas", $mail_subject, $mail_body, nl2br($mail_body), $from);

        trashCustomPaypalIpnData($user->id);

    } else if (strcmp ($res, "INVALID") == 0) {
        $email = "";
        $lastname = "";
        $user_id = $_GET['uid'];
        $user = loadUser($user_id);
        $from = "bestellung@dorispaas.de";
        $to  = $user->firstname . " " . $user->lastname . " <" . $user->email . ">";
        $mail_subject = "Bezahlvorgang dorispaas.de fehlgeschlagen";
        $mail_body  = "Sehr geehrte/r Herr/Frau " . $user->lastname . "\n\nBei Ihrer Bezahlung mit Paypal ist ein Fehler aufgetreten. PayPal wird versuchen, diesen selbstständig zu wiederholen. Bitte beachten Sie die Emails, welche Sie von PayPal erhalten. Sollte der Vorgang erneut fehlschlagen, setzen Sie sich bitte mit mir unter bestellung@dorispaas.de in Verbindung.\n\nMit freundlichen Grüßen\nDoris Paas";

        sendMyMail("Doris Paas", $from, "Doris Paas", $mail_subject, $mail_body, nl2br($mail_body), $user->email);
        sendMyMail("Doris Paas", $from, "Doris Paas", $mail_subject, $mail_body, nl2br($mail_body), $from);
    }