<?php
    function createUserCart($user_id, $token) {
        $usercart = R::xdispense('usercart');
        $usercart->user_id = $user_id;
        $usercart->token = $token;
        return R::store($usercart);
    }
    
    function loadUserCart($id) {
        return R::load('usercart', $id);
    }
    
    function loadUserCartByToken($token) {
        return R::findOne('usercart', 'token = ?', array($token));
    }
    
    function trashUserCart($usercart) {
        R::trash($usercart);
    }
?>