<?php
     function loadNewsletterSend($id) {
         return R::load('newsletter_send', $id);
     }
     
     function getNewsletterSendBySubscriptionIdAndFilename($subscriptionId, $filename) {
         return R::findOne('newsletter_send', 'newsletter_subscription_id = ? AND newsletter_filename = ?', array($subscriptionId, $filename));
     }

     function createNewsletterSend($filename, $subscriptionId) {
         $newslettersend                             = R::xdispense('newsletter_send');
         $newslettersend->newsletter_subscription_id = $subscriptionId;
         $newslettersend->newsletter_filename        = $filename;
         $newslettersend->newsletter_send            = false;
         return R::store($newslettersend);
     }
     
     function updateNewsletterAsSend($id) {
         $newslettersend                  = loadNewsletterSend($id);
         $newslettersend->newsletter_send = true;
         return R::store($newslettersend);
     }
?>
