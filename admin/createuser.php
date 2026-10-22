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
                <?php $createdUser = null; ?>
                <?php if(isset($ACTION[3])) { ?>
                    <?php $createdUser = loadUser($ACTION[3]); ?>
                <?php } ?>
                <?php if(isset($ACTION[2])) { ?>
                    <?php if($ACTION[2] == 1) { ?>
                        <div class="alert alert-danger" style="text-align: center;">
                             Fehlerhafte Felder. Der Teilnehmer konnte nicht gespeichert werden.
                        </div>
                    <?php } else if($ACTION[2] == 2) { ?>
                        <div class="alert alert-danger" style="text-align: center;">
                             Diese Emailadresse ist bereits im System enthalten.
                        </div>
                    <?php } else if($ACTION[2] == 3) { ?>
                        <div class="alert alert-danger" style="text-align: center;">
                             Die eingegebenen Passwörter stimmen nicht überein oder die Emailadresse ist nicht gültig.
                        </div>
                    <?php } else if($ACTION[2] == 0) { ?>
                        <div class="alert alert-success" style="text-align: center;">
                             Teilnehmer erfolgreich gespeichert! Kundenummer: <?php echo $createdUser->customer_id; ?>
                        </div>
                    <?php } ?>
                <?php } ?>
                <form id="create_user_form" name="create_user_form" method="POST" action="<?php echo URL_ROOT; ?>admin/createuser/saveuser">   
                    <div class="row margintoprow">        
                        <div class="col s12 m12">
                            <table class="order_table">
                                <tr>
                                    <td class="order_table_label">
                                        <label for="firstname">Vorname*</label>
                                    </td>
                                    <td>
                                        <input type="text" name="firstname" id="firstname" class="order_field" value="" />
                                    </td>
                                </tr>
                                <tr>
                                    <td class="order_table_label">
                                        <label for="lastname">Nachname*</label>
                                    </td>
                                    <td>
                                        <input type="text" name="lastname" id="lastname" class="order_field" value="" />
                                    </td>
                                </tr>
                                <tr>
                                    <td class="order_table_label">
                                        <label for="street">Straße / HausNr.*</label>
                                    </td>
                                    <td>
                                        <input type="text" name="street" id="street" class="order_field" value="" />
                                    </td>
                                </tr>
                                <tr>
                                    <td class="order_table_label">
                                        <label for="plzcity">PLZ / Ort*</label>
                                    </td>
                                    <td>
                                        <input type="text" name="plzcity" id="plzcity" style="width: 30%; margin-right: 3%;" value="" />
                                        <input type="text" name="city" id="city" style="width: 65%" value="" />
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
                                                    echo '<option value="'.$country->id.'">'.$country->name.'</option>\n';
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
                                        <input type="text" name="phone" id="phone" class="order_field" value="" />
                                    </td>
                                </tr>
                                <tr>
                                    <td class="order_table_label">
                                        <label for="email">Emailadresse*</label>
                                    </td>
                                    <td>
                                        <input type="text" name="email" id="email" class="order_field" value="" />
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
                                    <td colspan="2">
                                        <input type="checkbox" value="1" id="newsletter_approve" name="newsletter_approve" checked="checked" class="filled-in">
                                        <label for="newsletter_approve">Newsletter</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="order_table_label">
                                        &nbsp;
                                    </td>
                                    <td>   
                                        <input type="submit" id="send_new_user" class="btn btn-primary" value="Speichern" />
                                    </td>
                                </tr>
                            </table>
                            <b>* Sternchen sind Pflichtfelder</b>
                            <br /><br />
                            <table class="order_table">
                                <tr>
                                    <td colspan="2">
                                        <input type="checkbox" value="1" id="withorder" name="withorder" class="filled-in">
                                        <label for="withorder">Mit Bestellung</label>
                                    </td>
                                </tr>
                                <?php
                                    $articles = getAllArticles();
                                    foreach ( $articles AS $article ) {
                                ?>
                                <tr>
                                    <td style="width: 400px; padding: 0 0 10px 0;">
                                        <label for="product_<?php echo $article->id; ?>"><?php echo $article->description; ?></label>
                                    </td>
                                    <td style="padding: 0 0 10px 0;">
                                        Menge: <input type="text" name="product_<?php echo $article->id; ?>" id="product_<?php echo $article->id; ?>" style="width: 50px;" value="" />
                                    </td>
                                </tr>
                                <?php } ?>
                            </table>      
                        </div>         
                    </div>
                </form>  
            </div>    
            <br>
            <br> 
            <div class="bodyspacer"></div> 
        </div>