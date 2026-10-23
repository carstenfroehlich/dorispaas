<?php
    $numEntries = countLexikonNmuEntries() * 1;
?>
        <div class="section no-pad-bot" id="index-banner">    
            <div class="container">      
                <br />
                <br />    
                <div class="right">Letzte Aktualisierung: <b><?= date( "j.n.Y", filemtime( __FILE__ ) ) ?></b></div>   
                <h1 class="header center orange-text">DorisPaas.de &ndash; Lebensmittel-Datenbank</h1>      
                <div class="row center">        
                    <h5 class="header col s12 light">Verträgliche und unverträgliche Lebensmittel suchen und finden 
                    <br />
                    bei mehreren gleichzeitig bestehenden Intoleranzen und bei Dünndarmfehlbesiedelung</h5>      
                </div>  
            </div>  
        </div>
        <div class="container">    
            <div class="section">   
                <div class="row relative-row minHeight">
                     <div class="col s12 m6 height100">          
                        <div class="icon-block height100">
                            <div class="video-wrapper">
                                <iframe src="//player.vimeo.com/video/249813922" <?= ( strpos( strtolower( $_SERVER[ "HTTP_USER_AGENT" ] ?? "" ), "webkit" ) !== FALSE ) ? "webkitallowfullscreen" : ( ( strpos( strtolower( $_SERVER[ "HTTP_USER_AGENT" ] ?? "" ), "gecko" ) !== FALSE ) ? "mozallowfullscreen" : "allowfullscreen" ) ?>></iframe>
                            </div>
                        </div>        
                    </div> 
                    <div class="col s12 m6">  
                        <a href="lebensmittel-datenbank"><img src="<?php echo IMG_PATH; ?>lebensmitteldatenbank.png" alt="" border="0" hspace="0" vspace="0" style="float: right; margin-left: 15px; padding-bottom: 0px;" /></a>
                        <br style="clear: right;" />
                        <a href="<?= URL_ROOT ?>lebensmittel-datenbank-info#system" style="float: right; margin-left: 0px; padding-bottom: 0px;">System-Voraussetzungen</a>
                        <br style="clear: right;" />        
                        <span  style="float: right; margin-left: 0px; padding-bottom: 0px;">Aktuelle Anzahl der Lebensmittel: <span class="numentr"><?= $numEntries ?></span></span>
                    </div>
                </div>
                <div class="row margintoprow">       
                    <div class="col s12 m12">
                        <img src="<?php echo IMG_PATH; ?>fodmapnotiz-oxalate.png" alt="" border="0" hspace="0" vspace="0" style="float: right; margin-left: 20px; padding-top: 25px; padding-bottom: 25px;" />
                        <br />
                        Im Internet und in der einschlägigen Literatur gibt es zahlreiche Listen, in 
                        denen verschiedenste Lebensmittel jeweils in Bezug auf die 
                        Verträglichkeit bei <b>einer</b> Nahrungsmittel-Intoleranz hin geprüft wurden. 
                        Haben Sie &#187;nur&#171; eine einzige Intoleranz, so ist die Auswahl der 
                        verträglichen Lebensmittel dadurch relativ einfach, denn in diesen &ndash; 
                        großenteils guten &ndash; Listen können Sie leicht ablesen, welche Lebensmittel 
                        in diesem Fall verträglich oder unverträglich sind.
                        <br />
                        <br />
                        Sehr viel schwieriger und vor allem umständlicher wird die Suche, wenn Sie an <b>zwei 
                        Intoleranzen gleichzeitig</b> leiden &ndash; und richtig kompliziert und zeitaufwändig, 
                        wenn es <b>sogar noch mehr Unverträglichkeiten</b> sind, auf die Sie achten müssen.
                        <br />
                        <br />
                        Und wenn Sie z.B. bei der Behandlung einer <b>Dünndarmfehlbesiedelung</b> neben der 
                        Beachtung einer oder mehrerer Unverträglichkeiten dann noch zusätzlich den FODMAP- und Schwefel-Gehalt mit 
                        berücksichtigen möchten, wird es meist völlig undurchschaubar.
                        <br />
                        <br />
                        <b>Oftmals weiß man wegen dieser Schwierigkeiten gar nicht, welch breite Palette an 
                        Nahrungsmitteln trotz allem verträglich sind, weil man in der Vielzahl der erforderlichen 
                        Prüfungen längst die Übersicht verloren hat und lieber übervorsichtig ist.</b>
                        <br />
                        <br />
                        Wie einfach wäre doch die Suche nach geeigneten und verträglichen Lebensmitteln, 
                        wenn man <b>in einer einzigen Liste</b> auswählen könnte, welche Lebensmittel gerade 
                        bei den eigenen verschiedenen Intoleranzen verträglich sind oder welche man tatsächlich 
                        meiden muss und die gleichzeitig auch Auskunft über den FODMAP-, Schwefel- und Oxalat-Gehalt gibt!
                        <br />
                        <br />
                        Und ganz optimal wäre es, wenn man dann noch unterscheiden könnte zwischen Lebensmitteln, 
                        die man in der Karenzphase meiden muss und welche in der Erprobungsphase nach und 
                        nach getestet werden können!
                        <br />
                        <hr>
                        <h5 style="font-weight: bold; color: red;">Alle diese Möglichkeiten haben Sie nun mit der DorisPaas.de &ndash; Lebensmittel-Datenbank!</h5>
                        <hr>
                        <br />
                        In dieser Datenbank sind <b>weit über 1500 verschiedene Lebensmittel</b> aufgeführt 
                        (die aktuelle Anzahl der Lebensmittel finden Sie oben rechts auf dieser Seite) und in Bezug auf ihre Verträglichkeit 
                        bei Nahrungsmittel-Intoleranzen und Nahrungsmittel-Allergien bewertet. 
                        <br />
                        <br />
                        <div class="col s12 m5">
                            <ul class="nav">
                                <li>
                                    <b>Folgende Nahrungsmittel-Intoleranzen berücksichtigt 
                                    <br />
                                    die Lebensmittel-Datenbank:</b>
                                </li> 
                                <li>
                                    <span class="normal">Laktose-Intoleranz</span>
                                </li> 
                                <li>
                                    <span class="normal">Fruktose-Intoleranz</span>
                                </li> 
                                <li>
                                    <span class="normal">Sorbit-Intoleranz</span>
                                </li> 
                                <li>
                                    <span class="normal">Histamin-Intoleranz</span>
                                </li> 
                                <li>
                                    <span class="normal">Oligosaccharid-Intoleranz</span>
                                </li> 
                                <li>
                                    <span class="normal">Zöliakie/Gluten-Sensitivität</span>
                                </li> 
                                <li>
                                    <span class="normal">Salicylat-Intoleranz</span>
                                </li> 
                                <li>
                                    <span class="normal">Allergenes Potenzial</span>
                                </li> 
                                <li>
                                    <span class="normal">Schwefel</span>
                                </li> 
                                <li>
                                    <span class="normal">Oxalate</span>
                                </li> 
                                <li>
                                    <span class="normal">FODMAP-Gehalt</span>
                                </li> 
                            </ul>
                        </div>
                        Zusätzlich sind die Lebensmittel <b>Kategorien</b> (z.B. Obst und Gemüse oder Milchprodukte 
                        etc.) zusammengefasst, damit die Übersichtlichkeit gewahrt bleibt. 
                        </div>
                        </div>
                        <div class="row">
                        <div class="col s12 m12">
                        <br />
                        <br />
                        <img src="<?php echo IMG_PATH; ?>ampelngruengelbrot.png" alt="" border="0" hspace="0" vspace="0" style="float: left; margin-left: 0px; padding-top: 0px; padding-bottom: 5px;" />
                        <br />
                        <br />
                        <br />
                        Für die Auswahl in Bezug auf Nahrungsmittel-Intoleranzen wird ein <b>einfaches Ampelsystem</b> mit 
                        den Farben grün, gelb und rot benutzt, um die Verträglichkeit darzustellen. 
                        Die Farben sind zusätzlich mit Symbolen verdeutlicht, so dass sie auch für farbschwache 
                        Menschen gut erkennbar sind. 
                        <br />
                        <br />
                        <img src="<?php echo IMG_PATH; ?>ampelnhochniedrig.png" alt="" border="0" hspace="0" vspace="0" style="float: left; margin-left: 0px; padding-top: 0px; padding-bottom: 5px;" />
                        <br />
                        <br />
                        <br />
                        Für die FODMAP-Gehalte &#187;niedrig&#171; und &#187;hoch&#171;
                        sind die Ampeln mit den Buchstaben &#187;H&#171; bzw. &#187;N&#171; gekennzeichnet. 
                        Die gelbe Farbe fordert Sie zum Lesen des Infofeldes auf.<br />
                        <br />
                        <img src="<?php echo IMG_PATH; ?>infobutton-75x75-infodatei.png" alt="" border="0" hspace="0" vspace="0" style="float: left; margin-left: 0px; padding-top: 0px; padding-bottom: 5px;" />
                        <br />
                        <br />
                        <br />
                        Da diese Einteilung relativ grob ist, gibt es für jedes Lebensmittel im 
                        <b>Infofeld</b> eine zusätzliche Beschreibung, in der ggf. auf Besonderheiten hingewiesen wird. 
                        <br />
                        <br />
                        <br />
                        <div class="col s12 m5">
                            <ul class="nav">
                                <li>
                                    <b>Mit Hilfe von Filtern können Sie suchen nach 
                                    <br />
                                    die Lebensmittel-Datenbank:</b>
                                </li> 
                                <li>
                                    <span class="normal">für Sie verträglichen bzw. unverträglichen Lebensmitteln</span>
                                </li> 
                                <li>
                                    <span class="normal">für Sie in der Karenzphase eventuell geeigneten Lebensmitteln </span>
                                </li> 
                                <li>
                                    <span class="normal">Lebensmitteln mit einem hohen bzw. niedrigen allergenen Potenzial </span>
                                </li> 
                                <li>
                                    <span class="normal">Lebensmitteln mit einem hohen bzw. niedrigen FODMAP-Gehalt </span>
                                </li> 
                                <li>
                                    <span class="normal">Lebensmitteln aus bestimmten Nahrungsmittel-Kategorien </span>
                                </li> 
                            </ul>
                        </div>
                        <img src="<?php echo IMG_PATH; ?>filteranwenden.png" alt="" border="0" hspace="0" vspace="0" style="float: left; margin-left: 0px; padding-top: 0px; padding-bottom: 5px;" />
                        <img src="<?php echo IMG_PATH; ?>filterzurueck.png" alt="" border="0" hspace="0" vspace="0" style="float: left; margin-left: 0px; padding-top: 0px; padding-bottom: 5px;" />
                        </div>
                        </div>
                        <div class="row">
                        <div class="col s12 m12">
                        <br />
                       <b>Alle Filter in dieser Datenbank können miteinander kombiniert werden. 
                        Auf diese Weise erhalten Sie mit dieser Datenbank die Möglichkeit, Ihren Speisezettel nicht 
                        nur Ihren verschiedenen Intoleranzen und einer FODMAP- und schwefelarmen Diät, sondern auch ganz 
                        einfach dem Status Ihrer Ernährungsumstellung (Karenzphase, Erprobungsphase oder Routine) anpassen 
                        zu können.</b>
                        <br />
                        <br />
                        Was diese Datenbank <b>nicht</b> enthält, sind <b>bestimmte</b> Produkte &ndash; also 
                        das Produkt A von der Firma XY oder das Produkt B von der Firma Z. Dies würde 
                        zum einen bei Hundertausenden von Produkten auf dem Nahrungsmittelmarkt jeden 
                        Rahmen sprengen. Zum anderen aber könnte eine solche Datenbank auch nie wirklich aktuell 
                        sein, denn die Hersteller ändern fast täglich ihre Rezepturen, so dass die Verlässlichkeit 
                        der Angaben nie gewährleistet sein könnte. Nur bei sehr vereinzelten Erzeugnissen
                        wird hier eine Ausnahme gemacht, wenn sie als Standard-Produkte auf fast jedem Einkaufszettel 
                        stehen oder aber, wenn sie aus anderen Gründen besonders interessant sind. Vor einer 
                        eventuell wechselnden Rezeptur wird dann jedoch im Infofeld gewarnt.
                        <br />
                        <br />
                        Da in der <b>DorisPaas.de &ndash; Lebensmittel-Datenbank</b> aber alle <b>Zutaten</b>
                        aufgeführt sind, können Sie nach einem Blick auf die Zutatenliste <b>für jedes Nahrungsmittel</b> 
                        selbst feststellen, ob dieses für Sie verträglich ist oder nicht &ndash; und dies 
                        <b>ganz zuverlässig und aktuell</b>.
                        <br />
                        <hr>
                        <b>Hinweise:</b> 
                        <br />
                        <br />
                        <b>Bezeichnungen:</b> Für einige Lebensmittel gibt es verschiedene Bezeichnungen (beispielsweise Blaubeeren und Heidelbeeren)
                        &ndash; teils auch mit großen regionalen Unterschieden (z.B. der deutsche Meerrettich und der österreichische Kren).
                        Damit jeder &#187;seine&#171; Lebensmittel unter den gewohnten Bezeichnungen findet ohne lange suchen zu müssen, sind diese 
                        alphabetisch unter den jeweiligen Bezeichnungen einsortiert.
                        <br />
                        <br />
                        <b>Mengenangaben:</b> Die jeweiligen Inhaltsstoffe sind nicht in Prozent oder Gramm angegeben, 
                        sondern mit einer Gewichtung wie z.B. &#187;große Mengen&#171; oder &#187;niedriger Gehalt&#171;.
                        Dies erfüllt den Zweck, Ihnen im Zusammenspiel mit den Ampelfarben zum einen eine gute Einschätzung
                        zu ermöglichen, auf der anderen Seite aber den Umfang dieses Tools nicht unnötig aufzublähen. 
                        Auf diese Weise haben Sie den besten Überblick über die Eignung der Lebensmittel in Ihrem Speisezettel .
                        <br />
                        <br />
                        <b>Salicylat-Intoleranz: </b> Die allermeisten Lebensmittel sind in Bezug auf ihre 
                        Verträglichkeit beim Salicylat-Intoleranzbewertet. Bei vereinzelten (weniger als 1%) aber konnten 
                        bisher noch keine Daten in den zahlreichen <a href="<?= URL_ROOT ?>lebensmittel-datenbank-info#quellen">Quellen</a> ermittelt 
                        werden, deshalb sind hier die entsprechenden
                        Spalten bis zur Ermittlung belastbarer Fakten leer.
                        <br />
                        <br />
                        <b>Allergenes Potenzial:</b> In Bezug auf Allergien kann nur das allgemeine 
                        Allergie-Potenzial angegeben werden. Es sind nur wenige Lebensmittel in der Spalte 
                        &#187;allergenes Potenzial&#171; mit &#187;grün&#171; gekennzeichnet, dies sind 
                        diejenigen, die für eine im Allgemeinen geringe allergene Potenz bekannt sind. 
                        Ist beim allergenen Potenzial kein Wert angegeben, bedeutet dies deshalb nicht, 
                        dass grundsätzlich keine Allergien gegen dieses Lebensmittel vorkommen können &ndash; 
                        lediglich die Wahrscheinlichkeit ist hier eher geringer. Im jeweiligen Info-Feld finden 
                        Sie auch oft Hinweise zu bestimmten Allergien oder problematischen Lebensmitteln wie u.a. 
                        <b>Nachtschattengewächse</b>,  <b>Korbblütler</b>, <b>Oxalat</b> oder auch <b>Nickel</b>.
                        <br />
                        <a id="abbildungen">&nbsp;</a>
                        <br />
                        <hr />
                        <h5>Abbildungen</h5>
                        <hr>
                        <br />
                        <br />
                        Und wie sieht sie nun aus, die Arbeitsoberfläche der <b>DorisPaas.de 
                        &ndash; Lebensmittel-Datenbank</b>? 
                        An dieser Stelle finden Sie vier verschiedene 
                        <a href="lebensmittel-datenbank-abbildungen" target="_blank">Abbildungen</a>, die 
                        Ihnen exemplarisch die Arbeits-Situationen ohne bzw. mit gesetzen Filtern auf dem PC bzw. auf dem Smartphone zeigen sollen:
                        <br />
                        <br /> 
                        <a href="lebensmittel-datenbank-abbildungen#abbildung1" target="_blank">Abbildung 1</a>
                        <br />
                        DorisPaas.de &ndash; Lebensmittel-Datenbank <b>ohne</b> aktivierte Filter auf dem PC
                        <br />
                        <br />
                        <a href="lebensmittel-datenbank-abbildungen#abbildung2" target="_blank">Abbildung 2</a>
                        <br />
                        DorisPaas.de &ndash; Lebensmittel-Datenbank <b>ohne</b> aktivierte Filter auf dem Smartphone
                        <br />
                        <br />
                        <a href="lebensmittel-datenbank-abbildungen#abbildung3" target="_blank">Abbildung 3</a>
                        <br />
                        DorisPaas.de &ndash; Lebensmittel-Datenbank <b>mit</b> beispielhaft ausgewählten, aktivierten Filtern auf dem PC
                        <br />
                        <br />
                        <a href="lebensmittel-datenbank-abbildungen#abbildung4" target="_blank">Abbildung 4</a>
                        <br />
                        DorisPaas.de &ndash; Lebensmittel-Datenbank auf dem Smartphone im Querformat
                        <br />
                        <br />
                        <br />
                        <hr />
                        <h5>Abonnement der Datenbank</h5>
                        <hr>
                        <br />
                        Die sorgfältige und verantwortungsbewusste Auswertung aller in der <b>DorisPaas.de &ndash; 
                        Lebensmittel-Datenbank</b> enthaltenen Lebensmittel hat allein für das Grundgerüst 
                        mehr als ein halbes Jahr in Anspruch genommen, wobei Grundlagenliteratur und aktuelle 
                        Bücher sowie die einschlägigen Internetseiten, aber auch Berichte von Betroffenen 
                        von mir ausgewertet wurden (<a href="<?= URL_ROOT ?>lebensmittel-datenbank-info#quellen" class="faqmenu">siehe Quellen</a>).
                        <br />
                        <br />
                        Weiterhin werden die Einträge durch kontinuierliche Beobachtung aller 
                        verfügbaren Quellen <b>laufend aktualisiert und ergänzt</b> (das aktuelle Datum 
                        und die aktuelle Anzahl der enthaltenen Begriffe entnehmen Sie bitte dem Eintrag 
                        ganz oben rechts auf der Seite).
                        <br />
                        <br />
                        Der Erstellung der <b>DorisPaas.de &ndash; Lebensmittel-Datenbank</b> liegt  
                        zudem eine aufwändige Programmierung zugrunde, damit Sie alle Funktionalitäten so
                        komfortabel wie möglich verwenden und die Vorteile optimal ausschöpfen können.
                        <br />
                        <br />
                        Aus diesem Grund wird für die Nutzung der <b>DorisPaas.de &ndash; Lebensmittel-Datenbank</b> 
                        eine Abogebühr erhoben. Sie haben die Möglichkeit, den Zugriff für <b>einen</b> 
                        Computer und zusätzlich auch für <b>Ihr</b> Smartphone
                        für drei verschiedene Zeitspannen zu abonnieren:
                        <br />
                        <br />
                        </div>
                        <table border="0" cellspacing="0" cellpadding="0" class="abotable">
                        <tr>
                            <th class="bestellv">
                                Abonnement
                            </th>
                            <th class="bestellw">
                                Beschreibung
                            </th>
                            <th class="bestellx">
                                Abo-
                                <br />
                                Preis
                            </th>
                            <th class="bestelly">
                                zum Shop
                            </th>
                        </tr>
                        
                        <tr>
                            <td class="bestellv">
                                <a href="shop#abos"><img src="<?php echo IMG_PATH; ?>lebensmitteldatenbank3.png" alt="" border="0" hspace="0" vspace="0" style="/*float: left; */margin-right: 0px; margin-left: 6px; margin-bottom: 0px;" /></a>
                            </td>
                            <td class="bestellw">
                                <b>Schnupper-Abo</b>
                                <br />
                                3 Monate lang
                                <br />
                                Zugriff von <b>einem</b> PC und <b>Ihrem</b> Smartphone auf die
                                <br />
                                <b>DorisPaas.de &ndash; 
                                <br />
                                Lebensmittel-Datenbank</b>  
                                <br />
                                <br />
                                (entspricht 30 Ct. pro Tag) 
                                </td>
                            <td class="bestellx">
                                <b>27,00 €</b>
                                <br />
                                <br />
                                <br />
                                <br />
                                <span style="font-size:0.7em; font-weight:lighter">Endpreis &ndash; 
                                <br />
                                nach §19UStG
                                <br />
                                kein zusätzlicher MwSt.-Aufschlag</span>
                            </td>
                            <td>
                                <a href="shop#abos" target="_blank"><img src="<?php echo IMG_PATH; ?>shop-zum.png" alt="" border="0" hspace="0" vspace="0" style="float: right; margin-right 0px: padding-bottom: 0px;" /></a></tr>
                            </td>
                        
                        <tr>
                            <td class="bestellv">
                                <a href="shop#abos"><img src="<?php echo IMG_PATH; ?>lebensmitteldatenbank6.png" alt="" border="0" hspace="0" vspace="0" style="/*float: left; */margin-right: 0px; margin-left: 6px; margin-bottom: 0px;" /></a>
                            </td>
                            <td class="bestellw">
                                <b>6-Monats-Abo</b>
                                <br />
                                6 Monate lang
                                <br />
                                Zugriff von <b>einem</b> PC und <b>Ihrem</b> Smartphone auf die
                                <br />
                                <b>DorisPaas.de &ndash; 
                                <br />
                                Lebensmittel-Datenbank</b>   
                                <br />
                                <br />
                                (entspricht 28 Ct. pro Tag) 
                                </td>
                            <td class="bestellx">
                                <b>51,00 €</b>
                                <br />
                                <br />
                                <br />
                                <br />
                                <span style="font-size:0.7em; font-weight:lighter">Endpreis &ndash; 
                                <br />
                                nach §19UStG
                                <br />
                                kein zusätzlicher MwSt.-Aufschlag</span>
                            </td>
                            <td>
                                <a href="shop#abos" target="_blank"><img src="<?php echo IMG_PATH; ?>shop-zum.png" alt="" border="0" hspace="0" vspace="0" style="float: right; margin-right 0px: padding-bottom: 0px;" /></a></tr>
                            </td>
                        </tr>
                        
                        <tr>
                            <td class="bestellv">
                                <a href="shop#abos"><img src="<?php echo IMG_PATH; ?>lebensmitteldatenbank12.png" alt="" border="0" hspace="0" vspace="0" style="/*float: left; */margin-right: 0px; margin-left: 6px; margin-bottom: 0px;" /></a>
                            </td>
                            <td class="bestellw">
                                <b>Jahres-Abo</b>
                                <br />
                                12 Monate lang
                                <br />
                                Zugriff von <b>einem</b> PC und <b>Ihrem</b> Smartphone auf die
                                <br />
                                <b>DorisPaas.de &ndash; 
                                <br />
                                Lebensmittel-Datenbank</b>
                                <br />   
                                <br />
                                (entspricht 26 Ct. pro Tag) 
                                </td>
                            <td class="bestellx">
                                <b>93,50 €</b>
                                <br />
                                <br />
                                <br />
                                <br />
                                <span style="font-size:0.7em; font-weight:lighter">Endpreis &ndash; 
                                <br />
                                nach §19UStG
                                <br />
                                kein zusätzlicher MwSt.-Aufschlag</span>
                            </td>
                            <td>
                                <a href="shop#abos" target="_blank"><img src="<?php echo IMG_PATH; ?>shop-zum.png" alt="" border="0" hspace="0" vspace="0" style="float: right; margin-right 0px: padding-bottom: 0px;" /></a></tr>
                            </td>
                        </tr>
                        
                        <tr>
                            <td class="bestellv">
                                <a href="shop#abos"><img src="<?php echo IMG_PATH; ?>lebensmitteldatenbankplus6.png" alt="" border="0" hspace="0" vspace="0" style="/*float: left; */margin-right: 0px; margin-left: 6px; margin-bottom: 0px;" /></a>
                            </td>
                            <td class="bestellw">
                                <b>Aboverlängerung</b>
                                <br />
                                6 Monate Verlängerung des
                                <br />
                                Zugriffs von <b>einem</b> PC und <b>Ihrem</b> Smartphone auf die
                                <br />
                                <b>DorisPaas.de &ndash; 
                                <br />
                                Lebensmittel-Datenbank</b>
                                <br />
                                <br />
                                (buchbar nur im Anschluss an 
                                eines der obigen Abos)
                                <br />
                                <br />
                                (entspricht 27 Ct. pro Tag)
                                </td>
                            <td class="bestellx">
                                <b>48,50 €</b>
                                <br />
                                <br />
                                <br />
                                <br />
                                <br />
                                <br />
                                <span style="font-size:0.7em; font-weight:lighter">Endpreis &ndash; 
                                <br />
                                nach §19UStG
                                <br />
                                kein zusätzlicher MwSt.-Aufschlag</span>
                            </td>
                            <td>
                                <a href="shop#abos" target="_blank"><img src="<?php echo IMG_PATH; ?>shop-zum.png" alt="" border="0" hspace="0" vspace="0" style="float: right; margin-right 30px: padding-bottom: 0px;" /></a></tr>
                            </td>
                        </tr>
                        
                        </tr>
                        </table>
                        
                        
                        <br />
                        <hr>
                        <a style="color: red;"><h5>Verlängerungs-Hinweis:</h5></a> 
                        <b>Das Abonnement wird nach Ablauf nicht 
                        automatisch verlängert</b> &ndash; Sie allein bestimmen, wie lange Sie den Zugriff 
                        auf die <b>DorisPaas.de &ndash; Lebensmittel-Datenbank</b> wünschen. 
                        Gerne können Sie jedoch bis zum Ablauf eines jeden Abos die weitere Nutzung für 
                        <b>vergünstigte 6 Monate</b> oder später auch jederzeit jede andere von Ihnen gewünschte Zeitspanne 
                        buchen. Sie erhalten kurz vor Ablauf Ihres Abos eine 
                        eMail und können entscheiden, ob Sie das Abo verlängern möchten. 
                        <br />
                        <a id="system">&nbsp;</a>
                        <hr />
                        <h5>System-Voraussetzungen</h5>
                        <hr>
                        <br />
                        <b>Betriebssystem Windows</b>: 
                        Windows XP, Windows 7 und Windows 10. 
                        <br />
                        <b>Browser</b>: Internet Explorer (ab Version 9), Firefox, Chrome. 
                        <br />
                        Hinweis für Nutzer von Windows XP: Der Zugriff auf die DorisPaas.de &ndash; Lebensmittel-Datenbank 
                        ist unter XP nicht mit dem Internet Explorer möglich, da dieses Betriebssystem den 
                        Internet Explorer nur bis Version 8 unterstützt. XP-Nutzer müssen einen anderen 
                        Browser installieren (z.B. Firefox oder Chrome).
                        <br />
                        <br />
                        <b>Betriebssystem MacOS</b>: 
                        MacOS 10
                        <br />
                        <b>Browser</b>: Google Chrome
                        <br />
                        <br />
                        Andere Betriebssytem-Versionen und/oder Browser sind möglich, jedoch nicht getestet.
                        <br />
                        <br />
                        <b>Zur Nutzung der &#187;DorisPaas.de &ndash; Lebensmittel-Datenbank ist eine Internetverbindung erforderlich.</b>
                        <br />
                        <hr class="double" />
                        <b>Bitte beachten Sie: Grundsätzlich ist die &#187;DorisPaas.de &ndash; Lebensmittel-Datenbank&#171; mobilfähig. 
                        Da es jedoch unzählige Hersteller für Android- und Apple-Smartphones gibt, 
                        kann eine störungsfreie Funktionalität nicht getestet und garantiert werden. 
                        Ggf. greifen Sie über einen Laptop oder Desktop-Computer mit den obigen Voraussetzungen auf die Website zu. </b>
                        <br />
                        <hr class="double" />
                        <a id="login">&nbsp;</a>
                        <br />
                        <a href="lebensmittel-datenbank" target="_blank">
                        <img src="<?php echo IMG_PATH; ?>lebensmitteldatenbank-login.png" alt="lebensmitteldatenbank login" style="float: left; margin-right: 30px; padding-bottom: 10px;" /></a>
                        <br />
                        Sie haben schon ein Abonnement gebucht? 
                        <br />
                        Hier gelangen Sie direkt zum <a href="lebensmittel-datenbank" target="_blank">Login</a>
                        <br />
                        <br />
                        <br />
                        <hr />
                        <a id="copyright">&nbsp;</a>
                        <br />
                        <b>&#169; Copyright-Hinweis:</b>
                        <br />
                        Sämtliche Daten und Funktionen der <b>DorisPaas &ndash; Lebensmittel-Datenbank</b> 
                        unterliegen seit 2013 dem Copyright von Doris Paas.
                        <br />
                        <br />
                        Die Nutzung der <b>DorisPaas &ndash; Lebensmittel-Datenbank</b> ist personengebunden 
                        und ausschließlich über eines der angebotenen <a href="shop#abos" target="_blank">Abonnements</a> möglich.
                        <br />
                        <br />
                        Weder Inhalte noch Funktionen dürfen kopiert, vervielfältigt oder in ausgedruckter 
                        oder digitaler Form weitergegeben werden. Bei widerrechtlicher Nutzung wird der 
                        Zugriff sofort gesperrt. Die im Voraus bezahlten Abonnement-Gebühren werden in 
                        diesem Falle nicht zurück erstattet.
                        <br />
                        <br />
                        
                        
                        <div class="obenlink">
                            <a href="javascript: scrollMainToTop();" class="nachoben">nach oben</a>
                        </div>
                        
                        <hr class="double" />
                        <a id="quellen">&nbsp;</a>
                        <br />
                        <p class="quellen">
                        <hr>
                        <h5>Quellen für die Bewertung der Verträglichkeit der Lebensmittel</h5>
                        <hr>
                        <br />
                        <b><i>Literatur:</b></i>
                        <br />
                        (alphabetisch nach Verfasser geordnet)
                        <br />
                        <br />
                        Altmann-Bereewe, Jutta: Nahrungsmittelallergien und Unverträglichkeiten
                        <br />
                        MEDiumBAU-Verlag, Rastede, 2001
                        <br />
                        <br />
                        Biller-Nagel, Gudrun et al: Gesund essen bei Morbus Crohn und Colitis ulcerosa
                        <br />
                        Trias-Verlag, Stuttgart, 2012
                        <br />
                        <br />
                        Constien, Anja et al: Praxisbuch Lebensmittelallergie
                        <br />
                        Südwest-Verlag, München, 2007
                        <br />
                        <br />
                        Fehrmann,Susanne: Allergien vom Tisch
                        <br />
                        Foitzick-Verlag, Augsburg, 2007
                        <br />
                        <br />
                        FET: Lebensmitteltabellen
                        <br />
                        Fachgesellschaft für Ernährungstherapie und Prävention (FET) e.V., Kronberg, 2016
                        <br />
                        <br />
                        Jäger, L. et al: Nahrungsmittelallergien und -intoleranzen 
                        <br />
                        3. Auflage, Elsevier-Verlag, Urban und Fischer, München, 2008
                        <br />
                        <br />
                        Jorde, W. (Hsg.): Allergologie für die Praxis 3
                        <br />
                        Dustri-Verlag, München, 1995
                        <br />
                        <br />
                        Krämer, Erich et al: Nahrungsmittelallergien und -unverträglichkeiten
                        <br />
                        Compact-Verlag, München, 2008
                        <br />
                        <br />
                        Kruis, Wolfgang et al: Wirksame Hilfe bei Reizdarmsyndrom
                        <br />
                        Trias-Verlag, Stuttgart, 2002
                        <br />
                        <br />
                        Lapine, Phoebe: SIBO &ndash; Wenn der Darm in Aufruhr ist
                        <br />
                        VAK Verlags GmbH, Kirchzarten, 2023
                        <br />
                        <br />
                        Ledochowski, M.: Wegweiser Nahrungsmittel-Intoleranzen
                        <br />
                        Trias-Verlag, Stuttart, 2009
                        <br />
                        <br />
                        Ledochowski, M.: Wenn Brot und Getreide krank machen
                        <br />
                        Trias-Verlag, Stuttart, 2011
                        <br />
                        <br />
                        Norton, Sally K.: Gefährliche Superfoods?
                        <br />
                        VAK-Verlag, Kirchzarten, 2024
                        <br />
                        <br />
                        Paas, Doris: Das Laktose-Intoleranz Buch
                        <br />
                        MV-Verlag, Münster, 2007
                        <br />
                        <br />
                        Paas, Doris: Kurz und klar: Fruchtzucker-Unverträglichkeit
                        <br />
                        MV-Verlag, Münster, 2009
                        <br />
                        <br />
                        Paas, Doris: Kurz und klar: Milchzucker-Unverträglichkeit
                        <br />
                        MV-Verlag, Münster, 2009
                        <br />
                        <br />
                        Paas, Doris: Kurz und klar: Oligosaccharid-Unverträglichkeit
                        <br />
                        BoD, Books on Demand, Norderstedt, 2014
                        <br />
                        <br />
                        Rosvial, Vera: Das natürliche Allergie-Stopp-Programm
                        <br />
                        Haug-Verlag, Stuttgart, 2007
                        <br />
                        <br />
                        Shepherd, Dr. Sue: Low FODMAP Diet, Fructose Malabsorption, Food Shopping Guide
                        <br />
                        Shepherd Works Pty Ltd, , Australia, 2010
                        <br />
                        <br />
                        Storr, Martin: FODMAP-Kompass
                        <br />
                        BoD, Books on Demand, Norderstedt, 2015
                        <br />
                        <br />
                        Souci/Fachmann/Kraut: Die Zusammensetzung der Lebensmittel, Nährwert-Tabellen
                        <br />
                        MedPharm Scientific Publishers, Wissenschaftliche Verlagsgesellschaft, Stuttgart, 8. Auflage, 2016
                        <br />
                        <br />
                        Vogelreuter, Axel: Nahrungsmittelunverträglichkeiten
                        <br />
                        Wissenschaftliche Verlagsgesellschaft, Stuttgart, 2012
                        <br />
                        <br />
                        Zechmann, Michael et al: Fruktoseintoleranz
                        <br />
                        Berenkamp-Verlag, Wattens, 2013
                        <br />
                        <br />
                        <b>und viele weitere</b>
                        </p>
                        <br />
                        <p class="quellen">
                        
                        <b><i>Internet-Seiten: </b></i>
                        <br />
                        (alphabetisch geordnet)
                        <br />
                        <br />
                        <a href="http://allergiefreiessen.de/blog/index.php" target="_blank">Allergiefreiessen.de: Tabellen</a>
                        <br />
                        <br />
                        <a href="http://www.biolabor.de/downloads/oligosaccharid-einkaufshilfe.pdf" target="_blank">Biolabor.de: Tabellen</a>
                        <br />
                        <br />
                        <a href="https://www.dzg-online.de/" target="_blank">Deutsche Gesellschaft für Ernährung: Datenbanken und Listen</a>
                        <br />
                        <br />
                        <a href="https://www.dzg-online.de/" target="_blank">Deutsche Zöliakie Gesellschaft e.V.: Datenbanken und Listen</a>
                        <br />
                        <br />
                        <a href="https://alessandraedwards.com/foods-high-in-salicylates-amines-and-glutamates/" target="_blank">Edwards, Alessandra: Foods High In Salicylates, Amines And Glutamates</a>
                        <br />
                        <br />
                        <a href="http://www.ernaehrung.de/" target="_blank">Ernährung.de: Tabellen</a>
                        <br />
                        <br />
                        <a href="http://www.fructose.at/pdf/booklets/fructose_tabelle.pdf" target="_blank">Fuctose.at: Tabellen</a>
                        <br />
                        <br />
                        <a href="http://www.foodintolerances.org/german/food-intolerances-fructose.aspx" target="_blank">Foodintolerances.org: Tabellen</a>
                        <br />
                        <br />
                        <a href="http://aerzte.freepage.de/cgi-bin/feets/freepage_ext/41030x030A/rewrite/datteln/salicylate.html" target="_blank">Hautklinik Recklinghausen</a>
                        <br />
                        <br />
                        <a href="http://med-heukelbach.de/allergologie2.htm" target="_blank">Heukelbach, Dr. med. Hartmut, Hautarzt</a>
                        <br />
                        <br />
                        <a href="http://www.histaminintoleranz.ch/download/SIGHI-Lebensmittelliste_HIT.pdf" target="_blank">Histaminintoleranz.ch: Tabellen</a>
                        <br />
                        <br />
                        <a href="http://www.laktobase.at/" target="_blank">Laktobase.at: Tabellen und Forum-Beiträge</a>
                        <br />
                        <br />
                        <a href="http://www.libase.de/wbb/" target="_blank">Libase: Datenbanken, Forum-Beiträge und Erfahrungsberichte</a>
                        <br />
                        <br />
                        <a href="http://www.nahrungsmittel-intoleranz.com/" target="_blank">NMI: Datenbanken und Übersichten</a>
                        <br />
                        <br />
                        <a href="http://www.oligase.de/Nahrungsmittelliste.9.0.html" target="_blank">Oligase: Tabellen</a>
                        <br />
                        <br />
                        <a href="http://www.rds-forum.de/" target="_blank">RDS-Forum: Forum-Beiträge und Erfahrungsberichte</a>
                        <br />
                        <br />
                        <a href="http://salicylatintoleranz.blogspot.de/2011_08_01_archive.html" target="_blank">Salicylatintoleranz.blogspot.de</a>
                        <br />
                        <br />
                        <a href="http://www.fibromyalgie-guaifenesin.info/de/salsearch/alle-gespeicherten-inhaltsstoffe/" target="_blank">SalSearch</a>
                        <br />
                        <br />
                        <a href="http://www.mastzellaktivierung.info/downloads/foodlist/11_FoodList_DE_alphabetisch_mitKat.pdf" target="_blank">SIGHI: Lebensmittel-Verträglichkeitsliste Histamin</a>
                        <br />
                        <br />
                        <b>und viele weitere</b>
                        </p>
                    </div>
                </div>
            </div>    
            <br>
            <br> 
            <div class="bodyspacer"></div> 
        </div>