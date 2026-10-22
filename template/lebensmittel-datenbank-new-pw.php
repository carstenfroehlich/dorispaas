<?php
    $message = null;
    $found   = false;
    if(isset($_POST['password_request']) && isset($_POST['email'])) {
        $email = $_POST['email'];
        $existingUser = getSingleUserByEmailActive($email);

        if(isset($existingUser) && $existingUser->id > 0) {
            $found = true;
            $password = createPassword();
            $existingUser = loadUser(updateUserPassword($existingUser, securePassword($password)));
            
            mailNewPassword($existingUser, $password);
            $message = "Ein neues Passwort wurde an Ihre Emailadresse versendet.";
        } else {
            $existingUser = getSingleUserByEmail($email);
            if(isset($existingUser) && $existingUser->id > 0) {
                $message = "Mit der Emailadresse '$email' konnte ein Benutzer im System gefunden werden, jedoch <b>ist der Zugang zur Datenbank abgelaufen</b>!";
            } else {
                $message = "Mit der Emailadresse '$email' konnte kein Benutzer im System gefunden werden!";
            }
        }
    }
?>
        <div class="section no-pad-bot" id="index-banner">    
            <div class="container">      
                <br />
                <br />  
                <div class="right">Letzte Aktualisierung: <b><?= date( "j.n.Y", filemtime( __FILE__ ) ) ?></b></div>    
                <h1 class="header center orange-text">Neues Passwort anfordern</h1>   
            </div>  
        </div>
        <div class="container">    
            <div class="section">   
            <?php if($message != null && $found) { ?>
                <div class="alert alert-success">
                    <?php echo $message; ?>
                </div> 
            <?php } else if($message != null && !$found) { ?>
                <div class="alert alert-danger">
                     <?php echo $message; ?>
                </div>
            <?php } ?>
                <div class="row margintoprow">        
                    <div class="col s12 m12">          
                        <form id="newpasswordform" name="newpasswordform" method="POST" action="lebensmittel-datenbank-new-pw">
                            <table class="order_table">
                                <tr>
                                    <td class="order_table_label">
                                        <label for="email">Bitte geben Sie hier Ihre <b>eMail-Adresse</b> ein:</label>
                                    </td>
                                    <td>
                                        <input type="text" name="email" id="email" class="order_field" value="" />
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="submitter_td">
                                        <input type="hidden" value="1" name="password_request" />
                                        <input type="submit" class="sender btn btn-primary" value="Anfordern" />
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>    
            <br>
            <br> 
            <div class="bodyspacer"></div> 
        </div>