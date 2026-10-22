        <div class="section no-pad-bot" id="index-banner">    
            <div class="container">      
                <br />
                <br />      
                <div class="right">Letzte Aktualisierung: <b><?= date( "24.8.2025", filemtime( __FILE__ ) ) ?></b></div>
                <h1 class="header center orange-text">AGBs</h1> 
                    <div class="row center">        
                    <h5 class="header col s12 light">Allgemeine Geschäftsbedingungen</h5>      
                    </div>     
            </div>  
        </div>
        <div class="container">    
            <div class="section"> 

                <div class="row margintoprow">        
                    <div class="col s12 m4">
                        <ul class="nav">
                            <li>
                                <b>Abschnitte dieser Seite:</b>
                            </li> 
                            <li>
                                <a href="<?= URL_ROOT ?>agb#versandkosten">Versandkosten</a>
                            </li> 
                            <li>
                                <a href="<?= URL_ROOT ?>agb#versandbedingungen">Versandbedingungen</a>
                            </li> 
                            <li>
                                <a href="<?= URL_ROOT ?>agb#widerrufsbelehrung">Widerrufsbelehrung</a>
                            </li> 
                            <li>
                                <a href="<?= URL_ROOT ?>agb#rueckgabebelehrung">Rückgabebelehrung</a>
                            </li> 
                            <li>
                                <a href="<?= URL_ROOT ?>agb#beratung">Bedingungen für Beratungsleistungen</a>
                            </li> 
<!--                        
                            <li>
                                <a href="<?= URL_ROOT ?>agb#druckfassung">AGBs zum Ausdrucken</a>
                            </li> 
-->
                        </ul>
                    </div>
                </div>





                <div class="row">        
                    <div class="col s12 m12"> 
                        <a id="versandkosten"></a>
                        <hr />
                        <h5>Versandkosten</h5>
                        <hr />
                    </div>
                </div>  
                <div class="row">        
                    <div class="col s12 m12">          
                        <table class="abotable">
                            <tr>
                                <th class="bestellv"> Warenwert</th>
                                <th class="bestellw">Artikel</th>
                                <th class="bestello">Land</th>
                                <th class="bestelly">Versandkostenanteil</th>
                            </tr>
                            <tr>
                                <td class="bestellv">alle</td>
                                <td class="bestellw">Abos der DorisPaas.de &ndash; Lebensmittel-Datenbank</td>
                                <td class="bestello">alle</td>
                                <td class="bestelly">kostenlos</td>
                            </tr>
                            <tr>
                                <td class="bestellv">alle</td>
                                <td class="bestellw">Beratungsangebote</td>
                                <td class="bestello">alle</td>
                                <td class="bestelly">kostenlos</td>
                            </tr>
                            <?php $inDE = loadArticle(91); ?>
                            <tr>
                                <td class="bestellv">alle</td>
                                <td class="bestellw">Buchbestellungen</td>
                                <td class="bestello">Deutschland</td>
                                <td class="bestelly"><?php echo number_format($inDE->price, 2, ',', ''); ?>€</td>
                            </tr>
                            <?php $inEU = loadArticle(92); ?>
                            <tr>
                                <td class="bestellv">alle</td>
                                <td class="bestellw">Buchbestellungen</td>
                                <td class="bestello">europäisches Ausland</td>
                                <td class="bestelly"><?php echo number_format($inEU->price, 2, ',', ''); ?>€</td>
                            </tr>
                            <?php $outEU = loadArticle(93); ?>
                            <tr>
                                <td class="bestellv">alle</td>
                                <td class="bestellw">Buchbestellungen</td>
                                <td class="bestello">außereuropäisches Ausland</td>
                                <td class="bestelly"><?php echo number_format($outEU->price, 2, ',', ''); ?>€</td>
                            </tr>
                        </table>
                    </div>
                </div>
                
                <div class="row">        
                    <div class="col s12 m12"> 
                        <a id="versandbedingungen"></a>
                        <hr />
                        <h5>Versandbedingungen</h5>
                        <hr />
                    </div>
                </div>  
                <div class="row">        
                    <div class="col s12 m12">          
                        <span style="font-weight:bold; text-decoration:underline">Zahlungsbedingungen</span>
                        <br />
                        <b>&#149;</b> Bestellungen von Büchern, Abonnements der DorisPaas.de &ndash; Lebensmittel-Datenbank,
                        Beratungsangeboten über den Shop sind <b>grundsätzlich nur gegen Vorkasse</b> möglich.
                        <br />
                        <b>&#149;</b> Bei der Bestellung können Sie wählen, ob Sie Betrag über Paypal bezahlen 
                        oder direkt per Überweisung auf mein Geschäftskonto begleichen wollen.
                        <br />
                        <b>&#149; Zahlung über Paypal:</b> Wenn Sie die Zahlungsart über Paypal gewählt haben, 
                        erhalten Sie mit dem Abschicken der Bestellung aus dem Warenkorb und nach der Abwicklung 
                        des Zahlvorgangs direkt von Paypal eine Eingangsbestätigung. Anschließend erhalten 
                        Sie von mir eine eMail, in dem ich Ihnen den Zahlungseingang 
                        durch Paypal bestätige. 
                        <br />
                        <b>&#149; Überweisung auf mein Geschäftskonto:</b> Wenn Sie die Zahlungsart per Überweisung 
                        auf mein Geschäftskonto gewählt haben, 
                        erhalten Sie mit dem Abschicken der Bestellung aus dem Warenkorb eine eMail mit der
                        Kontoverbindung, auf die Sie den Endbetrag überweisen. Sobald der Betrag auf dem 
                        Konto eingegangen ist, erhalten Sie von mir eine eMail, in dem ich Ihnen den Zahlungseingang 
                        bestätige.
                        <br />
                        
                        <br />
                        <span style="font-weight:bold; text-decoration:underline">Versandabwicklung</span>
                        <br />
                        <b>&#149;</b> Die Ware wird nach dem Zahlungseingang innerhalb von maximal 2 Werktagen versandt. 
                        <br />
                        <br />
                        <span style="font-weight:bold; text-decoration:underline">Adressdaten</span>
                        <br />
                        <b>&#149;</b> Bitte achten Sie unbedingt darauf, dass Ihre Adressdaten, die Sie bei der Bestellung 
                        angeben, korrekt sind. Wenn die Adressdaten und vor allem auch die eMail-Adresse 
                        nicht korrekt eingetragen werden, kommt es beim Versand zu unnötigen Verzögerungen und doppelten Portokosten.
                        <br />
                        <b>&#149;</b> Wenn Sie nach der Bestellung nicht nach längstens einer halben Stunde eine eMai-Bestätigung
                        erhalten, kontaktieren Sie mich bitte per eMail <a href="mailto:kontakt@dorispaas.de" class="link">(kontakt@dorispaas.de)</a>
                        <br />
                        <br />
                    </div>
                </div>
                
                <div class="row">        
                    <div class="col s12 m12"> 
                        <a id="widerrufsbelehrung"></a>
                        <hr />
                        <h5>Widerrufsbelehrung</h5>
                        <hr />
                    </div>
                </div>  
                <div class="row">        
                    <div class="col s12 m12">          
                        <span style="font-weight:bold; text-decoration:underline">Widerrufsrecht</span>
                        <br />
                        Sie können Ihre Vertragserklärung innerhalb von zwei Wochen ohne Angabe 
                        von Gründen in Textform (z. B. Brief, E-Mail) oder &ndash; wenn Ihnen die Sache 
                        vor Fristablauf überlassen wird &ndash; durch die ausreichend freigemachte Rücksendung der Sache widerrufen. 
                        Die Frist beginnt nach Erhalt dieser Belehrung in Textform, jedoch nicht vor Eingang 
                        der Ware beim Empfänger (bei der wiederkehrenden Lieferung gleichartiger Waren 
                        nicht vor dem Eingang der ersten Teillieferung) und auch nicht vor Erfüllung 
                        unserer Informationspflichten gemä&#223; &#167; 312c Abs. 2 BGB in Verbindung mit 
                        &#167; 1 Abs. 1, 2 und 4 BGB-InfoV sowie unserer Pflichten gemä&#223; &#167; 312e Abs. 1 
                        Satz 1 BGB in Verbindung mit &#167; 3 BGB-InfoV. Zur Wahrung der Widerrufsfrist genügt 
                        die rechtzeitige Absendung des Widerrufs oder der Sache. Der Widerruf ist zu richten an:
                        <br />
                        Doris Paas
                        <br />
                        Gneisenaustraße 17
                        <br />
                        53842 Troisdorf
                        <br />
                        Telefon: 02241/97 53 26
                        <br />
                        eMail: kontakt@dorispaas.de
                        <br />
                        <br />
                        
                        <span style="font-weight:bold; text-decoration:underline">Widerrufsfolgen</span>
                        <br />
                        Im Falle eines wirksamen Widerrufs sind die beiderseits empfangenen Leistungen 
                        zurückzugewähren und ggf. gezogene Nutzungen (z. B. Zinsen) herauszugeben. Können 
                        Sie uns die empfangene Leistung ganz oder teilweise nicht oder nur in verschlechtertem 
                        Zustand zurückgewähren, müssen Sie uns insoweit ggf. Wertersatz leisten. Bei der
                        Überlassung von Sachen gilt dies nicht, wenn die Verschlechterung der Sache 
                        ausschließlich auf deren Prüfung &ndash; wie sie Ihnen etwa im Ladengeschäft möglich 
                        gewesen wäre &ndash; zurückzuführen ist. Im Übrigen können Sie die Pflicht zum 
                        Wertersatz für eine durch die bestimmungsgemäße Ingebrauchnahme der Sache 
                        entstandene Verschlechterung vermeiden, indem Sie die Sache nicht wie Ihr 
                        Eigentum in Gebrauch nehmen und alles unterlassen, was deren Wert beeinträchtigt. 
                        Sie haben die Kosten der Rücksendung zu tragen, wenn die gelieferte Ware 
                        der bestellten entspricht.  Bei allen Rückerstattungen wird ein anteiliger 
                        Betrag von 10,00 Euro für Bankgebühren, Porto und Bearbeitung einbehalten. 
                        Verpflichtungen zur Erstattung von Zahlungen müssen innerhalb von 30 Tagen 
                        erfüllt werden. Die Frist beginnt für Sie mit der Absendung Ihrer 
                        Widerrufserklärung oder der Sache, für uns mit deren Empfang. 
                        <br />
                        <i>&ndash; Ende der Widerrufsbelehrung &ndash;</i>
                        <br />
                        <br />
                    </div>
                </div>
                
                <div class="row">        
                    <div class="col s12 m12"> 
                        <a id="rueckgabebelehrung"></a>
                        <hr />
                        <h5>Rückgabebelehrung</h5>
                        <hr />
                    </div>
                </div>  
                <div class="row">        
                    <div class="col s12 m12">          
                        <span style="font-weight:bold; text-decoration:underline">Rückgaberecht</span>
                        <br />
                        Sie können die erhaltene Ware ohne Angabe von Gründen innerhalb von zwei 
                        Wochen durch Rücksendung der Ware zurückgeben. Die  Frist beginnt nach 
                        Erhalt dieser Belehrung in Textform (z.B. als Brief oder E-Mail), jedoch nicht vor 
                        Eingang der Ware und auch nicht vor Erfüllung unserer Pflichten gemä&#223; 
                        &#167; 312e Abs. 1 Satz 1 BGB in Verbindung mit &#167; 3 BGB-InfoV. Nur bei nicht paketversandfähiger 
                        Ware (z.B. bei sperrigen Gütern) können Sie die Rückgabe auch durch 
                        Rücknahmeverlangen in Textform erklären.  Zur Wahrung der Frist genügt 
                        die rechtzeitige Absendung der Ware oder des Rücknahmeverlangens. In jedem 
                        Falle erfolgt die Rücksendung auf Ihre Kosten und Gefahr. Die Rücksendung 
                        oder das Rücknahmeverlangen hat zu erfolgen an: 
                        <br />
                        Doris Paas
                        <br />
                        Gneisenaustraße 17
                        <br />
                        53842 Troisdorf
                        <br />
                        Telefon: 02241/97 53 26
                        <br />
                        eMail: kontakt@dorispaas.de
                        <br />
                        <br />
                        
                        <span style="font-weight:bold; text-decoration:underline">Rückgabefolgen</span>
                        <br />
                        Im Falle einer wirksamen Rückgabe sind die beiderseits empfangenen Leistungen 
                        zurückzugewähren und ggf. gezogene Nutzungen (z.B. Gebrauchsvorteile) 
                        herauszugeben. Bei einer Verschlechterung der Ware kann Wertersatz verlangt werden. 
                        Dies gilt nicht, wenn die Verschlechterung der Ware ausschlie&#223;lich auf deren 
                        Prüfung &ndash; wie sie Ihnen etwa im Ladengeschäft möglich gewesen 
                        wäre &ndash; zurückzuführen ist. Im Übrigen können Sie die 
                        Pflicht zum Wertersatz für eine durch die bestimmungsgemä&#223;e 
                        Ingebrauchnahme der Sache entstandene Verschlechterung vermeiden, indem Sie die 
                        Ware nicht wie Ihr Eigentum in Gebrauch nehmen und alles unterlassen, was deren 
                        Wert beeinträchtigt. Verpflichtungen zur Erstattung von Zahlungen müssen 
                        innerhalb von 30 Tagen erfüllt werden. Die Frist beginnt für Sie mit der 
                        Absendung der Ware oder des Rücknahmeverlangens, für uns mit dem Empfang.
                        <br />
                        <i>&ndash; Ende der Rückgabebelehrung &ndash;</i>
                        <br />
                        <br />
                    </div>
                </div>
                
                <div class="row">        
                    <div class="col s12 m12"> 
                        <a id="beratung"></a>
                        <hr />
                        <h5>Bedingungen für Beratungsleistungen</h5>
                        <hr />
                    </div>
                </div>  
                <div class="row">        
                    <div class="col s12 m12">          
                        <b>&#167; 1 &ndash; Leistungen</b>
                        <br />
                        Als Ernährungs- und Gesundheitspädagogin, Lehrerin und Beraterin für ganzheitliche Gesundheit (IHK) 
                        werden alle Leistungen von mir persönlich erbracht. Dies 
                        gilt sowohl für Beratungen (in der Praxis und telefonisch), 
                        als auch für Vorträge, Seminare, Schulunterricht, Unterstützung 
                        von Selbsthilfegruppen, Beratung im Betrieblichen Gesundheitsmanagement, 
                        Fachveröffentlichungen, Autorenberatungen und sonstigen Leistungen.
                        <br />
                        Sämtliche von mir gegebenen Ratschläge und Stellungnahmen wollen 
                        und können keinen ärztlichen Rat und keine ärztliche Behandlung 
                        ersetzen. Im Bedarfs- oder auch im Zweifelsfalle ist jede 
                        Klientin/jeder Klient immer aufgefordert, ärztlichen Rat einzuholen und zu befolgen.
                        <br />
                        <br />
                        <b>&#167; 2 &ndash; Vertrag</b>
                        <br />
                        Mit der Vereinbarung eines Beratungstermins kommt ein 
                        Beratungsvertrag zustande. Telefonisch vereinbarte Termine 
                        werden von mir grundsätzlich noch einmal per eMail bestätigt 
                        und gelten danach als verbindlich. Hierzu ist die eMail-Adresse 
                        der Klientin/des Klienten erforderlich. Persönlich in der 
                        Praxis vereinbarte Termine gelten ohne eMail-Bestätigung als verbindlich.
                        <br />
                        Alle anderen Leistungen werden ebenfalls per eMail oder 
                        per Briefpost vereinbart und führen damit zu einem verbindlichen 
                        Vertrag.
                        <br />
                        Änderungen bedürfen immer der Schriftform und der Unterschrift 
                        beider Vertragspartner. Mündliche Nebenabreden haben keine bindende Wirkung.
                        <br />
                        <br />
                        <b>&#167; 3 &ndash; Beratungsziele</b>
                        <br />
                        Ziel meiner Beratungen ist es, die Klientin/den Klienten 
                        dabei zu unterstützen, ein von ihr/ihm selbst definiertes 
                        und gemeinsam für gut befundenes Ziel zu erreichen. Die 
                        Beratungsleistung gilt mit dem Aufzeigen eines Weges, 
                        der selbstverständlich immer mit der Klientin/dem Klienten abgestimmt wird, als erbracht.
                        <br />
                        <br />
                        <b>&#167; 4 &ndash; Schweigepflicht</b>
                        <br />
                        Die mir von der Klientin/dem Klienten anvertrauten Informationen 
                        sind bei mir in sicheren Händen, denn selbstverständlich 
                        bin ich der absoluten Schweigepflicht unterworfen. Dies 
                        bedeutet, dass alles, was mir mündlich oder schriftlich 
                        anvertraut wird, nie und in keinster Weise von mir weitergegeben wird.
                        Namen und Adressdaten (auch Mailadressen) werden nur zum vereinbarten 
                        Zwecke genutzt und grundsätzlich nie an Dritte weitergegeben.
                        <br />
                        <br />
                        Alle Klientinnen und Klienten verpflichten sich,
                        im Internet und auf sonstigen sozialen Plattformen &ndash; 
                        auch in geschlossenen und geschützten Gruppen &ndash;
                        zu absoluter Verschwiegenheit über individuelle Behandlungskonzepte 
                        und zu empfohlenen Präparaten. Eine Zuwiderhandlung führt zu 
                        einer sofortigen Beendigung der Beratung.
                        <br />
                        <br />
                        &#149; Beantwortung von Fragen
                        <br />
                        Wenn Anfragen zu bestimmten Problemen an mich gestellt 
                        werden (in mündlicher oder schriftlicher Form), 
                        nehme ich mir bei allgemeininteressierenden Problemen das Recht, 
                        diese in den Fragen- und Antworten-Katalog auf der &#187;FAQ-Seite&#171; aufzunehmen. 
                        Selbstverständlich werden hier keinerlei Namen oder Angaben 
                        veröffentlicht, die Rückschlüsse auf die Fragerin/den Frager zulassen würden.
                        <br />
                        <br />
                        &#149; Umfragen und Studien
                        <br />
                        Wenn Daten in Umfragen oder Studien erhoben und veröffentlicht 
                        werden, so grundsätzlich nur in anonymisierter Form, so dass 
                        keine Rückschlüsse auf Personen erfolgen können. Sollte 
                        eine Veröffentlichung angestrebt werden, so erfolgt immer 
                        im Vorfeld eine Information über dieses Ziel. Mit der 
                        Beteiligung an den Umfragen oder Studien erklärt der 
                        Befragte sein Einverständnis zur anonymisierten Veröffentlichung.
                        <br />
                        <br />
                        <b>&#167; 5 &ndash; Terminabsagen</b>
                        <br />
                        &#149; Beratungen:
                        <br />
                        Wenn die Klientin/der Klient einen Beratungstermin nicht 
                        einhalten kann, ist eine Absage per eMail oder Telefon 
                        bis spätestens 5 Werktage vor dem vereinbarten Termin 
                        erforderlich, damit die reservierte Zeit anderweitig 
                        vergeben werden kann. Bei späteren Absagen werden 50% des 
                        vereinbarten Honorars berechnet. Wenn Termine ohne Ankündigung 
                        nicht wahrgenommen werden, wird das komplette Honorar fällig. 
                        Aufgrund von akuten Krankheiten abgesagte Termine können 
                        nachgeholt werden, es fällt keine Stornogebühr an.
                        <br />
                        <br />
                        &#149; Seminare:
                        <br />
                        Seminarbuchungen können bis spätestens 20 Werktage vor 
                        Seminarbeginn kostenlos storniert werden, bei einer Absage 
                        19 &ndash; 10 Werktagen vor Seminarbeginn werden 50%, bei 
                        einer Absage von 9 &ndash; 5 Werktagen vor Seminarbeginn 
                        werden 75% der Seminargebühren und bei späteren Absagen 
                        die gesamten Seminargebühren als Stornierungskosten fällig. 
                        Die Klientin/der Klient hat jedoch das Recht, in Absprache 
                        mit mir eine(n) Ersatzteilnehmer(in) vorzuschlagen. Im Falle 
                        eines erfolgreich vermittelten Ersatzes entfallen die Stornierungskosten.
                        <br />
                        <br />                        
                        &#149; Sonstige Serviceleistungen:
                        <br />
                        Für alle weiteren Serviceleistungen wie Betriebliches 
                        Gesundheitsmanagement, Schulunterricht, Vorträge, 
                        Fachveröffentlichungen etc. werden die Konditionen jeweils 
                        individuell besprochen und festgehalten und gelten dann 
                        als Vertragsbestandteil.
                        <br />
                        <br />
                        <b>&#167; 6 &ndash; Zahlungsbedingungen</b>
                        <br />
                        Grundsätzlich werden die Kosten für die vereinbarten Leistungen 
                        ohne Abzug gemäß der der Klientin/dem Klienten zugesandten 
                        Bestätigung auf das dort angegebene Konto im Voraus fällig.
                        Bei Buchungen und Käufen über den Shop kann zwischen der Überweisung 
                        auf das angegebene Konto oder Paypal gewählt werden. 
                        Waren werden versandt, sobald die Zahlung verbucht ist.
<!--                        Bei persönlichen Beratungen in der Praxis kann der vereinbarte 
                        Betrag wahlweise in bar bezahlt oder auch im Voraus überwiesen 
                        werden. Bei telefonischen Beratungen ist immer die vorherige 
                        Überweisung erforderlich. 
-->
                        Das Honorar für Beratungen muss rechtzeitig spätestens 
                        3 Werktage vor dem vereinbarten Termin auf dem gewählten 
                        Konto eingegangen sein. Anderenfalls muss der vereinbarte 
                        Termin solange verschoben werden, bis der Zahlungseingang verbucht ist.
                        Wenn eine Beratung nach Rücksprache mit der Klientin/dem Klienten 
                        länger als die vorausgebuchten 60 Minuten dauert,
                        muss innerhalb der folgenden 3 Werktage eine Beratungsverlängerung 
                        je angefangene Viertelstunde im Shop gebucht werden.
                        <br />
                        Sämtliche auf dieser Website und persönlich vereinbarte 
                        Honorare verstehen sich als Endpreise. Nach §19UStG berechne 
                        ich als Kleinunternehmerin keine zusätzliche Mehrwertsteuer.
                        <br />
                        <br />
                        <b>&#167; 7 &ndash; Gewährleistung und Haftung</b>
                        <br />
                        Alle von mir angebotenen Leistungen werden nach bestem 
                        Wissen und Gewissen erbracht. Ich bemühe mich, durch ständige 
                        Fortbildungen weitestgehend auf dem aktuellen wissenschaftlichen 
                        Stand zu bleiben. Auf meinen Websites informiere ich jede 
                        Interessentin/jeden Interessenten über meine Zielrichtung. 
                        Darüber hinaus wird in jeder Beratung mit der Klientin/mit 
                        dem Klienten individuell abgestimmt, welchen Weg sie oder er gehen möchte.
                        <br />
                        Wenn sich trotz der Ratschläge nicht der von der Klientin/von 
                        dem Klienten gewünschte Erfolg einstellt, kann dies nicht 
                        als Mangel der Beratung angeführt werden, denn die Zielerreichung 
                        ist selbstverständlich immer auch von der Verhaltensweise 
                        der Klientin/des Klienten abhängig und somit nicht überprüfbar. 
                        Folglich entfällt eine Gewährleistung für nicht erreichte Ziele.
                        <br />
                        Eine Haftung für mögliche unerwünschte direkte und indirekte 
                        Folgen kann nicht übernommen werden und wird ausgeschlossen. 
                        Grundsätzlich verpflichtet sich jede Klientin/jeder Klient, 
                        bei ersten Anzeichen von unerwünschten Symptomen unverzüglich 
                        ärztlichen Rat einzuholen.
                        <br />
                        <br />
                        <b>&#167; 8 &ndash; Urheberrecht</b>
                        <br />
                        Sämtliche überlassenen Unterlagen unterliegen &ndash; sofern 
                        nicht anders gekennzeichnet &ndash; ebenso meinem Copyright 
                        wie die Inhalte der Website &#187;www.dorispaas.de&#171;. 
                        Insbesondere die ausgefertigten Ernährungspläne und Empfehlungen 
                        anlässlich einer individuellen Beratung sind ausschließlich 
                        für die eine Klientin/den einen Klienten bestimmt und dürfen 
                        nicht weitergegeben werden.
                        <br />
                        <br />
                        <b>&#167; 9 &ndash; Rücktrittsrecht</b>
                        <br />
                        Die Klientin/der Klient und ich verpflichten sich gleichermaßen 
                        zur Einhaltung aller in diesen allgemeinen Geschäftsbedingungen 
                        aufgeführten Bestimmungen. 
                        <br />
                        Ein Rücktritt von dem zustande gekommenen Vertrag ist nur mit 
                        Zustimmung von beiden Vertragspartnern möglich. 
                        <br />
                        Sollte der Wunsch nach Rücktritt von einer Leistung erfolgen, 
                        für die bereits das Honorar bzw. die Zahlung überwiesen wurde, 
                        wird eine Pauschale für Bankgebühren und die Bearbeitung in 
                        Höhe von 10,00 Euro an die Klientin/den Klienten weitergegeben 
                        und im Rückzahlungsbetrag einbehalten.

                        <br />
                        <br />
                        <b>&#167; 10 &ndash; Schlichtungsverpflichtung</b>
                        <br />
                        Um im Falle von Meinungsverschiedenheiten hohe Kosten zu 
                        vermeiden, verpflichten sich beide Vertragspartner, vor 
                        der Einleitung von gerichtlichen Schritten an einem Schlichtungsverfahren 
                        teilzunehmen, mit dem Ziel, eine für beide Seiten akzeptable, 
                        faire und kostengünstige Vereinbarung zu erarbeiten.
                        <br />
                        <br />
                        <b>&#167; 11 &ndash; Salvatorische Klausel</b>
                        <br />
                        Sollte eine dieser Regelungen ganz oder in Teilen unwirksam 
                        sein, so wird die Wirksamkeit der übrigen Regelungen davon 
                        nicht berührt. Die Vertragpartner verpflichten sich, anstelle 
                        einer unwirksamen Regelung eine dieser Regelung möglichst 
                        nahe kommende wirksame Regelung zu vereinbaren.
                        <br />
                        <br />
                <div class="row">        
                    <div class="col s12 m12"> 
                        <a id="druckfassung"></a>
<!--                        
                        <hr />
                        <a href="<?php echo FILES_PATH; ?>agb-dorispaas-de.pdf" target="_blank">
                            <img src="<?php echo IMG_PATH; ?>pdf-logo.png" alt="" border="0" hspace="0" vspace="0" style="float: left; margin-right: 10px; padding-bottom: 0px;" /></a>
                        <br />
                        <b>Hier können Sie die Allgemeinen Geschäftsbedingungen im PDF-Format zum Ausdrucken downloaden</b>
                        <br />
-->

                        <hr />  
                        Troisdorf, den 24.8.2025 
                        <br />
                        <br />
                        <i>&ndash; Ende der Allgemeinen Geschäftsbedingungen &ndash;</i>
                        <br />

                    </div>
                </div>
                        <hr>
                        <a href="javascript: scrollMainToTop();" class="nachoben">nach oben</a>

                    </div>
                </div>
            </div>    
            <br>
            <br> 
            <div class="bodyspacer"></div> 
        </div>