<?php
    if($ACTION[0] == 'logout') {
        unset($_SESSION['token']);
        unset($_SESSION['admin']);
        
        header('Location: '.URL_ROOT.'home');
        exit();
    }
    
    if(isset($ACTION[1])) {
        if($ACTION[0] == 'login' && $ACTION[1] == 'performlogin') {
            $searchedUser = getSingleUserByEmail( $_POST['email'] );
            if ( isset($searchedUser) && $searchedUser->id > 0 ) {
                $date = new DateTime($searchedUser->actual_order_expiration_date);
                if(strtotime($date->format('Y-m-d')) > strtotime(date('Y-m-d'))) {
                    if (strlen($searchedUser->password) === 13 && str_starts_with($searchedUser->password, '$2')) {
                        $password = createPassword();
                        $searchedUser = loadUser(updateUserPassword($searchedUser, securePassword($password)));
                        mailAutomaticChangedPassword($searchedUser, $password);
                        header('Location: '.URL_ROOT.'login/changedold');
                        exit();
                    } else if(checkPassword($_POST['password'], $searchedUser->password)) {
                        $token = array();
                        $token['id'] = $searchedUser->id;
                        $token['lastlogin'] = date('Y-m-d H:i:s');
                        $token['ip'] = $caller_ip;
                        $token['email'] = $_POST['email'];
                        $_SESSION['token'] = JWT::encode($token, SECRET_JSON_API_KEY);
                        
                        if(in_array($searchedUser->id, $administrators)) {
                            $_SESSION['admin'] = JWT::encode(array('admin' => $searchedUser->id, 'curdate' => date('Y-m-d H:i:s')), SECRET_JSON_API_KEY);
                        }
                        
                        header('Location: '.URL_ROOT.'lebensmittel-datenbank');
                        exit();
                    }
                }
            }
            header('Location: '.URL_ROOT.'login/error');
            exit();
        }
    
        if($ACTION[0] == 'ordernow' && $ACTION[1] == 'order') {
            $ordertype = 'newcustomer';
            $user_id = 0;
            if(SHOW_CAPTCHA) {
                $captcha = '';
                if(isset($_POST['g-recaptcha-response'])) {
                    $captcha = $_POST['g-recaptcha-response'];
                }
                $ergebnis = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LcmIjAUAAAAACRtZLMBEf6VvTqOcjy6kal4YboX&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
                if(json_decode($ergebnis)->success == false) {
                    header('Location: '.URL_ROOT.'cashbox/error');
                    exit();
                }
            }
            if(isset($_POST['ordertype']) && $_POST['ordertype'] != '') {
                $ordertype = $_POST['ordertype'];
            }
            
            if($ordertype == 'newcustomer') {
                $firstname = $_POST['firstname'];
                $lastname  = $_POST['lastname'];
                $street    = $_POST['street'];
                $zip       = $_POST['plzcity'];
                $city      = $_POST['city'];
                $country   = $_POST['country'];
                $email     = $_POST['email'];
                $phone     = $_POST['phone'];
                
                if($firstname != '' && $lastname != '' && $street != '' && $zip != '' && $city != '' && $email != '' && validateEmailaddress($email)) {
                    $nl_approved = 0;
                    if(isset($_POST['newsletter_approve'])) {
                        $nl_approved = $_POST['newsletter_approve'];
                    }
                    $existing_user = getSingleUserByEmail($email);
                    $user_id = 0;
                    if(isset($existing_user) && $existing_user->id > 0) {
                        $user_id = $existing_user->id;
                    } else {
                        $user_id = createUser($firstname, $lastname, $street, $zip, $city, $country, $phone, $email, $nl_approved);
                    }
                }
            } else if($ordertype == 'mailorder') {
                $email = $_POST['customer_email'];
                $user = getSingleUserByEmail($email);
                if(isset($user) && $user->id > 0) {
                    $user_id = $user->id;
                } else {
                    header('Location: '.URL_ROOT.'cashbox/mailordererror');
                    exit();
                }
            } else if($ordertype == 'numberorder') {
                $customernumber = $_POST['customer'];
                $user = getSingleUserByCustomerId($customernumber);
                if(isset($user) && $user->id > 0) {
                    $user_id = $user->id;
                } else {
                    header('Location: '.URL_ROOT.'cashbox/numberordererror');
                    exit();
                }
            } else {
                header('Location: '.URL_ROOT.'cashbox/error');
                exit();
            }
            
            $usercart = loadUserCartByToken($_COOKIE['shopcookie']);
            if(!isset($usercart)) {
                createUserCart($user_id, $_COOKIE['shopcookie']);
            }
            
            header('Location: '.URL_ROOT.'ordernow');
            exit();
        }
        
        if($ACTION[0] == 'contact' && $ACTION[1] == 'sendcontact') {
            $mailerror = "";
            $wrongcaptcha = false;
            if(SHOW_CAPTCHA) {
                $captcha = '';
                if(isset($_POST['g-recaptcha-response'])) {
                    $captcha = $_POST['g-recaptcha-response'];
                }
                $ergebnis = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LcmIjAUAAAAACRtZLMBEf6VvTqOcjy6kal4YboX&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
                if(json_decode($ergebnis)->success == false) {
                    $wrongcaptcha = true;
                    $mailerror .= "<br />Sie haben das Captcha nicht bestätigt.";
                }
            }
            if(!$wrongcaptcha) {
                if ( $_POST[ "fullname" ] == "" ) {
                    $mailerror .= "<br />Bitte geben Sie Ihren Vor- und Nachnamen ein.";
                }
                
                if ( $_POST[ "emailaddr" ] == "" ) {
                    $mailerror .= "<br />Bitte geben Sie Ihre Mail-Adresse an.";
                }
                
                if ( !validateEmailaddress($_POST[ "emailaddr" ]) ) {
                    $mailerror .= "<br />Die angegebene Mail-Adresse ist ung&uuml;ltig.";
                }
                
                if ( $_POST[ "subject" ] == "" ) {
                    $mailerror .= "<br />Bitte geben Sie ein Thema an.";
                }
                
                if ( $_POST[ "message" ] == "" ) {
                    $mailerror .= "<br />Der Nachrichten Text darf nicht leer sein.";
                }
                
                if ( $mailerror == "" ) {
                    $mail_address = "internet@dorispaas.de";
                    $mail_subject = $_POST[ "subject" ];
                    $mail_message = $_POST[ "message" ];
                    
                    sendMyMail($_POST[ "fullname" ], $_POST[ "emailaddr" ], $_POST[ "fullname" ], $mail_subject, $mail_message, $mail_message, $mail_address);
                    header('Location: '.URL_ROOT.'contact/mailsuccess');
                    exit();
                }
            }
        }
        
        
        // ADMIN AREA
        
        if(isset($ACTION[2])) {
            //cash payed
            if($ACTION[0] == 'admin' && $ACTION[1] == 'showallorders' && $ACTION[2] == 'markascashpayed' && isset($ACTION[3])) {
                $order = loadOrder($ACTION[3]);
                $order_id = updateOrderAsPayedWithCash($order);
                header('Location: '.URL_ROOT.'admin/showallorders/markaspayed/'.$order_id);
                exit();
            }
            
            // order payed
            if($ACTION[0] == 'admin' && $ACTION[1] == 'showallorders' && $ACTION[2] == 'markaspayed' && isset($ACTION[3])) {
                $order = loadOrder($ACTION[3]);
                $order = loadOrder(updateOrderAsPayed($order));
                
                $sendmail = true;
                if(isset($ACTION[4]) && $ACTION[4] == 'woemail') {
                    $sendmail = false;
                }
                
                $items = loadItemsForOrder($order);
                $need_password = false;
                $date_add = 0;
                $password = null;
                $password_set = false;
                foreach($items AS $item) {
                    $article = loadArticle($item->article_id);
                    if($article->need_password) { $need_password = true; }
                    $date_add += $article->date_add;
                }
                $customer = loadUser($order->user_id);
                $expiration_date = date('Y-m-d');
                $actual_order_expiration_date = date('Y-m-d', strtotime($customer->actual_order_expiration_date));
                if(strtotime($actual_order_expiration_date) < strtotime($expiration_date)) {
                    $expiration_date = date('Y-m-d', strtotime("+".$date_add." month", strtotime($expiration_date)));
                } else {
                    $expiration_date = date('Y-m-d', strtotime("+".$date_add." month", strtotime($actual_order_expiration_date)));
                }
                $customer = loadUser(updateActualOrderExpirationDate($customer, $expiration_date));
                $three_months_in_past = strtotime('-3 month', strtotime(date('Y-m-d')));
                $actual_order_expiration_date_date = strtotime($actual_order_expiration_date);
                $password_to_old = $actual_order_expiration_date_date <= $three_months_in_past;
                if(($password_to_old && $need_password) || (!isset($customer->password) && $need_password)) {
                    $password = createPassword();
                    $secure_pw = securePassword($password);
                    $customer = loadUser(updatePassword($customer, $secure_pw));
                    $password_set = true;
                }
                
                $from = "bestellung@dorispaas.de";
                $to  = $customer->firstname . " " . $customer->lastname . " <" . $customer->email . ">";
                $mail_subject = 'Vielen Dank für Ihre Bestellung';
                $mail_body  = "Sehr geehrte/r Herr/Frau " . $customer->firstname . " " . $customer->lastname . ",\n\n";
                $mail_body .= "vielen Dank für Ihre Bestellung. Ihre Zahlung ist eingegangen. 
                \nFalls Sie Bücher bestellt haben, werde ich diese umgehend versenden. 
                \nFalls Sie ein Abonnement der DorisPaas.de - Lebensmittel-Datenbank bestellt haben, 
                finden Sie unten die Zugangsdaten, bei einer Verlängerung können Sie sich mit den alten Daten anmelden. 
                \nBei Buchung einer Beratungsleistung werde ich Sie kontaktieren, um einen Termin zu vereinbaren bzw. 
                habe diesen bereits mit Ihnen abgesprochen. \nWenn Sie eine eMail-Anfrage gebucht haben, senden Sie mir nun bitte Ihre Frage.";
                $mail_body .= "\n\nIhre Kundenummer lautet " . $customer->customer_id . ".\n\nIhre Bestellung umfasst folgende Artikel:\n";
                foreach($items AS $item) {
                    $article = loadArticle($item->article_id);
                    $mail_body .= $article->description.", ".number_format( $article->price, 2, ',', '.' )." Euro, Summe: ";
                    $mail_body .= number_format( ($article->price*$item->article_amount), 2, ',', '.' )." Euro\n";
                }
                $mail_body .= "Gesamt: ".number_format( $order->order_amount, 2, ',', '.' )." Euro\n";
                if($password_set && $need_password) {
                    $mail_body .= "\nSie haben einen Zugang zur Lebensmitteldatenbank auf www.dorispaas.de gebucht. Ihre Zugangsdaten hierzu lauten:\n";
                    $mail_body .= "Benutzername: " . $customer->email . ", Passwort: " . $password . ".\n\n";
                }
                $mail_body .= "Bitte kontrollieren Sie noch einmal die Lieferadresse: \n\n";
                $mail_body .= "Herrn/Frau " . $customer->firstname . " " . $customer->lastname . "\n" . $customer->street . "\n" . $customer->zipcode . " " . $customer->cityname . "\n" . loadCountry($customer->country_id)->name . " \n";
                $mail_body .= "Wenn die Daten nicht korrekt sind, senden Sie mir bitte noch heute ein eMail!";
                
                $mail_body .= "\n\nMit freundlichen Grüßen\nDoris Paas";
                
                if($sendmail) {
                    sendMyMail("Doris Paas", $from, "Doris Paas", $mail_subject, $mail_body, nl2br($mail_body), $customer->email);
                    sendMyMail("Doris Paas", $from, "Doris Paas", $mail_subject, $mail_body, nl2br($mail_body), $from);
                }
                
                header('Location: '.URL_ROOT.'admin/showallorders');
                exit();
            }
            
            
            if($ACTION[0] == 'admin' && $ACTION[1] == 'createuser' && $ACTION[2] == 'saveuser') {
                $error = 0;
                
                $firstname = $_POST['firstname'];
                $lastname  = $_POST['lastname'];
                $street    = $_POST['street'];
                $zip       = $_POST['plzcity'];
                $city      = $_POST['city'];
                $country   = $_POST['country'];
                $email     = $_POST['email'];
                $phone     = $_POST['phone'];
                $nl_approved = 0;
                if(isset($_POST['newsletter_approve'])) {
                    $nl_approved = $_POST['newsletter_approve'];
                }
                
                if(isset($_POST['password']) && isset($_POST['password_repeat']) && $_POST['password_repeat'] == $_POST['password'] && $_POST['password'] != "") {
                } else {
                    $error = 3;
                }
                
                $existing_user = getSingleUserByEmail($email);
                if(isset($existing_user) && $existing_user->id > 0) {
                    $error = 2;
                }
                $user_id = 0;
                if($error == 0) {
                    if($firstname != '' && $lastname != '' && $street != '' && $zip != '' && $city != '' && $email != '' && validateEmailaddress($email)) {
                        $user_id = createUser($firstname, $lastname, $street, $zip, $city, $country, $phone, $email, $nl_approved);
                    } else {
                        $error = 1;
                    }
                    
                    if(isset($_POST['withorder'])) {
                        $products = array();
                        foreach($_POST as $value => $key) {
                            if(isset($key) && $key > 0) {
                                if(strpos($value,"product_")===0) {
                                    $article_id = str_replace('product_', '', $value);
                                    $article = loadArticle($article_id);
                                    if ( isset($article) && $article->id > 0 ) {
                                        array_push($products, array($article->id, $key, $article->price, $article->date_add));
                                    }
                                }
                            }
                        };
                        $amount = 0;
                        foreach($products AS $product) {
                            $amount += ($product[1] * $product[2]);
                        }
                        $order_id = createOrder($user_id, $amount, true, true);
                        $order = loadOrder(updateOrderAsPayedWithCash(loadOrder($order_id)));
                        
                        foreach($products AS $product) {
                            createOrderItem($order->id, $product[0], $product[1]);
                            if($product[2] != 0) {
                                $expiration_date = strtotime(date("Y-m-d", strtotime(date('Y-m-d'))) . " +".$product[2]." month");
                                updateActualOrderExpirationDate(loadUser($user_id), $actual_order_expiration_date);
                            }
                        }
                    }
                }
                
                header('Location: '.URL_ROOT.'admin/createuser/'.$error.'/'.$user_id);
                exit();
            }
            
            if($ACTION[0] == 'admin' && $ACTION[1] == 'administrateuser' && $ACTION[2] == 'saveuser' && isset($ACTION[3])) {
                $customer = loadUser($ACTION[3]);
                
                $firstname = $_POST['firstname'];
                $lastname  = $_POST['lastname'];
                $street    = $_POST['street'];
                $zip       = $_POST['plzcity'];
                $city      = $_POST['city'];
                $country   = $_POST['country'];
                $email     = $_POST['email'];
                $phone     = $_POST['phone'];
                
                if($firstname != '' && $lastname != '' && $street != '' && $zip != '' && $city != '' && $email != '' && validateEmailaddress($email)) {
                    $customer = loadUser(updateUser($customer, $firstname, $lastname, $street, $zip, $city, $country, $phone, $email));
                }
                
                if(isset($_POST['password']) && isset($_POST['password_repeat']) && $_POST['password_repeat'] == $_POST['password'] && $_POST['password'] != "") {
                    $secure_pw = securePassword($_POST['password']);
                    $customer = loadUser(updatePassword($customer, $secure_pw));
                    
                    if($_SERVER['HTTP_HOST'] != 'localhost') {
                        $mail_subject = "DorisPaas.de - Passwort durch den Administrator geändert";
                        $mail_body = "Ihr Kennwort auf dorispaas.de wurde durch den Administrator geändert. Es lautet: ".$_POST['password'];
                        $from = "bestellung@dorispaas.de";
                        sendMyMail("Doris Paas", $from, "Doris Paas", $mail_subject, $mail_body, nl2br($mail_body), $customer->email);
                        sendMyMail("Doris Paas", $from, "Doris Paas", $mail_subject, $mail_body, nl2br($mail_body), $from);
                    }
                }
                
                if(isset($_POST['datenbankzugriff']) && $_POST['datenbankzugriff'] == '1' && isset($_POST['dbaccess']) && $_POST['dbaccess'] != '0') {
                    $expiration_date = date('Y-m-d');
                    $actual_order_expiration_date = date('Y-m-d', strtotime($customer->actual_order_expiration_date));
                    if(strtotime($actual_order_expiration_date) < strtotime($expiration_date)) {
                        $expiration_date = strtotime(date("Y-m-d", strtotime($expiration_date)) . " +".$_POST['dbaccess']." month");
                    } else {
                        $expiration_date = strtotime(date("Y-m-d", strtotime($actual_order_expiration_date)) . " +".$_POST['dbaccess']." month");
                    }
                    $customer = loadUser(updateActualOrderExpirationDate($customer, date('Y-m-d', $expiration_date)));
                }
                
                header('Location: '.URL_ROOT.'admin/administrateusers');
                exit();
            }
            
            if($ACTION[0] == 'admin' && $ACTION[1] == 'sendnewsletter' && $ACTION[2] == 'sendnow') {
                if(isset($_POST['newsletterfunc']) && isset($_POST['filename'])) {
                    switch($_POST['newsletterfunc']) {
                        case 1:
                            $myfile = fopen("./assets/newsletters/".$_POST['filename'], "w") or die("Unable to open file!");
                            fwrite($myfile, $_POST['newslettertext']);
                            fclose($myfile);
                            break;
                        case 2:
                            unlink("./assets/newsletters/".$_POST['filename']);
                            break;
                        case 3:
                            sendMyMail(
                                "Doris Paas", 
                                'newsletterabo@dorispaas.de', 
                                "Doris Paas", 
                                "DorisPaas-Newsletter", 
                                strip_tags(str_replace( "%UNSUBSCRIBE_TICKET%", "test", str_replace('<br />', "\n", $_POST['newslettertext']))), 
                                str_replace( "%UNSUBSCRIBE_TICKET%", "test", $_POST['newslettertext']), 
                                "post@dorispaas.de"
                            );
                            break;
                        case 4:
                            $newslettersubscriptions = getAllNewsletterSubscriptions();
                            foreach($newslettersubscriptions AS $newslettersubscription) {
                                $newsletterSend = getNewsletterSendBySubscriptionIdAndFilename($newslettersubscription->id, $_POST['filename']);
                                if(!$newsletterSend->newsletter_send) {
                                    $newsletterSendId = createNewsletterSend($_POST['filename'], $newslettersubscription->id);
                                    sendMyMail(
                                        "Doris Paas", 
                                        'newsletterabo@dorispaas.de', 
                                        "Doris Paas", 
                                        "DorisPaas-Newsletter", 
                                        strip_tags(str_replace( "%UNSUBSCRIBE_TICKET%", $newslettersubscription->unsubscription_ticket, str_replace('<br />', "\n", $_POST['newslettertext']))), 
                                        str_replace( "%UNSUBSCRIBE_TICKET%", $newslettersubscription->unsubscription_ticket, $_POST['newslettertext']), 
                                        $newslettersubscription->email
                                        //'webmaster@luventas-webdesign.de'
                                    );
                                    updateNewsletterAsSend($newsletterSendId);
                                }
                            }
                            break;
                    }
                }
                
                header('Location: '.URL_ROOT.'admin/sendnewsletter/?given='.$_POST['filename']);
                exit();
            }
        }
    }
?>
