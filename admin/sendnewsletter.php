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
                <div class="row margintoprow">        
                    <div class="col s12 m12">
                        <table>
                        <?php
                            $counter = 0;
                            if ($handle = opendir('./assets/newsletters/')) {
                                while (false !== ($entry = readdir($handle))) {
                                    if(startsWith($entry, 'newsletter')) {
                                    ?>
                                        <?php if($counter == 0) { ?><tr><?php } ?>
                                        <td><a href="<?php URL_ROOT; ?>sendnewsletter/?given=<?php echo $entry; ?>"><?php echo $entry; ?></a></td>
                                        <?php if($counter == 3) { ?></tr><?php $counter = -1; } ?>
                                        <?php $counter++; ?>
                                    <?php
                                    }
                                }
                                closedir($handle);
                            }
                        ?>
                        </table>
                    </div>
                </div>
                <div class="row margintoprow">        
                    <div class="col s12 m12">
                         <form id="create_user_form" name="create_user_form" method="POST" action="<?php echo URL_ROOT; ?>admin/sendnewsletter/sendnow">
                             <table class="order_table">
                                <tr>
                                    <td class="order_table_label" style="width: 20%;">
                                        <label for="filename">Dateiname*</label>
                                    </td>
                                    <td colspan="3">
                                        <input type="text" name="filename" id="filename" class="order_field" value="<?php if(isset($_GET['given'])) { echo $_GET['given']; } ?>" />
                                    </td>
                                </tr>
                                <tr>
                                    <td class="order_table_label">
                                        <label for="newslettertext">Newsletter</label>
                                    </td>
                                    <td colspan="3">
                                         <textarea class="newsletterarea" name="newslettertext" id="newslettertext">
                                             <?php
                                                 if(isset($_GET['given'])) {
                                                     $myfile = fopen("./assets/newsletters/".$_GET['given'], "r") or die("Unable to open file!");
                                                    echo fread($myfile,filesize("./assets/newsletters/".$_GET['given']));
                                                    fclose($myfile);
                                                 }
                                             ?>
                                         </textarea> 
                                    </td>
                                </tr>
                                <tr><td colspan="4"><br /><br /></td></tr>
                                <tr>
                                    <td>
                                        <input type="radio" value="1" id="savenl" name="newsletterfunc" checked="checked"><label for="savenl">Newsletter speichern</label>
                                    </td>
                                    <td>
                                        <input type="radio" value="2" id="delenl" name="newsletterfunc"><label for="delenl">Newsletter löschen</label>
                                    </td>
                                    <td>
                                        <input type="radio" value="3" id="testnl" name="newsletterfunc"><label for="testnl">Testversand</label>
                                    </td>
                                    <td>
                                        <input type="radio" value="4" id="livenl" name="newsletterfunc"><label for="livenl">Live-Versand</label>
                                    </td>
                                </tr>
                                <tr><td colspan="3"><br /><br /></td></tr>
                                <tr>
                                    <td class="order_table_label">
                                        &nbsp;
                                    </td>
                                    <td colspan="3">   
                                        <input type="submit" id="newsletter_function" class="btn btn-primary right" value="Versenden / Speichern" />
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