        <div class="section no-pad-bot" id="index-banner">    
            <div class="container">        
                <br />
                <br /> 
                <div class="right">Letzte Aktualisierung: <b><?= date( "j.n.Y", filemtime( __FILE__ ) ) ?></b></div>  
                <h1 class="header center orange-text">Doris Paas</h1>      
                <div class="row center">        
                    <h5 class="header col s12">Ernährungs- und Gesundheitspädagogin</h5>      
                </div>      
            </div>  
        </div> 
        <div class="container">    
            <div class="section">      
                <!--   Icon Section   -->      
                <div class="row relative-row">        
                    <div class="col s12 m6 height100">          
                        <div class="icon-block height100">
                            <div class="video-wrapper">
                                <iframe src="//player.vimeo.com/video/233650472" <?= ( strpos( strtolower( $_SERVER[ "HTTP_USER_AGENT" ] ), "webkit" ) !== FALSE ) ? "webkitallowfullscreen" : ( ( strpos( strtolower( $_SERVER[ "HTTP_USER_AGENT" ] ), "gecko" ) !== FALSE ) ? "mozallowfullscreen" : "allowfullscreen" ) ?>></iframe>
                            </div>
<!--
                            <div class="right">
                                <a href="newsletter" target="_blank"><img src="<?php echo IMG_PATH; ?>newsletter-home.png" alt="Aktueller Newsletter" /></a>
                           </div class="right">        
-->
                        </div>        
                    </div>  

                </div>
                    <div class="col s12 m8">          
                        <div class="icon-block">        
                            <p class="light">
                                Viel zu viele Menschen haben Verdauungsprobleme. Manchmal sind die Ursachen (noch) nicht bekannt, 
                                oftmals aber sind Nahrungsmittel-Unverträglichkeiten und/oder bakterielle Fehlbesiedelungen das Problem. 
                                Schon sehr lange habe ich mich auf <b>Verdauungsbeschwerden</b> vor allem in Zusammenhang mit 
                                <b>Nahrungsmittel-Unverträglichkeiten</b> wie der Laktose-Intoleranz, 
                                Fruktose-Intoleranz (Fruktosemalabsorption), Sorbit-Intoleranz, Histamin-Intoleranz, Salicylat- 
                                (Salicylsäure-) und Oligosaccharid-Intoleranz, dem <b>Reizdarm-Syndrom</b> 
                                und <b>Dünndarmfehlbesiedelungen (SIBO/IMO)</b> spezialisiert. Sie finden deshalb auf dieser Website umfangreiche 
                                Informationen zu diesen Schwerpunkten. Weiterhin soll sie Fragen über 
                                <b>gesunde Ernährung</b> und <b>gesunde Verdauung</b> beantworten und stellt Ihnen diverse 
                                <b>Vorlagen</b> zum kostenlosen Download bereit. Und natürlich können Sie sich 
                                hier ausführlich über meine <b>Bücher zu diesen Themen</b> informieren und diese bestellen.
                                Auch meine <b>Praxis in Troisdorf</b> stelle ich Ihnen vor, und Sie können sich <b>mein Beratungsangebot</b> anschauen.
                                <br />
                                <br />
                                Liebe Besucher, ganz herzlich willkommen! 
                                Ich hoffe, Sie finden viel Interessantes beim Stöbern durch diese Seiten und wünsche 
                                Ihnen alles Gute. Wenn Sie Anregungen, Fragen oder konstruktive Kritik haben oder wenn Sie eine 
                                 <a href="<?php echo URL_ROOT; ?>index.php?page=beratung" target="_blank">Beratung</a> benötigen, freue ich mich 
                                 über eine <a href="<?php echo URL_ROOT; ?>email-anfrage" target="_blank">Nachricht</a> von Ihnen.
                                <br />
                                <br />
                                Herzlichst Ihre
                                <br />
                                Doris Paas
                                <br />
                                <i>Ernährungs- und Gesundheitspädagogin</i>
                            </p>          
                        </div>        
                    </div>     
                </div>

<!--
                
                <div class="row">
                    <div class="col s12 m12">
                        <hr />
                        <h5>Diese Seite wird bearbeitet</h5>
                        <hr />
                    </div>
                </div>
                
                <div class="row">
                    <div class="col s12 m2">          
                        <img src="<?php echo IMG_PATH; ?>home-entruempeln-links.png" alt="entrümpeln-links" class="section-img" />
                    </div>
                    <div class="col s12 m8">          
                        Die Website <b>&#187;www.DorisPaas.de&#171;</b> existiert seit dem Jahr 2007. Sie ist in dieser Zeit stetig gewachsen und zahlreiche neue Unterseiten wurden hinzugefügt.
                        Manches davon ist heute nicht mehr aktuell oder ist überarbeitungsbedürftig. Zudem ist die Zahl der Unterseiten über die Jahre 
                        dermaßen angewachsen, dass die Übersichtlichkeit starkt gelitten hat und man sich oftmals nur mithilfe der Sitemap zurechtfinden kann.
                        <br />
                        <br />
                        Deshalb wird diese Seite derzeit nach und nach <b>entrümpelt und überarbeitet</b>.
                        Einige Beiträge sind definitiv nicht mehr aktuell &ndash; diese werden in das neue <a href="archiv" target="_blank">Archiv</a> verschoben.
                        Bei anderen muss der Inhalt angepasst werden, weil sich die Erkenntnisse weiterentwickelt haben. Bei wieder anderen können die Inhalte 
                        von zusammenpassenden Unterseiten in einer Seite kombiniert werden. In diesem Falle werden die ursprünglichen Seiten ins Archiv verschoben 
                        und mit einem Link auf die neue Seite versehen. 
                        Es wird also nichts weggeworfen, so dass alle alten Links noch funktionsfähig sind. Im Laufe der nächsten Monate wird sich so eine 
                        übersichtlichere Struktur ergeben, die es Ihnen ermöglicht, sich noch müheloser in den Menüs zurechtzufinden. 
                    </div>
                    <div class="col s12 m2">          
                        <img src="<?php echo IMG_PATH; ?>home-entruempeln-rechts.png" alt="entrümpeln-rechts" class="section-img" />
                    </div>
                </div>
-->
                
                <div class="row">
                    <div class="col s12 m12">
                        <a id="nmu"></a>
                        <hr />
                        <h5>Nahrungsmittel-Unverträglichkeiten und Darmgesundheit</h5>
                        <hr />
                    </div>
                </div>

                <div class="row">
                    <div class="col s12 m2">          
                        <a href="<?php echo URL_ROOT; ?>index.php?page=faq" target="_blank"><img src="<?php echo IMG_PATH; ?>home-FAQ-small.png" alt="home FAQ small" class="section-img" /></a>
                    </div>
                    <div class="col s12 m10">          
                        Unter dem Menüpunkt &#187;<a href="<?php echo URL_ROOT; ?>wissensdatenbank">Wissensdatenbank</a>&#171; 
                        erhalten Sie eine Fülle von Informationen zum Thema Nahrungsmittel-Unverträglichkeiten 
                        und -Allergien und zum Reizdarm-Syndrom.  Alle diese Themen werden hier 
                        ausführlich thematisiert und aus ganzheitlicher Sicht betrachtet und bewertet.
                        <br />
                        <br />
                        Zusätzlich gibt es verschiedene Lexika, in denen Sie alphabetisch 
                        geordnete Begriffserklärungen suchen und finden können.
                        Derzeit ist ein Lexikon aller <a href="<?php echo URL_ROOT; ?>lexikon-li-begriffe">Begriffe 
                        im Zusammenhang mit der Laktose-Intoleranz</a>, ein ein Lexikon der 
                        <a href="<?php echo URL_ROOT; ?>lexikon-darmerkrankungen">Darmerkrankungen</a>, ein Lexikon der 
                        <a href="<?php echo URL_ROOT; ?>lexikon-naturheilmethoden">Naturheilmethoden</a>
                         und ein Lexikon aller 
                        <a href="<?php echo URL_ROOT; ?>lexikonzucker">Zuckerarten und Süßungsmittel</a> 
                        eingestellt &ndash; aber weitere sind in Arbeit und werden folgen.
                        Wenn Sie einen Begriff vermissen, können Sie mir gerne eine <a href="<?php echo URL_ROOT; ?>email-anfrage" target="_blank">eMail-Nachricht</a> senden.
                        <br />                
                        <br />
                        Weiterhin gibt es zahlreiche <a href="<?php echo URL_ROOT; ?>videos" target="_blank">Videos und Tutorials</a>, in denen 
                        ich Sachverhalte auch in kleinen Filmsequenzen darstelle.
                        Es gibt &#187;Erklär-Videos&#171;, aber auch <a href="<?php echo URL_ROOT; ?>rezepte" target="_blank">Rezepte</a> 
                        und auch Hinweise auf <a href="<?php echo URL_ROOT; ?>tv-beitraege" target="_blank">Beiträge im Radio oder Fernsehen</a>. 
                        Sie sind ganz herzlich eingeladen, sich diese anzuschauen bzw. anzuhören.
                        <br />
                        <br />
                        Unter dem Menüpunkt &#187;<a href="<?php echo URL_ROOT; ?>downloads">Downloads</a>&#171; stehen Ihnen zahlreiche Vorlagen zur Verfügung,
                        um z.B. anhand eines Selbsttests oder mit einem Ernährungs- und Symptomtagebuch Aufschluss über eventuelle Problem-Ursachen zu bekommen. 
                        <br />
                        <br />
                        Auf der Seite <a href="<?php echo URL_ROOT; ?>faq">Fragen &amp; Antworten</a> 
                        werden kontinuierlich Fragen und die zugehörigen Antworten veröffentlicht, 
                        die an mich gestellt wurden und die ich 
                        für allgemein interessant halte. Schauen Sie ruhig ab und an mal vorbei.  
                        Wenn Sie selbst ein Frage zu Nahrungsmittel-Unverträglichkeiten, 
                        Nahrungsmittel-Allergien oder zum Reizdarm-Syndrom haben, können Sie mir 
                        diese gerne zusenden. Sie haben die Möglichkeit, im Shop die 
                        &#187;<a href="<?php echo URL_ROOT; ?>shop#beratung-email">Beantwortung einer eMail-Anfrage</a>&#171; zu buchen.
                    </div>
                </div>
                
                <div class="row">
                    <div class="col s12 m12">
                        <a id="datenbank"></a>
                        <hr />
                        <h5>DorisPaas.de &ndash; Lebensmittel-Datenbank</h5>
                        <hr />
                    </div>
                </div>
                
                <div class="row">
                    <div class="col s12 m2">          
                        <a href="<?php echo URL_ROOT; ?>index.php?page=lebensmittel-datenbank-info" target="_blank"><img src="<?php echo IMG_PATH; ?>datenbanknotiz-oxalat.png" alt="DorisPaas.de &ndash; Lebensmittel-Datenbank" class="section-img" /></a>
                    </div>
                    <div class="col s12 m10">          
                        Leiden Sie an <b>mehreren</b> Nahrungsmittel-Unverträglichkeiten 
                        und haben sich schon immer gewünscht, eine Liste zur Verfügung zu haben, in 
                        der Sie alle Ihre verträglichen Nahrungsmittel <b>auf einen Blick</b> auswählen 
                        können? Eine Liste, in der Sie <b>gleichzeitg</b> die Verträglichkeit bei <b>Laktose-</b>, <b>Fruktose-</b>, <b>Sorbit-</b>, <b>Histamin-</b>, 
                        <b>Oligosaccharid-</b>, <b>Gluten-</b> und <b>Salicylat-Unverträglichkeit</b> und darüber hinaus auch noch die Gehalte von <b>Schwefel</b>, <b>Oxalaten</b> und der <b>FODMAPs</b> 
                        in allen diesen Lebensmitteln erkennen können? Und die auch noch Informationen über das <b>allergene Potenzial</b> und <b>besondere 
                        Beschwerdeverursacher</b> wie z.B. die <b>Nachtschattengewächse</b>, <b>Korbblütler</b> oder <b>Nickel</b> enthält?
                        <br />
                        <br />
                        Mit der <b>DorisPaas.de &ndash; Lebensmittel-Datenbank</b> haben Sie jetzt 
                        diese Möglichkeit!
                        <br />
                        <br />
                        Sie finden hier <b>mehr als 1600 Lebenmittel</b>, unter denen Sie 
                        Ihre verträglichen, aber auch die unverträglichen <b>mit einem Klick 
                        herausfiltern</b> können.
                    </div>
                </div>
                
                <div class="row">
                    <div class="col s12 m12">
                        <a id="buecher"></a>
                        <hr />
                        <h5>Bücher</h5>
                        <hr />
                    </div>
                </div>

                <div class="row">
                    <div class="col s12 m2">          
                        <a href="<?php echo URL_ROOT; ?>index.php?page=books" target="_blank"><img src="<?php echo IMG_PATH; ?>home-buecherstapel.png" alt="Bücher" class="section-img" /></a>
                    </div>
                    <div class="col s12 m10"> 
                        <br />         
                        Mittlerweile gibt es zwölf Bücher, die ich zu den verschiedenen Problemen und Erkrankungen des Verdauungssystems geschrieben habe. Natürlich finden Sie hier auf 
                        dieser Website schon viele Informationen, aber noch sehr viel mehr können Sie in den Büchern lesen.
                        <br />
                        <br />
                        Im Jahr 2007 erschien <a href="book-laktoseintoleranzbuch" target="_blank">&#187;Das Laktose-Intoleranz Buch&#171;</a>, in dem Sie alles erfahren, was Sie über 
                        die Milchzucker-Unverträglichkeit wissen möchten. Im Jahr darauf enstand in Zusammenarbeit mit dem Facharzt für Allgemeinmedizin mit Schwerpunkten Akupunktur, Homöopathie und Ernährungsberatung, 
                        Dr. med. Erich Krämer, das Buch <a href="book-nmu" target="_blank">&#187;Nahrungsmittelallergien und -unverträglichkeiten &ndash; Genussvoll essen &ndash; unbeschwert leben&#171;</a>. In den Jahren 
                        2009 bis 2017 wurden nach und nach die acht Bände der <a href="paas-heftchen-gesamt" target="_blank">&#187;Paas&#039;schen Heftchenreihe&#171;</a> herausgegeben. anschließend, im Jahr 2016 
                        erschien die erste Ausgabe des Buches <a href="book-ddfb" target="_blank">&#187;Dünndarmfehlbesiedelung &ndash; erkennen, verstehen, erfolgreich behandeln&#171;</a>, das nun 
                        in einer dritten, 2020 aktualisierten Fassung vorliegt. 
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m2">          
                        <a href="<?php echo URL_ROOT; ?>index.php?page=book-darmgymnastik" target="_blank"><img src="<?php echo IMG_PATH; ?>home-book-darmgymnastik-small.png" alt="Bücher" class="section-img" /></a>
                    </div>
                    <div class="col s12 m10"> 
                        <font color=red><b>Neuerscheinung 21.7.2023</b></font>
                        <br />
                        Das bis dato letzte Werk aus meiner Feder ist das Buch <a href="book-darmgymnastik" target="_blank">&#187;Darmgymnastik 
                        &ndash; Bewegung &#38; mehr gegen Verdauungsbeschwerden&#171;</a> in der 3. überarbeiteten Auflage. 
                        <br />
                        Jede und jeder sollte dieses Buch gelesen haben, der Verdauungsbeschwerden hat oder diesen vorbeugen möchte.
                        Es zeigt Ihnen die beste und wirksamste &#187;Medizin&#171; für den Darm, die es gibt</b>.
                        Lesen Sie gerne die ausführliche <a href="<?php echo URL_ROOT; ?>book-darmgymnastik#buchbeschreibung" target="_blank">Buchbeschreibung</a> 
                        und das komplette <a href="<?php echo URL_ROOT; ?>book-darmgymnastik#inhaltsverzeichnis" target="_blank">Inhaltsverzeichnis</a>. Ich bin sicher, 
                        Sie neugierig machen zu können.
                        Wie alle meine Bücher richtet sich auch dieser Titel in erster Linie an die Betroffenen selbst, sollte aber auch in keiner 
                        therapeutischen oder Beratungs-Praxis fehlen, damit die richtigen und wichtigen Behandlungsbausteine empfohlen werden können.

                    </div>
                </div>




<!--
                <div class="row">
                    <div class="col s12 m2">          
                        <a href="<?php echo URL_ROOT; ?>index.php?page=book-darmgymnastik" target="_blank"><img src="<?php echo IMG_PATH; ?>home-book-darmgymnastik-small.png" alt="Darmgymnastik" class="section-img" /></a>
                        <a href="<?php echo URL_ROOT; ?>index.php?page=books" target="_blank"><img src="<?php echo IMG_PATH; ?>home-buecherstapel.png" alt="Bücher" class="section-img" /></a>
                    </div>
                    <div class="col s12 m10"> 
                        <font color=red><b>Neuerscheinung 3.8.2022</b></font>
                        <br />         
                        Sie haben Verdauungsbeschwerden? Bauchschmerzen oder sogar -krämpfe, Blähungen, Durchfall oder Verstopfung, 
                        ein Reizdarm-Syndrom oder eine Dünndarmfehlbesiedelung? Sie haben schon alles probiert und verschiedensten Mittel 
                        eingenommen? Die Behandlung hat entweder gar nicht angeschlagen oder hatte nur einen sehr kurzfristigen Erfolg?
                        Wahrscheinlich hat bei Ihrem Behandlungskonzept eine ganz entscheidende Komponente gefehlt: die kontinuierliche 
                        Bewegung. Ein Mangel an Bewegung ist bei allen Verdauungsbeschwerden mit eine der wichtigsten Ursachen. 
                        <br />
                        Das Buch &#187;<b>DARMGYMNASTIK 
                        &ndash; BEWEGUNG & MEHR GEGEN VERDAUUNGSBESCHWERDEN</b> zeigt Ihnen die beste und wirksamste &#187;Medizin&#171; für den Darm, die es gibt</b>.
                        Lesen Sie gerne die ausführliche <a href="<?php echo URL_ROOT; ?>book-darmgymnastik#buchbeschreibung" target="_blank">Buchbeschreibung</a> 
                        und das komplette <a href="<?php echo URL_ROOT; ?>book-darmgymnastik#inhaltsverzeichnis" target="_blank">Inhaltsverzeichnis</a>. Ich bin sicher, 
                        Sie neugierig machen zu können.
                        Auch dieser Titel richtet sich, wie alle meine Bücher, in erster Linie an die Betroffenen selbst, sollte aber auch in keiner 
                        therapeutischen oder Beratungs-Praxis fehlen, damit die richtigen und wichtigen Behandlungsbausteine empfohlen werden können.
                    </div>
                </div>

                <div class="row">
                    <div class="col s12 m12">          
                        <hr />
                    </div>
                </div>

                <div class="row">
                    <div class="col s12 m2">          
                        <a href="<?php echo URL_ROOT; ?>index.php?page=book-ddfb" target="_blank"><img src="<?php echo IMG_PATH; ?>home-book-ddfb-3-small.png" alt="home book-ddfb small" class="section-img" /></a>
                    </div>
                    <div class="col s12 m10">  
                        Sie leiden immer wieder unter Verdauungsproblemen wie Bauchschmerzen, einem 
                        aufgeblähten Bauch und Völlegefühl und können diese Symptome kaum mit 
                        bestimmten verzehrten Lebensmitteln in direkte Verbindung bringen? 
                        Dann besteht besteht die Möglichkeit, dasss eine Dünndarmfehlbesiedelung 
                        vorliegt. 
                        <br />
                        Das Buch &#187;<b>DÜNNDARMFEHLBESIEDELUNG &ndash; ERKENNEN, VERSTEHEN, ERFOLGREICH BEHANDELN</b>&#171;
                        klärt Sie umfassend über die gesamte Problematik auf.
                        Sie finden hier eine ausführliche <a href="<?php echo URL_ROOT; ?>book-ddfb#buchbeschreibung" target="_blank">Buchbeschreibung</a> 
                        und das komplette <a href="<?php echo URL_ROOT; ?>book-ddfb#inhaltsverzeichnis" target="_blank">Inhaltsverzeichnis</a>,
                        damit Sie sich ein Bild machen können.
                        <br />
                        Dieser sorgfältig recherchierte, umfassende Titel richtet sich in erster Linie an die Betroffenen selbst, sollte 
                        aber auch in keiner ärztlichen Praxis und auf dem Schreibtisch von 
                        Heilpraktikern und Ernährungs- und Gesundheitsberatern fehlen.
                    </div>
                </div>

                <div class="row">
                    <div class="col s12 m12">          
                        <hr />
                    </div>
                </div>

                <div class="row">
                    <div class="col s12 m2">          
                        <a href="<?php echo URL_ROOT; ?>book/cover" target="_blank"><img src="<?php echo IMG_PATH; ?>home-book-small.png" alt="home book small" class="section-img" /></a>
                    </div>
                    <div class="col s12 m10">          
                        Gehören auch Sie zu den vielen Menschen (allein in Deutschland, 
                        in Österreich, in der Schweiz, in Luxemburg und in Liechtenstein sind es 
                        schätzungsweise 20 Millionen), die nach dem Genuss von milchzuckerhaltigen 
                        Speisen Verdauungsprobleme bekommen? Dann empfehle ich Ihnen DAS LAKTOSE-INTOLERANZ BUCH. 
                        Sie finden hier eine ausführliche <a href="<?php echo URL_ROOT; ?>book/buchbeschreibung">Buchbeschreibung</a>, 
                        weiterhin das komplette <a href="<?php echo URL_ROOT; ?>book/inhaltsverzeichnis">Inhaltsverzeichnis</a> 
                        und <a href="<?php echo URL_ROOT; ?>read">Leseproben</a>.
                        <br />
                        <b>DAS LAKTOSE-INTOLERANZ BUCH</b> richtet sich in erster Linie an Betroffene 
                        und vermeidet aus diesem Grunde weitgehend unverständliche 
                        Fachausdrücke. Trotzdem ist es sorgfältig recherchiert und 
                        eignet sich deshalb auch für für 
                        <a href="<?php echo URL_ROOT; ?>med">Fachleute</a> in der ärztlichen 
                        Praxis und für Menschen aus Pflegebrufen oder für 
                        Ernährungsberater.
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m12">          
                        <hr />
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m2">          
                        <a href="<?php echo URL_ROOT; ?>book2/cover" target="_blank"><img src="<?php echo IMG_PATH; ?>home-book2-small.png" alt="home book2 small" class="section-img" /></a>
                    </div>
                    <div class="col s12 m10">          
                        Leiden Sie unter unklaren Beschwerden wie Bauchschmerzen, Blähungen, Durchfällen 
                        oder Völlegefühl nach den Mahlzeiten? Dann liegt der Verdacht nahe, dass Sie 
                        an einer Nahrungsmittelallergie oder an einer Nahrungsmittelunverträglichkeit 
                        leiden. 
                        <br />
                        Das Buch <b>NAHRUNSMITTELALLERGIEN UND -UNVERTRäGLICHKEITEN</b> ist 
                        für alle diejenigen die geeignete Lektüre, die den wahren 
                        Grund ihrer Beschwerden abklären wollen. 
                        Sie erfahren hier alles über Ursachen und Auslöser, 
                        Symptome und Diagnosemethoden, Vorbeugemaßnahmen und 
                        Behandlungsmöglichkeiten der verschiedenen Nahrungsmittel-Unverträglichkeiten 
                        und von Nahrungsmittel-Allergien und lernen das Reizdarm-Syndrom kennen.
                        Viele Hinweise und Tipps zeigen Ihnen, wie Sie auch mit den daraus resultierenden 
                        Einschränkungen gut leben können.
                        Lesen Sie hier die <a href="<?php echo URL_ROOT; ?>book2/buchbeschreibung">Buchbeschreibung</a>.
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m12">          
                        <hr />
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m2">          
                        <a href="<?php echo URL_ROOT; ?>index.php?page=books" target="_blank"><img src="<?php echo IMG_PATH; ?>home-ph-klein-untereinander.png" alt="home ph klein" class="section-img" /></a>
                    </div>
                    <div class="col s12 m10">
                        Die <b>PAAS&#039;SCHE HEFTCHENREIHE</b> richtet sich an all 
                        diejenigen Leser, die sich kurz und klar über
                        gesunde Ernährung, gesunde Verdauung, Milchzucker-Unverträglichkeit, 
                        Fruchtzucker-Unverträglichkeit, Oligosaccharid-Unverträglichkeit, Zöliakie 
                        und Gluten-Sensitivität oder über das Reizdarm-Syndrom 
                        informieren möchten. 
                        <br />
                        Die Heftchen eignen sich darüberhinaus gut zur 
                        Weitergabe an interessierte Familienmitglieder, Freunde, Arbeitskollegen 
                        oder auch an Kinder, die (noch) kein umfangreiches Sachbuch lesen wollen.
                        <br />
                        Sie stellen wesentlich mehr Informationen zur Verfügung als eine 
                        Info-Broschüre und verstehen sich somit als Vereinigung von Informations-Broschüre 
                        und Sachbuch. Die Paas&#039;schen Heftchen erheben bewusst keinen Anspruch auf Ausführlichkeit, sondern 
                        verschaffen Ihnen in kurzer, aber korrekter Form einen ersten überblick über das jeweilige Thema. 
                        Trotz des geringen Umfangs bleiben sie jedoch nicht oberflächlich, sondern sind sorgfältig 
                        recherchiert: In rund einer Stunde wissen Sie alles Wesentliche zum Thema.
                        <br />
                        <br />
                        In der PAAS&#039;SCHEN HEFTCHENREIHE sind bisher folgende 
                        Titel erschienen:
                        <br />
                        <a href="<?php echo URL_ROOT; ?>paas-heftchen-ge">Kurz und klar: Gesunde Ernährung</a>      
                        <br />
                        <a href="<?php echo URL_ROOT; ?>paas-heftchen-gv">Kurz und klar: Gesunde Verdauung</a>      
                        <br />
                        <a href="<?php echo URL_ROOT; ?>paas-heftchen-mu">Kurz und klar: Milchzucker-Unverträglichkeit</a>      
                        <br />
                        <a href="<?php echo URL_ROOT; ?>paas-heftchen-fu">Kurz und klar: Fruchtzucker-Unverträglichkeit</a>      
                        <br />
                        <a href="<?php echo URL_ROOT; ?>paas-heftchen-oi">Kurz und klar: Oligosaccharid-Unverträglichkeit</a>      
                        <br />
                        <a href="<?php echo URL_ROOT; ?>paas-heftchen-gluten">Kurz und klar: Zöliakie und Gluten-Sensitivität</a>      
                        <br />
                        <a href="<?php echo URL_ROOT; ?>paas-heftchen-kinderzoeliakie">Kurz und klar: Mein Kind hat Zöliakie</a>      
                        <br />
                        <a href="<?php echo URL_ROOT; ?>paas-heftchen-rds">Kurz und klar: Reizdarm-Syndrom</a> 
                    </div>
                </div>



                <div class="row">
                    <div class="col s12 m12">
                        <a id="videos"></a>
                        <hr />
                        <h5>Videos, Tutorials, Radio- und TV-Beiträge</h5>
                        <hr />
                    </div>
                </div>

                <div class="row">
                    <div class="col s12 m2">          
                        <a href="<?php echo URL_ROOT; ?>index.php?page=videos" target="_blank"><img src="<?php echo IMG_PATH; ?>videobutton.png" alt="home video small" class="section-img" /></a>
                    </div>
                    <div class="col s12 m10">
                        Sind Sie ein &#187;visueller Typ&#171; und wünschen sich 
                        manchmal, Sachverhalte in kurzen Videos eindrucksvoll und bildhaft 
                        erklärt zu bekommen?
                        <br />
                        <br />
                        Kein Problem! Es gibt hier einige <a href="<?php echo URL_ROOT; ?>videos" target="_blank">Videos</a>, die Ihnen genau das 
                        ermöglichen. Beispielsweise wird kurz und anschaulich 
                        erläutert, was Laktose-Intoleranz ist. Auch über die 
                        Zöliakie gibt es ein Video, und einige weitere sind in Arbeit.
                        <br />
                        <br />
                        Zusätzlich gibt es Videos, in denen <a href="<?php echo URL_ROOT; ?>rezepte" target="_blank">Rezepte</a> für leckere 
                        Gerichte vorgestellt werden &ndash; für jeden Geschmack ist 
                        etwas dabei. 
                        <br />
                        <br />
                        Zusätzlich habe ich Links zu <a href="<?php echo URL_ROOT; ?>tv-beitraege" target="_blank">Radio- 
                        und TV-Beiträgen</a>, in denen ich zu bestimmten Sachverhalten 
                        interviewt wurde, für Sie zusammengestellt. Sie sind ganz herzlich 
                        eingeladen, sich diese anzuschauen bzw. anzuhören.
                    </div>
                </div>


                <div class="row">
                    <div class="col s12 m12">
                        <a id="downloads"></a>
                        <hr />
                        <h5>Kostenlose Downloads</h5>
                        <hr />
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m2">          
                        <a href="<?php echo URL_ROOT; ?>index.php?page=downloads" target="_blank"><img src="<?php echo IMG_PATH; ?>Selbstdiagnose-vorne.png" alt="Selbstdiagnose vorne" class="section-img" /></a>
                    </div>
                    <div class="col s12 m10">
                        Leiden Sie häufig unter Verdauungsbeschwerden wie Bauchgrummeln, 
                        Bauchschmerzen oder sogar unter Durchfällen, Blähungen 
                        oder Völlegefühl? Und haben Sie die Vermutung, dies könnte 
                        eventuell mit bestimmten Nahrungsmitteln wie Milch und Milchprodukten 
                        oder auch Obst und Gemüse zusammenhängen?
                        <br />
                        <br />
                        Mithilfe eines einfachen Fragebogens können Sie einen Selbsttest machen. 
                        <br />
                        <br />
                        Und mit einer Vorlage für ein Verzehrtagebuch können Sie 
                        Ihre &#187;Selbstdiagnose&#171; untermauern.
                        <br />
                        <br />
                        Diese und weitere Vorlagen stehen Ihnen kostenlos unter dem Menüpunkt 
                        &#187;<a href="<?php echo URL_ROOT; ?>downloads">Downloads</a>&#171; 
                        zur Verfügung.
                    </div>
                </div>
                
                <div class="row">
                    <div class="col s12 m12">
                        <a id="socialnetworks"></a>
                        <hr />
                        <h5>Social Networks</h5>
                        <hr />
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m2">          
                        <a href="http://www.facebook.com/www.dorispaas.de" target="_blank"><img src="<?php echo IMG_PATH; ?>network-facebook-gross.png" alt="Facebook" /></a>
                    </div>
                    <div class="col s12 m10">
                        Zugegeben: Ich bin keine sehr fleißige Besucherin der Sozialen Netzwerke. Ganz bewusst habe ich in den meisten Foren keine Auftritte. 
                        Sie finden mich weder auf Instagram, noch auf TikTok oder gar Twitter. All dies sind Plattformen, die davon leben, dass man in kürzesten Abständen mehr 
                        oder (meist) weniger wichtige Informationen postet. In manchen Foren, in denen ich mich bisher noch ab und an bewegt hatte, gefallen mir mittlerweile  
                        die Gepflogenheiten nicht mehr, weil u.a. die Werbe- und Tracking-Aktivitäten zu aggressiv geworden sind. Deshalb habe ich mich auch dort zurückgezogen.
                        <br />
                        <br />
                        Auch setze ich meine Prioritäten bewusst ein und möchte meine Zeit
                        lieber meinen Klientinnen und Klienten in meiner Praxis, meinen Büchern und auch dieser Website widmen. Zudem ist mir 
                        nicht zuletzt auch meine Familie und mein Privatleben wichtig, das sich in der realen Welt und nicht im 
                        weltweiten Netz abspielt.
                        <br />
                        <br />
                        Ich habe lediglich einen kleinen <a href="http://www.facebook.com/www.dorispaas.de" target="_blank">Facebook-Auftritt</a>. Wenn Sie mögen, können Sie 
                        mich dort finden. Allerdings benutze ich diesen Auftritt nicht für
                        ständige Posts und schon gar nicht als Kommunikations-Kanal. Ich beantworte von dort aus auch keine Anfragen, denn ich schaue dort nur sporadisch vorbei. 
                        Diese Plattform nutze ich ausschließlich, um Sie über die wichtigsten Neuigkeiten auf meiner Website zu informieren. 
                        <a href="impressum#kontakt" target="_blank">Wenn Sie mich kontaktieren möchten</a>, nutzen Sie deshalb bitte ausschließlich die Möglichkeiten über 
                        diese Website.
                    </div>
                </div>



                <div class="row">
                    <div class="col s12 m12">
                        <a id="studien"></a>
                        <hr />
                        <h5>Studien</h5>
                        <hr />
                    </div>
                </div>

                <div class="row">
                    <div class="col s12 m2">          
                        <a href="<?php echo URL_ROOT; ?>index.php?page=auswertungen" target="_blank"><img src="<?php echo IMG_PATH; ?>umfrage.png" alt="Umfrage" class="section-img" /></a>
                    </div>
                    <div class="col s12 m10">          
                        <a href="<?php echo URL_ROOT; ?>probiotika">Studie zur Ermittlung der Wirksamkeit von Probiotika zur Anhebung der Laktose-Toleranzschwelle</a>
                        <br />
                        In der Zeit von Juli bis Dezember 2012 wurde eine Studie durchgeführt, 
                        die die Wirksamkeit von Probiotika zur Anhebung der Laktose-Toleranzschwelle 
                        ermitteln sollte. 
                        <br />
                        Hier gelangen Sie zur <a href="<?php echo URL_ROOT; ?>probiotika-studienauswertung">Auswertung der Probiotika-Studie</a>.
                        <br />
                        <br />
                        <a href="<?php echo URL_ROOT; ?>studienauswertung">Studie zur Ermittlung der Wirksamkeit von Laktase-Präparaten</a>
                        <br />
                        In der Zeit von Oktober 2010 bis Ende Juni 2012 wurde eine Studie zur 
                        Ermittlung der Wirksamkeit von Laktase-Präparaten durchgeführt.
                        <br />Hier gelangen Sie zur <a href="<?php echo URL_ROOT; ?>studienauswertung">Auswertung der Laktase-Studie</a>.
                    </div>
                </div>

                <div class="row">
                    <div class="col s12 m12">
                        <a id="blog"></a>
                        <hr />
                        <h5>Blog</h5>
                        <hr />
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m2">          
                        <a href="<?php echo URL_ROOT; ?>index.php?page=blog" target="_blank"><img src="<?php echo IMG_PATH; ?>blog.png" alt="blog" class="section-img" /></a>
                    </div>
                    <div class="col s12 m10">
                        Alle Welt bloggt! Nicht, dass ich nun auch unbedingt auf diesen Modezug
                        aufspringen möchte oder müsste &ndash; aber ich möchte 
                        Ihnen die Gelegenheit geben, mit einem Klick zu den Beiträgen 
                        zu gelangen, die ich an verschiedenen Stellen im World Wide Web zu den 
                        verschiedensten Themen veröffentliche. Seien Sie herzlich eingeladen, 
                        daran teilzuhaben und bei Bedarf auch gerne Ihre Meinung dazu kundzutun,
                        sich an den Diskussionen zu beteiligen und Ihre Kommentare hinzuzufügen.
                        <br />
                        <br />
                        <a href="<?php echo URL_ROOT; ?>blog">Hier gelangen Sie zum Blog</a>.
                    </div>
                </div>
-->

                <div class="row">
                    <div class="col s12 m12">
                        <a id="beratung"></a>
                        <hr />
                        <h5>Individuelle Beratung</h5>
                        <hr />
                    </div>
                </div>

                <div class="row">
                    <div class="col s12 m2">          
                        <a href="<?php echo URL_ROOT; ?>index.php?page=beratung" target="_blank"><img src="<?php echo IMG_PATH; ?>praxiswillkommen-klein.png" alt="blog" class="section-img" /></a>
                    </div>
                    <div class="col s12 m8">          
                        Neben all den Informationen, die Sie hier auf dieser Website und in meinen Büchern finden, 
                        wünschen Sie sich vielleicht eine individuelle Beratung. 
                        Gerne stehe ich Ihnen in meiner <b>Praxis für Ganzheitliche 
                        Gesundheitsberatung und Prävention</b> zur Verfügung.
                        <br />
                        <br />
                        Wenn Sie weiter entfernt wohnen und der Weg nach Troisdorf zu weit ist, biete ich Ihnen gerne 
                        auch <b> Telefon- oder online-Sprechstunden per Zoom</b> an. Für die Beratungen &ndash; egal ob in der 
                        Praxis, per Telefon oder online &ndash; nehme ich mir die gleiche Zeit für Sie, so dass Sie gerne wählen können.
                        <br />
                        <br />
                        <a href="<?php echo URL_ROOT; ?>beratung" target="_blank">Hier finden Sie mehr Informationen</a>.
                    </div>
                    <div class="col s12 m2">          
                        <a href="<?php echo URL_ROOT; ?>index.php?page=beratung" target="_blank"><img src="<?php echo IMG_PATH; ?>coronaberatung-klein-2.png" alt="Corona-Beratung" class="section-img" /></a>
                    </div>
                </div>



                <div class="row">
                    <div class="col s12 m12">
                        <a id="werbefrei"></a>
                        <hr />
                        <h5>Diese Website ist komplett werbefrei und enthält keine Backlinks!</h5>
                        <hr />
                    </div>
                </div>    

                <div class="row">
                    <div class="col s12 m2">
                        <a href="<?php echo URL_ROOT; ?>index.php?page=guterrat" target="_blank"><img src="<?php echo IMG_PATH; ?>werbefrei.png" alt="werbefrei" class="section-img" /></a>
                    </div>
                    <div class="col s12 m10">          
                        Diese Website existiert seit 2007 und wächst stetig. Angefangen hat alles damit, 
                        dass ich Ihnen meine Bücher vorgestellt habe. Seitdem stelle ich in Abständen 
                        immer mehr Wissen zur Verfügung, und ich würde mich freuen, wenn Sie unter 
                        den vielen Informationen das gefunden haben, was Sie gesucht haben und dass 
                        Ihnen meine Ratschläge weitergeholfen haben.
                        <br />
                        <br />
                        Obwohl sich üblicherweise gleichartige Websites durch Werbung finanzieren,
                        ist diese Website <b>komplett frei von kommerzieller Werbung</b>. Nur so können 
                        Sie sicher sein, dass alle Informationen, die ich Ihnen hier kostenlos 
                        zur Verfügung stelle, garantiert neutral und unbeeinflusst 
                        durch Firmeninteressen zustande gekommen sind. 
                        <br />
                        <br />
                        Aus demselben Grunde schalte ich auch <b>keine Backlinks</b>, um die ich von anderen Webseitenbetreibern 
                        gebeten werde und die mir im Gegenzug einen Backlink zu meiner Seite auf ihrer Hompage anbieten.
                        Zudem finden Sie hier auch <b>keine Gefälligkeitsbeiträge</b>.
                        Erfahrungsgemäß kommen solche Anfragen in den meisten Fällen von Betreibern von Homepages ohne 
                        jeglichen Bezug zu den Inhalten dieser Website oder von Produktanbietern, deren Philosophie ich nicht teile. 
                        Zudem würde es sehr viel Zeit kosten, die Inhalte 
                        einer Partner-Website zu prüfen, bevor ich sie mit gutem Gewissen verlinken könnte.

                        <a href="<?php echo URL_ROOT; ?>guterrat" target="_blank">Lesen Sie hier weiter ...</a>
                    </div>
                </div>

<!--
                <div class="row">
                    <div class="col s12 m12">
                        <a id="backlinks"></a>
                        <hr />
                        <h5>Diese Website enthält keine Backlinks und keine Gefälligkeitsbeiträge!</h5>
                        <hr />
                    </div>
                </div>    

                <div class="row">
                    <div class="col s12 m2">
                        <a href="<?php echo URL_ROOT; ?>index.php?page=guterrat" target="_blank"><img src="<?php echo IMG_PATH; ?>backlinkfrei.png" alt="werbefrei" class="section-img" /></a>
                    </div>
                    <div class="col s12 m10">          
                        Aus demselben Grunde, warum diese Website keine Werbung enthält, 
                        schalte ich auch <b>keine Backlinks</b>, um die ich von anderen Webseitenbetreibern 
                        gebeten werde und die mir im Gegenzug einen Backlink zu meiner Seite auf ihrer Hompage anbieten.
                        Zudem finden Sie hier auch keine <b>Gefälligkeitsbeiträge</b>.
                        Erfahrungsgemäß kommen solche Anfragen in den meisten Fällen von Betreibern von Homepages ohne 
                        jeglichen Bezug zu den Inhalten dieser Website oder von Produktanbietern, deren Philosophie ich nicht teile. 
                        Zudem würde es sehr viel Zeit kosten, die Inhalte 
                        einer Partner-Website zu prüfen, bevor ich sie mit gutem Gewissen verlinken könnte.
                        <br />
                        <br />
                        Nur so können Sie sicher sein, dass alle Tipps, Ratschläge und ggf. sogar Produktempfehlungen, 
                        die Sie auf dieser Website finden, ausschließlich auf meinen eigenen Erfahrungen und umfangreichen Recherchen beruhen
                        und nicht durch finanzielle oder sonstige kommerzielle Interessen beeinflusst sind.
                        <a href="<?php echo URL_ROOT; ?>guterrat">Lesen Sie hier weiter ...</a>
                    </div>
                </div>

-->

                <div class="row">
                    <div class="col s12 m12">
                        <a id="datenschutz"></a>
                        <hr />
                        <h5>Datenschutz</h5>
                        <hr />
                    </div>
                </div>    

                <div class="row">
                    <div class="col s12 m2">
                        <a href="<?php echo URL_ROOT; ?>index.php?page=datenschutz" target="_blank"><img src="<?php echo IMG_PATH; ?>paragraphen-home.png" alt="werbefrei" class="section-img" /></a>
                    </div>
                    <div class="col s12 m10">          
                        <br />
                        <br />
                        Bitte lesen Sie hier die lt. EU-Datenschutzgrundverordnung (DSGVO) vorgeschriebene <a href="<?php echo URL_ROOT; ?>datenschutz" target="_blank">Datenschutzerklärung</a>. 
                    </div>
                </div>


                <div class="row">
                    <div class="col s12 m12">
                        <a id="browser"></a>
                        <hr />
                        <h5>Browseroptimierung</h5>
                        <hr />
                    </div>
                </div>        


                <div class="row">
                    <div class="col s12 m2">
                        <a href="https://www.mozilla.org/de/firefox/" target="_blank"><img src="<?php echo IMG_PATH; ?>firefox-neu.png" alt="Firefox" class="section-img" /></a>
                        <a href="https://www.google.de/chrome/" target="_blank"><img src="<?php echo IMG_PATH; ?>chrome.png" alt="Firefox" class="section-img" /></a>
                    </div>
                    <div class="col s12 m10">
                        <b>Optimierung dieser Website</b>
                        <br />
                        <br />
                        Diese Website ist für die Browser Mozilla Firefox und Google Chrome optimiert. Sollten Sie 
                        mit einem anderen Browser arbeiten und Seiteninhalte nicht korrekt 
                        angezeigt bekommen, können Sie den <a href="http://www.mozilla.org/de/firefox" target="_blank">Firefox</a> 
                        bzw. <a href="https://www.google.de/chrome/" target="_blank">Chrome</a> hier kostenlos downloaden.
                        <br />
                        <br />
                        Weitere Tipps zu Betriebssystemen und Browsern 
                        <br />
                        finden Sie auf der Seite &#187;<a href="<?php echo URL_ROOT; ?>hilfe">Hilfe</a>&#171;
                        <br />
                        <br />
                        <i>Hinweis: Die Abbildungen für die Browser sind eingetragene Warenzeichen von Mozilla Firefox bzw. Google Chrome</i>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m12">
                        <hr />
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m12">
                        <a href="javascript: scrollMainToTop();" class="nachoben">nach oben</a>
                    </div>
                </div>
                <div class="bodyspacer"></div> 
            </div>
        </div>