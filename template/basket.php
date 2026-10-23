<?php
    $message = null;
    $found   = false;
    if(isset($_POST['password_request']) && isset($_POST['email'])) {
        $email = $_POST['email'];
        $existingUser = getSingleUserByEmailActive($email);

        if(isset($existingUser) && $existingUser->id > 0) {
            $found = true;
            $password = createPassword();
            $existingUser = loadUser(updateUserPassword($existingUser, securePassword($password)));
            
            mailNewPassword($existingUser, $password);
            $message = "Ein neues Passwort wurde an Ihre Emailadresse versendet.";
        } else {
            $message = "Mit der Emailadresse '$email' konnte kein Benutzer im System gefunden werden!";
        }
    }
?>
        <div class="section no-pad-bot" id="index-banner">    
            <div class="container">      
                <br />
                <br /> 
                <div class="right">Letzte Aktualisierung: <b><?= date( "j.n.Y", filemtime( __FILE__ ) ) ?></b></div>
                <h1 class="header center orange-text">Warenkorb</h1>      
                <div class="row center">        
                    <h5 class="header col s12 light">Bestellen und Einkaufen auf DorisPaas.de</h5>      
                </div>
            </div>  
        </div> 
        <div class="container">    
            <div class="section">
                <div class="row">        
                    <div class="col s12 m4"> 
                        <ul class="nav">
                            <li>
                                <b>Hilfe:</b>
                            </li> 
                            <li>
                                <a href="hilfe#system">Systemvoraussetzungen</a>
                            </li> 
                            <li>
                                <a href="hilfe">Etwas funktioniert nicht!</a>
                            </li> 
                        </ul> 
                    </div>
                </div>

                <?php $cart_entries = getCartEntriesByToken($shopcookie); ?>
                <?php $totalprice = 0.00; ?>
                <?php $co = 1; ?>
                <div class="row">        
                    <?php foreach($cart_entries AS $cartentry) { ?>
                        <?php $article = loadArticle($cartentry->article_id); ?>
                        <?php $totalprice = $totalprice + ($cartentry->amount * $article->price); ?>
                        <?php if($co % 4 == 0) { ?>
                            </div>
                            <div class="row">
                            <?php $co = 1; ?>
                        <?php } ?>
                        <div class="col s12 m4 shopelement"> 
                            <div class="article_block block_top">
                                 <a href="<?php echo $article->detail_link; ?>">
                                     <img src="<?php echo IMG_PATH; ?><?php echo $article->image_name; ?>" alt="" />
                                 </a>
                                 <div class="article_description">
                                      <?php echo $article->long_text; ?>
                                 </div>
                                 <div style="clear: left;"></div>
                                 <div class="article_order">
                                     <?php if(isset($article->extra_hint) && $article->extra_hint != '') { ?>
                                         <span style="font-weight:bold; background:red"><?php echo $article->extra_hint; ?></span><br />
                                     <?php } ?>
                                     <table class="table">
                                         <tr>
                                             <td><b>Einzelpreis:</b> <?php echo number_format($article->price, 2, ',', '.'); ?> €</td>
                                             <td><b>Menge:</b> <?php echo $cartentry->amount; ?></td>
                                         </tr>
                                         <tr>
                                             <td><b>Gesamt:</b> <?php echo number_format(($cartentry->amount * $article->price), 2, ',', '.'); ?> €</td>
                                             <td><img src="<?php echo IMG_PATH; ?>bestellbutton_remove.png" class="cartremovebutton" data-cid="<?php echo $cartentry->id; ?>" data-baseurl="<?php echo PROTOKOLL_URL.URL_BASIC.BASE_PAT; ?>" /></td>
                                         </tr>
                                     </table>
                                </div>
                            </div>
                        </div>
                        <?php $co ++; ?>
                    <?php } ?>
                </div>
                
                <div class="row"> 
                    <div class="col s12 m12">
                        <table class="table">
                            <tr>
                                <td><b>Gesamt (ohne Versand):</b></td>
                                <td><b><?php echo number_format($totalprice, 2, ',', '.'); ?> €</b></td>
                            </tr>
                            <?php $extras = getArticlesByType('extra'); ?>
                            <tr>
                                <td colspan="2">
                                    <b>Versandkosten:</b>
                                    <br />
                                    Abonnements und Beratungen sind grundsätzlich versandkostenfrei.  
                                    <br />
                                    Unabhängig davon werden für Buchbestellungen zusätzlich zum Gesamtpreis folgende Versandkosten berechnet:
                                </td>
                            </tr>
                            <?php foreach($extras AS $extra) { ?>
                                <tr>
                                    <td><?php echo $extra->long_text; ?></td>
                                    <td><?php echo number_format($extra->price, 2, ',', '.'); ?> €</td>
                                </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>
                
                <div class="row"> 
                    <div class="col s12 m12">
                        <?php if($totalprice > 0) { ?>
                            <a href="cashbox" style="float: right;">
                                <img src="<?php echo IMG_PATH; ?>kasse-zur-neu.png" alt="" border="0" hspace="0" vspace="0" style="float: right; margin-right 20px: padding-bottom: 0px;" />
                            </a>
                        <?php } ?>
                        <a href="shop" style="float: left;">
                            <img src="<?php echo IMG_PATH; ?>Shop-zum-neu.png" alt="" border="0" hspace="0" vspace="0" style="float: left; margin-right 20px: padding-bottom: 0px;" />
                        </a>
                        <br style="clear: both;" />
                    </div>
                </div>
                
            </div>    
            <br>
            <br> 
            <div class="bodyspacer"></div> 
        </div>
