<?php
    $redirect_array = array("database");
    $login_page_array = array("login", "register", "forgotpassword");
    
    $restricedPages = array('lebensmittel-datenbank', 'lebensmittel-datenbank-anleitung', 'showallorders', 'createuser', 'administrateusers', 'sendnewsletter');
    
    $administrators = [1, 225];

    require_once('rb-mysql.php');
    
    R::ext('xdispense', function( $type ){ 
        return R::getRedBean()->dispense( $type ); 
    });
    
    R::setup('mysql:host='.HOST.'; dbname='.DB_NAME, DB_USER, DB_PWD);
    require_once('classes/class_JWT.php');
    require_once('classes/class_token.php');
    require_once('classes/class_lexikonnmu.php');
    require_once('classes/class_user.php');
    require_once('classes/class_article.php');
    require_once('classes/class_cart.php');
    require_once('classes/class_country.php');
    require_once('classes/class_mail.php');
    require_once('classes/class_order.php');
    require_once('classes/class_orderitem.php');
    require_once('classes/class_usercart.php');
    require_once('classes/class_paypal_ipn.php');
    require_once('classes/class_filter.php');
    require_once('classes/class_newsletterscubscription.php');
    require_once('classes/class_newslettersend.php');
    require_once('classes/JsonSerializer.php');
    require_once('phpmailer/PHPMailerAutoload.php');
?>
