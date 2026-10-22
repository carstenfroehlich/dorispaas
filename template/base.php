<!DOCTYPE html>
<html lang="en">
    <head>  
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>  
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>  
        <title>dorispaas.de</title> 
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo IMG_PATH; ?>favicon.ico" /> 
        <!-- CSS  -->  
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="<?php echo CSS_PATH; ?>bootstrap.min.css?fingerprint=20170806154500" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="<?php echo CSS_PATH; ?>materialize.css?fingerprint=20180512193400" type="text/css" rel="stylesheet" media="screen,projection"/>  
        <link href="<?php echo CSS_PATH; ?>style.css?fingerprint=20231017194600" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="<?php echo CSS_PATH; ?>books.css?fingerprint=20220724203500" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="<?php echo CSS_PATH; ?>lebensmitteldb.css?fingerprint=20251109130800" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="<?php echo CSS_PATH; ?>jquery.fancybox.min.css" rel="stylesheet">
        <link href="<?php echo CSS_PATH; ?>font-awesome.min.css" rel="stylesheet">
        <script src="https://www.google.com/recaptcha/api.js"></script>
    </head>
    <body>  
        <nav class="doris-paas lighten-1" role="navigation">    
            <a id="logo-container" href="<?php echo URL_ROOT; ?>home" class="brand-logo-small">
                <img src="<?php echo IMG_PATH; ?>dorispaas-neu-3.png" />
            </a>
            <div class="nav-wrapper container">
                <a id="logo-container" href="<?php echo URL_ROOT; ?>home" class="brand-logo">
                    <img src="<?php echo IMG_PATH; ?>dorispaas-neu-3.png" />
                </a>      
                <!-- Menü für Desktop Webseite --> 
                <div class="collapse navbar-collapse">
                    <ul class="left hide-on-med-and-down">             
                        <li class="dropdown <?php if($ACTION[0] == 'home') { echo 'active'; } ?>">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Doris Paas <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <?php if(checkIsAdmin($administrators)) { ?>
                                    <li class="dropdown-submenu">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Administration</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="<?php echo URL_ROOT; ?>admin/showallorders">Alle Bestellungen anzeigen</a></li>
                                            <li class="divider"></li>
                                            <li><a href="<?php echo URL_ROOT; ?>admin/createuser">Benutzer anlegen</a></li>
                                            <li class="divider"></li>
                                            <li><a href="<?php echo URL_ROOT; ?>admin/administrateusers">Benutzer administrieren</a></li>
                                            <li class="divider"></li>
                                            <li><a href="<?php echo URL_ROOT; ?>admin/sendnewsletter">Newsletter versenden</a></li>
                                            <li class="divider"></li>
                                            <li><a href="<?php echo URL_ROOT; ?>admin/upload_lexikon_nmu">NMU-Datenbank hochladen</a></li>
                                        </ul>
                                    </li>
                                    <li class="divider"></li>
                                <?php } ?>
                                <li><a href="<?php echo URL_ROOT; ?>home">Home</a></li>
                                <li class="divider"></li>
                                <li><a href="<?php echo URL_ROOT; ?>sitemap-html">Sitemap</a></li>
                                <li class="divider"></li>
                                <li><a href="<?php echo URL_ROOT; ?>vita">Vita</a></li>
<!--
                                <li class="divider"></li>
                                <li><a href="<?php echo URL_ROOT; ?>blog">Blog</a></li>
                                <li class="divider"></li>
                                <li><a href="<?php echo URL_ROOT; ?>termine">Termine / Veranstaltungen</a></li>
                                <li class="divider"></li>
                                <li><a href="<?php echo URL_ROOT; ?>networks">Social Network</a></li>
-->
                                <li class="divider"></li>
                                <li><a href="<?php echo URL_ROOT; ?>guterrat">War das ein guter Rat?</a></li>
                                <li class="divider"></li>
                                <li><a href="<?php echo URL_ROOT; ?>hilfe">Hilfe</a></li>
                                <li class="divider"></li>
                                <li><a href="<?php echo URL_ROOT; ?>datenschutz">Datenschutzerklärung</a></li>
                                <li class="divider"></li>
                                <li><a href="<?php echo URL_ROOT; ?>archiv">Archiv</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Wissens-Datenbank<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu">
                                    <a href="#">DorisPaas.de &ndash; Lebensmittel-Datenbank</a> 
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="<?php echo URL_ROOT; ?>lebensmittel-datenbank-info">Info</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="<?php echo URL_ROOT; ?>lebensmittel-datenbank-abo">Abonnement</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="<?php echo URL_ROOT; ?>lebensmittel-datenbank">Anmeldung</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="<?php echo URL_ROOT; ?>hilfe">Hilfe</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="divider"></li>
                                <li class="dropdown-submenu">
                                    <a href="#">Erfolgreiche Arztsuche</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="<?php echo URL_ROOT; ?>arztsuche">Wie finde ich einen qualifizierten Arzt/Therapeuten oder Berater?</a>
                                        </li>
<!--
                                        <li class="divider"></li>
                                        <li>
                                            <a href="<?php echo URL_ROOT; ?>arztqualifikation">Wie erkenne ich die Qualifikation eines Arztes?</a>
                                        </li>
-->
                                        <li class="divider"></li>
                                        <li>
                                            <a href="<?php echo URL_ROOT; ?>internetrat">Was kann das Internet für Ihre Gesundheit leisten und was nicht?</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="<?php echo URL_ROOT; ?>selbsttests">Selbsttests bei Nahrungsmittel-Unverträglichkeiten</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="<?php echo URL_ROOT; ?>iggtests">Wie sinnvoll sind IgG-Antikörper-Tests (ELISA)?</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="divider"></li>
                                <li class="dropdown-submenu">
                                    <a href="<?php echo URL_ROOT; ?>faq">Fragen und Antworten (FAQ)</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                <a href="<?php echo URL_ROOT; ?>kurzinfos">Kurzinfos</a>
                                </li>
                                <li class="divider"></li>
                                <li class="dropdown-submenu">
                                    <a href="<?php echo URL_ROOT; ?>nahrungsmittelunvertraeglichkeiten">Unvertr&auml;glichkeiten</a>
                                    <ul id="faq-popup_intoleranzen" class="dropdown-menu">
                                        <li class="dropdown-submenu">
                                            <a href="<?php echo URL_ROOT; ?>laktose">Laktose-Intoleranz</a>
                                            
                                            <!-- FAQ - Laktose-Intoleranz - Unterseiten -->
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>laktose">Laktose-Intoleranz</a>
                                                </li>
<!--
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>milch">Informationen &uuml;ber Milch</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>kaese">K&auml;se &ndash; alles K&auml;se?</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>laktase">Informationen zu Laktase-Pr&auml;paraten</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>praeparatetest">Pr&auml;parate-Tests</a>
                                                </li>

                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>studienauswertung">Auswertung der Laktase-Studie</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>probiotika">Probiotika statt Laktase?</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>probiotika-studienauswertung">Auswertung der Probiotika-Studie</a>
                                                </li>
-->
                                            </ul>
                                        </li>

                                        <li class="divider"></li>
                                        <li class="dropdown-submenu">
                                            <a href="<?php echo URL_ROOT; ?>fma">Fruktose-Intoleranz</a>

                                          
                                            <!-- FAQ - Fruktose-Intoleranz - Unterseiten -->
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>fma">Fruktose-Intoleranz (Fruktose-Malabsorption)</a>
                                                </li>

<!--
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>fmadiagnose">Diagnosemethoden zur Ermittlung <br />einer Fruktose-Intoleranz</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>fmabehandlung">Behandlung der Fruktose-Intoleranz</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>fmaernaehrung">Ern&auml;hrung bei Fruktose-Intoleranz</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>fma-depressionen">Fruktose-Malabsorption und Depressionen</a>
                                                </li>
                                                <li class="divider"></li>
-->
                                            </ul>
                                        </li>
                                        <li class="divider"></li>
                                        <li class="dropdown-submenu">
                                            <a href="<?php echo URL_ROOT; ?>oligosaccharide">Oligosaccharid-Unvertr&auml;glichkeit</a>

                                            <!-- FAQ - Oligosaccharid-Unvertraeglichkeit - Unterseiten -->
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>oligosaccharide">Oligosaccharid-Unvertr&auml;glichkeit</a>
                                                </li>
<!--

                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>oligosaccharide-diagnose">Diagnose der <br />Oligosaccharid-Unvertr&auml;glichkeit</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>oligosaccharide-behandlung">Behandlung der <br />Oligosaccharid-Unvertr&auml;glichkeit</a>
                                                </li>
-->

                                            </ul>
                                        </li>
                                        <li class="divider"></li>
                                        <li class="dropdown-submenu">
                                            <a href="<?php echo URL_ROOT; ?>gluten">Z&ouml;liakie und Gluten-Sensitivit&auml;t</a>
                            				<!-- FAQ - Zoeliakie - Unterseiten -->
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>gluten">Z&ouml;liakie und Gluten-Sensitivit&auml;t</a>
                                                </li>
<!--

                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>gluten">Z&ouml;liakie und Gluten-Sensitivit&auml;t</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>zoeliakie">Z&ouml;liakie &ndash; was ist das?</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>zoeliakie-diagnose">Diagnose der Z&ouml;liakie</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>glutensensitivitaet">Gluten-Sensitivit&auml;t &ndash; was ist das?</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>glutensensitivitaet-diagnose">Diagnose der Gluten-Sensitivit&auml;t</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>zoeliakie-behandlung">Behandlung von Z&ouml;liakie und Gluten-Sensitivit&auml;t</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>weizenallergie">Weizenallergie</a>
                                                </li>
-->

                                            </ul>
                                        </li>
                                        <li class="divider"></li>
                                        <li class="dropdown-submenu">
                                            <a href="<?php echo URL_ROOT; ?>pseudoallergien">Histamin, Glutamat, Salicylat</a>
                                            <!-- FAQ - Pseudo-Allergie - Unterseiten -->
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>pseudoallergien">Histamin, Glutamat, Salicylat (Pseudoallergien)</a>
                                                </li>
<!--
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>wasisthi">Histamin-Intoleranz</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>salicylatintoleranz">Salicylat-Intoleranz</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>glutamat">Glutamat-Intoleranz</a>
                                                </li>
-->
                                            </ul>
                                        </li>   
                                        <li class="divider"></li>             
                                        <li class="dropdown-submenu">
                                            <a href="<?php echo URL_ROOT; ?>multiunvertraeglichkeit">Multiple Unvertr&auml;glichkeiten</a>
                                        </li>
                                        <li class="divider"></li>             
                                        <li class="dropdown-submenu">
                                            <a href="<?php echo URL_ROOT; ?>oxalate">Oxalatbelastung</a>
                                        </li>
                                        <li class="divider"></li>             
                                        <li class="dropdown-submenu">
                                            <a href="<?php echo URL_ROOT; ?>praeparatetest">Pr&auml;parate-Tests</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li class="dropdown-submenu">
                                            <a href="<?php echo URL_ROOT; ?>nmu-behandlung">Behandlungs-Grunds&auml;tze</a>
                                            <!-- FAQ - Behandlungs-Grundsätze - Unterseiten -->
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>nmu-behandlung">Behandlungs-Grunds&auml;tze <br />bei Nahrungsmittel-Unvertr&auml;glichkeiten</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>selbsttests">Selbsttests <br />bei Nahrungsmittel-Unverträglichkeiten</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>iggtests">Wie sinnvoll sind IgG-Tests (ELISA)?</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>nmu-karenz">Karenz</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>nmu-fasten">Fasten als Vorbereitung der Karenz</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>zeitmanagement">Zeitmanagement bei Nahrungsmittel-Unverträglichkeiten und SIBO</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>zuckerkrankheiten">Wird man von Zuckergenuss krank &ndash; und wenn ja, warum?</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>ganz-genuss">Genießen bei Nahrungsmittel-Unvertr&auml;glichkeiten &ndash; ja bitte!</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>darmgymnastik">Darmgymnastik</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="divider"></li>             
                                        <li class="dropdown-submenu">
                                            <a href="<?php echo URL_ROOT; ?>atemtest">Grundlagen von Atemtests</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li class="dropdown-submenu">
                                            <a href="<?php echo URL_ROOT; ?>abgrenzung">Abgrenzung</a>
                                            <!-- FAQ - Abgrenzung Unvertr. Allergie - Unterseiten -->
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>abgrenzung">Abgrenzung Unvertr&auml;glichkeit / Allergie</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="divider"></li>
                                <li class="dropdown-submenu">
                                    <a href="<?php echo URL_ROOT; ?>rds-wasistdas">Reizdarm-Syndrom (RDS)</a>
                				    <!-- Reizdarm-Syndrom -->
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="<?php echo URL_ROOT; ?>rds-wasistdas">Reizdarm-Syndrom &ndash; was ist das?</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="<?php echo URL_ROOT; ?>rds-diagnose">Diagnose des Reizdarm-Syndroms</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="<?php echo URL_ROOT; ?>rds-ursachen">Ursachen des Reizdarm-Syndroms</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="<?php echo URL_ROOT; ?>rds-ursache-sibo">D&uuml;nndarmfehlbesiedelung <br />als Ursache des Reizdarm-Syndroms</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="<?php echo URL_ROOT; ?>rds-behandlung">Behandlung des Reizdarm-Syndroms</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="<?php echo URL_ROOT; ?>reflux">Sodbrennen und Reflux</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="<?php echo URL_ROOT; ?>fodmaps">FODMAP-Diät</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="divider"></li>
                                <li class="dropdown-submenu">
                                    <a href="<?php echo URL_ROOT; ?>duenndarmfehlbesiedelung">D&uuml;nndarmfehlbesiedelung</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="<?php echo URL_ROOT; ?>duenndarmfehlbesiedelung">D&uuml;nndarmfehlbesiedelung <br />und ihre Behandlung</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="<?php echo URL_ROOT; ?>atemtest">Grundlagen von Atemtests</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="<?php echo URL_ROOT; ?>atemtest-duenndarmfehlbesiedelung">Wasserstoff-Atemtest zur Diagnose <br />der D&uuml;nndarmfehlbesiedelung</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="<?php echo URL_ROOT; ?>enzyme">Enzyme</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="<?php echo URL_ROOT; ?>vitalpilze">Vitalpilze</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="<?php echo URL_ROOT; ?>rds-ursache-sibo">D&uuml;nndarmfehlbesiedelung <br />als Ursache des Reizdarm-Syndroms</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="<?php echo URL_ROOT; ?>fodmaps">FODMAP-Diät</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="<?php echo URL_ROOT; ?>antibiotika">Antibiotika und Darmgesundheit</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="<?php echo URL_ROOT; ?>reflux">Sodbrennen und Reflux</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="<?php echo URL_ROOT; ?>siboschulung">Schulungen für Mediziner und Berater</a>
                                        </li>
                                    </ul>
                                <li class="divider"></li>
                                <li class="dropdown-submenu">
                                    <a href="<?php echo URL_ROOT; ?>praeparatetest">Präparate</a>
                                    
                                    <!-- Präparate -->
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="<?php echo URL_ROOT; ?>nahrungsergaenzungsmittel">Grundsätze von Nahrungsergänzungsmitteln </a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="<?php echo URL_ROOT; ?>nebenwirkungen">Neben- und Wechselwirkungen von Medikamenten</a>
                                        </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>praezisionsprobiotika">Präzisionsprobiotika oder Gießkannenprinzip?</a>
                                                </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="<?php echo URL_ROOT; ?>ganz-vitamine">Vitamine und Mineralstoffe</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="<?php echo URL_ROOT; ?>ganz-vitamin-d">Vitamin D und Sonne</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="<?php echo URL_ROOT; ?>ganz-omega3">Omega-3 Fettsäuren</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="<?php echo URL_ROOT; ?>enzyme">Enzyme</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="<?php echo URL_ROOT; ?>praeparatetest">Präparate-Tests</a>
                                        </li>
                                    </ul>
                                <li class="divider"></li>
                                <li class="dropdown-submenu">
                                    <a href="<?php echo URL_ROOT; ?>darmgesundheit">Darmgesundheit</a>
                                    <!-- Darmgesundheit - Unterseiten -->
                                     <ul class="dropdown-menu" id="faq-popup_darmgesundheit">
                                        <li class="dropdown-submenu">
                                            <a href="<?php echo URL_ROOT; ?>darmgesundheit">Darmgesundheit &ndash; allgemein</a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>darmgesundheit">Gesunder Darm &ndash; gesunder Mensch</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>verdauung">Gesunde Verdauung</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>darmschleimhaut">Darmschleimhaut &ndash; Aufbau, Funktion und Pflege</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>darmfloragrundsatz">Grundsätzliches über die Mikrobiota (Darmflora)</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="verdauungsdruesen" target=_blank">Die Verdauungsdrüsen und ihre Bedeutung für die Verdauung</a>
                                                </li> 
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>stuhlgang">Stuhlgang &ndash; Probleme und Lösungen</a>
                                                </li>
                                            </ul> 
                                        </li>  
                                        <li class="divider"></li>                 
                                        <li class="dropdown-submenu">
                                            <a href="<?php echo URL_ROOT; ?>antibiotika">Störungen</a>
                    				        <!-- Ernährung -->
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>antibiotika">Antibiotika und Darmgesundheit</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                     <a href="<?php echo URL_ROOT; ?>reflux">Sodbrennen und Reflux</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>ganz-galle">Gallenfunktionsstörungen</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>ganz-pankreas">Funktionsstörungen der Bauchspeicheldrüse</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>ganz-magen">Funktionsstörungen des Magens</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                      <a href="<?php echo URL_ROOT; ?>ced">Chronisch entz&uuml;ndliche Darmerkrankungen</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                     <a href="<?php echo URL_ROOT; ?>ganz-parasiten">Parasiten- und Pilzbesiedelung des Darms</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                     <a href="<?php echo URL_ROOT; ?>ganz-genussmittel">Genussmittel bei Darmempfindlichkeit</a>
                                                </li>
                                           </ul>
                                        </li>
                                        <li class="divider"></li>
                                        <li class="dropdown-submenu">
                                            <a href="<?php echo URL_ROOT; ?>akupressur">Hilfreiche Maßnahmen</a>
                        				    <!-- Entspannung -->
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>verantwortung">Verantwortung für die eigene Verdauung übernehmen</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>autovaccinen">Autovaccinen</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>praezisionsprobiotika">Präzisionsprobiotika oder Gießkannenprinzip?</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>akupressur">Akupressur bei Magen-/Darmproblemen</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>atmen">Atem und Verdauung</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>darmgymnastik">Darmgymnastik</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>videos#podcasts">Darmbakterien-Meditation</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>vitalpilze">Vitalpilze</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>ganz-gaergetraenke">Probiotische Gärgetränke</a>
                                                </li>
                                           </ul>
                                        </li>
                                        <li class="divider"></li>
                                        <li class="dropdown-submenu">
                                            <a href="<?php echo URL_ROOT; ?>trinkwasser">Verschiedenes</a>
        				                    <!-- Störungen -->
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>darmreinigung">Darmreinigung</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                     <a href="<?php echo URL_ROOT; ?>krisenverdauung">Krisen &ndash; Auswirkungen auf die Verdauung</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>trinkwasser">Chlor im Trinkwasser</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>glyphosat">Glyphosat</a>
                                                </li>
                                           </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="divider"></li>
                                <li class="dropdown-submenu">
                                    <a href="<?php echo URL_ROOT; ?>ganz-gesund">Ganzheitliche Gesundheit</a>
                                    <!-- Ganzheitliche Gesundheit - Unterseiten -->
                                     <ul class="dropdown-menu" id="faq-popup_ganzheitlichegesundheit">
                                        <li class="dropdown-submenu">
                                            <a href="<?php echo URL_ROOT; ?>ganz-gesund">Ganzheitliche Gesundheit &ndash; allgemein</a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>ganz-gesund">Ganzheitliche Gesundheit</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>ganz-saeulenmodell">Die Säulen der ganzheitlichen Gesundheit</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>ganz-verdauungssystem">Abbildung des Verdauungssystems</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>ganz-immun">St&auml;rkung des Immunsystems</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>enzyme">Enzyme</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>gewichtsreduktion">Gewichtsreduktion</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>bewegung">Bewegung und Sport</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>wasser">Wasser zur Unterstützung der Gesundheit</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>ganz-healthtogo">Health to go</a>
                                                </li>
                                            </ul> 
                                        </li>  
                                        <li class="divider"></li>                 
                                        <li class="dropdown-submenu">
                                            <a href="<?php echo URL_ROOT; ?>ganz-ernaehrung">Ernährung</a>
                    				        <!-- Ernährung -->
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>ganz-ernaehrung">Was ist gesunde Ernährung?</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>ganz-vegan">Vegane Ern&auml;hrung &ndash; wie gesund ist sie?</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>fodmaps">FODMAP-Diät</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>ganz-kochmedizin">Medizin aus dem Kochtopf</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>superfood">Superfood &ndash; super gut?</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>bitterstoffe">Bitterstoffe und ihre Bedeutung für eine gesunde Verdauung</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>ganz-gaergetraenke">Probiotische Gärgetränke</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>trinkwasser">Chlor im Trinkwasser</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>ganz-vitamine">Vitamine und Mineralstoffe</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>ganz-vitamin-d">Vitamin D und Sonne</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>ganz-omega3">Omega-3 Fettsäuren</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>milch">Informationen über Milch</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>kaese">K&auml;se &ndash; alles K&auml;se?</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>ganz-zuckerempfehlung">Empfehlenswerte S&uuml;&#223;ungsmittel</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>zuckerkrankheiten">Wird man von Zuckergenuss krank &ndash; und wenn ja, warum?</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>ganz-genuss">Genießen bei Nahrungsmittel-Unvertr&auml;glichkeiten &ndash; ja bitte!</a>
                                                </li>
                                           </ul>
                                        </li>
                                        <li class="divider"></li>
                                        <li class="dropdown-submenu">
                                            <a href="<?php echo URL_ROOT; ?>ganz-entspannung">Entspannung</a>
                        				    <!-- Entspannung -->
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>ganz-entspannung">Entspannung</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>ganz-rhythmus">Rhythmus</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>akupressur">Akupressur bei Magen-/Darmproblemen</a>
                                                </li>
                                           </ul>
                                        </li>
                                        <li class="divider"></li>
                                        <li class="dropdown-submenu">
                                            <a href="<?php echo URL_ROOT; ?>ganz-vorspann">Störungen</a>
        				                    <!-- Störungen -->
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>ganz-vorspann">Verdauungsbeeinflussende St&ouml;rungen</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>ganz-magendarm">Magen-/Darmbeschwerden</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>reflux">Sodbrennen und Reflux</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>antibiotika">Antibiotika und Darmgesundheit</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>ganz-reisedurchfall">Reisedurchfall (Reisediarrhoe)</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>ganz-schilddruese">Schilddrüsenfunktionsstörungen</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>verdauungsdruesen">Verdauungsdrüsen</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>ganz-galle">Gallenfunktionsstörungen</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>ganz-pankreas">Funktionsstörungen der Bauchspeicheldrüse</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>ganz-magen">Funktionsstörungen des Magens</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>ganz-parasiten">Parasiten- und Pilzbesiedelung des Darms</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="<?php echo URL_ROOT; ?>ganz-genussmittel">Genussmittel bei Darmempfindlichkeit</a>
                                                </li>
                                           </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="divider"></li>
                                <li class="dropdown-submenu">
                                    <a href="<?php echo URL_ROOT; ?>lexika">Lexika</a>
                                    
                                    <!-- Lexika -->
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="<?php echo URL_ROOT; ?>lexikon-li-begriffe">Begriffe Laktose-Intoleranz</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="<?php echo URL_ROOT; ?>lexikon-darmerkrankungen">Darmerkrankungen und <br />Nahrungsmittel-Unverträglichkeiten</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="<?php echo URL_ROOT; ?>lexikonzucker">Zucker/S&uuml;&szlig;ungsmittel</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="<?php echo URL_ROOT; ?>lexikon-naturheilmethoden">Naturheilmethoden</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="divider"></li>
<!--
                                <li class="dropdown-submenu">                            
                                    <a href="<?php echo URL_ROOT; ?>auswertungen">Studien und Auswertungen</a>                            
                                    <ul class="dropdown-menu">                                
                                        <li>                                
                                            <a href="<?php echo URL_ROOT; ?>studienauswertung">Laktase-Präparate</a>                                
                                        </li>
                                        <li class="divider"></li>                                
                                        <li>                                
                                            <a href="<?php echo URL_ROOT; ?>probiotika-studienauswertung">Probiotika</a>                                
                                        </li>                      
                                    </ul>                        
                                </li>  
                                <li class="divider"></li>                                        

                                <li class="dropdown-submenu">                            
                                    <a href="<?php echo URL_ROOT; ?>bestimmungen">Gesetzliche Bestimmungen</a>                            
                                    <ul class="dropdown-menu">                                
                                        <li>                                
                                            <a href="<?php echo URL_ROOT; ?>bestimmungen">Gesetzliche Bestimmungen</a>                                
                                        </li>
                                        <li class="divider"></li>                                
                                        <li>                                
                                            <a href="<?php echo URL_ROOT; ?>siegel">Bio-Siegel für Nahrungsmittel</a>                                
                                        </li> 
                                        <li class="divider"></li>                               
                                        <li>                                
                                            <a href="<?php echo URL_ROOT; ?>lmiv">Die neue Lebensmittel-<br />informationsverordnung (LMIV)</a>                                
                                        </li> 
                                        <li class="divider"></li>                               
                                        <li>                                
                                            <a href="<?php echo URL_ROOT; ?>genlabelling">Labelling von Gentechnik</a>                                
                                        </li>                            
                                    </ul>                        
                                </li> 
                                <li class="divider"></li>                                
                                
-->                                
                                <li class="dropdown-submenu">                            
                                    <a href="<?php echo URL_ROOT; ?>reisetipps">Reisen</a>                            
                                    <ul class="dropdown-menu">                                
                                        <li>                                
                                            <a href="<?php echo URL_ROOT; ?>reisetipps">Allgemeine Reise-Tipps</a>                                
                                        </li> 
                                        <li class="divider"></li>                               
                                        <li>                                
                                            <a href="<?php echo URL_ROOT; ?>reiseberichte">Reiseberichte</a>                                
                                        </li>
                                        <li class="divider"></li>                       
                                        <li>                                
                                        <a href="<?php echo URL_ROOT; ?>ganz-reisedurchfall">Reisedurchfall (Reisediarrhoe)</a>                                
                                        </li>                            
                                    </ul>                        
                                </li>  
                            </ul>
                        </li>
                        <!-- Menu Buchauswahl -->
                        <li class="dropdown">
                            <a href="books" class="dropdown-toggle" data-toggle="dropdown">B&uuml;cher/Fachbeiträge <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu">
                                    <a href="<?php echo URL_ROOT; ?>books">B&uuml;cher</a>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="<?php echo URL_ROOT; ?>book-darmgymnastik">Darmgymnastik</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="<?php echo URL_ROOT; ?>book-ddfb">D&uuml;nndarmfehlbesiedelung</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="<?php echo URL_ROOT; ?>book-laktoseintoleranzbuch">Das Laktose-Intoleranz Buch</a>
                                    </li>
                                </li>
                                </li>
                                <li class="divider"></li>
                                <li class="dropdown-submenu">
                                    <a href="<?php echo URL_ROOT; ?>book-nmu">Nahrungsmittelallergien<br /> und -unvertr&auml;glichkeiten</a></li>
                                <li class="divider"></li>
                                <li class="dropdown-submenu">
                                    <a href="<?php echo URL_ROOT; ?>paas-heftchen-gesamt">Paas&#039;sche Heftchenreihe</a>
                                    <!-- Paas'sche Heftchenreihe - Unterseiten -->
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="<?php echo URL_ROOT; ?>paas-heftchen-ge">Kurz und klar: Gesunde Ern&auml;hrung</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="<?php echo URL_ROOT; ?>paas-heftchen-gv">Kurz und klar: Gesunde Verdauung</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="<?php echo URL_ROOT; ?>paas-heftchen-mu">Kurz und klar: Milchzucker-Unvertr&auml;glichkeit</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="<?php echo URL_ROOT; ?>paas-heftchen-fu">Kurz und klar: Fruchtzucker-Unvertr&auml;glichkeit</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="<?php echo URL_ROOT; ?>paas-heftchen-oi">Kurz und klar: Oligosaccharid-Unvertr&auml;glichkeit</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="<?php echo URL_ROOT; ?>paas-heftchen-gluten">Kurz und klar: Z&ouml;liakie und Gluten-Sensitivit&auml;t</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="<?php echo URL_ROOT; ?>paas-heftchen-kinderzoeliakie">Kurz und klar: Mein Kind hat Z&ouml;liakie</a>
                                        </li>
<!--                                        <li class="divider"></li>
                                        <li>
                                            <a href="<?php echo URL_ROOT; ?>paas-heftchen-rds">Kurz und klar: Reizdarm-Syndrom</a>
                                        </li>
-->
                                    </ul>
                                </li>
                                <li class="divider"></li>
                                <li class="dropdown-submenu">
                                    <a href="<?php echo URL_ROOT; ?>fachbeitraege">Fachveröffentlichungen</a>
                                </li>
                                <li class="divider"></li>
                                <li class="dropdown-submenu">
                                    <a href="<?php echo URL_ROOT; ?>fremdliteratur">Bücher anderer Autoren</a>
                                </li>
                            </ul>
                        </li>
                        <!-- Menu Videos -->
                        <li class="dropdown">
                            <a href="<?php echo URL_ROOT; ?>videos" class="dropdown-toggle" data-toggle="dropdown">Videos <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="<?php echo URL_ROOT; ?>videos">Tutorials &ndash; Videos und Podcasts</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="<?php echo URL_ROOT; ?>rezepte">Rezepte für leckere Gerichte</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="<?php echo URL_ROOT; ?>hautpflege">Rezepte für Hautpflegeprodukte</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="<?php echo URL_ROOT; ?>tv-beitraege">TV- und Radio-Beiträge</a>
                                </li>
                            </ul>
                        </li>
                        <!-- Menu GGB -->
                        <li class="dropdown">
                            <a href="<?php echo URL_ROOT; ?>beratung" class="dropdown-toggle" data-toggle="dropdown">Praxis <b class="caret"></b></a>
                            <ul id="blog-popup" class="dropdown-menu">
                                <li>
                                    <a href="<?php echo URL_ROOT; ?>beratung">Beratung</a>
                                </li>
                                <li class="divider"></li>
                                        <li>
                                            <a href="ggb-profil" target="_blank">Meine Grundsätze und mein Profil</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="ggb-schwerpunkte" target="_blank">Meine Schwerpunkte</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="ggb-behandlungskonzept" target="_blank">Bausteine (m)eines Behandlungskonzepts</a>
                                        </li>
                                            <li class="divider"></li>
                                        <li>
                                            <li><a href="<?php echo URL_ROOT; ?>vita">Vita</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="beratung-erstgespraech" target="_blank">Erstgespräch</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="ggb-kosten" target="_blank">Honorar für Beratungen</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="agb" target="_blank">AGBs</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                             <a href="<?php echo FILES_PATH; ?>praxiswegweiser.pdf">Wegweiser</a>
                                        </li>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="<?php echo URL_ROOT; ?>email-anfrage">Hinweise zu eMail-Anfragen</a>
                                    </li>
                            </ul>
                        </li>
                        <!-- Menu Newsletter/Downloads -->
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown">Newsletter/Downloads <b class="caret"></b></a>
                            <ul id="newsletterdownloads-popup" class="dropdown-menu">
                                <li class="dropdown-submenu">
                                    <a href="<?php echo URL_ROOT; ?>newsletter">kostenloser Newsletter</a>
                    				<!--  Newsletter - Unterseiten -->
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="<?php echo URL_ROOT; ?>newsletter#newsletterabo">abonnieren</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="<?php echo URL_ROOT; ?>newsletter#newsletterstop">abbestellen</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="<?php echo URL_ROOT; ?>newsletter#aktuellernewsletter">Aktueller Newsletter</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="<?php echo URL_ROOT; ?>newsletter#archiv">Newsletter-Archiv</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="<?php echo URL_ROOT; ?>datenschutzv">Datenschutzerklärung</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="divider"></li>
                                <li class="dropdown-submenu">
                                    <a href="<?php echo URL_ROOT; ?>downloads">kostenlose Downloads</a>
                    				<!-- Downloads - Unterseiten -->
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="<?php echo URL_ROOT; ?>downloads#selbstdiagnose">Fragebogen zur Selbstdiagnose</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="<?php echo URL_ROOT; ?>downloads#tagebuch">Vorlage für ein Verzehrtagebuch</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="<?php echo URL_ROOT; ?>downloads#bilanzprotokoll">Vorlage für ein Bilanz-Protokoll</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="<?php echo URL_ROOT; ?>downloads#infoblatt">Infoblatt für Freunde</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="<?php echo URL_ROOT; ?>downloads#zutatenliste">Bezeichnungen auf Zutatenlisten</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="divider"></li>
                                <li class="dropdown-submenu">
                                    <a href="<?php echo URL_ROOT; ?>guterrat">War das ein guter Rat?</a>
                                </li>
                                <li class="divider"></li>
                                <li class="dropdown-submenu">
                                    <a href="<?php echo URL_ROOT; ?>hilfe">Hilfe</a>
                                </li>
                            </ul>
                        </li>
                        <!-- Menu Shop -->
                        <li class="dropdown">
                            <a href="<?php echo URL_ROOT; ?>shop" class="dropdown-toggle" data-toggle="dropdown">Shop <b class="caret"></b></a>
                            <ul id="shop-popup" class="dropdown-menu">
                			    <!-- FAQ - Shop - Unterseiten -->
                                <li>
                                    <a href="<?php echo URL_ROOT; ?>shop">Shop</a>
                                </li>
                                    <!-- Shop - Unterseiten -->
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="<?php echo URL_ROOT; ?>book-ddfb">Gedrucktes Buch</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="<?php echo URL_ROOT; ?>book-ddfb#ebook">eBook</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="<?php echo URL_ROOT; ?>book-ddfb#buchbeschreibung">Buchbeschreibung</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="<?php echo URL_ROOT; ?>book-ddfb#inhaltsverzeichnis">Inhaltsverzeichnis</a>
                                        </li>
                                    </ul>




                                <li class="divider"></li>
                                <li>
                                    <a href="<?php echo URL_ROOT; ?>basket">Warenkorb</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="<?php echo URL_ROOT; ?>agb#versandkosten">Versandkosten</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="<?php echo URL_ROOT; ?>agb">AGB</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="<?php echo URL_ROOT; ?>datenschutz">Datenschutzerklärung</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="<?php echo URL_ROOT; ?>hilfe">Hilfe</a>
                                </li>
                            </ul>
                        </li>
                        <?php if(!checkLoginToken()) { ?>
                            <li><a href="<?php echo URL_ROOT; ?>login">Login</a></li>
                        <?php } else { ?>
                            <li><a href="<?php echo URL_ROOT; ?>logout">Logout</a></li>
                        <?php } ?>
                    </ul>
                </div>
                


                <!-- Menü für Mobile Webseite -->



                <ul id="nav-mobile" class="side-nav">
                    <li><a href="<?php echo URL_ROOT; ?>sitemap-html"><b>&#149; Sitemap für Smartphones</b></a></li>

                    <li class="sectionhead">&#149; Doris Paas</li>
                    <li><a href="<?php echo URL_ROOT; ?>">Home</a></li>
                    <li><a href="<?php echo URL_ROOT; ?>vita">Vita</a></li>


<!--

                    <li><a href="<?php echo URL_ROOT; ?>guterrat">War das ein guter Rat?</a></li>
                    <li><a href="<?php echo URL_ROOT; ?>hilfe">Hilfe</a></li>
                    
                    <li><a href="<?php echo URL_ROOT; ?>lebensmittel-datenbank-abo"><b>&#149; DorisPaas.de &ndash; Lebensmittel-Datenbank</b></a></li>

-->
                    <li><a href="<?php echo URL_ROOT; ?>wissensdatenbank"><b>&#149; Wissensdatenbank</b></a></li>
                    <li><a href="<?php echo URL_ROOT; ?>lebensmittel-datenbank-info">DorisPaas.de &ndash; Lebensmittel-Datenbank</a></li>
                    <li><a href="<?php echo URL_ROOT; ?>nahrungsmittelunvertraeglichkeiten">Unverträglichkeiten</a></li>
                    <li><a href="<?php echo URL_ROOT; ?>duenndarmfehlbesiedelung">Dünndarmfehlbesiedelung</a></li>
                    <li><a href="<?php echo URL_ROOT; ?>ganz-gesund">Ganzheitliche Gesundheit</a></li>
                    <li><a href="<?php echo URL_ROOT; ?>lexika">Lexika</a></li>
                    
<!--
                    <li><a href="<?php echo URL_ROOT; ?>arztsuche">Erfolgreiche Arzt- und Beratersuche</a></li>
                    <li><a href="<?php echo URL_ROOT; ?>faq">Fragen&nbsp;&amp;&nbsp;Antworten</a></li>    
                    <li><a href="<?php echo URL_ROOT; ?>nahrungsmittelunvertraeglichkeiten">Unverträglichkeiten</a></li>                    
                    <li><a href="<?php echo URL_ROOT; ?>rds-wasistdas">Reizdarm-Syndrom (RDS)</a></li>
                    <li><a href="<?php echo URL_ROOT; ?>duenndarmfehlbesiedelung">Dünndarmfehlbesiedelung</a></li>                    
                    <li><a href="<?php echo URL_ROOT; ?>darmgesundheit">Darmgesundheit</a></li>                    
                    <li><a href="<?php echo URL_ROOT; ?>autovaccinen">Autovaccinen</a></li>
                    <li><a href="<?php echo URL_ROOT; ?>praezisionsprobiotika">Präzisionsprobiotika</a></li>                    
                    <li><a href="<?php echo URL_ROOT; ?>ganz-gesund">Ganzheitliche Gesundheit</a></li>                    
                    <li><a href="<?php echo URL_ROOT; ?>ganz-ernaehrung">Gesunde Ernährung?</a></li>                    
                    <li><a href="<?php echo URL_ROOT; ?>ganz-entspannung">Entspannung</a></li>                    
                    <li><a href="<?php echo URL_ROOT; ?>ganz-vorspann">Verdauungsbeeinflussende Störungen</a></li>    
                    <li><a href="<?php echo URL_ROOT; ?>lexika">Lexika</a></li>                    
                    <li><a href="<?php echo URL_ROOT; ?>reisetipps">Reisen</a></li>
-->                    

                    <li><a href="<?php echo URL_ROOT; ?>books"><b>&#149; Bücher</b></a></li>
<!--
                    <li><a href="<?php echo URL_ROOT; ?>book-darmgymnastik">Darmgymnastik</a></li>                    
                    <li><a href="<?php echo URL_ROOT; ?>book-ddfb">Dünndarmfehlbesiedelung</a></li>                    
                    <li><a href="<?php echo URL_ROOT; ?>book">Das Laktose-Intoleranz Buch</a></li>                                        
                    <li><a href="<?php echo URL_ROOT; ?>book2/cover">Nahrungsmittelallergien und -unverträglichkeiten</a></li>                    
                    <li><a href="<?php echo URL_ROOT; ?>paas-heftchen-gesamt">Paas&#039;sche Heftchenreihe</a></li>
                    
                                        
                    <li class="sectionhead">&#149; Fachveröffentlichungen</li>
                    <li><a href="<?php echo URL_ROOT; ?>fachbeitraege">Fachbeiträge</a></li>
                    <li><a href="<?php echo URL_ROOT; ?>fremdliteratur">Bücher anderer Autoren</a></li>
                    
                    <li class="sectionhead">&#149; Videos und Rezepte</li>
                    <li><a href="<?php echo URL_ROOT; ?>videos">Tutorials</a></li>
                    <li><a href="<?php echo URL_ROOT; ?>rezepte">Rezepte</a></li>
                    <li><a href="<?php echo URL_ROOT; ?>tv-beitraege">TV- und Radio-Beiträge</a></li>
-->
                    
                    <li><a href="<?php echo URL_ROOT; ?>beratung"><b>&#149; Praxis/Beratung</b></a></li>
                    <li><a href="<?php echo URL_ROOT; ?>ggb-profil">Meine Grundsätze und mein Profil</a></li>
                    <li><a href="<?php echo URL_ROOT; ?>ggb-schwerpunkte">Meine Schwerpunkte</a></li>
                    <li><a href="<?php echo URL_ROOT; ?>ggb-behandlungskonzept">Bausteine (m)eines erfolgreichen Behandlungskonzepts</a></li>
                    <li><a href="<?php echo URL_ROOT; ?>beratung-erstgespraech">Erstgespräch</a></li>
                    <li><a href="<?php echo URL_ROOT; ?>ggb-kosten">Honorar für Beratungen</a></li>

                    
                    <li class="sectionhead">&#149; Newsletter/Downloads</li>                    
                    <li><a href="<?php echo URL_ROOT; ?>newsletter">Newsletter</a></li>                                        
                    <li><a href="<?php echo URL_ROOT; ?>downloads">Downloads</a></li>
                    

                    <li><a href="<?php echo URL_ROOT; ?>shop"><b>&#149; Shop</b></a></li>
                    <li><a href="<?php echo URL_ROOT; ?>basket">Warenkorb</a></li>
                    <li><a href="<?php echo URL_ROOT; ?>agb">AGB</a></li>
                    <li><a href="<?php echo URL_ROOT; ?>datenschutz">Datenschutzerklärung</a></li>

<!--
                    <li><a href="<?php echo URL_ROOT; ?>archiv"><b>&#149; Archiv</b></a></li>
-->

                </ul>    
                <a href="<?php echo URL_ROOT; ?>#" data-activates="nav-mobile" class="button-collapse">
                    <i class="material-icons">menu</i>
                </a>
                <div id="login-mobile" class="mobile-login">
                    <?php if(!checkLoginToken()) { ?>
                        <a href="<?php echo URL_ROOT; ?>login">Login</a>
                    <?php } else { ?>
                        <a href="<?php echo URL_ROOT; ?>logout">Logout</a>
                    <?php } ?>
                </div>
            </ul>   
            </div>  
        </nav>

