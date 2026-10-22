<?php
    $cart_entries = getCartEntriesByToken($shopcookie);
    $totalprice = 0.00;
    $needshipping = false;
    foreach($cart_entries AS $cartentry) {
        $article = loadArticle($cartentry->article_id);
        $totalprice = $totalprice + ($cartentry->amount * $article->price);
        if($article->need_shipping == 1) { $needshipping = true; }
    }
?>
        <div class="section no-pad-bot" id="index-banner">    
            <div class="container">      
                <br />
                <br /> 
                <div class="right">Letzte Aktualisierung: <b><?= date( "j.n.Y", filemtime( __FILE__ ) ) ?></b></div>
                <h1 class="header center orange-text">Kasse</h1>      
                <div class="row center">        
                    <h5 class="header col s12 light">Bestellen und Einkaufen auf DorisPaas.de</h5>      
                </div>
            </div>  
        </div> 
        <div class="container">    
            <div class="section">
                <div class="row">
                    <div class="col s12 m12"> 
                        <ul class="nav nav-tabs">
                            <li id="new" class="tablink active"><a onclick="showCashboxArea('new');">Neukunde</a></li>
                            <li id="mail" class="tablink"><a onclick="showCashboxArea('mail');">Mit vorhandener Emailadresse bestellen</a></li>
                            <li id="number" class="tablink"><a onclick="showCashboxArea('number');">Mit vorhandener Kundenummer bestellen</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col s12 m12">
                        <form id="cashbox_order_form" name="cashbox_order_form" method="POST" action="<?php echo URL_ROOT; ?>ordernow/order">
                            <input type="hidden" id="ordertype" name="ordertype" value="newcustomer" />
                            <table class="table">
                                <tr class="numberrow hidden">
                                    <td class="order_table_label">
                                        <label for="firstname">Kundenummer*</label>
                                    </td>
                                    <td colspan="3">
                                        <input type="text" name="customer" id="customer" class="order_field" value="" />
                                    </td>
                                </tr>
                                <tr class="mailrow hidden">
                                    <td colspan="4">
                                        <b>Bitte geben Sie Ihre Emailadresse ein, die Sie bei Ihrer letzten Bestellung verwendet haben:</b>
                                    </td>
                                </tr>
                                <tr class="mailrow hidden">
                                    <td class="order_table_label">
                                        <label for="firstname">Email*</label>
                                    </td>
                                    <td colspan="3">
                                        <input type="text" name="customer_email" id="customer_email" class="order_field" value="" />
                                        <span class="error hidden" id="customeremailerror">Bitte geben Sie eine gültige Emailadresse ein!</span>
                                    </td>
                                </tr>
                                <tr class="newrow">
                                    <td class="order_table_label">
                                        <label for="firstname">Vorname*</label>
                                    </td>
                                    <td colspan="3">
                                        <input type="text" name="firstname" id="firstname" class="order_field" value="<?php if(isset($_COOKIE['firstname'])) { echo $_COOKIE['firstname']; } ?>" />
                                        <span class="error hidden" id="firstnameerror">Bitte geben Sie einen Vornamen ein!</span>
                                    </td>
                                </tr>
                                <tr class="newrow">
                                    <td class="order_table_label">
                                        <label for="lastname">Nachname*</label>
                                    </td>
                                    <td colspan="3">
                                        <input type="text" name="lastname" id="lastname" class="order_field" value="<?php if(isset($_COOKIE['lastname'])) { echo $_COOKIE['lastname']; } ?>" />
                                        <span class="error hidden" id="lastnameerror">Bitte geben Sie einen Nachnamen ein!</span>
                                    </td>
                                </tr>
                                <tr class="newrow">
                                    <td class="order_table_label">
                                        <label for="street">Straße / HausNr.*</label>
                                    </td>
                                    <td colspan="3">
                                        <input type="text" name="street" id="street" class="order_field" value="<?php if(isset($_COOKIE['street'])) { echo $_COOKIE['street']; } ?>" />
                                        <span class="error hidden" id="streeterror">Bitte geben Sie eine Straße ein!</span>
                                    </td>
                                </tr>
                                <tr class="newrow">
                                    <td class="order_table_label">
                                        <label for="plzcity">PLZ*</label>
                                    </td>
                                    <td>
                                        <input type="number" onkeypress="return event.charCode >= 48 && event.charCode <= 57" name="plzcity" id="plzcity" class="order_field_short2" value="<?php if(isset($_COOKIE['plzcity'])) { echo $_COOKIE['plzcity']; } ?>" />
                                        <span class="error hidden" id="ziperror">Bitte geben Sie eine PLZ ein!</span>
                                    </td>
                                    <td class="order_table_label">
                                        <label for="plzcity">Ort*</label>
                                    </td>
                                    <td>
                                        <input type="text" name="city" id="city" class="order_field_short1" value="<?php if(isset($_COOKIE['city'])) { echo $_COOKIE['city']; } ?>" />
                                        <span class="error hidden" id="cityerror">Bitte geben Sie einen Ort ein!</span>
                                    </td>
                                </tr>
                                <tr class="newrow">
                                    <td class="order_table_label">
                                        <label for="plzcity">Land*</label>
                                    </td>
                                    <td colspan="3">
                                        <select name="country" id="country">
                                            <?php
                                                $countries = loadAllCountries();
                                                foreach ( $countries AS $country ) {
                                                    echo '<option value="'.$country->id.'"';
                                                    if($country->shipping_type == 0) {
                                                        echo ' selected="selected"';
                                                    }
                                                    echo '>'.$country->name.'</option>\n';
                                                }
                                            ?>
                                        </select>
                                        <span class="error hidden" id="countryerror">Bitte wählen Sie ein Land aus!</span>
                                    </td>
                                </tr>
                                <tr class="newrow">
                                    <td class="order_table_label">
                                        <label for="phone">Telefonnummer</label>
                                    </td>
                                    <td colspan="3">
                                        <input type="text" name="phone" id="phone" class="order_field" value="<?php if(isset($_COOKIE['phone'])) { echo $_COOKIE['phone']; } ?>" />
                                    </td>
                                </tr>
                                <tr class="newrow">
                                    <td class="order_table_label">
                                        <label for="email">Emailadresse*</label>
                                    </td>
                                    <td colspan="3">
                                        <input type="email" name="email" id="email" class="order_field" value="<?php if(isset($_COOKIE['email'])) { echo $_COOKIE['email']; } ?>" />
                                        <span class="error hidden" id="emailerror">Bitte geben Sie eine gültige Emailadresse ein!</span>
                                    </td>
                                </tr>
                                <tr class="newrow">
                                    <td class="order_table_label">
                                    </td>
                                    <td colspan="3">
                                        <input type="checkbox" value="1" id="newsletter_approve" name="newsletter_approve" checked="checked" class="filled-in">
                                        <label for="newsletter_approve">Ja, ich möchte viermal im Jahr den Newsletter von Dorispaas.de erhalten</label>
                                    </td>
                                </tr>
                                <tr>
                                    <th colspan="4">Ihr Bestellung:</th>
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
                                    <td class="order_table_label" colspan="3">
                                    <br />
                                        <label>Gesamtsumme Ihrer Bestellung</label>
                                    </td>
                                    <td>
                                        <br />
                                        <label id="total"><?php echo number_format( $totalprice, 2, ',', '.' ); ?> € (+ <a data-fancybox data-type="iframe" data-src="<?php echo PROTOKOLL_URL.URL_BASIC.BASE_PAT; ?>popup/agb#versandkosten" href="javascript:;">Versand</a>)</label>
                                    </td>
                                </tr>
                                <?php if(SHOW_CAPTCHA) { ?>
                                    <tr>
                                        <td class="order_table_label" colspan="4">
                                            <div class="g-recaptcha" data-sitekey="6LcmIjAUAAAAAK6QyqSiD50YKbHFtbmlXhxQ_sUj" data-size="compact"></div>
                                        </td>
                                    </tr>
                                <?php } ?>
                                <tr>
                                    <td colspan="4">
                                        <br />
                                        <input type="submit" class="submit_order btn btn-primary right" disabled="disabled" id="saveCashboxButton" value="Speichern und weiter" />
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>    
            <br>
            <br> 
            <div class="bodyspacer"></div> 
        </div>
