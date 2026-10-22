<?php
    
    function createOrder($user_id, $amount, $is_payed = false, $agree_with_agb = false) {
        $order = R::xdispense('user_order');
        $order->user_id = $user_id;
        $order->order_amount = $amount;
        $order->is_payed = $is_payed;
        $order->agree_with_agb = $agree_with_agb;
        $order->creation_date = date('Y-m-d H:i:s');
        $order->payed_cash = false;
        $order->is_paypal_payed = false;
        return R::store($order);
    }
    
    function loadOrder($id) {
        return R::load('user_order', $id);
    }
    
    function loadAllOrders() {
        return R::findAll('user_order');
    }
    
    function loadAllOrdersNewestFirst() {
        return R::findAll('user_order', 'ORDER BY id DESC');
    }
    
    function updateOrderAsPayed($order) {
        $order->is_payed = true;
        return R::store($order);
    }
    
    function updateOrderAsPayedWithCash($order) {
        $order->payed_cash = true;
        return R::store($order);
    }
    
    function updateOrderAsPayedWithPaypal($order) {
        $order->is_paypal_payed = true;
        return R::store($order);
    }
?>