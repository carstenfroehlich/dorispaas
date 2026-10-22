<?php
    $chop = -strlen(basename($_SERVER['SCRIPT_NAME']));
    define('DOC_ROOT',substr($_SERVER['SCRIPT_FILENAME'],0,$chop));
    define('URL_ROOT',substr($_SERVER['SCRIPT_NAME'],0,$chop));
    
    define ('FULL_URL', $_SERVER['HTTP_HOST']);
    define('PROJECT_ROOT', DOC_ROOT);
    
    define('CSS_PATH', '//' . FULL_URL . URL_ROOT . 'assets/css' . "/");
    define('JS_PATH', '//' . FULL_URL . URL_ROOT . 'assets/js' . "/");
    define('IMG_PATH', '//' . FULL_URL . URL_ROOT . 'assets/images' . "/");
    define('FONT_PATH', '//' . FULL_URL . URL_ROOT . 'assets/fonts' . "/");
    define('FILES_PATH', '//' . FULL_URL . URL_ROOT . 'assets/files' . "/");
    define('NEWSLETTER_PATH', '//' . FULL_URL . URL_ROOT . 'assets/newsletters' . "/");
    define('VIDEO_PATH', '//' . FULL_URL . URL_ROOT . 'assets/videofiles' . "/");
    
    define('TEMPLATE_ROOT', PROJECT_ROOT . 'template' . "/");
    define('ADMIN_TEMPLATE_ROOT', PROJECT_ROOT . 'admin' . "/");
    
    define( "BASE_LINK", "http://" . $_SERVER["HTTP_HOST"] . "/" . parseContextPath() );
    define( "REQUEST_URI", parseRequestURI() );
    
    $mailerror = '';
    $wrongcaptcha = false;
?>