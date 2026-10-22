<?php
    $cart_entries = getCartEntriesByToken($ACTION[2]);
    $totalprice = 0.00;
    $needshipping = false;
    foreach($cart_entries AS $cartentry) {
        $article = loadArticle($cartentry->article_id);
        $totalprice = $totalprice + ($cartentry->amount * $article->price);
        if($article->need_shipping == 1) { $needshipping = true; }
    }
    
    $user = null;
    if(isset($_POST['userid'])) {
        $user = loadUser($_POST['userid']);
    } else if(isset($ACTION[3])) {
        $user = loadUser($ACTION[3]);
    }
    
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
    
    if(isset($ACTION[1]) && $ACTION[1] == 'bank') {
        $order_id = createOrder($user->id, $totalprice, false, true);
        $returnvalues = createOrderItemsByCartEntries($order_id, $country->id, $cart_entries);

        $articles = array();
        $complete = 0.00;
    
        $from = "bestellung@dorispaas.de";
        $to  = $user->firstname . " " . $user->lastname . " <" . $user->email . ">";
        $mail_subject = 'Vielen Dank für Ihre Bestellung';
        $mail_body  = "Sehr geehrte/r Herr/Frau " . $user->firstname . " " . $user->lastname . ",\n\n";
        $mail_body .= "vielen Dank für Ihre Bestellung von\n";
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
        $mail_body .= "Bitte überweisen Sie den angegebenen Gesamtbetrag auf folgendes Konto:\n";
        $mail_body .= "Kontoinhaber: Doris Paas\nKontonummer: 3610221252\nBankleitzahl: 30020900\nIBAN: DE43300209003610221252\nBIC: CMCIDEDDXXX\nBank: Targobank Düsseldorf\nVerwendungszweck: Bestellung dorispaas.de " . $user->firstname . " " . $user->lastname . "\n\n";

        $mail_body .= "Bitte beachten Sie, dass Ihre Zahlung spätestens drei Werktage vor dem vereinbarten Beratungstermin auf meinem Konto gutgeschrieben sein muss.\n\n";


        $mail_body .= "Falls Sie ein Abonnement der DorisPaas.de - Lebensmittel-Datenbank gebucht haben, erhalten Sie Ihre Zugangsdaten per eMail nach erfolgtem Zahlungseingang.\n\n";

        $mail_body .= "Wenn Sie eine Beratungsleistung gebucht haben, kann diese frühestens nach erfolgtem Zahlungseingang vorgenommen bzw. terminiert werden.\nZur Terminvereinbarung senden Sie mir bitte Ihre Telefonnummer per eMail, sofern Sie diese noch nicht angegeben haben. \n\n";

        $mail_body .= "Bei Buchbestellungen erfolgt die Lieferung umgehend nach Zahlungseingang.\n\nIhre Kundenummer lautet " . $user->customer_id . ".\n\nBitte kontrollieren Sie noch einmal die Lieferadresse: \n";
        $mail_body .= "Herrn/Frau " . $user->firstname . " " . $user->lastname . "\n" . $user->street . "\n" . $user->zipcode . " " . $user->cityname . "\n" . loadCountry($user->country_id)->name . " \n";
        $mail_body .= "Wenn die Daten nicht korrekt sind, senden Sie mir bitte noch heute ein eMail!\n\n";
        
        if($user->newsletter_approve) {
            $mail_body .= "Sie haben zugestimmt, den Newsletter von Dorispaas.de zu erhalten. Dem können Sie jederzeit widersprechen, indem Sie mir eine kurze Email senden.\n\n";
        }
        
        $mail_body .= "\n\nMit freundlichen Grüßen\nDoris Paas";
        
        if($_SERVER['HTTP_HOST'] != 'localhost') {
            sendMyMail("Doris Paas", $from, "Doris Paas", $mail_subject, $mail_body, nl2br($mail_body), $user->email);
            sendMyMail("Doris Paas", $from, "Doris Paas", $mail_subject, $mail_body, nl2br($mail_body), $from);
        }
        
        header('Location: '.URL_ROOT.$ACTION[0].'/bankfinished/'.$ACTION[2].'/'.$user->id);
        exit();
    }
?>
        <div class="section no-pad-bot" id="index-banner">    
            <div class="container">      
                <br />
                <br /> 
                <div class="right">Letzte Aktualisierung: <b><?= date( "j.n.Y", filemtime( __FILE__ ) ) ?></b></div>
                <h1 class="header center orange-text">Vielen Dank für Ihre Bestellung</h1>      
                <div class="row center">        
                    <h5 class="header col s12 light">Bitte schauen Sie jetzt in Ihr Postfach</h5>      
                </div>
            </div>  
        </div> 
        <div class="container">    
            <div class="section">
                <div class="row">
                    <div class="col s12 m12">
                        Sie erhalten ein eMail an die angegebene Mail-Adresse. Sie finden hier noch einmal 
                        den zu zahlenden Betrag und die Bankverbindung zur Überweisung. 
                        <br />
                        <br />
                        <b>Hinweis:</b>
                        <br />
                        Sollten Sie das Mail nicht innerhalb einer Stunde erhalten, überprüfen Sie bitte 
                        <br />
                        &#149; ob Sie Ihre eMail-Adresse korrekt angegeben haben
                        <br />
                        &#149; oder ob das Mail vielleicht in Ihrem Spamordner gelandet ist
                        <br />
                        <br />
                        <table class="table">
                            <tr>
                                <td colspan="4">
                                    <b>Hier sehen Sie noch einmal eine Auflistung Ihrer bestellten Artikel:</b>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Beschreibung
                                </th>
                                <th>
                                    Einzelpreis
                                </th>
                                <th>
                                    Anzahl
                                </th>
                                <th>
                                    Gesamt
                                </th>
                            </tr>
                            <?php foreach($cart_entries AS $cartentry) { ?>
                                <?php $article = loadArticle($cartentry->article_id); ?>
                                <tr>
                                    <td class="order_table_label">
                                        <?php echo $article->description; ?>
                                    </td>
                                    <td class="order_table_label">
                                        <?php echo number_format($article->price, 2, ',', '.'); ?>€
                                    </td>
                                    <td>
                                        <?php echo $cartentry->amount; ?>
                                    </td>
                                    <td>
                                        <?php echo number_format(($article->price*$cartentry->amount), 2, ',', '.' ); ?>€
                                    </td>
                                </tr>
                            <?php } ?>
                            <tr>
                                <td class="order_table_label">
                                    <?php echo $shipping_article->description; ?>
                                </td>
                                <td class="order_table_label">
                                    <?php echo number_format($shipping_article->price, 2, ',', '.'); ?>€
                                </td>
                                <td>
                                    1
                                </td>
                                <td>
                                    <?php echo number_format($shipping_article->price, 2, ',', '.' ); ?>€
                                </td>
                            </tr>
                            <tr>
                                <td class="order_table_label" colspan="3">
                                    <label>Gesamtsumme Ihrer Bestellung (inkl. <a data-fancybox data-type="iframe" data-src="<?php echo PROTOKOLL_URL.URL_BASIC.BASE_PAT; ?>popup/agb#versandkosten" href="javascript:;">Versand</a>)</label>
                                </td>
                                <td>
                                    <?php $total_for_paypal = ($totalprice + $shipping_article->price); ?>
                                    <label id="total"><?php echo number_format( $total_for_paypal, 2, ',', '.' ); ?> €</label>
                                </td>
                            </tr>
                        </table>
                        <br />
                        Ganz herzliche Grüße aus dem Rheinland
                        <br />
                        Doris Paas
                    </div>
                </div>
            </div>    
            <br>
            <br> 
            <div class="bodyspacer"></div> 
        </div>