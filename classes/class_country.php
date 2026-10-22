<?php
    function loadAllCountries() {
        return R::findAll('country');
    }
    
    function loadCountry($id) {
        return R::load('country', $id);
    }
?>