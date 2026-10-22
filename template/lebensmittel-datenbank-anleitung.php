        <div class="section no-pad-bot" id="index-banner">    
            <div class="container">      
                <br />
                <br /> 
                <div class="right">Letzte Aktualisierung: <b><?= date( "j.n.Y", filemtime( __FILE__ ) ) ?></b></div>
                <h1 class="header center orange-text">DorisPaas.de &ndash; Lebensmittel-Datenbank</h1>      
                    <div class="row center">        
                    <h5 class="header col s12 light">Erläuterungen zur Benutzung</h5>      
                    </div>     
            </div>  
        </div> 
        <div class="container">    
            <div class="section">   
                <div class="row margintoprow">        
                    <div class="col s12 m12">
                    </div>
                    <hr />
                        <b>Bitte lesen Sie zuerst ALLE Abschnitte dieser Anleitung, damit Sie diese Datenbank 
                        optimal nutzen und von allen Funktionalitäten profitieren können.</b>
                    <hr />
                    </div>
                <div class="row">        
                    <div class="col s12 m12">
                    Mit dieser Datenbank können Sie verträgliche und unverträgliche Lebensmittel suchen und finden &ndash; auch bei mehreren gleichzeitig bestehenden Intoleranzen und der FODMAP-Diät.
                    </div>
                    </div>
                <div class="row">        
                    <div class="col s12 m4">
                        <ul class="nav">
                            <li>
                                <b>Abschnitte dieser Seite:</b>
                            </li> 
                            <li>
                                <a href="<?= URL_ROOT ?>lebensmittel-datenbank-anleitung#nutzen">Nutzen dieser Datenbank</a>
                            </li> 
                            <li>
                                <a href="<?= URL_ROOT ?>lebensmittel-datenbank-anleitung#spalten">Spalten</a>
                            </li> 
                            <li>
                                <a href="<?= URL_ROOT ?>lebensmittel-datenbank-anleitung#kategorien">Kategorien</a>
                            </li> 
                            <li>
                                <a href="<?= URL_ROOT ?>lebensmittel-datenbank-anleitung#ampelsystem">Ampelsystem</a>
                            </li> 
                            <li>
                                <a href="<?= URL_ROOT ?>lebensmittel-datenbank-anleitung#filter">Filter (mit Beispielen)</a>
                            </li> 
                            <li>
                                <a href="<?= URL_ROOT ?>lebensmittel-datenbank-anleitung#unvertraeglichkeiten">Hinweise zu den Unverträglichkeiten</a>
                            </li> 
                            <li>
                                <a href="<?= URL_ROOT ?>lebensmittel-datenbank-anleitung#sprungleiste">Sprungleiste</a>
                            </li> 
                            <li>
                                <a href="<?= URL_ROOT ?>lebensmittel-datenbank-anleitung#tagebuch">Ernährungs- und Symptomtagebuch</a>
                            </li> 
                            <li>
                                <a href="<?= URL_ROOT ?>lebensmittel-datenbank-anleitung#schluss">Schlussbemerkungen</a>
                            </li> 
                            <li>
                                <a href="<?= URL_ROOT ?>lebensmittel-datenbank-anleitung#copyright">&#169; Copyright</a>
                            </li> 
                            <li>
                                <a href="<?= URL_ROOT ?>lebensmittel-datenbank-anleitung#druck">Anleitung zum Ausdrucken</a>
                            </li> 
                        </ul>
                    </div>
                </div>
                <div class="row margintoprow">        
                    <div class="col s12 m12">
                        <a id="nutzen"></a>
                        <hr />
                        <h5>Nutzen dieser Datenbank</h5>
                        <hr />
                        In dieser Datenbank sind derzeit <b><?= countLexikonNmuEntries() * 1 ?> verschiedene Lebensmittel</b> aufgeführt und 
                        in Bezug auf ihre Verträglichkeit bei Nahrungsmittel-Intoleranzen und 
                        Nahrungsmittel-Allergien und auf Ihren FODMAP-Gehalt bewertet. Haben Sie &#187;nur&#171; 
                        eine Intoleranz, so ist die Auswahl der verträglichen Lebensmittel noch relativ 
                        einfach, denn es gibt in der einschlägigen Literatur und im Internet zahlreiche 
                        Listen, aus denen Sie ablesen können, welche Lebensmittel in diesem Fall 
                        verträglich oder unverträglich sind. 
                        <br />
                        <br />
                        Wenn Sie jedoch an zwei oder sogar mehreren Intoleranzen gleichzeitig leiden, wird 
                        die Auswahl immer schwieriger, denn Sie müssten nun mehrere Listen vergleichen 
                        und jedes Lebenmittel in jeder Liste nacheinander überprüfen. Das kostet 
                        viel Zeit und ist sehr umständlich.
                        <br />
                        <br />
                        Wenn Sie nun noch im Rahmen einer Diät den FODMAP-Gehalt und ggf. auch den Schwefel- und/oder den Oxalat-Gehalt der Lebensmittel begrenzen 
                        wollen und ggf. gleichzeitig Ihre individuellen Unverträglichkeiten beachten müssen, 
                        dann wird die Auswahl noch unübersichtlicher.
                        <br />
                        <br />
                        Mit dieser Datenbank können Sie die Verträglichkeit verschiedener Lebensmittel 
                        für die häufigsten Nahrungsmittel-Intoleranzen <b>und</b> einen niedrigen 
                        FODMAP-, Schwefel- und Oxalat-Gehalt <b>zusammen</b> überprüfen 
                        und so <b>auf einen Blick</b> feststellen, welche Lebensmittel für Sie auch 
                        <b>bei mehreren Intoleranzen</b> verträglich sind und voraussichtlich keine 
                        Beschwerden verursachen. 
                        <br />
                        <br />
                        Und natürlich können Sie auch prüfen, ob ein Lebensmittel schlecht 
                        verträglich ist oder einen hohen FODMAP-, Schwefel- oder Oxalat-Gehalt hat und Sie es ggf. meiden müssen. Zusätzlich können 
                        Sie erkennen, ob ein Lebensmittel zwar in der Karenzphase problematisch, aber in 
                        der Erprobungsphase u.U. verträglich sein kann. 
                        <br />
                        <br />
                        Die Lebensmittel sind in 12 Kategorien zusammengefasst, damit die Übersichtlichkeit 
                        gewahrt bleibt. Für die Verträglichkeit wird ein einfaches Ampelsystem mit 
                        den Farben grün, gelb und rot, um die Verträglichkeit darzustellen. 
                        <br />
                        <br />
                        Da diese Einteilung relativ grob ist, gibt es für jedes Lebensmittel eine 
                        zusätzliche Beschreibung, in der ggf. auf Besonderheiten hingewiesen wird. 
                        Umfangreichere Erläuterungen werden komplett angezeigt, sobald Sie die Maus 
                        über den Text führen. 
                        <br />
                        <br />
                        <b>Sie erhalten mit dieser Datenbank die Möglichkeit, Ihren Speisezettel nicht nur 
                        in Bezug auf den FODMAP-Gehalt und Ihre verschiedenen Intoleranzen, sondern auch ganz einfach dem Status Ihrer 
                        Ernährungsumstellung (Karenzphase, Erprobungsphase oder Routine) anpassen zu 
                        können.</b>
                        <br />
                        <br />
                        Was diese Datenbank <b>nicht</b> enthält, sind bestimmte Produkte &ndash; also das Produkt A von der Firma XY 
                        oder das Produkt B von der Firma Z. Dies würde zum einen bei Hundertausenden von Produkten auf dem 
                        Nahrungsmittelmarkt jeden Rahmen sprengen. Und zum anderen könnte eine solche Datenbank auch nie wirklich 
                        aktuell sein, denn die Hersteller ändern fast täglich ihre Rezepturen, so dass die Verlässlichkeit der 
                        Angaben nie gewährleistet sein könnte. Nur bei sehr vereinzelten Erzeugnissen wird hier eine Ausnahme gemacht, 
                        wenn sie als Standard-Produkte auf fast jedem Einkaufszettel stehen oder aber, wenn sie aus anderen Gründen 
                        besonders interessant sind. Auf die eventuell wechselnde Rezeptur wird dann jedoch in der Beschreibung hingewiesen.
                        <br />
                        <br />
                        Da in der <b>DorisPaas.de &ndash; Lebensmittel-Datenbank</b> aber alle Zutaten aufgeführt sind, können Sie nach 
                        einem Blick auf die Zutatenliste für jedes Nahrungsmittel selbst feststellen, ob dieses für Sie verträglich 
                        ist oder nicht &ndash; und dies ganz zuverlässig und aktuell.
                        <br />
                        <br />
                        <b>Wichtiger Hinweis:</b> Mit den zahlreichen verschiedenen Möglichkeiten, verträgliche oder unverträgliche Lebensmittel 
                        identifizieren zu können, steigt auch die »Gefahr«, zu viele Lebensmittel vom Speiseplan zu streichen. Dies schränkt 
                        nicht nur die Auswahl auf dem Teller stark ein, sondern zieht als Folge eine Minimierung der Diversität Ihrer Mikrobiota 
                        (Darmflora) nach sich. Bitte erweitern Sie deshalb möglichst rasch mit Hilfe der Filtermöglichkeiten wieder Ihren 
                        Speisezettel, um Schäden zu vermeiden.
                        <br />
                        <br />
                        <b>Zusätzlicher Hinweis:</b> Manche Nahrungsmittel (wie u.a. Palmöl) oder Zusatzstoffe (wie u.a. die mit den 
                        E-Nummern gekennzeichneten) sind häufig durchgehend in allen Spalten mit gelben oder sogar roten Kennzeichen versehen. 
                        Dies geschieht vor allem, weil es insbesondere bei einem empfindlichen Verdauungssystem häufig klüger ist, grundsätzlich 
                        auf solche bedenklichen Stoffe zu verzichten, da sie unkalkulierbare Wirkungen (nicht nur) auf die Verdauung haben können. 
                        Darüber hinaus haben viele Produkte häufig auch gravierende ökologische Mängel, die ich für erwähnenswert halte. 
                        In allen diesen Fällen wird im Infotext auf diese Zusammenhänge verwiesen.
                        <br />
                        <br />
                        <div class="obenlink">
                            <a href="javascript: scrollMainToTop();" class="nachoben">zurück zum Menü</a>
                        </div>
                        <a id="spalten">&nbsp;</a>
                        <br />
                        <hr />
                        <h5>Spalten</h5>
                        <hr />
                        <br />
                        In der Datenbank finden Sie folgende Spalten:
                        <br />
                        <br />
                        <b>Lebensmittel:</b>
                        <br />
                        In dieser Spalte sind alle enthaltenen Lebensmittel in alphabetischer Reihenfolge 
                        mit ihrem Namen aufgelistet. Bei mehreren möglichen Bezeichnungen finden Sie 
                        entsprechende Verweise.
                        <br />
                        <br />
                        <b>Kategorie:</b>
                        <br /> 
                        In dieser Spalte sind die Lebensmittel nach verschiedenen Kategorien 
                        geordnet. Wegen der Übersichtlichkeit wurden verschiedene Kategorien 
                        zu Gruppen zusammengefasst (siehe <a href="<?= URL_ROOT ?>lebensmittel-datenbank-anleitung#kategorien">Kategorien</a>).
                        <br />
                        <br />
                        <b>Auswahl(en) der Unverträglichkeit(en):</b>
                        <br />
                        In den folgenden Spalten sind die Lebensmittel in Bezug auf 
                        Unverträglichkeiten bewertet: 
                        <br />
                        &#149; Laktose-Intoleranz)
                        <br />
                        &#149; Fruktose- Intoleranz
                        <br />
                        &#149; Sorbit- Intoleranz
                        <br />
                        &#149; Histamin-Intoleranz
                        <br />
                        &#149; Oligosaccharid-Intoleranz
                        <br />
                        &#149; Gluten-Sensitivität und Zöliakie (Gluten-Sens./Zöliakie)
                        <br />
                        &#149; Salicylat-Intoleranz
                        <br />
                        &#149; allergenes Potenzial 
                        <br />
                        &#149; Schwefel
                        <br />
                        &#149; Oxalate
                        <br />
                        &#149; Zusätzlich wird jedes Lebensmittel wird in Bezug auf seinen FODMAP-Gehalt eingruppiert
                        <br />
                        <br />
                        <b>Info:</b>
                        <br />
                        In dieser Spalte finden Sie ausführliche Informationen 
                        zu dem Lebensmittel, die teils die groben Ampelfarben noch feiner unterteilen und 
                        genauere Erläuterungen zur Verträglichkeit geben. Umfangreichere 
                        Texte werden komplett angezeigt, sobald Sie die Maus darüber führen. 
                        <br />
                        <a id="kategorien">&nbsp;</a>
                        <br />
                        <br />
                        <hr />
                        <h5> Kategorien</h5>
                        <hr />
                        <br />
                        <b>Die Lebensmittel sind in folgende Kategorien eingeteilt:</b>
                        <br />
                        <br />
                        &#149; Fette und Öle
                        <br />
                        &#149; Fisch, Meeresfrüchte und Weichtiere
                        <br />
                        &#149; Fleisch und Wurstwaren
                        <br />
                        &#149; Getränke
                        <br />
                        &#149; Getreide, Cerealien, Brot und Nudeln
                        <br />
                        &#149; Hülsenfrüchte
                        <br />
                        &#149; Medikamente und Nahrungsergänzungen
                        <br />
                        &#149; Milchprodukte
                        <br />
                        &#149; Nüsse, Schalenfrüchte und Samen
                        <br />
                        &#149; Obst und Gemüse
                        <br />
                        &#149; Süßigkeiten und Knabbereien
                        <br />
                        &#149; Zutaten, Kräuter, Gewürze und Brotaufstriche
                        <br />
                        <a id="ampelsystem">&nbsp;</a>
                        <br />
                        <br />
                        <hr />
                        <h5> Ampelsystem</h5>
                        <hr />
                        <br />
                        Zur Kennzeichnung der Produkte wurden der Einfachheit halber die Ampelfarben 
                        grün, gelb und rot gewählt, die mit zusätzlichen Symbolen 
                        verdeutlicht wurden:
                        <br />
                        <br />
                        </div>
                        <table border="0" cellspacing="0" cellpadding="0" class="faq">
                        <tr>
                            <th class="ampelx">
                                Ampelfarbe
                            </th>
                            <th class="ampelz">
                                Bedeutung
                            </th>
                        </tr>
                        
                        <tr>
                            <td class="ampelx">
                                <img src="<?php echo IMG_PATH; ?>ampel-gruen.png" alt="" style="margin-left: 18px;" />
                            </td>
                            </td>
                            <td class="ampelz">
                                Lebensmittel ist in der Regel gut verträglich
                                <br />
                                Kein relevanter Gehalt des unverträglichen Stoffs
                            </td>
                        </tr>
                        
                        <tr>
                            <td class="ampelx">
                                <img src="<?php echo IMG_PATH; ?>ampel-grau.png" alt="" style="margin-left: 18px;" />
                            </td>
                            </td>
                            <td class="ampelz">
                                Das Lebensmittel hat einen niedrigen FODMAP-Gehalt
                                <br />
                                Geeignet bei der FODMAP-Diät
                        
                            </td>
                        </tr>
                        
                        <tr>
                            <td class="ampelx">
                                <img src="<?php echo IMG_PATH; ?>ampel-gelb.png" alt="" style="margin-left: 18px;" />
                            </td>
                            <td class="ampelz">
                                Lebensmittel kann ggf. leichtere Probleme bereiten
                                <br />
                                Geringer Gehalt des unverträglichen Stoffs
                                <br /> 
                                In der Karenzphase dieses Lebensmittel meiden
                                <br />
                                In der Erprobungsphase kann dieses Lebensmittel ggf. in Maßen verträglich sein
                                <br />
                                Unklarer FODMAP-Gehalt &ndash; bitte lesen Sie die jeweilige Beschreibung.
                                <br />
                                <br />
                                <b>Hinweis:</b> Bei unklarem Gehalt, bei eventuellen Abweichungen, bei möglichen Verunreinigung 
                                durch industrielle Bearbeitung oder aber bei Zusatzstoffen, die sich generell 
                                problematisch auf ein empfindliches Verdauungssystem auswirken können, ist 
                                die gelbe Warnfarbe gewählt.
                        
                            </td>
                        </tr>
                        
                        <tr>
                            <td class="ampelx">
                                <img src="<?php echo IMG_PATH; ?>ampel-rot.png" alt="" style="margin-left: 18px;" />
                            </td>
                            </td>
                            <td class="ampelz">
                                Lebensmittel ist unverträglich
                                <br />
                                Hoher Gehalt des unverträglichen Stoffs
                                <br />
                                <br />
                                Hinweis: Bei bestimmten Zusatzstoffen, die trotz der Zuteilung einer 
                                E-Nummer bereits als problematisch bekannt sind, ist die rote Warnfarbe gewählt.
                            </td>
                        </tr>
                        
                        <tr>
                            <td class="ampelx">
                                <img src="<?php echo IMG_PATH; ?>ampel-orange.png" alt="" style="margin-left: 18px;" />
                            </td>
                            </td>
                            <td class="ampelz">
                                Das Lebensmittel hat einen hohen FODMAP-Gehalt
                                <br />
                                Bei der FODMAP-Diät eher ungeeignet
                            </td>
                        </tr>
                        
                        <tr>
                            <td class="ampelx">
                                <img src="<?php echo IMG_PATH; ?>ampel-gruen-hell.png" alt="" style="margin-left: 18px;" />
                            </td>
                            </td>
                            <td class="ampelz">
                                Bei einer aktiven Auswahl von Filtern bei den Intoleranzen und den FODMAPS 
                                erscheinen die  Ampeln in den Spalten weniger farbintensiv, in denen keine 
                                Filter gesetzt wurden, sind aber zur informativen Übersicht noch erkennbar.
                            </td>
                        </tr>
                        </table>
                        
                        <a id="filter">&nbsp;</a>
                        <br />
                        <br />
                        <hr />
                        <h5> Filter</h5>
                        <hr />
                        <br />
                        Sie können für die Lebensmittel, für die Kategorien und/oder für 
                        die einzelnen Unverträglichkeiten und den FODMAP-Gehalt Filter setzen, um sich so 
                        die gewünschten Lebensmittel anzeigen lassen.
                        <br />
                        <br />
                        <img src="<?php echo IMG_PATH; ?>filteranwenden.png" alt="" border="0" hspace="0" vspace="0" style="float: left; margin-right: 5px; padding-bottom: 0px;" />
                        <br />
                        <br />
                        Wenn Sie einen oder mehrere Filter ausgewählt haben, muss diese Auswahl mit einem 
                        Klick auf die Schaltfläche &#187;<b>Filter anwenden</b>&#171; bestätigt werden.
                        <br />
                        <br />
                        <b>Hinweis:</b> In der Spalte &#187;Kategorie&#171; ist eine <b>Mehrfachauswahl</b> 
                        möglich, so dass Sie hier <b>gleichzeitig mehrere Kategorien</b> auswählen können. 
                        Das Auswahlfenster für diesen Mehrfachfilter schließt sich, sobald der Mauszeiger 
                        aus dem Fenster bewegt wird.
                        <br />
                        <br />
                        <img src="<?php echo IMG_PATH; ?>filterzurueck.png" alt="" border="0" hspace="0" vspace="0" style="float: left; margin-right: 5px; padding-bottom: 0px;" />
                        <br />
                        <br />
                        Wenn Sie die Auswahl ändern möchten, deaktivieren Sie zuvor alle Filter mit einem 
                        Klick auf die Schaltfläche &#187;Filter zurücksetzen&#171; und wählen anschließend 
                        die neuen Filter.
                        <br />
                        <br />
                        Sie finden hier einige Beispiele, die die verschiedenen Möglichkeiten verdeutlichen sollen:
                        <br />
                        <br />
                        <b>Beispiel 1: </b>
                        <br />
                        <b>Sie möchten wissen, ob brauner Zucker bei Laktose-Intoleranz und bei 
                        Fruktose-Intoleranz verträglich ist.</b>
                        <br />
                        <b>1)</b> Setzen Sie einen Filter in der Spalte &#187;Lebensmittel&#171; auf den 
                        Begriff &#187;brauner Zucker&#171;. 
                        <br />
                        <b>2)</b> Klicken Sie auf &#187;<b>Filter anwenden</b>&#171;.
                        <br />
                        <b>3)</b>  Nun können Sie schauen, welche Ampelfarben in den Spalten &#187;Laktose-Intoleranz&#171; 
                        und &#187;Fruktose-Intoleranz&#171; eingetragen sind.
                        <br />
                        <b>4)</b> Zum Schluss deaktivieren Sie alle Filter, um mit einer neuen Suche beginnen zu 
                        können. Hierzu klicken Sie auf &#187;<b>Filter zurücksetzen</b>&#171;.
                        <br />
                        <b>Alternativ</b> können Sie den Rollbalken am rechten Bildrand benutzen und in 
                        der Spalte &#187;Lebensmittel&#171; bis zum Begriff &#187;brauner Zucker&#171; 
                        hinunterscrollen und schauen, welche Ampelfarben in den Spalten &#187;Laktose-Intoleranz&#171; 
                        und &#187;Fruktose-Intoleranz&#171; eingetragen sind.
                        <br />
                        <br />
                        <b>Beispiel 2: </b>
                        <br />
                        <b>Sie halten die FODMAP-Diät ein und leiden an Zöliakie und suchen geeignete Lebensmittel.</b>
                        <br />
                        <b>1)</b> Setzen Sie einen Filter bei der in der Spalte &#187;Gluten-Sensitivität/Zöliakie&#171; 
                        auf &#187;grün&#171; und einen zweiten Filter in der Spalte 
                        &#187;FODMAPS&#171; auf &#187;grün&#171;.
                        <br />
                        <b>2)</b> Klicken Sie auf &#187;<b>Filter anwenden</b>&#171;.
                        <br />
                        <b>3)</b> Als Ergebnis erhalten Sie alle Lebensmittel mit einem niedrigen FODMAP-Gehalt 
                        angezeigt, die bei Gluten-Sensitivität/Zöliakie verträglichen sind.
                        <br />
                        <b>4)</b> Zum Schluss deaktivieren Sie alle Filter, um mit einer neuen Suche beginnen zu 
                        können. Hierzu klicken Sie auf &#187;<b>Filter zurücksetzen</b>&#171;.
                        <br />
                        <br />
                        <b>Beispiel 3: </b>
                        <br />
                        <b>Sie leiden an Histamin-Intoleranz und befinden sich in der Karenzphase. Sie 
                        suchen Fleisch und Wurstwaren, Fisch, Meeresfrüchte und Weichtiere, die jetzt 
                        für Sie unverträglich sind. </b>
                        <br />
                        <b>1)</b> Setzen Sie einen Mehrfachfilter bei der in der Spalte &#187;Kategorie&#171; auf 
                        &#187;Fleisch und Wurstwaren&#171; <b>und</b> auf &#187;Fisch, Meerefrüchte und 
                        Weichtiere&#171; und einen zweiten Filter in der Spalte &#187;Histamin-Intoleranz&#171; 
                        auf &#187;gelb/rot&#171;.
                        <br />
                        <b>2)</b> klicken Sie auf &#187;<b>Filter anwenden</b>&#171;.
                        <br />
                        <b>3)</b> Als Ergebnis erhalten Sie alle bei Histamin-Intoleranz schlecht oder völlig 
                        unverträglichen Fleisch- und Wurstwaren, Fisch, Meeresfrüchte und Weichtiere angezeigt.
                        <br />
                        <b>4)</b> Zum Schluss deaktivieren Sie alle Filter, um mit einer neuen Suche beginnen zu 
                        können. Hierzu klicken Sie auf &#187;<b>Filter zurücksetzen</b>&#171;.
                        <br />
                        <br />
                        <b>Beispiel 4: </b>
                        <br />
                        <b>Sie möchten sich alle Obst- und Gemüsesorten und Hülsenfrüchte anzeigen lassen, 
                        die bei Fruktose- und Oligosaccharid-Intoleranz in der Erprobungsphase verträglich 
                        sind.</b>
                        <br />
                        <b>1)</b> Setzen Sie einen Mehrfachfilter in der Spalte &#187;Kategorie&#171; auf 
                        &#187;Obst und Gemüse&#171; <b>und</b> auf &#187;Hülsenfrüchte&#171;, 
                        einen zweiten Filter in der Spalte &#187;Friktose-Intoleranz&#171; 
                        auf &#187;grün/gelb&#171; und einen dritten Filter in der Spalte &#187;Oligosaccharid-Intoleranz&#171; 
                        ebenfalls auf &#187;grün/gelb&#171;. Gleichzeitig sollten Sie einen weiteren Filter 
                        in der Spalte &#187;Sorbit-Intoleranz&#171; auf &#187;grün/gelb&#171; setzen, weil bei einer 
                        Fruktose-Intoleranz gleichzeitig immer auch die Aufnahme Sorbit problematisch ist. 
                        <br />
                        <b>2)</b> Klicken Sie auf &#187;<b>Filter anwenden</b>&#171;.
                        <br />
                        <b>3)</b> Als Ergebnis erhalten Sie alle in der Erprobungsphase bei Fruktose- und 
                        Oligosaccharid-Intoleranz zur Verfügung stehenden Obst- und Gemüsesorten 
                        angezeigt. Mit &#187;grün&#171; sind die Lebensmittel markiert, die jezt mit großer 
                        Sicherheit verträglich sind, mit gelb diejenigen, die Sie testen und nach und nach 
                        in Ihren Speiseplan einbauen können.
                        <br />
                        <b>4)</b> Zum Schluss deaktivieren Sie alle Filter, um mit einer neuen Suche beginnen zu 
                        können. Hierzu klicken Sie auf &#187;<b>Filter zurücksetzen</b>&#171;.
                        <br />
                        <br />
                        Die Auswahl von mit &#187;Rot&#171; gekennzeichneten Lebensmitteln liefert nur  
                        jeweils für <b>eine</b> Unverträglichkeit sinnvolle Ergebnisse &ndash; eine 
                        gleichzeitige Auswahl für mehrere Intoleranzen würde aufgrund des hinterlegten 
                        Algorismus (mathematische Und-Verknüpfung) eine unlogische Anzeige ergeben. 
                        Filtern Sie &#187;rote&#171; Lebensmittel bitte immer getrennt oder lassen Sie 
                        sich bei Auswahl mehrerer Intoleranzen alternativ die geeigneten Lebensmittel 
                        (das Positiv-Ergebnis) anzeigen, indem Sie die Filter auf &#187;grün&#171; oder 
                        &#187;grün/gelb&#171; setzen. In diesem Falle können Sie selbstverständlich mehrere
                        Filter gleichzeitig setzen.
                        <br />
                        <br />
                        In den Spalten für die Unverträglichkeiten und die FODMAPS <b>bleiben gesetzte Filter bei einer 
                        Neuanmeldung auch dann bestehen</b>, wenn Sie die Filter vor dem Ausloggen nicht 
                        zurück gesetzt zu haben. Diese Funktion bietet Ihnen den Komfort, &#187;Ihre&#171; 
                        Unverträglichkeiten bei jeder neuen Suche nicht immer wieder eingeben zu müssen.
                        Die Filter in den Spalten &#187;Lebensmittel&#171; und &#187;Kategorie&#171; werden 
                        bei der Neuanmeldung jedoch automatisch zurück gesetzt.
                        <br />
                        <br />
                        Für diese Funktion ist es erforderlich, dass Sie in Ihrem Browser <b>das Anlegen von 
                        Cookies gestatten</b>. Lesen Sie hierzu bitte auch die Ausführungen zum 
                        <a href="impressum#datenschutz" target="_blank">Datenschutz</a>.
                        <br />
                        <br />
                        <p class="hinweis">
                        Hinweis: Einige Browser zeigen bei wiederholten Suchaktionen einen Dialog, dass 
                        die Daten erneut gesendet werden müssen. Bitte bestätigen Sie diese Meldung, um 
                        die gewünschte Auswahl angezeigt zu bekommen.
                        </p>  
                        <a id="unvertraeglichkeiten">&nbsp;</a>
                        <br />
                        <hr />
                        <h5> Hinweise zu den Unverträglichkeiten</h5>
                        <hr />
                        <br />
                        <b>Laktose-Intoleranz:</b>
                        <br />
                        Sofern bei Lebensmitteln das Kennzeichen für Laktose mit &#187;grün&#171; 
                        angegeben ist, bezieht sich die Angabe auf unverarbeitete Lebensmittel. Sobald die 
                        Lebensmittel industriell verarbeitet sind, müssen Sie immer auf die Zutatenliste 
                        schauen.
                        <br />
                        <br />
                        <b>Fruktose-Intoleranz:</b>
                        <br />
                        Die Verträglichkeit von Lebensmitteln, die Fruktose enthalten, ist zusätzlich 
                        abhängig von ihrem Glukose-Gehalt und dem Verhältnis von Fruktose und 
                        Glukose. In der Bewertung der Verträglichkeit in Bezug auf Fruktose-Intoleranz 
                        (hier immer gleichbedeutend mit Fruktose-Malabsorption bzw. intestinaler 
                        Fuktose-Intoleranz) sind beide Werte mit einberechnet. 
                        <br />
                        <br />
                        <b>Sorbit-Intoleranz:</b>
                        <br />
                        Wenn Lebensmittel sorbithaltig sind, ist das Kennzeichen auch bei Fruktose angepasst, 
                        da sorbithaltige Lebensmittel so gut wie immer auch bei Fruktose-Intoleranz 
                        problematisch sind.
                        <br />
                        <br />
                        <b>Histamin-Intoleranz:</b>
                        <br />
                        Der Histamingehalt bezieht sich auf frische Produkte. Er kann sich (teils drastisch) 
                        erhöhen, wenn die Lebensmittel länger lagern oder zubereitet und wieder 
                        aufgewärmt werden. Weiterhin werden Lebensmittel mit anderen biogenen Aminen 
                        wie Tyramin und Phenylethylamin und auch Lebensmittel, die Histidin enthalten oder 
                        als Histaminliberatoren wirken, ebenfalls in dieser Spalte markiert.
                        <br />
                        <br />
                        <b>Oligosaccharid-Intoleranz:</b>
                        <br />
                        In dieser Spalte sind Produkte in Bezug auf ihren Oligosaccharid-Gehalt bewertert.
                        Da Menschen mit Oligosaccharid-Intoleranz jedoch auch häufig Probleme 
                        mit Polysacchariden (z.B. Ballaststoffen) haben, sind diese Lebensmittel hier dann 
                        ebenfalls entsprechend markiert.
                        <br />
                        <br />
                        <b>Gluten-Sensitivität und Zöliakie:</b>
                        <br />
                        Eine rote Kennzeichnung für einen Glutengehalt wird hier nur vorgenommen, 
                        wenn die Lebensmittel eindeutig von Natur aus glutenhaltig sind. Die gelbe Kennzeichnung 
                        wird vorgenommen, wenn ein Glutengehalt sehr wahrscheinlich ist.
                        Eine Verunreinigung durch industrielle Bearbeitung oder Beimischung von glutenhaltigen 
                        Zutaten kann jedoch nie ausgeschlossen werden! Bitte beachten Sie insbesondere 
                        hier auch immer die zusätzlichen Hinweise in der Besechreibung.
                        Bei Menschen mit Gluten-Sensitivität ist der Gehalt von Spuren von Gluten nicht 
                        beeinträchtigend, bei Zöliakie können jedoch schon Spuren sofort 
                        neue Beschwerden verursachen. Deshalb verweise ich Zöliakie-Erkrankte auf 
                        die Lebensmittellisten und auf die Informationen der Deutschen Zöliakie Gesellschaft e.V.
                        <br />
                        <br />
                        <b>Salicylat-Intoleranz:</b>
                        <br />
                        Die meisten  Lebensmittel sind in Bezug auf ihre 
                        Verträglichkeit bei Salicylat-Intoleranz bewertet. Lediglich bei etwa 3% konnten 
                        bisher noch keine Daten ermittelt werden, deshalb ist hier die entsprechende 
                        Spalte bis zur Ermittlung belastbarer Fakten leer.<br />
                        <br />
                        <b>allergenes Potenzial:</b>
                        <br />
                        In Bezug auf Allergien kann nur das allgemeine Allergie-Potenzial angegeben 
                        werden. Es sind nur wenige Lebensmittel in der Spalte &#187;allergenes Potenzial&#171; 
                        mit &#187;grün&#171; gekennzeichnet, 
                        dies sind diejenigen, die für eine im Allgemeinen geringe allergene Potenz 
                        bekannt sind. Ist beim allergenen Potenzial kein Wert angegeben, bedeutet dies deshalb 
                        nicht, dass grundsätzlich keine Allergien gegen dieses Lebensmittel vorkommen 
                        können &#150; lediglich die Wahrscheinlichkeit ist hier eher geringer. 
                        <br />
                        <br />
                        <b>Schwefel:</b>
                        <br />
                        Sehr häufig machen schwefelhaltige Lebensmittel Probleme und sind insbesondere bei einer 
                        Schwefel-Wasserstoff-SIBO zu meiden. Hier sollten die Lebensmittel mit einer grünen (Karenzphase) 
                        bzw. gelben (Erprobungsphase) ausgewählt werden. Wie bei den anderen Spalten können auch hier 
                        die grünen und gelben Lebensmittel kombiniert werden. Für einige Lebensmittel konnten bisher 
                        noch keine Daten ermittelt werden. Bis diese Leerstellen beseitigt sind, finden Sie einen 
                        entsprechenden Hinweis im Infobereich.
                        <br />
                        <br />
                        <b>Oxalate:</b>
                        <br />
                        Bei einem eindeutig diagnostizierten Oxalatproblem filtern Sie bitte zunächst die mit der roten Markierung 
                        versehenen Lebensmittel aus, um ein Gefühl für die &#187;gehaltvollsten&#171; Lebensmittel kennenzulernen und zu minimieren.
                        Wichtig ist hier vor allem auch die Beachtung Ihrer Portionsgrößen, denn der Gehalt von Oxalaten hängt selbstverständlich 
                        von dem Gesamtverzehr ab. Später arbeiten Sie mit den gelben Markierungen, um sich langsam an verträgliche Mengen heranzutasten.
                        Wie bei den anderen Spalten können auch hier die grünen und gelben Lebensmittel kombiniert werden. 
                        <br />
                        <br />
                        <b>FODMAPS:</b>
                        <br />
                        Bei der FODMAP-Diät gibt es keine grundsätzlich &#187;erlaubten&#171; oder 
                        &#187;verbotenen&#171; Lebensmittel. Hier ist es entscheidend, <b>die Summe</b> 
                        der FODMAPS so gering wie möglich zu halten. Aus diesem Grund sind in dieser Spalte
                        die Ampeln für Lebensmittel mit einem niedrigen FODMAP-Gehalt
                        mit einem N und die Ampeln für Lebensmittel mit einem hohen Fodmap-Gehalt mit einem H gekennzeichnet.
                        Eine gelbe Kennzeichnung zeigt einen unklaren FODMAP-Gehalt &ndash; bitte lesen 
                        Sie die jeweilige Beschreibung.
                        <br />
                        Bei den FODMAPS kann es auf den ersten Blick irreführend erscheinen, 
                        wenn in einem Lebensmittel ein relativ &#187;hoher&#171; 
                        Gehalt einer Kohlenhydratgruppe enthalten ist, der FODMAP-Gehalt 
                        insgesamt aber mit &#187;niedrig&#171; bewertet wurde.
                        Diese Klassifizierung ist aber immer die <b>Summe</b> aller 
                        vergärbaren Kohlenhydrate. Dabei kann es sein, dass entweder 
                        von allen relevanten Kohlenhydraten jeweils nur wenig vorhanden 
                        ist oder aber von einer Art mehr und den anderen Arten dabei 
                        so gut wie nichts. Die <b>Summe</b> ist in beiden Fällen gleich.
                        Deshalb sollten Sie bei einer bekannten Unverträglichkeit 
                        neben dem Filter für die FODMAPs auch den oder die Filter 
                        für die bekannte(n) Unverträglichkeit(en) setzen, um auch 
                        bei Ihren bekannten Unverträglichkeiten auf der sicheren Seite zu sein.
                        <br />
                        <a id="sprungleiste">&nbsp;</a>
                        <br />
                        <br />
                        <hr />
                        <h5> Sprungleiste</h5>
                        <hr />
                        <br />
                        Auf allen Geräten befindet sich direkt unter den Filtern eine Sprungleiste mit blauen Buchstaben. 
                        <br />
                        <br />
                        <img src="<?php echo IMG_PATH; ?>sprungleiste.png" alt="" style="margin-left: 18px;" />
                        <br />
                        Wenn Sie ein spezielles Lebensmittel suchen, gelangen Sie ganz einfach 
                        mit einem Klick auf den entsprechenden Buchstaben in der Sprungleiste zu den Lebensmitteln mit dem entsprechenden 
                        Anfangsbuchstaben und können von dort aus rascher weiterscollen.
                        <br />
                        <br />
                        Bei aktivierten Filtern fehlen u.U. einzelne Buchstaben, sofern es mit dieser Filterkombination keine Lebensmittel 
                        mit den entsprehenden Anfangsbuchstaben mehr gibt.
                        <br />
                        <a id="tagebuch">&nbsp;</a>
                        <br />
                        <br />
                        <hr />
                        <h5> Ernährungs- und Symptomtagebuch</h5>
                        <hr />
                        <br />
                        Die Eingruppierung der Lebensmittel in das Ampelsystem hat zwar eine allgemeine Gültigkeit.
                        Trotzdem empfiehlt sich das Führen eines <b>Ernährungs- und Symptomtagebuchs</b>. Protokollieren Sie
                        in jeder Phase Ihrer Diät für einige Tage alles was Sie essen und trinken, um Ihre individuellen
                        Verträglichkeiten erkennen zu können, denn unter Umständen können diese von den allgemeinen
                        Verträglichkeiten abweichen. Manches vertragen Sie eventuell nicht so gut, dafür sind andere Lebensmittel,
                        die eigentlich in der aktuellen Phase noch nicht die &#187;richtige&#171; Farbe tragen, vielleicht
                        doch bekömmlich.
                        <br />
                        <br />
                        Sie finden einen kostenlosen Vordruck für ein Ernährungs- und Symptomtagebuch im PDF-Format
                        oder als Excel-Vorlage auf meiner Website unter dem Menü <a href="downloads#tagebuch" target="_blank">Downloads</a>.
                        <br />
                        <a id="schluss">&nbsp;</a>
                        <br />
                        <br />
                        <hr />
                        <h5> Schlussbemerkungen</h5>
                        <hr />
                        <br />
                        Die Angaben sind nach bestem Wissen und Gewissen zusammengetragen &#150; zum einen 
                        Teil mithilfe umfangreicher Auswertungen der Fachliteratur und Internet-Recherchen 
                        (siehe <a href="lebensmittel-datenbank-info#quellen" target="_blank">Quellen</a>), 
                        zum anderen aber auch aufgrund eigener Erfahrungen und zahlreicher Berichte von 
                        Klienten. Die Eingaben werden immer wieder überprüft, aktualisiert und 
                        laufend ergänzt.
                        <br />
                        <br />
                        <b>Individuelle Verträglichkeit:</b>
                        <br />
                        Selbstverständlich ist die Verträglichkeit einzelner Lebensmittel auch 
                        immer individuell. Wenn Sie extrem abweichende Erfahrungen von diesen Eingaben 
                        mit Lebensmitteln machen, freue ich mich über eine entsprechende Nachricht 
                        per <a href="email-anfrage" target="_blank">eMail</a> von Ihnen. 
                        <br />
                        <br />
                        <b>Wichtig</b>: 
                        <br />
                        Bitte beachten Sie, dass Sie für Ihre Gesundheit selbst 
                        verantwortlich sind. Für eventuell auftretende Probleme &#150; insbesondere 
                        gravierende allergische Reaktionen &#150; kann keine Verantwortung übernommen 
                        werden. Im Zweifelsfalle sind Sie dringend aufgefordert, umgehend ärztlichen 
                        Rat einzuholen!
                        <br />
                        <a id="copyright">&nbsp;</a>
                        <br />
                        <br />
                        <hr />
                        <h5>&#169; Copyright-Hinweis:</h5>
                        <hr />
                        <br />
                        Sämtliche Daten und Funktionen der <b>DorisPaas.de &ndash; Lebensmittel-Datenbank</b> 
                        unterliegen dem Copyright von Doris Paas.
                        <br />
                        <br />
                        Die Nutzung der <b>DorisPaas.de &ndash; Lebensmittel-Datenbank</b> ist personengebunden 
                        und ausschließlich über eines der angebotenen <a href="shop#abos" target="_blank">Abonnements</a> möglich.
                        <br />
                        <br />
                        Weder Inhalte noch Funktionen dürfen kopiert, vervielfältigt oder in ausgedruckter 
                        oder digitaler Form weitergegeben werden. Bei widerrechtlicher Nutzung wird der 
                        Zugriff sofort gesperrt. Die im Voraus bezahlten Abonnement-Gebühren werden in 
                        diesem Falle nicht zurück erstattet.
                        <a id="druck">&nbsp;</a>
                        <br />
                        <br />
                        <hr />
                        <h5> Anleitung zum Ausdrucken</h5>
                        <hr />
                        <br />
                        <a href="<?php echo FILES_PATH; ?>dorispaas-de-lebensmitteldatenbank-anleitung.pdf" target="_blank">
                            <img src="<?php echo IMG_PATH; ?>pdf-logo.png" alt="" border="0" hspace="0" vspace="0" style="float: left; margin-right: 10px; padding-bottom: 0px;" /></a>
                        <br />
                        Hier können Sie sich die <a href="<?php echo FILES_PATH; ?>dorispaas-de-lebensmitteldatenbank-anleitung.pdf" target="_blank">Anleitung</a> 
                        auch zum Ausdrucken im PDF-Format downloaden.
                        <br />
                        <br />
                        <br />
                        <a href="javascript: scrollMainToTop();" class="nachoben">nach oben</a>
                    </div>
                </div>
            </div>    
            <br>
            <br> 
            <div class="bodyspacer"></div> 
        </div>