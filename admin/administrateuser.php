<?php
    $givencustomer = loadUser($ACTION[2]);
?>
        <div class="section no-pad-bot" id="index-banner">    
            <div class="container">      
                <br />
                <br />    
                <div class="right">Letzte Aktualisierung: <b><?= date( "j.n.Y", filemtime( __FILE__ ) ) ?></b></div>  
                <h1 class="header center orange-text">Administrationsbereich</h1>
            </div>  
        </div> 
        <div class="container">    
            <div class="section">
                <form id="create_user_form" name="create_user_form" method="POST" action="<?php echo URL_ROOT; ?>admin/administrateuser/saveuser/<?php echo $givencustomer->id; ?>">   
                    <div class="row margintoprow">        
                        <div class="col s12 m12">
                            <table class="order_table">
                                <tr>
                                    <td class="order_table_label">
                                        <label for="firstname">Vorname*</label>
                                    </td>
                                    <td>
                                        <input type="text" name="firstname" id="firstname" class="order_field" value="<?php echo $givencustomer->firstname; ?>" />
                                    </td>
                                </tr>
                                <tr>
                                    <td class="order_table_label">
                                        <label for="lastname">Nachname*</label>
                                    </td>
                                    <td>
                                        <input type="text" name="lastname" id="lastname" class="order_field" value="<?php echo $givencustomer->lastname; ?>" />
                                    </td>
                                </tr>
                                <tr>
                                    <td class="order_table_label">
                                        <label for="street">Straße / HausNr.*</label>
                                    </td>
                                    <td>
                                        <input type="text" name="street" id="street" class="order_field" value="<?php echo $givencustomer->street; ?>" />
                                    </td>
                                </tr>
                                <tr>
                                    <td class="order_table_label">
                                        <label for="plzcity">PLZ / Ort*</label>
                                    </td>
                                    <td>
                                        <input type="text" name="plzcity" id="plzcity" style="width: 30%; margin-right: 3%;" value="<?php echo $givencustomer->zipcode; ?>" />
                                        <input type="text" name="city" id="city" style="width: 65%" value="<?php echo $givencustomer->cityname; ?>" />
                                    </td>
                                </tr>
                                <tr>
                                    <td class="order_table_label">
                                        <label for="plzcity">Land*</label>
                                    </td>
                                    <td>
                                        <select name="country" id="country" class="tableselectbox">
                                            <?php
                                                $countries = loadAllCountries();
                                                foreach ( $countries AS $country ) {
                                                    echo '<option value="'.$country->id.'"';
                                                    if($givencustomer->country_id == $country->id) {
                                                        echo " selected='selected'";
                                                    }
                                                    echo '>'.$country->name.'</option>\n';
                                                }
                                            ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="order_table_label">
                                        <label for="phone">Telefonnummer</label>
                                    </td>
                                    <td>
                                        <input type="text" name="phone" id="phone" class="order_field" value="<?php echo $givencustomer->phonenumber; ?>" />
                                    </td>
                                </tr>
                                <tr>
                                    <td class="order_table_label">
                                        <label for="email">Emailadresse*</label>
                                    </td>
                                    <td>
                                        <input type="text" name="email" id="email" class="order_field" value="<?php echo $givencustomer->email; ?>" />
                                    </td>
                                </tr>
                                <tr>
                                    <td class="order_table_label">
                                        <label for="password">Passwort*</label>
                                    </td>
                                    <td>
                                        <input type="password" name="password" id="password" class="order_field" value="" />
                                    </td>
                                </tr>
                                <tr>
                                    <td class="order_table_label">
                                        <label for="password_repeat">Passwort wiederholen*</label>
                                    </td>
                                    <td>
                                        <input type="password" name="password_repeat" id="password_repeat" class="order_field" value="" />
                                    </td>
                                </tr>
                                <tr>
                                    <td class="order_table_label">
                                        <input type="checkbox" value="1" id="Datenbankzugriff" name="datenbankzugriff"><label for="Datenbankzugriff">Datenbankzugriff?</label>
                                        <br />
                                        <span style="font-style: italic; font-size: 0.8em;">(aktuell: <?php echo date('d.M.Y', strtotime($givencustomer->actual_order_expiration_date)); ?>)</span>
                                    </td>
                                    <td>
                                        <select name="dbaccess">
                                            <option value="0">Laufzeit wählen</option>
                                            <option value="1">1 Monat</option>
                                            <option value="2">2 Monate</option>
                                            <option value="3">3 Monate</option>
                                            <option value="4">4 Monate</option>
                                            <option value="5">5 Monate</option>
                                            <option value="6">6 Monate</option>
                                            <option value="7">7 Monate</option>
                                            <option value="8">8 Monate</option>
                                            <option value="9">9 Monate</option>
                                            <option value="10">10 Monate</option>
                                            <option value="11">11 Monate</option>
                                            <option value="12">12 Monate</option>
                                        </select>
                                        <span style="font-style: italic; font-size: 0.8em;">Hier kannst du einem Kunden Zugriff zur Datenbank geben. Wenn der Kunde bereits Zugriff hat, wird die gewählte Laufzeit oben aufaddiert.</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td class="order_table_label">
                                        &nbsp;
                                    </td>
                                    <td>   
                                        <input type="submit" id="send_new_user" class="btn btn-primary" value="Änderungen speichern" />
                                    </td>
                                </tr>
                            </table>
                        </div>         
                    </div>
                </form>  
            </div>    
            <br>
            <br> 
            <div class="bodyspacer"></div> 
        </div>