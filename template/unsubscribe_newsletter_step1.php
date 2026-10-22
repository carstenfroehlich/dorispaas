<div class="section no-pad-bot" id="index-banner">    
            <div class="container">      
                <br />
                <br /> 
                <div class="right">Letzte Aktualisierung: <b><?= date( "j.n.Y", filemtime( __FILE__ ) ) ?></b></div>
                <h1 class="header center orange-text">Newsletter abbestellen</h1>      
            </div>  
        </div> 
        <div class="container">    
            <div class="section">   
                <div class="row margintoprow"> 
                    <div class="col s12 m12">
<?php
    function unsubscribeFromNewsletter( $ticket ) {
        $email = null;
        
        $result = getNewsletterSubscriptionsForSubscription( $ticket );
        if ( isset($result) && $result->id > 0 ) {
            trashNewsletterSubscription($result);
            $mail_body = '<html></body>Ihre eMail-Adresse ' . $email . ' wurde aus dem Newsletter-Verteiler gelöscht.
<br />
<br />
Selbstverständlich können Sie sich bei Bedarf jederzeit wieder anmelden oder auch "einfach nur so" auf meiner Website stöbern.
<br />
<br />
Alles Gute für Sie und herzliche Grüße aus dem Rheinland 
<br />
<br />
Doris Paas
<br />
Ernährungs- und Gesundheitspädagogin
<br />
<a href="http://www.dorispaas.de">www.dorispaas.de</a></body></html>';
            $to = "newsletternein@dorispaas.de";
            sendMyMail('info@dorispaas.de', 'info@dorispaas.de', 'Doris Paas', "Newsletter Unsubscription", $mail_body, $mail_body, $to);
?>
        <div class="NewsletterSubscriptionSuccessfull">
            Ihre Email-Adresse wurde erfolgreich aus der Datenbank entfernt. Sie erhalten ab sofort keinen Newsletter mehr.
        </div>
<?php
        }
    }
    $unsubscribing = false;
    $email = "";
    
    if ( array_key_exists( "email", $_POST ) ) {
        $email = $_POST["email"];
        
        $p = strpos( $email, "@" );
        if ( $p == 0 || $p == strlen( $email ) - 1 || strlen( $email ) < 3 ) {
            echo "<div class=\"user_error\">Es ist ein Fehler aufgetreten. Bitte &uuml;berpr&uuml;fen Sie die angegebene Email-Adresse</div>\n";
        } else {
            $result = getNewsletterSubscriptionsByEmail( $email );
            if ( !isset($result) || $result->id <= 0 ){
                // Die Email-Adresse gibt es schon in der Datenbank. Fehler ausgeben, aber nicht zu genau sagen (Datenschutz).
                echo "<div class=\"user_error\">Es ist ein Fehler aufgetreten. Bitte &uuml;berpr&uuml;fen Sie die angegebene Email-Adresse</div>\n";
            } else {
                $unsubscribing = true;
            }
        }
    }
    
    if ( !$unsubscribing )
    {
?>
        <form name="subscribe" enctype="multipart/form-data" method="post" action="">
            <div class="form">
                <div class="message">
                    Bitte geben Sie Ihre Email-Adresse ein, um Ihr Newsletter-Abonnement zu beenden.
                </div>
                <div class="input">
                    <input type="text" name="email" value="<?php echo $email; ?>" size="40" />
                </div>
                <div class="submit">
                    <input type="submit" class="btn btn-primary right" value="Abschlie&szlig;en" />
                </div>
            </div>
        </form>
<?php
    }
    else
    {
        $result = getNewsletterSubscriptionsByEmail( $email );
        $unsubscribe_file = "unsubscribe.html";
        $mail_body = file_get_contents( NEWSLETTER_PATH . $unsubscribe_file );
        
        mail( $email, "DorisPaas-Newsletter", str_replace( "%UNSUBSCRIBE_TICKET%", $result->ticket, $mail_body ), "From:newsletternein@dorispaas.de\r\nContent-Type: text/html;" );
?>
        <div class="NewsletterSubscriptionSuccessfull">
            Vielen Dank. Zur Best&auml;tigung wurde eine E-Mail an die von Ihnen angegebene Mail-Adresse verschickt. Bitte klicken Sie auf den darin angegebenen Link, um den Vorgang anzuschlie&szlig;en.
        </div>
<?php
    }
?>
</div>
</div>
            </div>    
            <br>
            <br> 
            <div class="bodyspacer"></div> 
        </div>
