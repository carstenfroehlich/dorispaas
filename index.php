<?php
    ob_start();
    session_set_cookie_params(0);
    session_start();
    
    $caller_ip = "";
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $caller_ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $caller_ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $caller_ip = $_SERVER['REMOTE_ADDR'];
    }

    $calling_user_agent = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';
    
    require_once("languages/global.php");
    
    require_once('imports.php');
    
    require_once('main_functions.php');
    
    require_once('init.php');
    require_once('global_functions.php');
    
    $URL = str_replace(
		array( '\\', '../' ),
		array( '/',  '' ),
		$_SERVER['REQUEST_URI']
	);
    $URL = trim($URL,'/');
    
    if (
		file_exists(DOC_ROOT.'/'.$URL) &&
		($_SERVER['SCRIPT_FILENAME'] != DOC_ROOT.$URL) &&
		($URL != '') &&
		($URL != 'index.php')
	) { echo "False"; exit(); };
    
    $ACTION = (
		($URL == '') ||
		($URL == 'index.php') ||
		($URL == 'index.html')
	) ? array('index') : explode('/',html_entity_decode($URL));
    
    if(FULL_URL == 'localhost' || FULL_URL == 'localhost:8080') {
        array_shift($ACTION);
    }
    if(!isset($ACTION[0])) {
        $ACTION[0] = 'home';
    }
    
    if(startsWith($ACTION[0], 'index.php?page=')) {
        $tmp = explode('&', str_replace('index.php?page=', '', $ACTION[0]));
        if(count($tmp) == 1) {
            header('Location: '.URL_ROOT.$tmp[0]);
            exit();
        } else if(count($tmp) == 2) {
            $str = "/";
            for($co = 1; $co < count($tmp); $co++) {
                $rr = explode("=", $tmp[$co]);
                if($co == 1) {
                    $str .= "?".$rr[0]."=".$rr[1];
                } else {
                    $str .= "&".$rr[0]."=".$rr[1];
                }
            }
            header('Location: '.URL_ROOT.$tmp[0].$str);
            exit();
        }
    }
    
    if(includes($ACTION[0], "?")) {
        $tmp = explode('?', $ACTION[0]);
        header('Location: '.URL_ROOT.$tmp[0].'/?' . $tmp[1]);
        exit();
    }
    

    if(isset($ACTION[1]) && $ACTION[1] == 'bankfinished') {
        unset($_COOKIE['shopcookie']);
        setcookie('shopcookie', '', time() - 3600, '/');
    }
    $shopcookie = null;
    if($ACTION[0] == 'shop') {
        if(isset($_COOKIE['shopcookie'])) {
            $shopcookie = $_COOKIE['shopcookie'];
        } else {
            $shopcookie = createToken($caller_ip);
            setcookie('shopcookie', $shopcookie, time()+(60*60*24), '/');
        }
    } else if($ACTION[0] == 'ordernowthanks') {
        setcookie('shopcookie', '', -1, "/");
    } else if(isset($_COOKIE['shopcookie'])) {
        $shopcookie = $_COOKIE['shopcookie'];
    }
    
    // Set page to maintenance mode
    /*
    if($ACTION[0] != 'maintenance' && $ACTION[0] != 'testsystem' && $ACTION[0] != 'cron' && $ACTION[0] != 'cron2') {
        header('Location: '.URL_ROOT.'maintenance');
        exit();
    }
    */
    
    if($ACTION[0] == 'register' && isset($ACTION[1])) {
        $_SESSION['inviter'] = $ACTION[1];
        if(isset($ACTION[2]) && in_array($ACTION[2], $programs)) {
            $_SESSION['selected_program'] = $ACTION[2];
        }
    }
    
    $lang = 'de';
    
    if($ACTION[0] == 'de') {
        $_SESSION['mylang'] = $ACTION[0];
        $coming_from;
        if(isset($_SERVER['HTTP_REFERER'])) {
            $coming_from = $_SERVER['HTTP_REFERER'];
        } else {
            $coming_from = URL_ROOT."home";
        }
        header('Location: '.$coming_from);
        exit();
    }
    
    if(isset($_SESSION['mylang'])) {
        $lang = $_SESSION['mylang'];
    } else {
        $_SESSION['mylang'] = 'de';
        $lang = $_SESSION['mylang'];
    }

    require_once "languages/".$lang.".php";
    require_once('handler.php');
    
    $isPopup = false;
    $path_add = '';
    
    $templatePath = $ACTION[0];
    if($templatePath == 'popup' && isset($ACTION[1])){
        $templatePath = $ACTION[1];
        $isPopup = true;
    }
    
    if(($templatePath == 'book' || $templatePath == 'book2' || $templatePath == 'devil' || $templatePath == 'pr' || $templatePath == 'studie') && isset($ACTION[1])) {
        $templatePath = $ACTION[1];
        $path_add = $ACTION[0].'/';
    }
    
    if($templatePath == 'home') {
        $templatePath = 'index';
    } else if($templatePath == 'base') {
        $templatePath = 'index';
    } else if($templatePath == 'footer') {
        $templatePath = 'index';
    }
    
    $isAdmin = false;
    if($templatePath == 'admin' && isset($ACTION[1])) {
        $templatePath = $ACTION[1];
        $isAdmin = true;
    }
    
    if(in_array($templatePath, $restricedPages)) {
        if(!checkLoginToken()) {
            unset($_SESSION['token']);
            unset($_SESSION['admin']);
            header('Location: '.URL_ROOT."login");
            exit();
        }
    }
    
    $baseFile = ''.TEMPLATE_ROOT.''.preg_replace('/[^\w]/','','base').'.php';
    $includeFile = ''.TEMPLATE_ROOT.$path_add.''.$templatePath.'.php';
    $footerFile = ''.TEMPLATE_ROOT.''.preg_replace('/[^\w]/','','footer').'.php';
    
    if($isAdmin) {
        $includeFile = ''.ADMIN_TEMPLATE_ROOT.$path_add.''.$templatePath.'.php';
    }
    
    if($isPopup) {
        $baseFile = ''.TEMPLATE_ROOT.''.preg_replace('/[^\w]/','','popupbase').'.php';
        $footerFile = ''.TEMPLATE_ROOT.''.preg_replace('/[^\w]/','','popupfooter').'.php';
    }
    
    if ($ACTION[0] == 'shopapi' || $ACTION[0] == 'shoppingcart_ajax' || $ACTION[0] == 'show_securimage' || $ACTION[0] == 'ipn' || $ACTION[0] == 'check_expiration') {
        if (is_file($includeFile)) {
        	include($includeFile);
        }
	} else {
        if (is_file($includeFile)) {
            include($baseFile);
        	include($includeFile);
            include($footerFile);
        } else {
            include($baseFile);
            include(''.TEMPLATE_ROOT.''.preg_replace('/[^\w]/','','error').'.php');
            include(''.TEMPLATE_ROOT.''.preg_replace('/[^\w]/','','index').'.php');
            include($footerFile);
        }
    }
    
    ob_end_flush();
?>