<?php
    function createNewsletterSubscriptions($email) {
        $newslettersubscriptions = R::xdispense('newsletter_subscriptions');
        $newslettersubscriptions->email = $email;
        $newslettersubscriptions->unsubscription_ticket = dechex( microtime( true ) ) . dechex( rand( 1000000000, 10000000000 ) );
        $newslettersubscriptions->subscription_ticket = null;
        $newslettersubscriptions->date_creation = date('Y-m-d H:i:s');
        return R::store($newslettersubscriptions);
    }
    
    function createNewsletterSubscriptionsWithTwoFactor($email) {
        $newslettersubscriptions = R::xdispense('newsletter_subscriptions');
        $newslettersubscriptions->email = $email;
        $newslettersubscriptions->unsubscription_ticket = null;
        $newslettersubscriptions->subscription_ticket = dechex( microtime( true ) ) . dechex( rand( 1000000000, 10000000000 ) );
        $newslettersubscriptions->date_creation = date('Y-m-d H:i:s');
        return R::store($newslettersubscriptions);
    }
    
    function loadNewsletterSubscriptions($id) {
        return R::load('newsletter_subscriptions', $id);
    }
    
    function verifySubscription($ticket) {
        $newslettersubscriptions = R::findOne('newsletter_subscriptions', 'subscription_ticket = ?', array($ticket));
        $newslettersubscriptions->unsubscription_ticket = $newslettersubscriptions->subscription_ticket;
        $newslettersubscriptions->subscription_ticket = null;
        return R::store($newslettersubscriptions);
    }
    
    function getAllNewsletterSubscriptions() {
        return R::findAll('newsletter_subscriptions', 'subscription_ticket IS NULL');
    }
    
    function getNewsletterSubscriptionsByEmail($email) {
        return R::findOne('newsletter_subscriptions', 'email = ?', array($email));
    }
    
    function getNewsletterSubscriptionsForSubscription($ticket) {
        return R::findOne('newsletter_subscriptions', 'subscription_ticket = ?', array($ticket));
    }
    
    function getNewsletterSubscriptionsForUnsubscription($ticket) {
        return R::findOne('newsletter_subscriptions', 'unsubscription_ticket = ?', array($ticket));
    }
    
    function trashNewsletterSubscription($newslettersubscriptions) {
        R::trash($newslettersubscriptions);
    }
?>