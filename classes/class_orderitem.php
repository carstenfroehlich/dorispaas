<?php
    function createOrderItem($order_id, $article_id, $article_amount) {
        $order_item = R::xdispense('order_items');
        $order_item->order_id = $order_id;
        $order_item->article_id = $article_id;
        $order_item->article_amount = $article_amount;
        return R::store($order_item);
    }
    
    function createOrderItemsByCartEntries($order_id, $country_id, $cartEntries) {
        $returnvalues = array(
            'needpassword' => false,
            'plus' => 0,
            'date_add' => 0,
            'needshipping' => false,
            'totalprice' => 0.00
        );
        foreach($cartEntries AS $entry) {
            $order_item_id = createOrderItem($order_id, $entry->article_id, $entry->amount);
            $article = loadArticle($entry->article_id);
            $returnvalues['totalprice'] = $returnvalues['totalprice'] + ($entry->amount * $article->price);
            
            if($article->need_shipping == 1) { $returnvalues['needshipping'] = true; }
            if($article->need_password == 1) { $returnvalues['needpassword'] = true; }
            if($article->type == 'db' && $article->need_password == 0) { $returnvalues['plus'] = true; }
            if($article->type == 'db') { $returnvalues['date_add'] = $returnvalues['date_add'] + $article->date_add; }
        }
        
        // $shipping = 90; // kostenfreier Versand innerhalb Deutschlands
        $shipping = 91; // kostenpflichtiger Versand innerhalb Deutschlands
        if($returnvalues['needshipping']) {
            $country = loadCountry( $country_id );
            if($country->shipping_type == 1 && $returnvalues['totalprice'] < 9.8) {
                $shipping = 91;
            } elseif($country->shipping_type == 2) {
                $shipping = 92;
            } elseif($country->shipping_type == 3) {
                $shipping = 93;
            }
        } else {
            $shipping = 90; // kostenfreier Versand innerhalb Deutschlands, da kein Versand notwendig
        }
        $order_item_id = createOrderItem($order_id, $shipping, 1);
        
        return $returnvalues;
    }
    
    function loadItemsForOrder($order) {
        return R::find('order_items', 'order_id = ? ORDER BY id DESC', array($order->id));
    }
?>