<?php
    function createPassword() {
        $chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
        $createdPassword = "";
        for ($i = 0; $i < 8; $i++) {
            $createdPassword .= $chars[mt_rand(0, strlen($chars)-1)];
        }
        return $createdPassword;
    }
    
    function securePassword($password) {
        /*$salt = openssl_random_pseudo_bytes(22);
        $salt = '$2a$13$' . strtr($salt, array('_' => '.', '~' => '/'));
        return crypt($password, $salt);*/
        return password_hash($password, PASSWORD_BCRYPT, ['cost' => 13]);
    }
    
    function checkPassword($password, $hash) {
        /*if ( crypt($password, $hash) == $hash ) {
            return true;
        }
        return false;*/
        return password_verify($password, $hash);
    }
    
    function checkLoginToken() {
        $returner = false;
        if(isset($_SESSION['token'])) {
            $tokenarray = JWT::decode($_SESSION['token'], SECRET_JSON_API_KEY);
            $searchedUser = loadUser( $tokenarray->id );
            if ( isset($searchedUser) && $searchedUser->id > 0 ) {
                $date = new DateTime($searchedUser->actual_order_expiration_date);
                if(strtotime($date->format('Y-m-d')) > strtotime(date('Y-m-d'))) {
                    $returner = true;
                }
            }
        }
        return $returner;
    }
    
    function checkIsAdmin($administrators) {
        $returner = false;
        if(isset($_SESSION['admin'])) {
            $adminarray = JWT::decode($_SESSION['admin'], SECRET_JSON_API_KEY);
            if(in_array($adminarray->admin, $administrators)) {
                $returner = true;
            }
        }
        return $returner;
    }

    function validateEmailaddress($email) {
        if(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email)) {
            return false;
        }
        return true;
    }
    
    function isUserEmailUnique($email) {
        $users = R::find('user', 'email = ?', array($email));
        if(count($users) > 0) {
            return false;
        }
        return true;
    }
    
    function createValidationKey($len = 20) {
        $chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $validationKey = "";
        for ($i = 0; $i < $len; $i++) {
            $validationKey .= $chars[mt_rand(0, strlen($chars)-1)];
        }
        return $validationKey;
    }
    
    function parseHTML($html) {
    	return str_ireplace(array('<br>', '<br />', '<br/>', '</p>', '</h1>', '</h2>', '</h3>'),array('<br>'.PHP_EOL, '<br />'.PHP_EOL, '<br/>'.PHP_EOL, '</p>'.PHP_EOL, '</h1>'.PHP_EOL, '</h2>'.PHP_EOL, '</h3>'.PHP_EOL), $html);
    }
    
    function startsWith($haystack, $needle) {
        return str_starts_with($haystack, $needle);
    }
    
    function endsWith($haystack, $needle) {
        return str_ends_with($haystack, $needle);
    }
    
    function includes($haystack, $needle) {
        return str_contains($haystack, $needle);
    }
?>
