        <div class="section no-pad-bot" id="index-banner">    
            <div class="container">      
                <br />
                <br /> 
                <div class="right">Letzte Aktualisierung: <b><?= date( "j.n.Y", filemtime( __FILE__ ) ) ?></b></div>
                <h1 class="header center orange-text">Newsletter-Anmeldung</h1>      
            </div>  
        </div> 
        <div class="container">    
            <div class="section">   
                <div class="row margintoprow">        
                    <div class="col s12 m12">
                        <?php if(!isset($ACTION[1]) && !isset($_GET['ticket'])) { ?>
                            <form id="newsletterform" name="subscribe" method="post">
                                <div class="form">
                                    <div class="message">
                                        Bitte geben Sie Ihre Email-Adresse ein, um den Newsletter zu abonnieren.
                                    </div>
                                    <div class="input">
                                        <input type="text" name="email" value="" />
                                    </div>
                                    <div class="input">
                                        Sicherheitsabfrage: Ergebnis von <span id="first"></span> + <span id="second"></span>:
                                        <input type="text" id="secretresult" />
                                    </div>
                                </div>
                            </form>
                            
                            <div class="submit">
                                <button class="btn btn-primary" onclick="newsletter_subscribe()">Anmelden</button>
                            </div>
                        <?php 
                            } else if(!isset($_GET['ticket'])) {
                                if(!validateEmailaddress($_POST['email'])) {
                                    echo "Es ist ein Fehler aufgetreten. Bitte überprüfen Sie die eingegebene Emailadresse.";
                                } else {
                                    $existingSubscription = getNewsletterSubscriptionsByEmail($_POST['email']);
                                    if(isset($existingSubscription) && $existingSubscription->id > 0) {
                                        echo "Diese Emailadresse ist bereits für den DorisPaas-Newsletter angemeldet.";
                                    } else {
                                        $subscription = loadNewsletterSubscriptions(createNewsletterSubscriptionsWithTwoFactor($_POST['email']));
                                        $mail_body = file_get_contents( PROTOKOLL_URL.URL_BASIC.'/assets/newsletters/subscribe_confirm.html' );
                                        sendMyMail(
                                            "Doris Paas", 
                                            'newsletterabo@dorispaas.de', 
                                            "Doris Paas", 
                                            "DorisPaas-Newsletter", 
                                            strip_tags(str_replace( "%SUBSCRIBE_TICKET%", $subscription->subscription_ticket, str_replace('<br />', "\n", $mail_body))), 
                                            str_replace( "%SUBSCRIBE_TICKET%", $subscription->subscription_ticket, $mail_body), 
                                            $_POST['email']
                                        );
                                        echo "Vielen Dank. Zur Best&auml;tigung wurde eine E-Mail an die von Ihnen angegebene Mail-Adresse verschickt. Bitte klicken Sie auf den darin angegebenen Link, um den Vorgang anzuschlie&szlig;en.";
                                    }
                                }
                            } else {
                                if(isset($_GET['ticket'])) {
                                    $subscription = getNewsletterSubscriptionsForSubscription($_GET['ticket']);
                                    if(isset($subscription) && $subscription->id > 0) {
                                        verifySubscription($_GET['ticket']);
                                        ?>
                                            Vielen Dank. Der Vorgang wurde erfolgreich abgeschlossen.<br />
                                            <br />
                                            Ab der n&auml;chsten regul&auml;ren Ausgabe empfangen Sie den Newsletter. 
                                            Alle bisherigen Ausgaben des Newsletters k&ouml;nnen Sie mit 
                                            einem Klick auf das <a href="<?php echo URL_ROOT; ?>newsletter#archiv">Newsletter-Archiv</a> anschauen.
                                        <?php
                                    } else {
                                        echo "Es konnte keine Anfrage mit diesem Code gefunden werden.";
                                    }
                                } else {
                                    echo "Es konnte keine Anfrage mit diesem Code gefunden werden.";
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
            <br>
            <br> 
            <div class="bodyspacer"></div> 
        </div>
