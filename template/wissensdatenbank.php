        <div class="section no-pad-bot" id="index-banner">    
            <div class="container">      
                <br />
                <br /> 
                <div class="right">Letzte Aktualisierung: <b><?= date( "j.n.Y", filemtime( __FILE__ ) ) ?></b></div>
                <h1 class="header center orange-text">Wissendatenbank</h1>      
            </div>  
        </div> 
        <div class="container sitemap">    
            <div class="section">   
                <div class="row margintoprow">        
                    <div class="col s12 m12">
                    <hr />
                        Unter dem Menüpunkt &#187;<b>Wissendatenbank</b>&#171; finden Sie diverse Seiten 
                        und teilweise weitere Unterseiten zu den verschiedensten Themen.
                        <br />
                        Bitte klicken Sie auf die entsprechenden Links, um zu den gewünschten Seiten zu gelangen.
                        <br />
                        <hr />
                        <img src="<?php echo IMG_PATH; ?>hamburger-menue.png" alt="" border="0" hspace="0" vspace="0" style="float: left; margin-left: 0px; margin-right: 10px; padding-top: 15px;" />
                        <br />
                        <b>Hinweis für Smartphones und Tablets:</b>
                        <br />Unter dem &#187;Hamburger-Menü&#171; werden auf Smartphones und Tablets
                        alle Menüpunkte untereinander aufgelistet. Auf dieser Website 
                        gibt es mehr als 200 Unterseiten, die für die Anzeige an PCs in drei Ebenen angeordnet sind. 
                        Diese Fülle wäre viel zu unübersichtlich, und deshalb sind hier nur die wichtigsten Hauptpunkte einsortiert.
                        <br />
                        Um alle Unterseiten hierarchisch sortiert angezeigt zu bekommen, 
                        tippen Sie bitte ganz oben dem Menüpunkt &#187;<b>Sitemap für Smartphones</b>&#171;.
                        <br />
                        <br />
                        <hr />
                    <ul>                    
                    
                    <!--
                        Wissensdatenbank ab hier
                    -->
                    
                        <li>
                            <div><a href="<?php echo URL_ROOT; ?>wissensdatenbank"><b>Wissensdatenbank</b></a></div>
                            
                                <ul>
                                    <li><a href="<?php echo URL_ROOT; ?>lebensmittel-datenbank-abo">DorisPaas.de &ndash; Lebensmittel-Datenbank</a></li>
                                    <ul>
                                        <li><a href="<?php echo URL_ROOT; ?>lebensmittel-datenbank-info">Info</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>lebensmittel-datenbank-abo">Abonnement</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>lebensmittel-datenbank">Anmeldung</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>hilfe">Hilfe</a></li>
                                    </ul>
                    
                                <br />
                                <li>
                                    <div><a href="<?php echo URL_ROOT; ?>arztsuche">Erfolgreiche Arzt- und Beratersuche</a></div>
                                        
                                    <ul>
                                        <li><a href="<?php echo URL_ROOT; ?>arztsuche">Wie finde ich einen qualifizierten Arzt/Therapeuten oder Berater?</a></li>
<!--
                                        <li><a href="<?php echo URL_ROOT; ?>arztqualifikation">Wie erkenne ich die Qualifikation eines Arztes?</a></li>
-->
                                        <li><a href="<?php echo URL_ROOT; ?>internetrat">Was kann das Internet für Ihre Gesundheit leisten und was nicht?</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>selbsttests">Selbsttests bei Nahrungsmittel-Unverträglichkeiten</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>iggtests">Wie sinnvoll sind IgG-Tests (ELISA)?</a></li>
                                    </ul>
                                </li>
                    
                                <br />
                                    <li>
                                        <a href="<?php echo URL_ROOT; ?>faq">Fragen&nbsp;&amp;&nbsp;Antworten (FAQ)</a>
                                    </li>
                                    <br />
                                
                                    <li>
                                        <a href="<?php echo URL_ROOT; ?>kurzinfos">Kurzinfos</a>
                                    </li>
                    <!--
                        Nahrungsmittel-Unverträglichkeiten ab hier
                    -->
                                
                                <br />
                                <li>
                                    <div><a href="<?php echo URL_ROOT; ?>nahrungsmittelunvertraeglichkeiten">Unverträglichkeiten</a></div>
                                    
                                    <ul>
                                        <li>
                                            <div><a href="<?php echo URL_ROOT; ?>laktose">Laktose-Intoleranz</a></div>
                                            
                                            <ul>
                                                <li><a href="<?php echo URL_ROOT; ?>laktose">Laktose-Intoleranz</a></li>
<!--
                                                <li><a href="<?php echo URL_ROOT; ?>diagnose">Diagnose-Methoden zur Ermittlung einer Laktose-Intoleranz</a></li>
                                                <li><a href="<?php echo URL_ROOT; ?>behandlung">&#187;Behandlung&#171; der Laktose-Intoleranz</a></li>
                                                <li><a href="<?php echo URL_ROOT; ?>milch">Informationen über Milch</a></li>
                                                <li><a href="<?php echo URL_ROOT; ?>kaese">Käse &ndash; alles Käse?</a></li>
                                                <li><a href="<?php echo URL_ROOT; ?>laktase">Informationen zu Laktase-Präparaten</a></li>
                                                <li><a href="<?php echo URL_ROOT; ?>praeparatetest">Präparate-Tests</a></li>
                                                <li><a href="<?php echo URL_ROOT; ?>studienauswertung">Auswertung der Laktase-Studie</a></li>
                                                <li><a href="<?php echo URL_ROOT; ?>probiotika">Probiotika statt Laktase?</a></li>
                                                <li><a href="<?php echo URL_ROOT; ?>probiotika-studienauswertung">Auswertung der Probiotika-Studie</a></li>
-->
                                            </ul>
                                        </li>
                                        
                                        
                                        <ul>
                                        <li>
                                            <div><a href="<?php echo URL_ROOT; ?>fma">Fruktose-Intoleranz (Fruktose-Malabsorption)</a></div>
                                         </li>   
<!--
                                            <ul>
                                                <li><a href="<?php echo URL_ROOT; ?>wasistfma">Was ist Fruktose-Intoleranz?</a></li>
                                                <li><a href="<?php echo URL_ROOT; ?>fmadiagnose">Diagnosemethoden zur Ermittlung einer Fruktose-Intoleranz</a></li>
                                                <li><a href="<?php echo URL_ROOT; ?>fmabehandlung">Behandlung der Fruktose-Intoleranz</a></li>
                                                <li><a href="<?php echo URL_ROOT; ?>fmaernaehrung">Ernährung bei Fruktose-Intoleranz</a></li>
                                                <li><a href="<?php echo URL_ROOT; ?>fma-depressionen">Fruktose-Malabsorption und Depressionen</a></li>
                                            </ul>
                                        </li>
-->                                     </ul>

                                        <ul>   
                                        <li>
                                            <div><a href="<?php echo URL_ROOT; ?>oligosaccharide">Oligosaccharid-Unverträglichkeit</a></div>
                                        </li>
                                        
<!--                                            
                                            <ul>
                                                <li><a href="<?php echo URL_ROOT; ?>oligosaccharide-wasistdas">Oligosaccharid-Unverträglichkeit &ndash; was ist das?</a></li>
                                                <li><a href="<?php echo URL_ROOT; ?>oligosaccharide-diagnose">Diagnose der Oligosaccharid-Unverträglichkeit</a></li>
                                                <li><a href="<?php echo URL_ROOT; ?>oligosaccharide-behandlung">Behandlung der Oligosaccharid-Unverträglichkeit</a></li>
                                            </ul>
                                        </li>
-->                                        
                                        </ul>

                                        <ul>
                                        <li>
                                            <div><a href="<?php echo URL_ROOT; ?>gluten">Zöliakie und Gluten-Sensitivität</a></div>
                                        </li>
                                        </ul>
<!--
                                            
                                            <ul>
                                                <li><a href="<?php echo URL_ROOT; ?>gluten">Zöliakie und Gluten-Sensitivität</a></li>
                                                <li><a href="<?php echo URL_ROOT; ?>zoeliakie">Zöliakie &ndash; was ist das?</a></li>
                                                <li><a href="<?php echo URL_ROOT; ?>zoeliakie-diagnose">Diagnose der Zöliakie</a></li>
                                                <li><a href="<?php echo URL_ROOT; ?>glutensensitivitaet">Gluten-Sensitivität &ndash; was ist das?</a></li>
                                                <li><a href="<?php echo URL_ROOT; ?>glutensensitivitaet-diagnose">Diagnose der Gluten-Sensitivität</a></li>
                                                <li><a href="<?php echo URL_ROOT; ?>zoeliakie-behandlung">Behandlung der Zöliakie und der Gluten-Sensitivität</a></li>
                                                <li><a href="<?php echo URL_ROOT; ?>weizenallergie">Weizenallergie</a></li>
                                            </ul>
-->
                                        <ul>
                                        <li>
                                            <div><a href="<?php echo URL_ROOT; ?>pseudoallergien">Histamin, Glutamat, Salicylat (Pseudoallergien)</a></div>
<!--                                            
                                            <ul>
                                                <li><a href="<?php echo URL_ROOT; ?>pseudoallergien">Was sind Pseudo-Allergien?</a></li>
                                                <li><a href="<?php echo URL_ROOT; ?>wasisthi">Histamin-Intoleranz</a></li>
                                                <li><a href="<?php echo URL_ROOT; ?>salicylatintoleranz">Salicylat-Intoleranz</a></li>
                                                <li><a href="<?php echo URL_ROOT; ?>glutamat">Glutamat-Intoleranz</a></li>
                                            </ul>
                                        </li>
-->
                                        </ul>
                                        
                                        <ul>                                        
                                        <li>
                                            <div><a href="<?php echo URL_ROOT; ?>multiunvertraeglichkeit">Multiple Nahrungsmittel-Unverträglichkeiten</a></div>
                                        </li>
                                        </ul>
                                        
                                        <ul>
                                        <li>
                                            <div><a href="<?php echo URL_ROOT; ?>praeparatetest">Präparate-Tests</a></div>
                                        </li>
                                        </ul>
                                        
                                        <ul>
                                        <li>
                                            <div><a href="<?php echo URL_ROOT; ?>nmu-behandlung">Behandlungsgrundsätze</a></div>
                                            
                                            <ul>
                                                <li><a href="<?php echo URL_ROOT; ?>nmu-behandlung">Behandlungsgrundsätze bei Nahrungsmittel-Unverträglichkeiten</a></li>
                                                <li><a href="<?php echo URL_ROOT; ?>selbsttests">Selbsttests bei Nahrungsmittel-Unverträglichkeiten</a>
                                                <li><a href="<?php echo URL_ROOT; ?>iggtests">Wie sinnvoll sind IgG-Tests (ELISA)?</a></li>
                                                </li><li><a href="<?php echo URL_ROOT; ?>nmu-karenz">Karenz</a></li>
                                                <li><a href="<?php echo URL_ROOT; ?>nmu-fasten">Fasten als Vorbereitung der Karenz</a></li>
                                                <li><a href="<?php echo URL_ROOT; ?>zeitmanagement">Zeitmanagement bei Nahrungsmittel-Unverträglichkeiten</a></li>
                                                <li><a href="<?php echo URL_ROOT; ?>zuckerkrankheiten">Wird man von Zuckergenuss krank &ndash; und wenn ja, warum?</a></li>
                                                <li><a href="<?php echo URL_ROOT; ?>ganz-genuss">Genießen? Ja bitte &ndash; auch bei Nahrungsmittel-Unverträglichkeiten!</a></li>
                                                <li><a href="<?php echo URL_ROOT; ?>darmgymnastik">Darmgymnastik</a></li>

                                            </ul>
                                        </li>
                                        </ul>
                                        
                                        <li>
                                            <div><a href="<?php echo URL_ROOT; ?>atemtest">Grundlagen von Atemtests</a></div>
                                        </li>
                    
                                        <li>
                                            <div><a href="<?php echo URL_ROOT; ?>abgrenzung">Abgrenzung</a></div>
                                            
                                            <ul>
                                                <li><a href="<?php echo URL_ROOT; ?>abgrenzung">Abgrenzung Unverträglichkeit / -Allergie</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                    <!--
                        Nahrungsmittel-Unverträglichkeiten bis hier
                    -->
                                
                                <br />
                                <li>
                                    <div><a href="<?php echo URL_ROOT; ?>rds-wasistdas">Reizdarm-Syndrom (RDS)</a></div>
                                        
                                    <ul>
                                        <li><a href="<?php echo URL_ROOT; ?>rds-wasistdas">Reizdarm-Syndrom &ndash; was ist das?</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>rds-diagnose">Diagnose des Reizdarm-Syndroms</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>rds-ursachen">Ursachen des Reizdarm-Syndroms</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>rds-ursache-sibo">Dünndarmfehlbesiedelung als Ursache des Reizdarm-Syndroms</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>rds-behandlung">Behandlung des Reizdarm-Syndroms</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>reflux">Sodbrennen und Reflux</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>fodmaps">FODMAP-Diät</a></li>
                                    </ul>
                                </li>
                    
                    
                    
                                <br />
                                <li>
                                    <div><a href="<?php echo URL_ROOT; ?>duenndarmfehlbesiedelung">Dünndarmfehlbesiedelung</a></div>
                                        
                                    <ul>
                                        <li><a href="<?php echo URL_ROOT; ?>duenndarmfehlbesiedelung">Dünndarmfehlbesiedelung und ihre Behandlung</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>atemtest">Grundlagen von Atemtests</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>atemtest-duenndarmfehlbesiedelung">Wasserstoff-Atemtest zur Diagnose der Dünndarmfehlbesiedelung</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>vitalpilze">Vitalpilze</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>rds-ursache-sibo">Dünndarmfehlbesiedelung als Ursache des Reizdarm-Syndroms</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>fodmaps">FODMAP-Diät</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>antibiotika">Antibiotika und Darmgesundheit</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>reflux">Sodbrennen und Reflux</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>siboschulung">Schulungen für Mediziner und Berater</a></li>
                                    </ul>
                                </li>
                    
                    
                                <br />
                                        <li>
                                            <div><a href="<?php echo URL_ROOT; ?>praeparatetest">Präparate</a></div>
                                        
                                    <ul>
                                        <li><a href="<?php echo URL_ROOT; ?>nahrungsergaenzungsmittel">Grundsätze von Nahrungsergänzungsmitteln</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>nebenwirkungen">Neben- und Wechselwirkungen von Medikamenten</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>praezisionsprobiotika">Präzisionsprobiotika oder Gießkannenprinzip?</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>ganz-vitamine">Vitamine und Mineralstoffe</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>ganz-vitamin-d">Vitamin D und Sonne</a></li>
                                       <li><a href="<?php echo URL_ROOT; ?>praeparatetest">Präparate-Tests</a></li>
                                    </ul>


                                        </li>
                                <br />
                                <li>
                                    <div><a href="<?php echo URL_ROOT; ?>darmgesundheit">Darmgesundheit</a></div>
                                    </li>
                                <ul>
                                    <li><a href="<?php echo URL_ROOT; ?>darmgesundheit">Darmgesundheit &ndash; allgemein</a></li>
                    
                                    <ul>
                                        <li><a href="<?php echo URL_ROOT; ?>darmgesundheit">Gesunder Darm &ndash; gesunder Mensch</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>verdauung">Gesunde Verdauung</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>darmschleimhaut">Die Darmschleimhaut &ndash; Aufbau, Funktion, Pflege und Sanierung</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>darmfloragrundsatz">Grundsätzliches über die Mikrobiota (Darmflora)</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>verdauungsdruesen">Die Verdauungsdrüsen und ihre Bedeutung für die Verdauung</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>stuhlgang">Stuhlgang &ndash; Probleme und Lösungen</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <div><a href="<?php echo URL_ROOT; ?>antibiotika">Störungen</a></div>
                                                    
                                    <ul>
                                        <li><a href="<?php echo URL_ROOT; ?>antibiotika">Antibiotika und Darmgesundheit</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>reflux">Sodbrennen und Reflux</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>ganz-galle">Gallenfunktionsstörungen</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>ganz-pankreas">Funktionsstörungen der Bauchspeicheldrüse</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>ganz-magen">Funktionsstörungen des Magens</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>ced">Chronisch entz&uuml;ndliche Darmerkrankungen</a></li>
                                        <li> <a href="<?php echo URL_ROOT; ?>ganz-parasiten">Parasiten- und Pilzbesiedelung des Darms</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>ganz-genussmittel">Genussmittel bei Darmempfindlichkeit</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <div><a href="<?php echo URL_ROOT; ?>akupressur">Hilfreiche Maßnahmen</a></div>
                                                    
                                    <ul>
                                        <li><a href="<?php echo URL_ROOT; ?>autovaccinen">Autovaccinen</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>praezisionsprobiotika">Präzisionsprobiotika oder Gießkannenprinzip?</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>akupressur">Akupressur bei Magen-/Darmproblemen</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>atmen">Atem und Verdauung</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>darmgymnastik">Darmgymnastik</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>vitalpilze">Vitalpilze</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>ganz-gaergetraenke">Probiotische Gärgetränke</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <div><a href="<?php echo URL_ROOT; ?>trinkwasser">Verschiedenes</a></div>
                                                    
                                    <ul>
                                        <li><a href="<?php echo URL_ROOT; ?>darmreinigung">Darmreinigung</a></li>    
                                        <li><a href="<?php echo URL_ROOT; ?>coronaverdauung">Verdauung in der Corona-Krise</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>trinkwasser">Chlor im Trinkwasser</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>glyphosat">Glyphosat</a></li>
                                    </ul>
                                </li>
                                </ul>
                                            
                                <br />
                                <li>
                                    <div><a href="<?php echo URL_ROOT; ?>ganz-gesund">Ganzheitliche Gesundheit</a></div>
                                    </li>
                                <ul>
                                    <li><a href="<?php echo URL_ROOT; ?>ganz-gesund">Ganzheitliche Gesundheit &ndash; allgemein</a></li>
                    
                                    <ul>
                                        <li><a href="<?php echo URL_ROOT; ?>ganz-gesund">Ganzheitliche Gesundheit</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>ganz-saeulenmodell">Die Säulen der ganzheitlichen Gesundheit</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>ganz-verdauungssystem">Abbildung des Verdauungssystems</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>ganz-immun">Stärkung des Immunsystems</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>gewichtsreduktion">Gewichtsreduktion</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>bewegung">Bewegung und Sport</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>wasser">Wasser &ndash; das Element zur Unterstützung der Gesundheit</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>ganz-healthtogo">Health to go</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <div><a href="<?php echo URL_ROOT; ?>ganz-ernaehrung">Ernährung</a></div>
                                                    
                                    <ul>
                                        <li><a href="<?php echo URL_ROOT; ?>ganz-ernaehrung">Was ist gesunde Ernährung?</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>ganz-vegan">Vegane Ernährung &ndash; wie gesund ist sie?</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>fodmaps">FODMAP-Diät</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>ganz-kochmedizin">Medizin aus dem Kochtopf</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>superfood">Superfood &ndash; super gut?</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>bitterstoffe">Bitterstoffe und ihre Bedeutung für eine gesunde Verdauung</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>ganz-gaergetraenke">Probiotische Gärgetränke</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>trinkwasser">Chlor im Trinkwasser</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>ganz-vitamine">Vitamine und Mineralstoffe</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>ganz-vitamin-d">Vitamin D und Sonne</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>milch">Informationen über Milch</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>kaese">Käse &ndash; alles Käse?</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>ganz-zuckerempfehlung">Empfehlenswerte Süßungsmittel</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>zuckerkrankheiten">Wird man von Zuckergenuss krank &ndash; und wenn ja, warum?</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>ganz-genuss">Genießen bei Nahrungsmittel-Unverträglichkeiten &ndash; ja bitte!</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <div><a href="<?php echo URL_ROOT; ?>ganz-entspannung">Entspannung</a></div>
                                                    
                                    <ul>
                                        <li><a href="<?php echo URL_ROOT; ?>ganz-entspannung">Entspannung</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>akupressur">Akupressur bei Magen-/Darmproblemen</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <div><a href="<?php echo URL_ROOT; ?>ganz-vorspann">Störungen</a></div>
                                                    
                                    <ul>
                                        <li><a href="<?php echo URL_ROOT; ?>ganz-vorspann">Verdauungsbeeinflussende Störungen</a></li>    
                                        <li><a href="<?php echo URL_ROOT; ?>ganz-magendarm">Ganzheitliche Betrachtung von Magen-/Darmbeschwerden</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>reflux">Sodbrennen und Reflux</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>antibiotika">Antibiotika und Darmgesundheit</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>ganz-reisedurchfall">Reisedurchfall (Reisediarrhoe)</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>ganz-schilddruese">Schilddrüsenfunktionsstörungen</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>ganz-galle">Gallenfunktionsstörungen</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>verdauungsdruesen">Verdauungsdrüsen</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>ganz-pankreas">Funktionsstörungen der Bauchspeicheldrüse</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>ganz-magen">Funktionsstörungen des Magens</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>ganz-parasiten">Parasiten- und Pilzbesiedelung des Darms</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>ganz-genussmittel">Genussmittel bei Darmempfindlichkeit</a></li>
                                    </ul>
                                </li>
                                </ul>
                                            
                                <br />
                                <li>
                                    <div><a href="<?php echo URL_ROOT; ?>lexika">Lexika</a></div>
                                    
                                    <ul>
                                        <li><a href="<?php echo URL_ROOT; ?>lexikon-li-begriffe">Begriffe Laktose-Intoleranz</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>lexikon-darmerkrankungen">Darmerkrankungen und Nahrungsmittel-Unverträglichkeiten</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>lexikonzucker">Zucker/Süßungsmittel</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>lexikon-naturheilmethoden">Naturheilmethoden</a></li>
                                    </ul>
                                </li>
                                <br />
<!--
                                <li>
                                    <div><a href="<?php echo URL_ROOT; ?>auswertungen">Studien und Studienauswertungen</a></div>                
                                    <ul>
                                        <li><a href="<?php echo URL_ROOT; ?>studienauswertung">Studie: Wirkung von Laktase-Präparaten</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>probiotika-studienauswertung">Studie: Probiotika zur Anhebung der Laktose-Toleranzschwelle</a></li>
                                    </ul>
                                </li>
                                <br />
                                <li>
                                    <div><a href="<?php echo URL_ROOT; ?>bestimmungen">Gesetzliche Bestimmungen</a></div>
                                    <ul>
                                        <li><a href="<?php echo URL_ROOT; ?>bestimmungen">Gesetzliche Bestimmungen</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>siegel">Bio-Siegel für Nahrungsmittel</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>lmiv">Die neue Lebensmittelinformationsverordnung (LMIV)</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>genlabelling">Labelling von Gentechnik</a></li>
                                    </ul>
                                </li>
                                <br />
-->
                    
                                <li>
                                    <div><a href="<?php echo URL_ROOT; ?>reisetipps">Reisen</a></div>
                                    <ul>
                                        <li><a href="<?php echo URL_ROOT; ?>reisetipps">Allgemeine Reise-Tipps</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>reiseberichte">Reiseberichte</a></li>
                                        <li><a href="<?php echo URL_ROOT; ?>ganz-reisedurchfall">Reisedurchfall (Reisediarrhoe)</a></li>
                                    </ul>
                                </li>
                                <br />
                                <li><a href="<?php echo URL_ROOT; ?>links">Hilfreiche fachliche Verlinkungen</a></li>
                            </ul>
                        </li>
                        <br />
                    
                    <!--
                        Wissensdatenbank bis hier
                    -->
                   
                    
                    
                    </ul>
                    </div>
                </div>
                        <hr />
                        <a href="javascript: scrollMainToTop();" class="nachoben">nach oben</a>
            </div>    
            <br>
            <br> 
            <div class="bodyspacer"></div> 
        </div>