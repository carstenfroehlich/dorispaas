# DorisPaas

Die Anwendung verwendet PHP 8.5 mit PDO/MySQL, SQLite (für Tests), cURL,
mbstring, OpenSSL, iconv und DOM. `.php-version`, die IDE-Einstellung und das
Dockerfile verwenden PHP 8.5. RedBean 5.7 und PHPMailer 7.1.1 sind bereits im
Repository enthalten; eine Composer-Installation ist nicht erforderlich.

Für einen lokalen PHP-Interpreter:

```sh
docker build -t dorispaas-php85 .
docker run --rm -v "$PWD:/app" dorispaas-php85 php tests/php85.php
```

Die Regressionstests behandeln Warnungen und Deprecations als Fehler. Ohne
Testdatenbank laufen die Tests für Zeichenketten, JWT, Passwörter, den alten
RedBean-Einstieg, reCAPTCHA und die Mailfunktion. Die Mailprüfung fängt eine
synthetische Nachricht lokal ab und verschickt keine E-Mail.

Die zusätzlichen Datenbank-, Warenkorb- und CSV-Tests benötigen eine lokale
Testdatenbankverbindung über `PHP85_TEST_MYSQL_DSN`, `PHP85_TEST_MYSQL_USER`
und gegebenenfalls `PHP85_TEST_MYSQL_PASSWORD`. Sie erstellen eine Datenbank
mit zufälligem Namen `php85_test_*` und löschen sie anschließend. Dafür ist
die Berechtigung zum Erstellen und Löschen von Testdatenbanken erforderlich.
Verwende dafür eine separate Entwicklungsdatenbank.

Für den Webbetrieb muss der Dokumentenstamm auf dieses Verzeichnis zeigen;
Apache benötigt `mod_rewrite` und die enthaltene `.htaccess`. In der
vorbereiteten Cloud-Umgebung stehen Interpreter, Datenbank, Router und
Startanweisungen unter `/workspace/.dorispaas-cloud` bereit.

Die eigentliche Anwendung verwendet weiterhin die vorhandene
Datenbankkonfiguration in `languages/global.php`. Ein vollständiges
Datenbankschema samt Daten liegt nicht bei. Zahlungsabwicklung, externer
Mailversand und echte reCAPTCHA-Anfragen benötigen eigene Integrationstests.
Die alten Inhaltsverzeichnisse unter `template/book*` verweisen außerdem
auf nicht enthaltene Dateien unter `include/common`; diese vorhandene
Inhaltslücke ist unabhängig von der PHP-Version.
