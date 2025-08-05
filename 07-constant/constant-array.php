<?php

/*
PHP Constant Array
PHP mendukung konstanta yang berisi array (mulai dari PHP 5.6 ke atas).
Konstanta array sangat bermanfaat untuk menyimpan data konfigurasi tetap seperti bahasa, role user, atau zona waktu.
*/

echo "------------------------------ PHP Constant Array ------------------------------\n\n";

/*
1. Konstanta array dasar
   - Digunakan untuk menyimpan bahasa yang tersedia dalam sistem.
*/

const LANGUAGES = ["English", "Indonesian", "French"];
echo "1. Bahasa yang tersedia:\n";
print_r(LANGUAGES);
// Output:
// Array
// (
//     [0] => English
//     [1] => Indonesian
//     [2] => French
// )
echo "\n";

/*
2. Konstanta array role user
   - Berguna dalam sistem otentikasi untuk menentukan akses.
*/

const USER_ROLES = ["admin", "editor", "subscriber"];
echo "2. Role user:\n";
foreach (USER_ROLES as $role) {
    echo "- " . ucfirst($role) . "\n";
}
// Output:
// - Admin
// - Editor
// - Subscriber
echo "\n";

/*
3. Konstanta array zona waktu
   - Relevan dalam aplikasi multinasional yang menyesuaikan waktu lokal pengguna.
*/

const TIMEZONES = ["Asia/Jakarta", "Europe/London", "America/New_York"];
echo "3. Zona waktu yang didukung:\n";
foreach (TIMEZONES as $zone) {
    echo "- $zone\n";
}
// Output:
// - Asia/Jakarta
// - Europe/London
// - America/New_York
echo "\n";

/*
4. Konstanta array path direktori
   - Berguna untuk menyimpan path statis seperti direktori upload atau logs.
*/

const PATHS = [
    "uploads" => "/var/www/uploads",
    "logs" => "/var/logs/app",
    "cache" => "/var/cache"
];
echo "4. Path direktori:\n";
echo "Upload Path: " . PATHS["uploads"] . "\n";     // Output: Upload Path: /var/www/uploads
echo "Log Path: " . PATHS["logs"] . "\n";           // Output: Log Path: /var/logs/app
echo "Cache Path: " . PATHS["cache"] . "\n\n";      // Output: Cache Path: /var/cache

/*
5. Konstanta array konfigurasi API
   - Umum dalam pengembangan web modern untuk menyimpan berbagai endpoint atau header.
*/

const API_CONFIG = [
    "base_url" => "https://api.example.com",
    "version" => "v1",
    "auth_required" => true
];

echo "5. Konfigurasi API:\n";
echo "Base URL: " . API_CONFIG["base_url"] . "\n";             // Output: Base URL: https://api.example.com
echo "Version: " . API_CONFIG["version"] . "\n";               // Output: Version: v1
echo "Authentication Required: " . (API_CONFIG["auth_required"] ? "Yes" : "No") . "\n\n"; // Output: Yes
