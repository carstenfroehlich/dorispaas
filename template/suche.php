        <div class="section no-pad-bot" id="index-banner">    
            <div class="container">      
                <br />
                <br /> 
                <div class="right">Letzte Aktualisierung: <b><?= date( "j.n.Y", filemtime( __FILE__ ) ) ?></b></div>
                <h1 class="header center orange-text">Durchsuchen der kompletten Website nach Suchbegriffen</h1>      
            </div>  
        </div> 
        <div class="container">    
            <div class="section">   
                <div class="row margintoprow">        
                    <div class="col s12 m6">
                        <img src="<?php echo IMG_PATH; ?>suchlupe.png" alt="suche" class="right" />
                        Auf dieser Seite können Sie <b>www.dorisPaas.de</b> und alle  
                        Unterseiten nach beliebigen Worten durchsuchen. Sie müssen lediglich den 
                        gewünschten Begriff eingeben und auf die Schaltfläche &#187;Suchen&#171; klicken. 
                        Sobald die Seiten durchsucht und Ziele gefunden wurden, werden Ihnen diese 
                        mit einem kleinen Textausschnitt in 
                        Listenform angezeigt. Mit einem Klick auf den entsprechenden Eintrag 
                        gelangen Sie zu der gewünschten Seite und können hier den Text komplett lesen.
                    </div>
                </div>
                <div class="row margintoprow">        
                    <div class="col s12 m12">
                        <form method="POST" action="<?php URL_ROOT; ?>suche">
                            <table>
                                <tr>
                                    <td style="width: 35%;">
                                        <label for=suchen">Bitte Suchbegriff eingeben
                                        <br />
                                        <i>(die komplette Website wird durchsucht)</i></label>
                                    </td>
                                    <td>
                                        <input type="text" name="suchen" id="suchen" value="<?= array_key_exists( "suchen", $_POST ) ? $_POST["suchen"] : "" ?>" />
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <input type="submit" class="btn btm-primary right" value="Suchen" />
                                    </td>
                                </tr>
                            </table>
                        </form>
                        <?php
                            if ( array_key_exists( "suchen", $_POST ) )
                            {
                                setLocale( LC_CTYPE, "de_DE" ); // strtolower auch mit Umlauten
                                
                                $suchwoerter = explode( " ", strtolower( $_POST["suchen"] ) );
                                
                                $pfad = "./template/";
                                $verz = openDir( $pfad );
                                $inhalt = "";
                                $inhalt_lower = "";
                                
                                $old_file = "";
                                
                                while ( $file = readDir( $verz ) )
                                {
                                    if ( filetype( $pfad . $file ) != "dir" && $file != "send_bestellung.php" &&
                                         $file != "send_mail.php" && $file != "vita-alt.php" &&
                                         $file != "read_last.php" && $file != "read_nav.php" && 
                                         $file != "pr.php" && $file != "suche.php" )
                                    {
                                        if ( $_POST["suchen"] != "" )
                                        {
                                            $f = fopen( $pfad . $file, "r" );
                                            $inhalt = fread( $f, filesize( $pfad . $file ) );
                                            
                                            $inhalt2 = preg_replace('/\<.*\>/U', '', $inhalt);
                                            $inhalt3 = preg_replace('/.*@im.*/', '', $inhalt2);
                                            $inhalt4 = preg_replace('/.*\sif\s.*/', '', $inhalt3);
                                            $inhalt5 = preg_replace('/\<\?php/', '', $inhalt4);
                                            $inhalt6 = preg_replace('/.*\?\>/', '', $inhalt5);
                                            $inhalt7 = preg_replace('/.*require.*/', '', $inhalt6);
                                            $inhalt8 = preg_replace('/.*include.*/', '', $inhalt7);
                                            $inhalt9 = preg_replace('/.*\<meta.*/', '', $inhalt8);
                                            $inhalt10 = preg_replace('/.*\s\/\>/', '', $inhalt9);
                                            $inhalt11 = preg_replace('/.*\<script.*/', '', $inhalt10);
                                            $inhalt12 = preg_replace('/.*\"\>/', '', $inhalt11);
                                            $inhalt13 = preg_replace('/.*.*switch.*/', '', $inhalt12);
                                            $inhalt14 = preg_replace('/.*case.*/', '', $inhalt13);
                                            $inhalt15 = preg_replace('/.*\{.*/', '', $inhalt14);
                                            $inhalt16 = preg_replace('/.*\$img.*/', '', $inhalt15);
                                            $inhalt17 = preg_replace('/.*break.*/', '', $inhalt16);
                                            $inhalt18 = preg_replace('/.*\}.*/', '', $inhalt17);
                                            $inhalt19 = preg_replace('/.*\sif\(.*/', '', $inhalt18);
                                            
                                            $inhalt = $inhalt19;
                                            
                                            $inhalt_lower = strtolower( $inhalt );
                                        }
                                        
                                        foreach ( $suchwoerter as $wort )
                                        {
                                            $treffer = preg_match( "/$wort/", $inhalt_lower );
                                            if ( ( $treffer >= 1 ) && ( $wort != "" ) )
                                            {
                                                $treffer2 = preg_match( "/<.*$wort.*>/", $inhalt_lower );
                                                $anzahl = preg_match_all( "/".$wort."/", $inhalt_lower, $arr );
                                                //echo $arr[0];
                                                if ( $treffer2 == 0 )
                                                {
                                                    $i = strpos( $inhalt_lower, $wort );
                                                    
                                                    $text = substr( $inhalt, ($i - 10), 220 );
                                                    if ( $old_file != $file )
                                                    {
                                                        $url = substr( $file, 0, strlen( $file ) - 4 );
                                                        $seite = $url;
                                                        
                                                        if ( $file == "home.php" ) $seite = "Startseite";
                                                        elseif ( $file == "vita.php" ) $seite = "Vita";
                                                        elseif ( $file == "book.php" ) $seite = "Cover";
                                                        elseif ( $file == "shops.php" ) $seite = "Shop";
                                                        elseif ( $file == "devil-subpage0.php" ) $seite = "Fehlerteufel";
                                                        elseif ( $file == "devil-subpage1.php" ) $seite = "Fehlerteufel";
                                                        elseif ( $file == "contact.php" ) $seite = "Kontakt";
                                                        elseif ( $file == "impressum.php" ) $seite = "Impressum";
                                                        elseif ( $file == "links.php" ) $seite = "Hilfreiche Verlinkungen";
                                                        elseif ( $file == "read.php" ) $seite = "Leseproben";
                                                        elseif ( $file == "med.php" ) $seite = "Für Fachleute";
                                                        elseif ( $file == "faq.php" ) $seite = "Fragen &amp; Antworten";
                                                        elseif ( $file == "pr-subpage0.php" ) $seite = "Public Relations";
                                                        elseif ( $file == "pr-subpage1.php" ) $seite = "Buchvorstellungen in der Presse";
                                                        elseif ( $file == "pr-subpage2.php" ) $seite = "Buch-Rezensionen";
                                                        elseif ( $file == "shop.php" ) $seite = "Shop";
                                                        elseif ( $file == "suche.php" ) $seite = "Suche";
                                                        elseif ( $file == "book-subpage0.php" ) $seite = "Cover";
                                                        elseif ( $file == "book-subpage1.php" ) $seite = "Buchbeschreibung";
                                                        elseif ( $file == "book-subpage2.php" ) $seite = "Inhaltsverzeichnis";
                                                        elseif ( $file == "book-subpage2-index.php" ) $seite = "Inhaltsverzeichnis";
                                                        elseif ( $file == "book-subpage2-chapter01.php" ) $seite = "Inhaltsverzeichnis (Kapitel 1)";
                                                        elseif ( $file == "book-subpage2-chapter02.php" ) $seite = "Inhaltsverzeichnis (Kapitel 2)";
                                                        elseif ( $file == "book-subpage2-chapter03.php" ) $seite = "Inhaltsverzeichnis (Kapitel 3)";
                                                        elseif ( $file == "book-subpage2-chapter04.php" ) $seite = "Inhaltsverzeichnis (Kapitel 4)";
                                                        elseif ( $file == "book-subpage2-chapter05.php" ) $seite = "Inhaltsverzeichnis (Kapitel 5)";
                                                        elseif ( $file == "book-subpage2-chapter06.php" ) $seite = "Inhaltsverzeichnis (Kapitel 6)";
                                                        elseif ( $file == "book-subpage2-chapter07.php" ) $seite = "Inhaltsverzeichnis (Kapitel 7)";
                                                        elseif ( $file == "book-subpage2-chapter08.php" ) $seite = "Inhaltsverzeichnis (Kapitel 8)";
                                                        elseif ( $file == "book-subpage2-chapter09.php" ) $seite = "Inhaltsverzeichnis (Kapitel 9)";
                                                        elseif ( $file == "book-subpage2-chapter10.php" ) $seite = "Inhaltsverzeichnis (Kapitel 10)";
                                                        elseif ( $file == "book-subpage2-chapter11.php" ) $seite = "Inhaltsverzeichnis (Kapitel 11)";
                                                        elseif ( $file == "book-subpage2-chapter12.php" ) $seite = "Inhaltsverzeichnis (Kapitel 12)";
                                                        elseif ( $file == "book-subpage2-chapter13.php" ) $seite = "Inhaltsverzeichnis (Kapitel 13)";
                                                        elseif ( $file == "book-subpage2-chapter14.php" ) $seite = "Inhaltsverzeichnis (Kapitel 14)";
                                                        elseif ( $file == "book-subpage2-chapter15.php" ) $seite = "Inhaltsverzeichnis (Kapitel 15)";
                                                        elseif ( $file == "book-subpage2-chapter16.php" ) $seite = "Inhaltsverzeichnis (Kapitel 16)";
                                                        elseif ( $file == "book-subpage2-chapter17.php" ) $seite = "Inhaltsverzeichnis (Kapitel 17)";
                                                        elseif ( $file == "book-subpage2-chapter18.php" ) $seite = "Inhaltsverzeichnis (Kapitel 18)";
                                                        elseif ( $file == "book-subpage2-chapter19.php" ) $seite = "Inhaltsverzeichnis (Kapitel 19)";
                                                        
                                                        echo '<a href="' . $url . '" class="suchlink"><b>' . $seite . "</b>&nbsp;&nbsp;[" . $anzahl . " Treffer auf das Suchwort]<br />"; 
                                                        echo "\"..." . $text . "...\"</a><br /><br />";
                                                    }
                                                    
                                                    $old_file = $file;
                                                }
                                            }
                                        }
                                    }
                                }
                                
                                closedir( $verz );
                            }
                            ?>
                    </div>
                </div>
            </div>    
            <br>
            <br> 
            <div class="bodyspacer"></div> 
        </div>
