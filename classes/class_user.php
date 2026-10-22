<?php
    function createUser($firstname, $lastname, $street, $zipcode, $cityname, $country_id, $phonenumber, $email, $newsletter_approve) {
        $user = R::xdispense('groceries_db_users');
        $user->customer_id = getNewCustomerId();
        $user->firstname = $firstname;
        $user->lastname = $lastname;
        $user->street = $street;
        $user->zipcode = $zipcode;
        $user->cityname = $cityname;
        $user->country_id = $country_id;
        $user->phonenumber = $phonenumber;
        $user->email = $email;
        $user->password = null;
        $user->registration_date = date('Y-m-d H:i:s');
        $user->actual_order_expiration_date = date('Y-m-d');
        $user->newsletter_approve = $newsletter_approve;
        
        $newsletter_subscription = getNewsletterSubscriptionsByEmail($email);
        if(isset($newsletter_subscription) || $newsletter_subscription->id > 0) {
        } else {
            if($newsletter_approve) {
                createNewsletterSubscriptions($email);
            }
        }
        
        return R::store($user);
    }
    
    function updateUser($user, $firstname, $lastname, $street, $zipcode, $cityname, $country_id, $phonenumber, $email) {
        $user->firstname = $firstname;
        $user->lastname = $lastname;
        $user->street = $street;
        $user->zipcode = $zipcode;
        $user->cityname = $cityname;
        $user->country_id = $country_id;
        $user->phonenumber = $phonenumber;
        $user->email = $email;
        return R::store($user);
    }
    
    function updateActualOrderExpirationDate($user, $actual_order_expiration_date) {
        $user->actual_order_expiration_date = $actual_order_expiration_date;
        return R::store($user);
    }
    
    function updatePassword($user, $password) {
        $user->password = $password;
        return R::store($user);
    }
    
    function loadAllUsers() {
        return R::findAll('groceries_db_users', 'ORDER BY id DESC');
    }
    
    function loadUser($id) {
        return R::load('groceries_db_users', $id);
    }
    
    function updateUserPassword($user, $securePassword) {
        $user->password = $securePassword;
        return R::store($user);
    }
    
    function getSingleUserByEmail($email) {
        return R::findOne('groceries_db_users', 'email = ?', array($email));
    }
    
    function getSingleUserByCustomerId($customerId) {
        return R::findOne('groceries_db_users', 'customer_id = ?', array($customerId));
    }
    
    function getSingleUserByEmailActive($email) {
        return R::findOne('groceries_db_users', 'email = ? AND actual_order_expiration_date >= NOW()', array($email));
    }
    
    function getNewCustomerId() {
        return R::getCell('SELECT (max(customer_id) + 1) AS new_customer_id  FROM groceries_db_users');
    }
    
    function getUserFromQuery($query) {
        $rows = R::getAll( $query );
        return R::convertToBeans( 'groceries_db_users', $rows );
    }
?>