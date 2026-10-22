<?php
    function parseFilterValue( $value ) {
        $value = trim( $value );
        
        if ( $value === "" ) {
            return ( "" );
        }
        return ( intval( $value ) );
    }
    
    $filter_cookie = null;
    $user_id = 0;
    $filtername = "intol";
    if(isset($_SESSION['token'])) {
        $user_id = JWT::decode($_SESSION['token'], SECRET_JSON_API_KEY)->id;
    }
    $userfilter = loadFilterByNameAndUserId($user_id, $filtername);
    if($user_id > 0 && (!isset($userfilter) || $userfilter->id == 0)) {
        $userfilter = loadFilter(createFilter($user_id, $filtername, "li=|fi=|si=|hi=|oi=|gz=|sa=|ap=|fo="));
    }
    
    if(isset($_POST['reset']) && $_POST['reset'] == 'true') {
        $userfilter = loadFilter(updateFilter($user_id, $filtername, "li=|fi=|si=|hi=|oi=|gz=|sa=|ap=|fo="));
    }
    
    
    // alten Cookie in DB uebertragen
    if ( array_key_exists( "intol", $_COOKIE ) ) {
        $userfilter = loadFilter(updateFilter($user_id, $filtername,  $_COOKIE["intol"]));
        setcookie('intol', '', -1, "/");
    }
    
    $filter_cookie_ = explode( "|", $userfilter->filter );
    $filter_cookie = array();
    for ( $i = 0; $i < count($filter_cookie_); $i++ )
    {
        $tmp = explode( "=", $filter_cookie_[$i] );
        $filter_cookie[$tmp[0]] = $tmp[1];
    }
    
    $li_filter = "";
    if ( array_key_exists( "li", $_POST ) )
        $li_filter = parseFilterValue( $_POST["li"] );
    else if ( $filter_cookie != null  )
        $li_filter = parseFilterValue( $filter_cookie["li"] );
    
    $fi_filter = "";
    if ( array_key_exists( "fi", $_POST ) )
        $fi_filter = parseFilterValue( $_POST["fi"] );
    else if ( $filter_cookie != null  )
        $fi_filter = parseFilterValue( $filter_cookie["fi"] );
    
    $si_filter = "";
    if ( array_key_exists( "si", $_POST ) )
        $si_filter = parseFilterValue( $_POST["si"] );
    else if ( $filter_cookie != null  )
        $si_filter = parseFilterValue( $filter_cookie["si"] );
    
    $hi_filter = "";
    if ( array_key_exists( "hi", $_POST ) )
        $hi_filter = parseFilterValue( $_POST["hi"] );
    else if ( $filter_cookie != null  )
        $hi_filter = parseFilterValue( $filter_cookie["hi"] );
    
    $oi_filter = "";
    if ( array_key_exists( "oi", $_POST ) )
        $oi_filter = parseFilterValue( $_POST["oi"] );
    else if ( $filter_cookie != null  )
        $oi_filter = parseFilterValue( $filter_cookie["oi"] );
    
    $gz_filter = "";
    if ( array_key_exists( "gz", $_POST ) )
        $gz_filter = parseFilterValue( $_POST["gz"] );
    else if ( $filter_cookie != null  )
        $gz_filter = parseFilterValue( $filter_cookie["gz"] );
    
    $sa_filter = "";
    if ( array_key_exists( "sa", $_POST ) )
        $sa_filter = parseFilterValue( $_POST["sa"] );
    else if ( $filter_cookie != null  )
        $sa_filter = parseFilterValue( $filter_cookie["sa"] );
    
    $ap_filter = "";
    if ( array_key_exists( "ap", $_POST ) )
        $ap_filter = parseFilterValue( $_POST["ap"] );
    else if ( $filter_cookie != null  )
        $ap_filter = parseFilterValue( $filter_cookie["ap"] );
    
    $s_filter = "";
    if ( array_key_exists( "s", $_POST ) )
        $s_filter = parseFilterValue( $_POST["s"] );
    else if ( $filter_cookie != null  )
        $s_filter = parseFilterValue( $filter_cookie["s"] );
    
    $ox_filter = "";
    if ( array_key_exists( "ox", $_POST ) )
        $ox_filter = parseFilterValue( $_POST["ox"] );
    else if ( $filter_cookie != null  )
        $ox_filter = parseFilterValue( $filter_cookie["ox"] );
    
    $fo_filter = "";
    if ( array_key_exists( "fo", $_POST ) )
        $fo_filter = parseFilterValue( $_POST["fo"] );
    else if ( $filter_cookie != null  )
        $fo_filter = parseFilterValue( $filter_cookie["fo"] );
    
    $userfilter = loadFilter(updateFilter($user_id, $filtername, "li=" . $li_filter . "|fi=" . $fi_filter . "|si=" . $si_filter . "|hi=" . $hi_filter . "|oi=" . $oi_filter . "|gz=" . $gz_filter . "|sa=" . $sa_filter . "|ap=" . $ap_filter . "|s=" . $s_filter . "|ox=" . $ox_filter . "|fo=" . $fo_filter));
?>


        <div class="section no-pad-bot" id="index-banner">    
            <div class="container">      
                <br />
                <br />      
                <div class="right">Letzte Aktualisierung: <b><?= date( "j.n.Y", filemtime( __FILE__ ) ) ?></b></div>
                <h1 class="header center orange-text">Dorispaas.de &ndash; Lebensmittel-Datenbank</h1>      
                <div class="row center mobileHidden">        
                    <h5 class="header col s12 light">verträgliche und unverträgliche Lebensmittel suchen und finden bei mehreren gleichzeitig bestehenden Intoleranzen</h5>      
                </div>  
            </div>  
        </div> 
        
        <div class="container bodycontainer" style="position: relative;">    
            <div class="row">        
                <div class="col s12 m12">
                    <div class="info">
                        <a href="lebensmittel-datenbank-anleitung" target="_blank"><img src="<?php echo IMG_PATH; ?>anleitung-pfeil.png" alt="" border="0" hspace="0" vspace="0" style="float: left; margin-left: 0px; margin-right: 5px; padding-bottom: 0px;" /></a>
                        Bitte lesen Sie unbedingt zuerst die <a href="lebensmittel-datenbank-anleitung" target="_blank">Anleitung zur Benutzung der Datenbank</a>,
                        um alle Funktionen optimal nutzen zu können.
                    </div>
                </div>
            </div>
            <div class="row">        
                <div class="col s12 m12">
                    <div class="info">
                        <a href="hilfe" target="_blank"><img src="<?php echo IMG_PATH; ?>hilfe-datenbank.png" alt="" border="0" hspace="0" vspace="0" style="float: left; margin-left: 0px; margin-right: 5px; padding-bottom: 0px;" /></a>
                        Bei Problemen bei der Nutzung steht Ihnen die <a href="hilfe" target="_blank">Hilfe-Datei</a> zur Verfügung.
                    </div>
                </div>
            </div>
            <div class="lebensmittel_head_wrapper_placeholder" id="lebensmittel_head_wrapper_placeholder"></div>
            <form id="reset" method="POST" action="<?= URL_ROOT ?>lebensmittel-datenbank">
                <input type="hidden" name="reset" value="true" />
                <input type="hidden" name="li" value="" />
                <input type="hidden" name="fi" value="" />
                <input type="hidden" name="si" value="" />
                <input type="hidden" name="hi" value="" />
                <input type="hidden" name="oi" value="" />
                <input type="hidden" name="gz" value="" />
                <input type="hidden" name="sa" value="" />
                <input type="hidden" name="ap" value="" />
                <input type="hidden" name="s" value="" />
                <input type="hidden" name="ox" value="" />
                <input type="hidden" name="fo" value="" />
                <input type="hidden" name="lebensmittel" value="ALL" />
                <input type="hidden" name="kategories" value="" />
            </form>
            <form name="filter" method="POST" enctype="multipart/form-data" action="<?= URL_ROOT ?>lebensmittel-datenbank">
            <div class="row" id="lmdb_table_header">        
                <div class="col s12 m12 fixthisheader">
                    <?php
                        $numEntries = countLexikonNmuEntries() * 1;
                    ?>
                    <span style="display: inline-block;">Aktuelle Anzahl der Begriffe: <span class="numentr" style="font-weight: bold;"><?= $numEntries ?></span></span><br />
                    <input type="submit" value="Filter anwenden" class="filter_control" />
                    <input type="button" value="Filter zurücksetzen / nach oben" onclick="$('form#reset').submit();" class="filter_control" />
                    <table class="lmdb" cellpadding="0" cellspacing="0">
                        <tr>
                            <th>
                                <div class="rotate">
                                    <div class="innerrotate"><div>Lebens-<br />mittel</div></div>
                                    <div class="mobile-view">LM</div>
                                </div>
                            </th>
                            <th>
                                <div class="rotate">
                                    <div class="innerrotate"><div>Kategorie</div></div>
                                    <div class="mobile-view">Kat</div>
                                </div>
                            </th>
                            <th>
                                <div class="always rotate">
                                    <div class="innerrotate"><div>Laktose-Intoleranz</div></div>
                                    <div class="mobile-view">LI</div>
                                </div>
                            </th>
                            <th>
                                <div class="always rotate">
                                    <div class="innerrotate"><div>Fruktose-Intoleranz</div></div>
                                    <div class="mobile-view">FI</div>
                                </div>
                            </th>
                            <th>
                                <div class="always rotate">
                                    <div class="innerrotate"><div>Sorbit-Intoleranz</div></div>
                                    <div class="mobile-view">SoI</div>
                                </div>
                            </th>
                            <th>
                                <div class="always rotate">
                                    <div class="innerrotate"><div>Histamin-Intoleranz</div></div>
                                    <div class="mobile-view">HI</div>
                                </div>
                            </th>
                            <th>
                                <div class="always rotate">
                                    <div class="innerrotate"><div>Oligosaccharid-Intoleranz</div></div>
                                    <div class="mobile-view">OI</div>
                                </div>
                            </th>
                            <th>
                                <div class="always rotate">
                                    <div class="innerrotate"><div>Gluten-Sens./Zöliakie</div></div>
                                    <div class="mobile-view">GZ</div>
                                </div>
                            </th>
                            <th>
                                <div class="always rotate">
                                    <div class="innerrotate"><div>Salicylat-Intoleranz</div></div>
                                    <div class="mobile-view">SaI</div>
                                </div>
                            </th>
                            <th>
                                <div class="always rotate">
                                    <div class="innerrotate"><div>allergenes Potenzial</div></div>
                                    <div class="mobile-view">aP</div>
                                </div>
                            </th>
                            <th>
                                <div class="always rotate">
                                    <div class="innerrotate"><div>Schwefel</div></div>
                                    <div class="mobile-view">S</div>
                                </div>
                            </th>
                            <th>
                                <div class="always rotate">
                                    <div class="innerrotate"><div>Oxalate</div></div>
                                    <div class="mobile-view">OX</div>
                                </div>
                            </th>
                            <th>
                                <div class="always rotate">
                                    <div class="innerrotate"><div>FODMAP-Gehalt</div></div>
                                    <div class="mobile-view">FOD</div>
                                </div>
                            </th>
                            <th>
                                <div class="rotate">
                                    <div class="innerrotate"><div>Info</div></div>
                                </div>
                                <br />
                                <span class="descript" style="font-size:1.0em; font-weight:lighter">(zum Lesen des kompletten Inhalts führen Sie die Maus über den Text) </span>
                            </th>
                        </tr>
                    <?php
                        $lebensmittel = null;
                        $lmfilter = loadFilterByNameAndUserId($user_id, "lebensmittel");
                        if($user_id > 0 && (!isset($lmfilter) || $lmfilter->id == 0)) {
                            $lmfilter = loadFilter(createFilter($user_id, "lebensmittel", "ALL"));
                        }
                        
                        if ( array_key_exists( "lebensmittel", $_POST ) ) {
                            $lebensmittel = $_POST["lebensmittel"];
                            $lmfilter = loadFilter(updateFilter($user_id, "lebensmittel", $lebensmittel));
                        } else {
                            $lebensmittel = $lmfilter->filter;
                        }
                        if($lebensmittel == 'ALL') { $lebensmittel = null; }
                        
                        
                        
                        $kategories = array();
                        $kat_filter_value = "";
                        
                        $kfvfilter = loadFilterByNameAndUserId($user_id, "kategories");
                        if($user_id > 0 && (!isset($kfvfilter) || $kfvfilter->id == 0)) {
                            $kfvfilter = loadFilter(createFilter($user_id, "kategories", ""));
                        }
                        
                        if ( array_key_exists( "kategories", $_POST ) ) {
                            $kat_filter_value = $_POST["kategories"];
                            $kfvfilter = loadFilter(updateFilter($user_id, "kategories", $kat_filter_value));
                        } else {
                            $kat_filter_value = $kfvfilter->filter;
                        }
                        
                        
                        if ( $kat_filter_value != "" ) {
                            foreach ( explode( ";", $kat_filter_value ) as $kat ) {
                                $kategories[$kat] = TRUE;
                                $kat_filter_value .= ";" . $kat;
                            }
                            
                            while ( substr( $kat_filter_value, 0, 1 ) == ";" ) {
                                $kat_filter_value = substr( $kat_filter_value, 1 );
                            }
                        }
                    ?>
                        <tr>
                            <td>
                                <div class="innercell selection">
                                    <select name="lebensmittel">
                                        <option value="ALL"<?= ( $lebensmittel == null ) ? " selected=\"selected\"" : "" ?>>(Alle)</option>
                    <?php
                        $result = getResultFromQuery( "SELECT * FROM lexikon_nmu ORDER BY lebensmittel ASC" );
                        
                        foreach ( $result AS $q ) { ?>
                            <option value="<?= $q->lebensmittel ?>"<?= ( $lebensmittel == $q->lebensmittel ) ? " selected=\"selected\"" : "" ?>><?= $q->lebensmittel ?></option>
                    <?php } ?>
                        </select>
                                </div>
                            </td>
                            <td style="overflow: visible;">
                                <div class="innercell selection">
                                    <div class="multi_filter_header" id="category_filter_display" onclick="showMultiFilter('category_filter_display', 'category_filter_wrapper');"><?= ( $kat_filter_value == "" ) ? "(Alle)" : $kat_filter_value ?></div>
                                    <div id="category_filter_wrapper" class="multi_filter_wrapper" style="display: none;" onmouseover="onMouseOverMultiFilter( this );">
                                        <ul id="category_filter" class="multi_filter">
                                            <li<?= ( count( $kategories ) == 0 ) ? " class=\"active\"" : "" ?> id="category_filer_all" onclick="selectMultiFilterEntry( this );">(Alle)</li>
                    <?php
                        //$result = mysql_query( "SELECT DISTINCT kategorie FROM lexikon_nmu ORDER BY kategorie ASC", $mysql );
                        $result = getResultFromQuery( "SELECT * FROM lexikon_nmu GROUP BY kategorie ORDER BY kategorie ASC" );
                        
                        foreach ( $result AS $kat ) { ?>
                            <li<?= array_key_exists( $kat->kategorie, $kategories ) ? " class=\"active\"" : "" ?> onclick="selectMultiFilterEntry( this );"><?= $kat->kategorie ?></li>
                    <?php } ?>
                        </ul>
                                    </div>
                                    <input type="hidden" name="kategories" id="filter_value_kategories" value="<?= $kat_filter_value ?>" />
                                </div>
                            </td>
                            <td>
                                <div class="innercell selection">
                                    <select name="li">
                                        <option value=""<?= ( $li_filter === "" ) ? " selected=\"selected\"" : "" ?>>(alle)</option>
                                        <option value="4"<?= ( $li_filter === 4 ) ? " selected=\"selected\"" : "" ?>>grün</option>
                                        <option value="6"<?= ( $li_filter === 6 ) ? " selected=\"selected\"" : "" ?>>grün/gelb</option>
                                        <option value="2"<?= ( $li_filter === 2 ) ? " selected=\"selected\"" : "" ?>>gelb</option>
                                        <option value="3"<?= ( $li_filter === 3 ) ? " selected=\"selected\"" : "" ?>>gelb/rot</option>
                                        <option value="1"<?= ( $li_filter === 1 ) ? " selected=\"selected\"" : "" ?>>rot</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="innercell selection">
                                    <select name="fi">
                                        <option value=""<?= ( $fi_filter === "" ) ? " selected=\"selected\"" : "" ?>>(alle)</option>
                                        <option value="4"<?= ( $fi_filter === 4 ) ? " selected=\"selected\"" : "" ?>>grün</option>
                                        <option value="6"<?= ( $fi_filter === 6 ) ? " selected=\"selected\"" : "" ?>>grün/gelb</option>
                                        <option value="2"<?= ( $fi_filter === 2 ) ? " selected=\"selected\"" : "" ?>>gelb</option>
                                        <option value="3"<?= ( $fi_filter === 3 ) ? " selected=\"selected\"" : "" ?>>gelb/rot</option>
                                        <option value="1"<?= ( $fi_filter === 1 ) ? " selected=\"selected\"" : "" ?>>rot</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="innercell selection">
                                    <select name="si">
                                        <option value=""<?= ( $si_filter === "" ) ? " selected=\"selected\"" : "" ?>>(alle)</option>
                                        <option value="4"<?= ( $si_filter === 4 ) ? " selected=\"selected\"" : "" ?>>grün</option>
                                        <option value="6"<?= ( $si_filter === 6 ) ? " selected=\"selected\"" : "" ?>>grün/gelb</option>
                                        <option value="2"<?= ( $si_filter === 2 ) ? " selected=\"selected\"" : "" ?>>gelb</option>
                                        <option value="3"<?= ( $si_filter === 3 ) ? " selected=\"selected\"" : "" ?>>gelb/rot</option>
                                        <option value="1"<?= ( $si_filter === 1 ) ? " selected=\"selected\"" : "" ?>>rot</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="innercell selection">
                                    <select name="hi">
                                        <option value=""<?= ( $hi_filter === "" ) ? " selected=\"selected\"" : "" ?>>(alle)</option>
                                        <option value="4"<?= ( $hi_filter === 4 ) ? " selected=\"selected\"" : "" ?>>grün</option>
                                        <option value="6"<?= ( $hi_filter === 6 ) ? " selected=\"selected\"" : "" ?>>grün/gelb</option>
                                        <option value="2"<?= ( $hi_filter === 2 ) ? " selected=\"selected\"" : "" ?>>gelb</option>
                                        <option value="3"<?= ( $hi_filter === 3 ) ? " selected=\"selected\"" : "" ?>>gelb/rot</option>
                                        <option value="1"<?= ( $hi_filter === 1 ) ? " selected=\"selected\"" : "" ?>>rot</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="innercell selection">
                                    <select name="oi">
                                        <option value=""<?= ( $oi_filter === "" ) ? " selected=\"selected\"" : "" ?>>(alle)</option>
                                        <option value="4"<?= ( $oi_filter === 4 ) ? " selected=\"selected\"" : "" ?>>grün</option>
                                        <option value="6"<?= ( $oi_filter === 6 ) ? " selected=\"selected\"" : "" ?>>grün/gelb</option>
                                        <option value="2"<?= ( $oi_filter === 2 ) ? " selected=\"selected\"" : "" ?>>gelb</option>
                                        <option value="3"<?= ( $oi_filter === 3 ) ? " selected=\"selected\"" : "" ?>>gelb/rot</option>
                                        <option value="1"<?= ( $oi_filter === 1 ) ? " selected=\"selected\"" : "" ?>>rot</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="innercell selection">
                                    <select name="gz">
                                        <option value=""<?= ( $gz_filter === "" ) ? " selected=\"selected\"" : "" ?>>(alle)</option>
                                        <option value="4"<?= ( $gz_filter === 4 ) ? " selected=\"selected\"" : "" ?>>grün</option>
                                        <option value="6"<?= ( $gz_filter === 6 ) ? " selected=\"selected\"" : "" ?>>grün/gelb</option>
                                        <option value="2"<?= ( $gz_filter === 2 ) ? " selected=\"selected\"" : "" ?>>gelb</option>
                                        <option value="3"<?= ( $gz_filter === 3 ) ? " selected=\"selected\"" : "" ?>>gelb/rot</option>
                                        <option value="1"<?= ( $gz_filter === 1 ) ? " selected=\"selected\"" : "" ?>>rot</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="innercell selection">
                                    <select name="sa">
                                        <option value=""<?= ( $sa_filter === "" ) ? " selected=\"selected\"" : "" ?>>(alle)</option>
                                        <option value="4"<?= ( $sa_filter === 4 ) ? " selected=\"selected\"" : "" ?>>grün</option>
                                        <option value="6"<?= ( $sa_filter === 6 ) ? " selected=\"selected\"" : "" ?>>grün/gelb</option>
                                        <option value="2"<?= ( $sa_filter === 2 ) ? " selected=\"selected\"" : "" ?>>gelb</option>
                                        <option value="3"<?= ( $sa_filter === 3 ) ? " selected=\"selected\"" : "" ?>>gelb/rot</option>
                                        <option value="1"<?= ( $sa_filter === 1 ) ? " selected=\"selected\"" : "" ?>>rot</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="innercell selection">
                                    <select name="ap">
                                        <option value=""<?= ( $ap_filter === "" ) ? " selected=\"selected\"" : "" ?>>(alle)</option>
                                        <option value="4"<?= ( $ap_filter === 4 ) ? " selected=\"selected\"" : "" ?>>grün</option>
                                        <option value="6"<?= ( $ap_filter === 6 ) ? " selected=\"selected\"" : "" ?>>grün/gelb</option>
                                        <option value="2"<?= ( $ap_filter === 2 ) ? " selected=\"selected\"" : "" ?>>gelb</option>
                                        <option value="3"<?= ( $ap_filter === 3 ) ? " selected=\"selected\"" : "" ?>>gelb/rot</option>
                                        <option value="1"<?= ( $ap_filter === 1 ) ? " selected=\"selected\"" : "" ?>>rot</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="innercell selection">
                                    <select name="s">
                                        <option value=""<?= ( $s_filter === "" ) ? " selected=\"selected\"" : "" ?>>(alle)</option>
                                        <option value="4"<?= ( $s_filter === 4 ) ? " selected=\"selected\"" : "" ?>>grün</option>
                                        <option value="6"<?= ( $s_filter === 6 ) ? " selected=\"selected\"" : "" ?>>grün/gelb</option>
                                        <option value="2"<?= ( $s_filter === 2 ) ? " selected=\"selected\"" : "" ?>>gelb</option>
                                        <option value="3"<?= ( $s_filter === 3 ) ? " selected=\"selected\"" : "" ?>>gelb/rot</option>
                                        <option value="1"<?= ( $s_filter === 1 ) ? " selected=\"selected\"" : "" ?>>rot</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="innercell selection">
                                    <select name="ox">
                                        <option value=""<?= ( $s_filter === "" ) ? " selected=\"selected\"" : "" ?>>(alle)</option>
                                        <option value="4"<?= ( $s_filter === 4 ) ? " selected=\"selected\"" : "" ?>>grün</option>
                                        <option value="6"<?= ( $s_filter === 6 ) ? " selected=\"selected\"" : "" ?>>grün/gelb</option>
                                        <option value="2"<?= ( $s_filter === 2 ) ? " selected=\"selected\"" : "" ?>>gelb</option>
                                        <option value="3"<?= ( $s_filter === 3 ) ? " selected=\"selected\"" : "" ?>>gelb/rot</option>
                                        <option value="1"<?= ( $s_filter === 1 ) ? " selected=\"selected\"" : "" ?>>rot</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="innercell selection">
                                    <select name="fo">
                                        <option value=""<?= ( $fo_filter === "" ) ? " selected=\"selected\"" : "" ?>>(alle)</option>
                                        <option value="4"<?= ( $fo_filter === 4 ) ? " selected=\"selected\"" : "" ?>>niedrig</option>
                                        <option value="6"<?= ( $fo_filter === 6 ) ? " selected=\"selected\"" : "" ?>>gelb/niedrig</option>
                                        <option value="2"<?= ( $fo_filter === 2 ) ? " selected=\"selected\"" : "" ?>>gelb</option>
                                        <option value="3"<?= ( $fo_filter === 3 ) ? " selected=\"selected\"" : "" ?>>gelb/hoch</option>
                                        <option value="1"<?= ( $fo_filter === 1 ) ? " selected=\"selected\"" : "" ?>>hoch</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="innercell selection">&nbsp;</div>
                            </td>
                        </tr>      
                
                    <?php
                        $any_light_filter_set = ( $li_filter !== "" ) || ( $fi_filter !== "" ) || ( $si_filter !== "" ) || ( $hi_filter !== "" ) || ( $oi_filter !== "" ) || ( $gz_filter !== "" ) || ( $sa_filter !== "" ) || ( $ap_filter !== "" ) || ( $s_filter !== "" ) || ( $ox_filter !== "" ) || ( $fo_filter !== "" );
                        
                        $filter = "";
                        
                        if ( $lebensmittel != null )
                            $filter .= " && ( lebensmittel = '" .  $_POST["lebensmittel"] . "' )";
                        
                        if ( count( $kategories ) > 0 ) {
                            $kat_filter = "";
                            
                            foreach ( $kategories as $kat => $dummy ) {
                                $kat_filter .= " || ( kategorie = '" .  $kat . "' )";
                            }
                            
                            $filter .= " && ( " . substr( $kat_filter, 4 ) . " )";
                        }
                        
                        if ( $li_filter !== "" )
                            $filter .= " && ( ( li & " . $li_filter . " ) != 0 )";
                        
                        if ( $fi_filter !== "" )
                            $filter .= " && ( ( fi & " . $fi_filter . " ) != 0 )";
                        
                        if ( $si_filter !== "" )
                            $filter .= " && ( ( si & " . $si_filter . " ) != 0 )";
                        
                        if ( $hi_filter !== "" )
                            $filter .= " && ( ( hi & " . $hi_filter . " ) != 0 )";
                        
                        if ( $oi_filter !== "" )
                            $filter .= " && ( ( oi & " . $oi_filter . " ) != 0 )";
                        
                        if ( $gz_filter !== "" )
                            $filter .= " && ( ( gz & " . $gz_filter . " ) != 0 )";
                        
                        if ( $sa_filter === 0 ) {
                            $filter .= " && ( sa = 0 )";
                        } else if ( $sa_filter !== "" ) {
                            if ( ( ( $sa_filter * 1 ) & 32 ) == 32 ) // und leer?
                                $filter .= " && ( ( ( sa & " . $sa_filter . " ) != 0 ) || ( sa = 0 ) )";
                            else
                                $filter .= " && ( ( sa & " . $sa_filter . " ) != 0 )";
                        }
                        
                        if ( $ap_filter === 0 ) {
                            $filter .= " && ( ap = 0 )";
                        } else if ( $ap_filter !== "" ) {
                            if ( ( ( $ap_filter * 1 ) & 32 ) == 32 ) // und leer?
                                $filter .= " && ( ( ( ap & " . $ap_filter . " ) != 0 ) || ( ap = 0 ) )";
                            else
                                $filter .= " && ( ( ap & " . $ap_filter . " ) != 0 )";
                        }
                        
                        if ( $s_filter === 0 ) {
                            $filter .= " && ( s = 0 )";
                        } else if ( $s_filter !== "" ) {
                            if ( ( ( $s_filter * 1 ) & 32 ) == 32 ) // und leer?
                                $filter .= " && ( ( ( s & " . $s_filter . " ) != 0 ) || ( s = 0 ) )";
                            else
                                $filter .= " && ( ( s & " . $s_filter . " ) != 0 )";
                        }
                        
                        if ( $ox_filter === 0 ) {
                            $filter .= " && ( ox = 0 )";
                        } else if ( $ox_filter !== "" ) {
                            if ( ( ( $ox_filter * 1 ) & 32 ) == 32 ) // und leer?
                                $filter .= " && ( ( ( ox & " . $ox_filter . " ) != 0 ) || ( ox = 0 ) )";
                            else
                                $filter .= " && ( ( ox & " . $ox_filter . " ) != 0 )";
                        }
                        
                        if ( $fo_filter === 0 ) {
                            $filter .= " && ( fo = 0 )";
                        } else if ( $fo_filter !== "" ) {
                            $filter .= " && ( ( fo & " . $fo_filter . " ) != 0 )";
                        }
                        
                        if ( strlen( $filter ) > 0 )
                            $filter = " WHERE ( " . substr( $filter, 4 ) . " )";
                        
                        //$sql = "SELECT lebensmittel, kategorie, beschreibung, li, fi, si, hi, oi, gz, sa, ap, fo FROM lexikon_nmu" . $filter . " ORDER BY lebensmittel ASC";
                        $sql = "SELECT * FROM lexikon_nmu" . $filter . " ORDER BY lebensmittel ASC";
                        $result = getResultFromQuery( $sql );
                        
                        $firstCharacter = 'ß';
                        
                        ?>
                        <tr><td colspan="14">
                        <table border="0" cellpadding="2" cellspacing="0">
                            <tr>
                        <?php
                        foreach ( $result AS $entry ) {
                            $actualFirstChar = strtolower(mb_substr($entry->lebensmittel, 0, 1));
                            if($actualFirstChar == 'ä' || $actualFirstChar == 'Ä') {
                                $actualFirstChar = 'a';
                            } else if($actualFirstChar == 'ö' || $actualFirstChar == 'Ö') {
                                $actualFirstChar = 'o';
                            } else if($actualFirstChar == 'ü' || $actualFirstChar == 'Ü') {
                                $actualFirstChar = 'u';
                            }
                            if($actualFirstChar != $firstCharacter) {
                            ?>
                            
                                    <td class="lmdbinner"><a href="#<?php echo strtoupper($actualFirstChar); ?>"><?php echo strtoupper($actualFirstChar); ?></a></td>
                        
                            <?php
                                $firstCharacter = $actualFirstChar;
                            }
                            }
                    ?>
                    </tr>
                    </table>
                    </td>
                    </tr>
                                        </table>
                </div> 
                    
                        <div class="col s12 m12" id="lmdb_table_body">
                    <table class="lmdb" cellpadding="0" cellspacing="0">
                    <?php
                        
                        foreach ( $result AS $entry ) {
                            $actualFirstChar = strtolower(mb_substr($entry->lebensmittel, 0, 1));
                            if($actualFirstChar == 'ä' || $actualFirstChar == 'Ä') {
                                $actualFirstChar = 'a';
                            } else if($actualFirstChar == 'ö' || $actualFirstChar == 'Ö') {
                                $actualFirstChar = 'o';
                            } else if($actualFirstChar == 'ü' || $actualFirstChar == 'Ü') {
                                $actualFirstChar = 'u';
                            }
                            if($actualFirstChar != $firstCharacter) {
                            ?>
                                <tr>
                                    <td style="background: #A0A0A0; font-weight: bold; font-size: 18px;"><span class="sprungmarke" id="<?php echo strtoupper($actualFirstChar); ?>">&nbsp;</span><span><?php echo strtoupper($actualFirstChar); ?></span></td>
                                    <td style="background: #A0A0A0; font-weight: bold; font-size: 18px;"></td>
                                    <td style="background: #A0A0A0; font-weight: bold; font-size: 18px;"></td>
                                    <td style="background: #A0A0A0; font-weight: bold; font-size: 18px;"></td>
                                    <td style="background: #A0A0A0; font-weight: bold; font-size: 18px;"></td>
                                    <td style="background: #A0A0A0; font-weight: bold; font-size: 18px;"></td>
                                    <td style="background: #A0A0A0; font-weight: bold; font-size: 18px;"></td>
                                    <td style="background: #A0A0A0; font-weight: bold; font-size: 18px;"></td>
                                    <td style="background: #A0A0A0; font-weight: bold; font-size: 18px;"></td>
                                    <td style="background: #A0A0A0; font-weight: bold; font-size: 18px;"></td>
                                    <td style="background: #A0A0A0; font-weight: bold; font-size: 18px;"></td>
                                    <td style="background: #A0A0A0; font-weight: bold; font-size: 18px;"></td>
                                    <td style="background: #A0A0A0; font-weight: bold; font-size: 18px;"></td>
                                    <td style="background: #A0A0A0; font-weight: bold; font-size: 18px;"></td>
                                </tr>
                            <?php
                                $firstCharacter = $actualFirstChar;
                            }
                    ?>    <tr>
                            <td>
                                <div class="innercell">
                                    <?= $entry->lebensmittel ?>
                                    <div class="information_mobile">
                                        <a data-fancybox href="#f<?php echo $entry->id; ?>">
                                            <img src="<?php echo IMG_PATH; ?>Info-Button-viereckig-30x30.png" alt="info" />
                                        </a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="innercell">
                                <?= $entry->kategorie ?>
                                </div>
                            </td>
                            <td class="<?= getFlagClass( $entry->li, $li_filter, $any_light_filter_set ) ?>">
                                <div class="innercell">
                                &nbsp;
                                </div>
                            </td>
                            <td class="<?= getFlagClass( $entry->fi, $fi_filter, $any_light_filter_set ) ?>">
                                <div class="innercell">
                                &nbsp;
                                </div>
                            </td>
                            <td class="<?= getFlagClass( $entry->si, $si_filter, $any_light_filter_set ) ?>">
                                <div class="innercell">
                                &nbsp;
                                </div>
                            </td>
                            <td class="<?= getFlagClass( $entry->hi, $hi_filter, $any_light_filter_set ) ?>">
                                <div class="innercell">
                                &nbsp;
                                </div>
                            </td>
                            <td class="<?= getFlagClass( $entry->oi, $oi_filter, $any_light_filter_set ) ?>">
                                <div class="innercell">
                                &nbsp;
                                </div>
                            </td>
                            <td class="<?= getFlagClass( $entry->gz, $gz_filter, $any_light_filter_set ) ?>">
                                <div class="innercell">
                                &nbsp;
                                </div>
                            </td>
                            <td class="<?= getFlagClass( $entry->sa, $sa_filter, $any_light_filter_set ) ?>">
                                <div class="innercell">
                                &nbsp;
                                </div>
                            </td>
                            <td class="<?= getFlagClass( $entry->ap, $ap_filter, $any_light_filter_set ) ?>">
                                <div class="innercell">
                                &nbsp;
                                </div>
                            </td>
                            <td class="<?= getFlagClass( $entry->s, $s_filter, $any_light_filter_set ) ?>">
                                <div class="innercell">
                                &nbsp;
                                </div>
                            </td>
                            <td class="<?= getFlagClass( $entry->ox, $ox_filter, $any_light_filter_set ) ?>">
                                <div class="innercell">
                                &nbsp;
                                </div>
                            </td>
                            <td class="<?= getFODMAPFlagClass( $entry->fo, $fo_filter, $any_light_filter_set ) ?>">
                                <div class="innercell">
                                &nbsp;
                                </div>
                            </td>
                            <td>
                                <div class="innercell descriptionfancy" id="f<?php echo $entry->id; ?>" >
                                    <?= $entry->beschreibung ?>
                                </div>
                            </td>
                        </tr>
                    <?php
                        }
                    ?>
                    </table>
                </div>
            </div>
            </form>
        </div>
        
        <br>
        <br> 
        <div class="bodyspacer"></div> 
        <script>
            var SCOPE = "LEBENSMITTELDATENBANK";
        </script>
