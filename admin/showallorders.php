        <div class="section no-pad-bot" id="index-banner">    
            <div class="container">      
                <br />
                <br />    
                <div class="right">Letzte Aktualisierung: <b><?= date( "j.n.Y", filemtime( __FILE__ ) ) ?></b></div>  
                <h1 class="header center orange-text">Administrationsbereich - Alle Bestellungen</h1>
            </div>  
        </div>
        
        <?php $allOrders = loadAllOrdersNewestFirst(); ?>
        
        <div class="container">    
            <div class="section">     
                <div class="row margintoprow">        
                    <div class="col s12 m12">
                        <table class="order_table">
                            <?php foreach($allOrders AS $order) { ?>
                                <?php $order_user = loadUser($order->user_id); ?>
                                <?php $items = loadItemsForOrder($order); ?>
                                <?php if(isset($order_user) && $order_user->id > 0 && count($items) > 0) { ?>
                                    <tr>
                                        <td>
                                            Kundenummer: <?php echo $order_user->customer_id; ?><br />
                                            <?php echo $order_user->firstname; ?> <?php echo $order_user->lastname; ?><br />
                                            <?php echo $order_user->street; ?><br />
                                            <?php echo $order_user->zipcode; ?> <?php echo $order_user->cityname; ?><br />
                                            <?php echo loadCountry($order_user->country_id)->name; ?><br />
                                            <?php echo $order_user->email; ?>
                                        </td>
                                        <td>
                                            <table style="width: 100%;">
                                                <?php foreach($items AS $item) { ?>
                                                    <?php $article = loadArticle($item->article_id); ?>
                                                    <tr>
                                                        <td style="width: 10%"><?php echo $item->article_amount; ?>x</td>
                                                        <td style="width: 50%;"><?php echo $article->description; ?></td>
                                                        <td style="width: 20%; text-align: right;"><?php echo number_format($article->price, 2, ',', '.'); ?> €</td>
                                                        <td style="width: 20%; text-align: right;">= <?php echo number_format(($article->price * $item->article_amount), 2, ',', '.'); ?> €</td>
                                                    </tr>
                                                <?php } ?>
                                                <tr>
                                                    <td colspan="2"></td>
                                                    <td style="font-weight: bold;">Gesamt:</td>
                                                    <td style="text-align: right; font-weight: bold;"><?php echo number_format(($order->order_amount), 2, ',', '.'); ?> €</td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td style="text-align: right;">
                                            <?php if($order->is_paypal_payed) { ?>
                                                Mit PayPal bezahlt<br />
                                            <?php } ?>
                                            <?php if($order->is_payed) { ?>
                                                bezahlt<br />
                                            <?php } else { ?>
                                                <span style="color: red; font-weight: bold;">noch nicht bezahlt</span><br />
                                                <a href="<?php echo URL_ROOT; ?>admin/showallorders/markaspayed/<?php echo $order->id; ?>">Als bezahlt markieren</a><br />
                                                <a href="<?php echo URL_ROOT; ?>admin/showallorders/markaspayed/<?php echo $order->id; ?>/woemail">Als bezahlt markieren (w/o Email)</a><br />
                                                <a href="<?php echo URL_ROOT; ?>admin/showallorders/markascashpayed/<?php echo $order->id; ?>">Als BAR bezahlt markieren</a>
                                            <?php } ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">
                                            <hr />
                                        </td>
                                    </tr>
                                <?php } ?>
                            <?php } ?>
                        </table>
                    </div>         
                </div>
            </div>    
            <br>
            <br> 
            <div class="bodyspacer"></div> 
        </div>