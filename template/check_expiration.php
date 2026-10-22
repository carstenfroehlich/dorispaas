<?php
    $sql  = "SELECT gdu.firstname, gdu.lastname, gdu.customer_id, gdu.email, gdu.actual_order_expiration_date, uo.creation_date FROM groceries_db_users gdu left join user_order uo ON gdu.id = uo.user_id ";
    $sql .= "left join order_items oi ON oi.order_id = uo.id WHERE oi.article_id IN (9, 10, 11, 12) ";
    $sql .= "AND (gdu.actual_order_expiration_date = '".date("Y-m-d", strtotime(date('Y-m-d', strtotime(date('Y-m-d'))) . " +14 day"));
    $sql .= "' OR gdu.actual_order_expiration_date = '".date('Y-m-d')."') GROUP BY gdu.id";
    
    //$users = getUserFromQuery($sql);
    $rows = R::getAll( $sql );
    
    $datenbank_verlaengerung = loadArticle(12);

    try {
        foreach($rows AS $row) {
            $order_creation_date = strtotime(date('Y-m-d 00:00:00', strtotime($row['creation_date'])));
            $actual_order_expiration_date = strtotime(date('Y-m-d 00:00:00', strtotime($row['actual_order_expiration_date'])));
            if($order_creation_date < $actual_order_expiration_date) {
                $today = false;
                if(date('Y-m-d') == $row['actual_order_expiration_date']) { $today = true; }
                $anrede  = "Sehr geehrte/r Frau/Herr ".$row['firstname']." ".$row['lastname']."\n\n";
                $mailtext  = "in den vergangenen Monaten konnten Sie\n- von den komfortablen Funktionen der DorisPaas.de - ";
                $mailtext .= "Lebensmittel-Datenbank und vielen Informationen profitieren\n";
                $mailtext .= "- Ihre Beschwerden minimieren und\n- Ihren Speiseplan um zahlreiche verträgliche Lebenmittel erweitern.\n\n";
                if($today) {
                    $mailtext .= "Heute läuft nun Ihr gebuchtes Abonnement der DorisPaas.de - Lebensmittel-Datenbank ab.\n\n";
                } else {
                    $mailtext .= "In 14 Tagen läuft nun Ihr gebuchtes Abonnement der DorisPaas.de - Lebensmittel-Datenbank ab.\n\n";
                }
                $mailtext .= "Gerne biete ich Ihnen die Möglichkeit, Ihr Abo kostengüstig für nur ".number_format($datenbank_verlaengerung->price, 2, ',', '')." Euro um weitere 6 Monate zu verlängern.\n";
                $mailtext .= "- Sie können dann die komfortablen Funktionen der DorisPaas.de - Lebensmittel-Datenbank für nur ".number_format($datenbank_verlaengerung->price / 6, 2, ',', '')." Euro pro Monat weiterhin nutzen.\n";
                $mailtext .= "- Lassen Sie sich die für Ihre Nahrungsmittel-Intoleranzen verträglichen Lebensmittel anzeigen.\n";
                $mailtext .= "- Nutzen Sie die Chance, Ihren Speiseplan nach und nach um viele weitere, möglicherweise verträgliche Lebensmittel zu erweitern.\n";
                $mailtext .= "- Vermeiden Sie auch in Zukunft unangenehme Symptome durch für Sie unbekömmliche Lebensmittel.\n\n";
                $mailtext .= "Buchen Sie Ihre Abo-Verlängerung einfach und komfortabel über den Shop auf meiner Website: http://www.dorispaas.de/shop#aboverlaengerung. Die hinzugebuchten Monate werden an das ursprüngliche Ablaufdatum Ihres Abos angefügt.\n\n";
                $mailtext .= "Geben Sie bitte bei der Bestellung Ihre Kundennummer ein, damit wir Ihren Zugang korrekt zuordnen können. Diese lautet:\n";
                $mailtext .= $row['customer_id']."\n\n";
                $mailtext .= "Ich freue mich auf Ihre Bestellung.\n\nWeiterhin alles Gute und ganz herzliche Grüße aus dem Rheinland\nDoris Paas";
    
                sendMyMail('Doris Paas', 'bestellung@dorispaas.de', 'Doris Paas', 'Ihr Zugang zur Lebensmitteldatenbank läuft bald ab', $anrede.$mailtext, nl2br($anrede.$mailtext), $row['email']);
                $text = '';
                if($today) {
                    $text .= "Erinnerungsmail an ".$row['firstname']." ".$row['lastname']." versandt, dass der Zugang heute abläuft.";
                } else {
                    $text .= "Erinnerungsmail an ".$row['firstname']." ".$row['lastname']." versandt, dass der Zugang in 14 Tagen abläuft.";
                }
                sendMyMail('Doris Paas', 'bestellung@dorispaas.de', 'Doris Paas', 'Erinnerungsmail an '.$row['firstname']." ".$row['lastname'].' versandt', $text, $text, 'bestellung@dorispaas.de');
            }
        }
        //sendMyMail('Doris Paas', 'bestellung@dorispaas.de', 'Doris Paas', 'Cronjob Test', 'Kein Nutzer gefunden', 'Kein Nutzer gefunden', 'bestellung@dorispaas.de');
    } catch ( Exception $e ) { 
        //sendMyMail('Doris Paas', 'bestellung@dorispaas.de', 'Doris Paas', 'Cronjob Test', $e, $e, 'bestellung@dorispaas.de');
    }
    //sendMyMail('Doris Paas', 'bestellung@dorispaas.de', 'Doris Paas', 'Cronjob Test', 'Testpage wurde aufgerufen', 'Testpage wurde aufgerufen', 'bestellung@dorispaas.de');
