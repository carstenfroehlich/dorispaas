<?php
    $text = "Es ist ein Fehler aufgetreten. Bitte versuchen Sie es später noch einmal.";
    if(isset($_GET['ticket'])) {
        $newsletterSubscription = getNewsletterSubscriptionsForUnsubscription($_GET['ticket']);
        if(isset($newsletterSubscription) && $newsletterSubscription->id > 0) {
            $email = $newsletterSubscription->email;
            trashNewsletterSubscription($newsletterSubscription);
            $text = 'Ihre eMail-Adresse <b>' . $email . '</b> wurde aus dem Newsletter-Verteiler gelöscht.
<br />
<br />
Selbstverständlich können Sie sich bei Bedarf jederzeit wieder anmelden oder auch "einfach nur so" auf meiner Website stöbern.
<br />
<br />
Ich würde mich freuen, wenn Sie sich die Zeit nehmen, um mir einen kurzen Hinweis 
zum Grund Ihrer Abmeldung zu nennen, damit ich dies bei den nächsten den Newslettern 
berücksichtigen kann. Hierfür sage ich schon heute vielen Dank.
<br />
<br />
Alles Gute für Sie und herzliche Grüße aus dem Rheinland 
<br />
<br />
Doris Paas
<br />
Ernährungs- und Gesundheitspädagogin
<br />
<a href="http://www.dorispaas.de">www.dorispaas.de</a>';
            sendMyMail(
                "Doris Paas", 
                'info@dorispaas.de', 
                "Doris Paas", 
                "Newsletter Unsubscription", 
                $text, 
                $text, 
                "newsletternein@dorispaas.de"
            );
        }
    }
?>
        <div class="section no-pad-bot" id="index-banner">    
            <div class="container">      
                <br />
                <br /> 
                <div class="right">Letzte Aktualisierung: <b><?= date( "j.n.Y", filemtime( __FILE__ ) ) ?></b></div>
                <h1 class="header center orange-text">Doris Paas - Newsletter</h1>      
            </div>  
        </div> 
        <div class="container">
            <div class="section">
                <div class="row margintoprow">        
                    <div class="col s12 m12">
                        <?php echo $text; ?>
                    </div>
                </div>
            </div>
            <br>
            <br> 
            <div class="bodyspacer"></div> 
        </div>