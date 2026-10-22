        <div class="section no-pad-bot" id="index-banner">    
            <div class="container">      
                <br />
                <br /> 
                <div class="right">Letzte Aktualisierung: <b><?= date( "j.n.Y", filemtime( __FILE__ ) ) ?></b></div>
                <h1 class="header center orange-text">Login</h1>      
            </div>  
        </div> 
        <div class="container bodycontainer">    
            <div class="row">        
                <div class="col s12 m12">
                    <br />
                    <br />
                    <br />
                    <br />
                    <form id="loginform" name="loginform" method="POST" action="<?php echo URL_ROOT; ?>login/performlogin">
                        <table class="order_table">
                            <tr>
                                <td class="order_table_label">
                                    <label for="email">Bitte geben Sie hier Ihre <b>eMail-Adresse</b> ein:<br />
                                        <br />
                                    </label>
                                    <br />
                                    <input type="text" name="email" id="email" class="order_field" value="" />
                                </td>
                            </tr>
                            <tr>
                                <td class="order_table_label">
                                    <label for="password">Bitte geben Sie hier Ihr <b>Passwort</b> ein:
                                    </label>
                                    <br />
                                    <input type="password" name="password" id="password" value="" class="order_field" />
                                </td>
                            </tr>
                            <tr>
                                <td class="submitter_td">
                                    <input type="hidden" value="1" name="login" />
                                    <input type="submit" class="sender btn btn-primary" style="float: right;" value="Einloggen" />
                                    <div style="clear: right;"></div>
                                </td>
                            </tr>
                        </table>
                    </form>
                    <br />
                    <br />
                    <a href="<?php echo URL_ROOT; ?>lebensmittel-datenbank-new-pw"><img src="<?php echo IMG_PATH; ?>lebensmitteldatenbank-new-pw.png" alt="lebensmitteldatenbank pw" style="float: left; margin-right: 30px; padding-bottom: 50px;" /></a><br />
                    Passwort vergessen?<br />
                    <a href="<?php echo URL_ROOT; ?>lebensmittel-datenbank-new-pw">Bitte klicken Sie hier</a><br />
                    <br />
                    <p class="quellen">
                    <b>Hinweis:</b> Sie haben bei der <b>Erstanmeldung</b> Probleme mit dem Passwort?
                    <br />
                    Bitte versuchen Sie zuerst, das Ihnen übersandte Passwort zu kopieren und einzusetzen.
                    <br />
                    Beachten Sie ggf. bitte auch die Hinweise unter dem Menüpunkt &#187;<a href="hilfe" target=_"blank">Hilfe</a>&#171;.
                    </p>
                    <br />
                    <a href="<?php echo URL_ROOT; ?>lebensmittel-datenbank-info" target="_blank"><img src="<?php echo IMG_PATH; ?>lebensmitteldatenbank-info.png" alt="lebensmitteldatenbank info" style="float: left; margin-right: 30px; padding-bottom: 0px;" /></a><br />
                    <a href="<?php echo URL_ROOT; ?>lebensmittel-datenbank-info" target="_blank">Hier können Sie sich informieren</a>,<br />
                    wenn Sie noch kein Abonnement gebucht haben.
                    <br />
                </div>
            </div>
            <div class="row">        
                <div class="col s12 m12">
                    <a id="copyright">&nbsp;</a>
                    <br />
                    <hr />
                    <br />
                    <b>&#169; Copyright-Hinweis:</b>
                    <br />
                    <br />
                    Sämtliche Daten und Funktionen der <b>DorisPaas &ndash; Lebensmittel-Datenbank</b> 
                    unterliegen dem Copyright von Doris Paas.
                    <br />
                    <br />
                    Die Nutzung der <b>DorisPaas &ndash; Lebensmittel-Datenbank</b> ist personengebunden 
                    und ausschließlich über eines der angebotenen <a href="shop#abos" target="_blank">Abonnements</a> möglich.
                    <br />
                    <br />
                    Weder Inhalte noch Funktionen dürfen kopiert, vervielfältigt oder in ausgedruckter 
                    oder digitaler Form weitergegeben werden. Bei widerrechtlicher Nutzung wird der 
                    Zugriff sofort gesperrt. Die im Voraus bezahlten Abonnement-Gebühren werden in 
                    diesem Falle nicht zurück erstattet.
                    <br />
                    <hr />
                    <div class="obenlink">
                        <a href="javascript: scrollMainToTop();" class="nachoben">nach oben</a>
                    </div>
                    <br />
                    <br />
                </div>
            </div>
        </div>
        <br />
        <br /> 
        <div class="bodyspacer"></div> 
    </div>
