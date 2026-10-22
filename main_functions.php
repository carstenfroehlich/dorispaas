<?php
    function parseRequestURI() {
        $requestURI = $_SERVER["REQUEST_URI"];
        
        if ( substr( $requestURI, 0, 14 ) == "/dorispaas.de/" )
            $requestURI = substr( $requestURI, 14 );
        else if ( substr( $requestURI, 0, 13 ) == "/dorispaas.de" )
            $requestURI = substr( $requestURI, 13 );
        
        $p = strpos( $requestURI, "?" );
        if ( $p !== false && $p >= 0 )
            $requestURI = substr( $requestURI, 0, $p );
        
        return ( $requestURI );
    }
    
    function parseContextPath() {
        $requestURI = $_SERVER["REQUEST_URI"];
        
        if ( substr( $requestURI, 0, 14 ) == "/dorispaas.de/" )
            return ( "dorispaas.de/" );
        if ( substr( $requestURI, 0, 13 ) == "/dorispaas.de" )
            return ( "dorispaas.de/" );
        
        return ( "" );
    }
    
    function getFlagClass( $flag, $filter, $any_light_filter_set ) {
        $clazz = "";
        
        if ( $flag == 1 ) {
            $clazz = "red";
        } else if ( $flag == 2 ) {
            $clazz = "yellow";
        } else if ( $flag == 4 ) {
            $clazz = "green";
        }
        
        if ( ( $filter === "" ) && $any_light_filter_set ) {
            if ( $clazz != "" ) {
                $clazz .= " pale" . $filter;
            } else {
                $clazz = "pale";
            }
        }
        
        return ( $clazz );
    }
    
    function getFODMAPFlagClass( $flag, $filter, $any_light_filter_set ) {
        $clazz = "";
        
        if ( $flag == 1 ) {
            $clazz = "fo-hoch";
        } else if ( $flag == 2 ) {
            $clazz = "fo-gelb";
        } else if ( $flag == 4 ) {
            $clazz = "fo-niedrig";
        }
        
        if ( ( $filter === "" ) && $any_light_filter_set ) {
            if ( $clazz != "" ) {
                $clazz .= " pale" . $filter;
            } else {
                $clazz = "pale";
            }
        }
        
        return ( $clazz );
    }
?>