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
                <h1 class="header center orange-text">Shop</h1>      
                <div class="row center">        
                    <h5 class="header col s12 light">Bestellen und Einkaufen auf DorisPaas.de </h5>  
                </div>   
            </div>  
        </div>

        
        <div class="container">    
            <div class="section">   
                <div class="row">        
                    <div class="col s12 m5">          
                        <ul class="nav">
                            <li>
                                <b>Aus folgenden Produktgruppen können Sie wählen:</b>
                            </li> 
                            <li>
                                <a href="<?= URL_ROOT ?>shop#buecher">Bücher</a>
                            </li> 
                            <li>
                                <a href="<?= URL_ROOT ?>shop#abos">Abonnements der Lebensmittel-Datenbank</a>
                            </li> 
                            <li>
                                <a href="<?= URL_ROOT ?>shop#beratung">Beratungen</a>
                            </li>
                        </ul> 
                    </div>
                    <div class="col s12 m7">
                        <a href="<?= URL_ROOT ?>hilfe" target="_blank"><img src="<?php echo IMG_PATH; ?>hilfe-button-2.png" alt="Hilfe" class="right" /></a>
                    </div>
                </div>
                <div class="row"> 
                    <div class="col s12 m5"> 
                        <ul class="nav">
                            <li>
                                <b>Bitte informieren Sie sich vor der Bestellung über die:</b>
                            </li> 
                            <li>
                                <a href="agb#versandkosten" target="_blank">Versandkosten</a>
                            </li> 
                            <li>
                                <a href="agb" target="_blank">Allgemeinen Geschäftsbedingungen</a>
                            </li> 
                            <li>
                                <a href="impressum#datenschutz" target="_blank">Datenschutz-Erklärung und Cookies</a>
                            </li> 
                        </ul>
                    </div>
                </div>
                <div class="row"> 
                    <div class="col s12 m5"> 
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

<!--
ab hier Anfang der Urlaubsnachricht
-->                
<!--


                <div class="row"> 
                    <div class="col s12 m5"> 
                        <ul class="nav">
                            <li>
                                <font color=red><b>Hinweis: 
                                <br />
                                Bis zum 28.7.2026 steht der Shop nur eingeschränkt zur Verfügung. 
                                <br />
                                Buchbestellungen und eMail-Anfragen sind in dieser Zeit nicht möglich.
                                <br />
                                Abos der DorisPaas.de &ndash; Lebensmittel-Datenbank sind in dieser Zeit 
                                <br />
                                nur per Paypal-Zahlung buchbar.</b></font>
                            </li> 
                        </ul> 
                    </div>
                </div>

-->
<!--
bis hierher Ende der Urlaubsnachricht
-->                


                
                <div class="row shoppingcartajaxarea"> 
                    <?php include(''.TEMPLATE_ROOT.''.preg_replace('/[^\w]/','','shoppingcart_ajax').'.php'); ?>
                </div>
                
                <div class="row">        
                    <div class="col s12 m12">
                        <a id="buecher"></a>
                        <hr /> 
                        <h5>Bücher</h5>
                        <hr />
                    </div>
                </div>
                <?php $books = getArticlesByType('book'); ?>
                       
                <?php foreach($books AS $book) { ?>
                    <div class="row shoprow"> 
                        <div class="col s12 ml12 shopelement"> 
                            <div class="article_block block_top">
                                <table border="0" cellpadding="0" cellspacing="0" class="shop_table">
                                    <tr>
                                        <td rowspan="2" class="img_cell">
                                            <a href="<?php echo $book->detail_link; ?>">
                                                <img src="<?php echo IMG_PATH; ?><?php echo $book->image_name; ?>" alt="" />
                                            </a>
                                        </td>
                                        <td class="cell">
                                            <span class="price_span"><?php echo number_format($book->price, 2, ',', '.'); ?> €</span> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="cell">
                                            <?php $cartArticle = getSingleCartEntry($shopcookie, $book->id); ?>
                                            <img src="<?php echo IMG_PATH; ?>im_warenkorb.png" id="incart<?php echo $book->id; ?>" alt="Artikel <?php echo $book->id; ?> im Warenkorb" class="order_button<?php if(!isset($cartArticle)) { ?> hidden<?php } ?>"  />
                                            <?php if(isset($book->extra_hint) && $book->extra_hint != '') { ?>
                                                <span style="font-weight:bold; background:red"><?php echo $book->extra_hint; ?></span><br />
                                            <?php } ?>
                                            <?php echo $book->long_text; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <?php
                                                if($book->paypal_payment || $book->bank_transfer_payment) {
                                            ?>
                                            <input type="text" style="float: left; text-align: right; padding-right: 20px;" class="article_amount" placeholder="gewünschte Anzahl eingeben"<?php if(isset($cartArticle) && $cartArticle->amount > 0) { ?> value="<?php echo $cartArticle->amount; ?>"<?php } ?> name="article<?php echo $book->id; ?>" id="article<?php echo $book->id; ?>">
                                            <img src="<?php echo IMG_PATH; ?>bestellbutton.png" class="order_button" onclick="addArticle('<?php echo $shopcookie; ?>', '<?php echo $book->id; ?>', 'article<?php echo $book->id; ?>', '<?php echo PROTOKOLL_URL.URL_BASIC.BASE_PAT; ?>');" />
                                            <img src="<?php echo IMG_PATH; ?>bestellbutton_remove.png" id="outcart<?php echo $book->id; ?>" class="articleremovebutton<?php if(!isset($cartArticle)) { ?> hidden<?php } ?>" onclick="removeArticle('<?php echo $shopcookie; ?>', '<?php echo $book->id; ?>', '<?php echo PROTOKOLL_URL.URL_BASIC.BASE_PAT; ?>');" />
                                            <?php
                                                } else {
                                            ?>
                                                Bis zum 14.06.2022 vorübergehend nicht bestellbar
                                            <?php
                                                }
                                            ?>
                                            <div style="clear: left;"></div>
                                            <div class="article_subline">
                                                <span style="font-size:0.7em; font-weight:lighter">
                                                    Endpreis &ndash; nach §19UStG kein zusätzlicher MwSt.-Aufschlag
                                                </span>
                                           </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                
                <div class="row shoppingcartajaxarea"> 
                    <?php include(''.TEMPLATE_ROOT.''.preg_replace('/[^\w]/','','shoppingcart_ajax').'.php'); ?>
                </div>
                
                
                <div class="row">        
                    <div class="col s12 m12"> 
                        <hr />
                        <a id="abos"></a>
                        <h5>Abonnements der DorisPaas.de &ndash; Lebensmittel-Datenbank</h5>
                        <hr />
                    </div>
                </div>
                <?php $abos = getArticlesByType('db'); ?>      
                <?php foreach($abos AS $abo) { ?>
                    <div class="row shoprow"> 
                        <div class="col s12 ml12 shopelement"> 
                            <div class="article_block block_top">
                                 <table border="0" cellpadding="0" cellspacing="0" class="shop_table">
                                    <tr>
                                        <td rowspan="2" class="img_cell">
                                            <a href="<?php echo $abo->detail_link; ?>">
                                                <img src="<?php echo IMG_PATH; ?><?php echo $abo->image_name; ?>" alt="" />
                                            </a>
                                        </td>
                                        <td class="cell">
                                            <span class="price_span"><?php echo number_format($abo->price, 2, ',', '.'); ?> €</span> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="cell">
                                            <?php $cartArticle = getSingleCartEntry($shopcookie, $abo->id); ?>
                                            <img src="<?php echo IMG_PATH; ?>im_warenkorb.png" id="incart<?php echo $abo->id; ?>" alt="Artikel <?php echo $abo->id; ?> im Warenkorb" class="order_button<?php if(!isset($cartArticle)) { ?> hidden<?php } ?>"  />
                                            <?php if(isset($abo->extra_hint) && $abo->extra_hint != '') { ?>
                                                <span style="font-weight:bold; background:red"><?php echo $abo->extra_hint; ?></span><br />
                                            <?php } ?>
                                            <?php echo $abo->long_text; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <input type="text" class="article_amount" placeholder="gewünschte Anzahl eingeben" name="article<?php echo $abo->id; ?>" id="article<?php echo $abo->id; ?>">
                                            <img src="<?php echo IMG_PATH; ?>bestellbutton.png" class="order_button" onclick="addArticle('<?php echo $shopcookie; ?>', '<?php echo $abo->id; ?>', 'article<?php echo $abo->id; ?>', '<?php echo PROTOKOLL_URL.URL_BASIC.BASE_PAT; ?>');" />
                                            <div class="article_subline">
                                                <span style="font-size:0.7em; font-weight:lighter">
                                                    Endpreis &ndash; nach §19UStG kein zusätzlicher MwSt.-Aufschlag
                                                </span>
                                           </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                
                <div class="row shoppingcartajaxarea"> 
                    <?php include(''.TEMPLATE_ROOT.''.preg_replace('/[^\w]/','','shoppingcart_ajax').'.php'); ?>
                </div>
                
                
                <div class="row">        
                    <div class="col s12 m12"> 
                        <a id="beratung"></a>
                        <hr />
                        <h5>Beratungen</h5>
                        <hr />
                    </div>
                </div>
                <?php $consultations = getArticlesByType('consultation'); ?>       
                <?php foreach($consultations AS $consultation) { ?>
                    <div class="row shoprow"> 
                        <div class="col s12 ml12 shopelement"> 
                            <div class="article_block block_top">
                                 <table border="0" cellpadding="0" cellspacing="0" class="shop_table">
                                    <tr>
                                        <td rowspan="2" class="img_cell">
                                            <a href="<?php echo $consultation->detail_link; ?>">
                                                <img src="<?php echo IMG_PATH; ?><?php echo $consultation->image_name; ?>" alt="" />
                                            </a>
                                        </td>
                                        <td class="cell">
                                            <span class="price_span"><?php echo number_format($consultation->price, 2, ',', '.'); ?> €</span> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="cell">
                                            <?php $cartArticle = getSingleCartEntry($shopcookie, $consultation->id); ?>
                                            <img src="<?php echo IMG_PATH; ?>im_warenkorb.png" id="incart<?php echo $consultation->id; ?>" alt="Artikel <?php echo $consultation->id; ?> im Warenkorb" class="order_button<?php if(!isset($cartArticle)) { ?> hidden<?php } ?>"  />
                                            <?php if(isset($consultation->extra_hint) && $consultation->extra_hint != '') { ?>
                                                <span style="font-weight:bold; background:red"><?php echo $consultation->extra_hint; ?></span><br />
                                            <?php } ?>
                                            <?php echo $consultation->long_text; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <?php
                                                if($consultation->paypal_payment || $consultation->bank_transfer_payment) {
                                            ?>
                                            <input type="text" class="article_amount" placeholder="gewünschte Anzahl eingeben" name="article<?php echo $consultation->id; ?>" id="article<?php echo $consultation->id; ?>">
                                            <img src="<?php echo IMG_PATH; ?>bestellbutton.png" class="order_button" onclick="addArticle('<?php echo $shopcookie; ?>', '<?php echo $consultation->id; ?>', 'article<?php echo $consultation->id; ?>', '<?php echo PROTOKOLL_URL.URL_BASIC.BASE_PAT; ?>');" />
                                            <?php
                                                } else {
                                            ?>
                                                Bis zum 14.06.2022 vorübergehend nicht bestellbar
                                            <?php
                                                }
                                            ?>
                                            <div class="article_subline">
                                                <span style="font-size:0.7em; font-weight:lighter">
                                                    Endpreis &ndash; nach §19UStG kein zusätzlicher MwSt.-Aufschlag
                                                </span>
                                           </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>    
            <br>
            <br> 
            <div class="bodyspacer"></div> 
        </div>
