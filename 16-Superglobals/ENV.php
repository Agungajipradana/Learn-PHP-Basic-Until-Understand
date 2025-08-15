<?php
/*
$_ENV (Environment Variables)

Note:
- $_ENV digunakan untuk menyimpan dan mengakses variabel lingkungan.
- Biasanya digunakan untuk konfigurasi aplikasi, seperti database credentials, API keys, dan pengaturan sistem.
- Nilai environment biasanya disimpan di file .env (dengan bantuan library seperti vlucas/phpdotenv) atau di server.
*/

echo "-------------------- PHP \$_ENV Examples --------------------\n\n";

/*
1. Simple Environment Variable Access
   - Mengakses variabel lingkungan yang sudah ada di sistem.
   - Misalnya: variabel PATH.
*/
echo "1. Simple Environment Variable Access\n\n";
if (isset($_ENV['PATH'])) {
    echo "System PATH: " . $_ENV['PATH'] . "\n";
    // Output example: System PATH: /usr/local/bin:/usr/bin:/bin:/usr/sbin:/sbin
} else {
    echo "PATH variable not found.\n";
}
echo "\n\n";

/*
2. Setting and Getting Custom Environment Variable
   - Menambahkan variabel lingkungan di runtime.
*/
echo "2. Setting and Getting Custom Environment Variable\n\n";
$_ENV['APP_NAME'] = "MyWebApplication";
echo "Application Name: " . $_ENV['APP_NAME'] . "\n";
// Output example: Application Name: MyWebApplication
echo "\n\n";

/*
3. Environment Variable for Web Developer Name
   - Menggunakan variabel lingkungan untuk menyimpan informasi developer.
*/
echo "3. Environment Variable for Web Developer Name\n\n";
$_ENV['DEVELOPER_NAME'] = "Jonathan Smith";
echo "Developer: " . $_ENV['DEVELOPER_NAME'] . "\n";
// Output example: Developer: Jonathan Smith
echo "\n\n";

/*
4. Environment Variables for Database Configuration
   - Menyimpan konfigurasi database di environment variables.
*/
echo "4. Environment Variables for Database Configuration\n\n";
$_ENV['DB_HOST'] = "localhost";
$_ENV['DB_USER'] = "admin";
$_ENV['DB_PASS'] = "securepassword";

echo "Database Host: " . $_ENV['DB_HOST'] . "\n";
echo "Database User: " . $_ENV['DB_USER'] . "\n";
echo "Database Password: " . $_ENV['DB_PASS'] . "\n";
/*
Output example:
Database Host: localhost
Database User: admin
Database Password: securepassword
*/
echo "\n\n";

/*
5. Using getenv() Function
   - Alternatif untuk mengakses environment variables.
*/
echo "5. Using getenv() Function\n\n";
putenv("API_KEY=12345ABCDEF");
$apiKey = getenv("API_KEY");

echo "API Key: $apiKey\n";
// Output example: API Key: 12345ABCDEF
echo "\n\n";

/*
6. Loading from a .env File (Simulation)
   - Contoh sederhana membaca variabel dari file .env untuk pengembangan web.
*/
echo "6. Loading from a .env File (Simulation)\n\n";
$envFile = __DIR__ . "/.env";

if (file_exists($envFile)) {
    $lines = file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos(trim($line), '#') === 0) continue; // Skip comments
        list($key, $value) = explode('=', $line, 2);
        $_ENV[trim($key)] = trim($value);
    }
    echo "Loaded environment variables from .env file:\n";
    foreach ($_ENV as $key => $value) {
        echo "$key = $value\n";
    }
    /*
    Example .env file content:
    APP_ENV=development
    APP_DEBUG=true
    ADMIN_EMAIL=jane.doe@example.com

    Output example:
    APP_ENV = development
    APP_DEBUG = true
    ADMIN_EMAIL = jane.doe@example.com
    */
} else {
    echo "No .env file found. Please create one.\n";
}
