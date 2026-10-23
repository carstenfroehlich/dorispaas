<?php
    function mailNewPassword($user, $password) {
        $htmlBody = "Sie haben ein neues Passwort für Ihren Zugang zur Lebensmitteldatenbank auf www.dorispaas.de angefordert. <br />Dieses Lautet: $password <br /><br />Viele Grüße Doris Paas";
        $body  = "Sie haben ein neues Passwort für Ihren Zugang zur Lebensmitteldatenbank auf www.dorispaas.de angefordert. \nDieses Lautet: $password \nViele Grüße Doris Paas";
        
        sendMyMail('Doris Paas', 'internet@dorispaas.de', 'Doris Pass', 'Neues Passwort für dorispaas.de', $body, $htmlBody, $user->email);
    }
    
    function sendMyMail($fromname, $replyMail, $replyName, $subject, $altBody, $body, $receiver) {
        $mail = new \PHPMailer\PHPMailer\PHPMailer();
        $mail->IsHTML(true);
        $mail->From     = $replyMail;
        $mail->FromName = $fromname;
        $mail->AddReplyTo($replyMail, $replyName);
        $mail->Subject = $subject;
        $mail->msgHTML($body);
        $mail->AltBody = $altBody;
        $mail->CharSet  = "UTF-8";
        $mail->AddAddress($receiver);
        return $mail->send();
    }
?>