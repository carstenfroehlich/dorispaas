<?php
    $payment_methods = [
        'paypal',
        'banktransfer',
    ];
    $cart_entries = getCartEntriesByToken($shopcookie);
    $totalprice = 0.00;
    $needshipping = false;
    foreach($cart_entries AS $cartentry) {
        $article = loadArticle($cartentry->article_id);
        $totalprice = $totalprice + ($cartentry->amount * $article->price);
        if($article->need_shipping == 1) { $needshipping = true; }
    }
    
    $user = loadUser(loadUserCartByToken($shopcookie)->user_id);
    
    // $shipping = 90; // kostenfreier Versand innerhalb Deutschlands
    $shipping = 91; // kostenpflichtiger Versand innerhalb Deutschlands
    if($needshipping) {
        $country = loadCountry( $user->country_id );
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
                        <input type="hidden" id="ordertype" name="ordertype" value="newcustomer" />
                        <table class="table">
                            <tr>
                                <td colspan="4">
                                    <b>Bitte wählen Sie Ihre Zahlungsart aus:</b>
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
                                <?php 
                                    $article = loadArticle($cartentry->article_id);
                                    if(!$article->bank_transfer_payment) {
                                        $payment_methods = array_diff($payment_methods, ['banktransfer']);
                                    }
                                ?>
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
                            <tr>
                                <td colspan="4">
                                    <input type="checkbox" value="1" id="aggree_agb" name="aggree_agb" class="filled-in">
                                    <label for="aggree_agb">*Ich bestätige, dass ich die <a data-fancybox data-type="iframe" data-src="<?php echo PROTOKOLL_URL.URL_BASIC.BASE_PAT; ?>popup/agb" href="javascript:;">AGBs und Widerufsbelehrungen</a> und die <a data-fancybox data-type="iframe" data-src="<?php echo PROTOKOLL_URL.URL_BASIC.BASE_PAT; ?>popup/agb#versandkosten" href="javascript:;">Versandkosten</a> gelesen habe und erkläre mich damit einverstanden.</label>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4">
                                    <input type="radio" value="1" id="paypal" name="paymentmethod"><label for="paypal">Bezahlen mit PayPal</label>
                                    <?php if(in_array('banktransfer', $payment_methods)) { ?>
                                        <br />
                                        <input type="radio" value="2" id="bank" name="paymentmethod"><label for="bank">Bezahlen mit Banküberweisung</label>
                                    <?php } ?>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4">
                                    <form id="paypal_form" action="<?php echo PAYPAL_URL; ?>" method="post">
                                        <input id="paypal_command"            type="hidden" name="cmd"           value="_xclick" />
                                        <input id="paypal_account"            type="hidden" name="business"      value="<?php echo PAYPAL_USER; ?>" />
                                        <input id="paypal_currency_code"      type="hidden" name="currency_code" value="EUR" />
                                        <input id="paypal_shipping"           type="hidden" name="no_shipping"   value="1">
                                        <input id="paypal_amount_recurring"   type="hidden" name="a3"            value="<?php echo $total_for_paypal; ?>" />
                                        <input id="paypal_amount"             type="hidden" name="amount"        value="<?php echo $total_for_paypal; ?>" />
                                        <input id="paypal_reattempt"          type="hidden" name="sra"           value="1" />
                                        <input id="paypal_description"        type="hidden" name="item_name"     value="Bestellung Dorispaas.de" />
                                        <input id="paypal_should_return"      type="hidden" name="rm"            value="1" />
                                        <input id="paypal_cancel_url"         type="hidden" name="cancel_return" value="<?php echo PAYPAL_BASE_URL; ?>/ordernow/canceled" />
                                        <input id="paypal_return_url"         type="hidden" name="return"        value="<?php echo PAYPAL_BASE_URL; ?>/ordernowthanks/paypal/<?php echo $shopcookie; ?>/<?php echo $user->id; ?>" />
                                        <input id="paypal_notify_url"         type="hidden" name="notify_url"    value="<?php echo PAYPAL_BASE_URL; ?>/ipn/?cart=<?php echo loadUserCartByToken($shopcookie)->id; ?>&uid=<?php echo $user->id; ?>" />
                                    </form>
                                    <form id="bank_form" name="bank_form" action="ordernowthanks/bank/<?php echo $shopcookie; ?>" method="post">
                                        <input type="hidden" name="userid" value="<?php echo $user->id; ?>" />
                                    </form>
                                    <button id="paymentbutton" type="button" class="submit_order btn btn-primary right" disabled="disabled" onclick="submitThisForm()" />Kaufen</button>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>    
            <br>
            <br> 
            <div class="bodyspacer"></div> 
        </div>
