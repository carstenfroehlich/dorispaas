<?php
    function createToken($ip) {
        $token = array();
        $token['shoppingcartdate'] = date('Y-m-d H:i:s');
        $token['ip'] = $ip;
        return JWT::encode($token, SECRET_JSON_API_KEY);
    }
?>