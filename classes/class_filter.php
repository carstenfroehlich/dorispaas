<?php
    function createFilter($user_id, $filtername, $filterval) {
        $filter = R::xdispense('filter');
        $filter->user_id = $user_id;
        $filter->filtername = $filtername;
        $filter->filter = $filterval;
        return R::store($filter);
    }
    
    function loadFilter($id) {
        return R::load('filter', $id);
    }
    
    function loadFilterByNameAndUserId($user_id, $filtername) {
        return R::findOne('filter', 'user_id = ? AND filtername = ?', array($user_id, $filtername));
    }
    
    function updateFilter($user_id, $filtername, $filterval) {
        $filter = loadFilterByNameAndUserId($user_id, $filtername);
        $filter->filter = $filterval;
        return R::store($filter);
    }
?>