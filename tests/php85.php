<?php
// Run with PHP 8.5. Warnings and deprecations fail these migration checks.
if (PHP_VERSION_ID < 80500) {
    fwrite(STDERR, "PHP 8.5 or newer is required.\n");
    exit(1);
}
error_reporting(E_ALL);
set_error_handler(static function (int $severity, string $message, string $file, int $line): bool {
    if (!(error_reporting() & $severity)) return false;
    throw new ErrorException($message, 0, $severity, $file, $line);
});
$root = dirname(__DIR__);
chdir($root);

function check(bool $condition, string $message): void
{
    if (!$condition) throw new RuntimeException($message);
}

function child(array $arguments): array
{
    $process = proc_open(array_merge([PHP_BINARY], $arguments), [1 => ['pipe', 'w'], 2 => ['pipe', 'w']], $pipes);
    check(is_resource($process), 'Could not start test subprocess');
    $stdout = stream_get_contents($pipes[1]);
    $stderr = stream_get_contents($pipes[2]);
    fclose($pipes[1]);
    fclose($pipes[2]);
    return [proc_close($process), $stdout . $stderr];
}

function connectTestDatabase(string $database): void
{
    $dsn = getenv('PHP85_TEST_MYSQL_DSN');
    check(is_string($dsn) && str_starts_with($dsn, 'mysql:'), 'Set PHP85_TEST_MYSQL_DSN for MySQL checks');
    check((bool)preg_match('/^php85_test_[a-f0-9]+$/D', $database), 'Invalid test database name');
    require_once dirname(__DIR__) . '/rb-mysql.php';
    R::setup($dsn . ';dbname=' . $database, getenv('PHP85_TEST_MYSQL_USER') ?: '', getenv('PHP85_TEST_MYSQL_PASSWORD') ?: '');
    R::ext('xdispense', static fn($type) => R::getRedBean()->dispense($type));
}

$mode = $argv[1] ?? '';
if ($mode === '--legacy-redbean' || $mode === '--legacy-mysql') {
    require $root . '/rb.php';
    if ($mode === '--legacy-mysql') {
        check((bool)preg_match('/^php85_test_[a-f0-9]+$/D', $argv[2]), 'Invalid test database name');
        R::setup(getenv('PHP85_TEST_MYSQL_DSN') . ';dbname=' . $argv[2], getenv('PHP85_TEST_MYSQL_USER') ?: '', getenv('PHP85_TEST_MYSQL_PASSWORD') ?: '');
    } else {
        R::setup('sqlite::memory:');
    }
    $bean = R::dispense('compatibility');
    $bean->label = 'PHP 8.5';
    R::store($bean);
    $loaded = R::load('compatibility', $bean->id);
    check($loaded['label'] === 'PHP 8.5', 'Legacy RedBean read failed');
    check(isset($loaded['label']) && count($loaded) === 2, 'Legacy bean interfaces failed');
    check(iterator_to_array($loaded)['label'] === 'PHP 8.5', 'Legacy bean iteration failed');
    $loaded['label'] = 'updated';
    R::store($loaded);
    check(R::load('compatibility', $bean->id)->label === 'updated', 'Legacy RedBean update failed');
    unset($loaded['label']);
    check(!isset($loaded['label']), 'Legacy bean unset failed');
    R::trash($loaded);
    check(R::count('compatibility') === 0, 'Legacy RedBean deletion failed');
    exit(0);
}
if ($mode === '--mail') {
    require $root . '/phpmailer/src/Exception.php';
    require $root . '/phpmailer/src/PHPMailer.php';
    require $root . '/phpmailer/src/SMTP.php';
    require $root . '/classes/class_mail.php';
    check(sendMyMail('PHP 8.5 test', 'sender@example.invalid', 'PHP test', 'PHP 8.5 mail check', 'Local message capture', '<p>Local message capture</p>', 'recipient@example.invalid'), 'Application mail function failed');
    exit(0);
}
if ($mode === '--invalid-csv') {
    connectTestDatabase($argv[2]);
    require $root . '/classes/class_lexikonnmu.php';
    $_FILES = ['file' => ['tmp_name' => $argv[3]]];
    define('URL_ROOT', '/');
    require $root . '/admin/upload_lexikon_nmu.php';
    throw new RuntimeException('Malformed CSV was not rejected');
}

$passed = 0;
$skipped = 0;
function test(string $label, Closure $run): void
{
    global $passed;
    $run();
    ++$passed;
    echo "PASS: $label\n";
}

require $root . '/global_functions.php';
require $root . '/classes/class_JWT.php';
test('string helpers handle empty strings and needles longer than the input', static function (): void {
    check(startsWith('abc', 'ab') && !startsWith('abc', 'bc'), 'Prefix check failed');
    check(endsWith('abc', 'bc') && !endsWith('a', 'longer'), 'Suffix check failed');
    check(!endsWith('', 'a') && endsWith('', '') && startsWith('', ''), 'Empty-string check failed');
    check(includes('abc', 'b') && !includes('', 'a'), 'Substring check failed');
});
test('JWT signatures round-trip and reject altered signatures', static function (): void {
    foreach (['HS256', 'HS384', 'HS512'] as $algorithm) {
        $token = JWT::encode(['id' => 42], 'synthetic-test-key', $algorithm);
        check(JWT::decode($token, 'synthetic-test-key')->id === 42, 'JWT round-trip failed');
        try {
            JWT::decode($token, 'different-test-key');
            throw new RuntimeException('Invalid signature accepted');
        } catch (UnexpectedValueException $expected) {
        }
    }
});
test('password hashing and verification', static function (): void {
    $hash = securePassword('synthetic-password');
    check(checkPassword('synthetic-password', $hash), 'Password verification failed');
    check(!checkPassword('wrong-password', $hash), 'Incorrect password accepted');
});
test('legacy RedBean interfaces and SQLite CRUD', static function (): void {
    [$status, $output] = child([__FILE__, '--legacy-redbean']);
    check($status === 0 && $output === '', 'Legacy RedBean failure: ' . $output);
});
test('reCAPTCHA constructors and local verification transport', static function () use ($root): void {
    require $root . '/assets/recaptcha/src/autoload.php';
    new ReCaptcha\RequestMethod\CurlPost(null);
    new ReCaptcha\RequestMethod\SocketPost(null);
    $curl = new ReCaptcha\RequestMethod\Curl();
    $handle = $curl->init('https://example.invalid');
    check($handle instanceof CurlHandle, 'Expected CurlHandle object');
    $curl->close($handle);
    $transport = new class implements ReCaptcha\RequestMethod {
        public function submit(ReCaptcha\RequestParameters $params) { return '{"success":true}'; }
    };
    $captcha = new ReCaptcha\ReCaptcha('synthetic-test-key', $transport);
    check($captcha->verify('synthetic-response')->isSuccess(), 'Local reCAPTCHA verification failed');
    check(!(new ReCaptcha\ReCaptcha('synthetic-test-key', null))->verify('')->isSuccess(), 'Empty CAPTCHA response accepted');
});
test('application mail function captures a MIME message without external delivery', static function (): void {
    $capture = tempnam(sys_get_temp_dir(), 'php85-mail-');
    $script = tempnam(sys_get_temp_dir(), 'php85-sendmail-');
    try {
        file_put_contents($script, "#!/bin/sh\ncat > " . escapeshellarg($capture) . "\n");
        chmod($script, 0700);
        [$status, $output] = child(['-d', 'sendmail_path=' . escapeshellarg($script), __FILE__, '--mail']);
        check($status === 0 && $output === '', 'Mail integration failure: ' . $output);
        $message = file_get_contents($capture);
        foreach (['PHP 8.5 mail check', 'recipient@example.invalid', 'Local message capture'] as $content) {
            check(str_contains($message, $content), 'Expected MIME content missing');
        }
    } finally {
        unlink($script);
        unlink($capture);
    }
});

$dsn = getenv('PHP85_TEST_MYSQL_DSN');
if (!$dsn) {
    ++$skipped;
    echo "SKIP: MySQL/cart/CSV checks require PHP85_TEST_MYSQL_DSN\n";
} else {
    $database = 'php85_test_' . bin2hex(random_bytes(6));
    $pdo = new PDO($dsn, getenv('PHP85_TEST_MYSQL_USER') ?: '', getenv('PHP85_TEST_MYSQL_PASSWORD') ?: '', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    $pdo->exec("CREATE DATABASE `$database`");
    $csv = tempnam(sys_get_temp_dir(), 'php85-csv-');
    try {
        connectTestDatabase($database);
        R::exec(file_get_contents($root . '/documents/updates.sql'));
        require $root . '/classes/class_cart.php';
        require $root . '/classes/class_lexikonnmu.php';
        test('legacy RedBean MySQL CRUD and interfaces', static function () use ($database): void {
            [$status, $output] = child([__FILE__, '--legacy-mysql', $database]);
            check($status === 0 && $output === '', 'Legacy MySQL failure: ' . $output);
        });
        test('modern RedBean and application cart CRUD', static function (): void {
            check(createCartEntry('php85-test', 42, 2) === 'added', 'Cart insert failed');
            check((int)getSingleCartEntry('php85-test', 42)->amount === 2, 'Cart read failed');
            check(createCartEntry('php85-test', 42, 3) === 'updated', 'Cart update failed');
            check((int)getSingleCartEntry('php85-test', 42)->amount === 3, 'Updated amount not stored');
            check(createCartEntry('php85-test', 42, 0) === 'deleted', 'Cart delete failed');
            check(count(getCartEntriesByToken('php85-test')) === 0, 'Cart entry still exists');
        });
        test('CSV import crosses the 100-row batch boundary and preserves quoted text and flags', static function () use ($csv, $root): void {
            $stream = fopen($csv, 'w');
            fputcsv($stream, range(1, 14), ';', '"', '');
            for ($i = 0; $i < 101; ++$i) {
                $row = array_merge(['food ' . $i, 'category', 'Quoted "text"; apostrophe: \''], array_fill(0, 10, 'grün'), ['niedrig']);
                fputcsv($stream, array_map(static fn($value) => iconv('UTF-8', 'Windows-1252', $value), $row), ';', '"', '');
            }
            fclose($stream);
            $_FILES = ['file' => ['tmp_name' => $csv]];
            define('URL_ROOT', '/');
            ob_start();
            try { require $root . '/admin/upload_lexikon_nmu.php'; } finally { ob_end_clean(); }
            check((int)countLexikonNmuEntries() === 101, 'Incorrect import count');
            $row = R::getRow('SELECT * FROM lexikon_nmu WHERE lebensmittel = ?', ['food 100']);
            check($row['beschreibung'] === 'Quoted "text"; apostrophe: \'', 'Quoted CSV text changed');
            check((int)$row['li'] === 4 && (int)$row['fo'] === 4, 'CSV flags changed');
        });
        test('empty CSV is rejected without count(false) or changes to imported rows', static function () use ($csv, $database): void {
            file_put_contents($csv, '');
            [$status, $output] = child([__FILE__, '--invalid-csv', $database, $csv]);
            check($status === 0 && str_contains($output, 'Die Datei ist ung&uuml;ltig.'), 'Empty CSV failure: ' . $output);
            check((int)countLexikonNmuEntries() === 101, 'Invalid header changed existing rows');
        });
        test('invalid CSV row is rejected without calling removed mysql_close', static function () use ($csv, $database): void {
            file_put_contents($csv, implode(';', range(1, 14)) . "\n" . implode(';', range(1, 13)) . "\n");
            [$status, $output] = child([__FILE__, '--invalid-csv', $database, $csv]);
            check($status === 0 && str_contains($output, 'Zeile 2'), 'Invalid row failure: ' . $output);
        });
    } finally {
        R::close();
        $pdo->exec("DROP DATABASE `$database`");
        unlink($csv);
    }
}
echo "$passed checks passed; $skipped skipped.\n";
