<?php
    function createCartEntry($jwttoken, $article_id, $amount) {
        $searchedOldEntry = getSingleCartEntry($jwttoken, $article_id);
        if(isset($searchedOldEntry) && $searchedOldEntry->id > 0) {
            return updateCartEntry($jwttoken, $article_id, $amount);
        } else {
            if($amount == null || $amount == 0) {
                return 'deleted';
            }
            $cartentry = R::xdispense('cartentry');
            $cartentry->article_id = $article_id;
            $cartentry->amount = $amount;
            $cartentry->token = $jwttoken;
            R::store($cartentry);
            return 'added';
        }
    }
    
    function loadCartEntry($id) {
        return R::load('cartentry', $id);
    }
    
    function getCartEntriesByToken($jwttoken) {
        return R::find('cartentry', 'token = ?', array($jwttoken));
    }
    
    function getSingleCartEntry($jwttoken, $article_id) {
        return R::findOne('cartentry', 'token = ? AND article_id = ?', array($jwttoken, $article_id));
    }
    
    function updateCartEntry($jwttoken, $article_id, $amount) {
        $cartentry = getSingleCartEntry($jwttoken, $article_id);
        if($amount == null || $amount == 0) {
            return trashCartEntry($cartentry->id);
        }
        $cartentry->amount = $amount;
        R::store($cartentry);
        return 'updated';
    }
    
    function trashCartEntry($id) {
        R::trash(loadCartEntry($id));
        return 'deleted';
    }
?>
