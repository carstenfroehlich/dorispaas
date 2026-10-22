<?php
    if($_SERVER['HTTP_HOST'] == 'localhost') {
        /* localhost */
        /*define('HOST', "localhost");
        define('DB_USER', "root");
        define('DB_PWD', "");
        define('DB_NAME', "dorispaaslive");*/
        define('HOST', "dorispaas.de");
        define('DB_USER', "d00eaabc");
        define('DB_PWD', 'lis123');
        define('DB_NAME', "d00eaabc");
        define('URL_BASIC', "localhost");
        define('USE_CURL', false);
        define('BASE_PAT', "/dorispaas/");
       // define('PROTOKOLL_URL', "http://");
        define('SHOW_CAPTCHA', false);
        define('PAYPAL_URL', "https://www.paypal.com/cgi-bin/webscr");
        define('PAYPAL_BASE_URL', "https://www.dorispaas.de");
        define('PAYPAL_USER', "paypalbestellung@dorispaas.de");
    } else if($_SERVER['HTTP_HOST'] == 'luventastest.de' || $_SERVER['HTTP_HOST'] == 'www.luventastest.de') {
        /* localhost */
        define('HOST', "localhost");
        define('DB_USER', "d02834b5");
        define('DB_PWD', "zKzQnVUCAWf6uCRz");
        define('DB_NAME', "d02834b5");
        define('URL_BASIC', "luventastest.de");
        define('USE_CURL', false);
        define('BASE_PAT', "/");
        //define('PROTOKOLL_URL', "http://");
        define('SHOW_CAPTCHA', true);
        define('PAYPAL_URL', "https://www.sandbox.paypal.com/cgi-bin/webscr");
        define('PAYPAL_BASE_URL', "http://luventastest.de");
        define('PAYPAL_USER', "backoffice@luventas-webdesign.de");
    } else {
        define('HOST', "dorispaas.de");
        define('DB_USER', "d00eaabc");
        define('DB_PWD', 'lis123');
        define('DB_NAME', "d00eaabc");
        define('URL_BASIC', "www.dorispaas.de");
        define('USE_CURL', false);
        define('BASE_PAT', "/");
        //define('PROTOKOLL_URL', "http://");
        define('SHOW_CAPTCHA', true);
        define('PAYPAL_URL', "https://www.paypal.com/cgi-bin/webscr");
        define('PAYPAL_BASE_URL', "https://www.dorispaas.de");
        define('PAYPAL_USER', "paypalbestellung@dorispaas.de");
    }
    
    define('SECRET_JSON_API_KEY', "quQ3uHx5RHVAGn5uyMqkGtHTJzRJwZZC59WVyvKX");
    
    $isSecure = false;
    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
        $isSecure = true;
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https' || !empty($_SERVER['HTTP_X_FORWARDED_SSL']) && $_SERVER['HTTP_X_FORWARDED_SSL'] == 'on') {
        $isSecure = true;
    }
    define('PROTOKOLL_URL', $isSecure ? 'https://' : 'http://');
?>
