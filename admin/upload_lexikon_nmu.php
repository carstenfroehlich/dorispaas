<?php
    function convertString( $string ) {
        return ( iconv( "Windows-1252", "UTF-8", $string ) );
    }
    
    function convertFlag( $flag ) {
        $flag = convertString( $flag );
        
        if ( $flag == "grün" ) {
            return ( 4 );
        }
        if ( $flag == "gelb" ) {
            return ( 2 );
        }
        if ( $flag == "rot" ) {
            return ( 1 );
        }
        return ( 0 );
    }
    
    function convertFODMAPFlag( $flag ) {
        $flag = convertString( $flag );
        
        if ( $flag == "niedrig" ) {
            return ( 4 );
        }
        if ( $flag == "gelb" ) {
            return ( 2 );
        }
        if ( $flag == "hoch" ) {
            return ( 1 );
        }
        return ( 0 );
    }
    
    $separator = ";";
    
    if ( array_key_exists( "file", $_FILES ) ) {
        $expected_column_count = 14;
        
        $create_sql = "CREATE TABLE IF NOT EXISTS lexikon_nmu ( " .
                      "id int unsigned AUTO_INCREMENT NOT NULL PRIMARY KEY, " .
                      "lebensmittel varchar(63) NOT NULL, " .
                      "kategorie varchar(63) NOT NULL, " .
                      "beschreibung text, " .
                      "li tinyint unsigned NOT NULL DEFAULT 0, " .
                      "fi tinyint unsigned NOT NULL DEFAULT 0, " .
                      "si tinyint unsigned NOT NULL DEFAULT 0, " .
                      "hi tinyint unsigned NOT NULL DEFAULT 0, " .
                      "oi tinyint unsigned NOT NULL DEFAULT 0, " .
                      "gz tinyint unsigned NOT NULL DEFAULT 0, " .
                      "sa tinyint unsigned NOT NULL DEFAULT 0, " .
                      "ap tinyint unsigned NOT NULL DEFAULT 0, " .
                      "s tinyint unsigned NOT NULL DEFAULT 0, " .
                      "ox tinyint unsigned NOT NULL DEFAULT 0, " .
                      "fo tinyint unsigned NOT NULL DEFAULT 0, " .
                      "UNIQUE KEY lebensmittel_key ( lebensmittel ), " .
                      "KEY kategorie_key ( kategorie ), " .
                      "KEY li_key ( li ), " .
                      "KEY fi_key ( fi ), " .
                      "KEY si_key ( si ), " .
                      "KEY hi_key ( hi ), " .
                      "KEY oi_key ( oi ), " .
                      "KEY gz_key ( gz ), " .
                      "KEY sa_key ( sa ), " .
                      "KEY ap_key ( ap ), " .
                      "KEY s_key ( s ), " .
                      "KEY ox_key ( ox ), " .
                      "KEY fo_key ( fo ) " .
                      " ) ENGINE=InnoDB DEFAULT CHARSET=UTF8";
        
        $filename = $_FILES["file"]["tmp_name"];
        
        if ( ( $handle = fopen( $filename, "r" ) ) !== FALSE )
        {
            // Skip first line.
            $data = fgetcsv( $handle, 1024, $separator );
            $num = count( $data );
            
            if ( $num != $expected_column_count )
            {
                fclose( $handle );
                
                die( "Die Datei ist ung&uuml;ltig. Erwartete Spaltenanzahl: " . $expected_column_count . ". Erste Zeile: " . $num . " Spalten." );
            }
            
            runQueryLexikonNmu( $create_sql );
            truncateLexikonNmu();
            
            $lineNum = 1;
            $insert_sql_start = "INSERT INTO lexikon_nmu ( lebensmittel, kategorie, beschreibung, li, fi, si, hi, oi, gz, sa, ap, s, ox, fo ) VALUES ";
            $num_insertions = 0;
            $total_num_insertions = 0;
            $insert_sql = $insert_sql_start;
            
            while ( ( $data = fgetcsv( $handle, 4096, $separator ) ) !== FALSE ) {
                $lineNum++;
                $num = count( $data );
                
                if ( $num != $expected_column_count ) {
                    fclose( $handle );
                    mysql_close( $mysql );
                    
                    echo "<div>\n";
                    echo "<div>Die Datei ist ung&uuml;ltig. Erwartete Spaltenanzahl: " . $expected_column_count . ". Zeile " . $lineNum . " : " . $num . " Spalten.</div>\n";
                    echo "<div>Spalten-Inhalte:</div>\n";
                    echo "<ol>\n";
                    for ( $i = 0; $i < $num; $i++ )
                        echo "<li>" . $data[$i] . "</li>\n";
                    echo "</ol>\n";
                    echo "</div>\n";
                    die;
                }
                
                $lebensmittel = convertString( $data[0] );
                $kategorie = convertString( $data[1] );
                $beschreibung = convertString( $data[2] );
                $li = convertFlag( $data[3] );
                $fi = convertFlag( $data[4] );
                $si = convertFlag( $data[5] );
                $hi = convertFlag( $data[6] );
                $oi = convertFlag( $data[7] );
                $gz = convertFlag( $data[8] );
                $sa = convertFlag( $data[9] );
                $ap = convertFlag( $data[10] );
                $s = convertFlag( $data[11] );
                $ox = convertFlag( $data[12] );
                $fo = convertFODMAPFlag( $data[13] );
                
                $total_num_insertions++;
                
                if ( ++$num_insertions > 1 ) {
                    $insert_sql .= ", ";
                }
                
                $insert_sql .= "( " .
                               "'" . str_replace("'", "\\'", $lebensmittel) . "', " .
                               "'" . str_replace("'", "\\'", $kategorie) . "', " .
                               "'" . str_replace("'", "\\'", $beschreibung) . "', " .
                               $li . ", " .
                               $fi . ", " .
                               $si . ", " .
                               $hi . ", " .
                               $oi . ", " .
                               $gz . ", " .
                               $sa . ", " .
                               $ap . ", " .
                               $s . ", " .
                               $ox . ", " .
                               $fo . " )";
                
                if ( $num_insertions >= 100 ) {
                    runQueryLexikonNmu( $insert_sql );
                    
                    $err = mysql_error();
                    if ( $err != "" ) {
                        echo "<div style=\"background-color: #FF3131;\">Fehler: " . $err . ".</div>\n";
                    }
                    
                    $insert_sql = $insert_sql_start;
                    $num_insertions = 0;
                }
            }
            
            if ( $num_insertions > 0 ) {
                runQueryLexikonNmu( $insert_sql );
                
                $err = mysql_error();
                if ( $err != "" ) {
                    echo "<div style=\"background-color: #FF3131;\">Fehler: " . $err . ".</div>\n";
                }
                
                $insert_sql = $insert_sql_start;
                $num_insertions = 0;
            }
            
            fclose( $handle );
        }
        
        echo "<div style=\"background-color: #31FF31;\">" . $total_num_insertions . " Eintr&auml;ge geschrieben.</div>\n";
    }
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
                <div class="row margintoprow">
                    <div class="col s12 m12">
                        <form method="POST" enctype="multipart/form-data" action="<?php echo URL_ROOT; ?>admin/upload_lexikon_nmu">
                            <input type="file" name="file" /><br />
                            <input type="submit" name="submit" class="btn btn-primary" value="Hochladen" />
                        </form>
                        <br />
                        <br />
                        <?php $result = countLexikonNmuEntries(); ?>
                        Es befinden sich <?php echo $result; ?> Eintr&auml;ge in der Datenbank.
                    </div>
                </div>
            </div>    
            <div class="bodyspacer"></div> 
        </div>
