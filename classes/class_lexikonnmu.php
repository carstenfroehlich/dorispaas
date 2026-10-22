<?php
    function createLexikonNmu($lebensmittel, $kategorie, $beschreibung, $li, $fi, $si, $hi, $oi, $gz, $sa, $ap, $s, $fo) {
        $lexikon = R::xdispense('lexikon_nmu');
        $lexikon->lebensmittel = $lebensmittel;
        $lexikon->kategorie = $kategorie;
        $lexikon->beschreibung = $beschreibung;
        $lexikon->li = $li;
        $lexikon->fi = $fi;
        $lexikon->si = $si;
        $lexikon->hi = $hi;
        $lexikon->oi = $oi;
        $lexikon->gz = $gz;
        $lexikon->sa = $sa;
        $lexikon->ap = $ap;
        $lexikon->s = $s;
        $lexikon->fo = $fo;
        return R::store($lexikon);
    }
    
    function getAllLexikonNmu() {
        return R::findAll('lexikon_nmu');
    }
    
    function getResultFromQuery($query) {
        $rows = R::getAll( $query );
        return R::convertToBeans( 'lexikon_nmu', $rows );
    }
    
    function countLexikonNmuEntries() {
        return R::getCell("SELECT count(*) FROM lexikon_nmu");
    }
    
    function truncateLexikonNmu() {
        R::exec('TRUNCATE TABLE lexikon_nmu');
    }
    
    function runQueryLexikonNmu($query) {
        R::exec($query);
    }
?>