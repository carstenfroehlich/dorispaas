<?php
    function createPaypalIpnData($user_id, $paypal_key, $paypal_value) {
        $paypalIpnData = R::xdispense('paypal_ipn_data');
        $paypalIpnData->user_id = $user_id;
        $paypalIpnData->paypal_key = $paypal_key;
        $paypalIpnData->paypal_value = $paypal_value;
        return R::store($paypalIpnData);
    }
    
    function trashCustomPaypalIpnData($user_id, $custom_val = 'custom') {
        $custom = R::findOne('paypal_ipn_data', 'user_id = ? AND paypal_key = ?', array($user_id, $custom_val));
        if(isset($custom) && $custom->id > 0) {
            R::trash($custom);
        }
    }
?>