<?php

/*
PHP Magic Constant: __FILE__
Magic constant ini mengembalikan path lengkap dari file yang sedang dieksekusi.
Sangat berguna dalam pengembangan web untuk:
- Logging
- Load konfigurasi dinamis
- Sistem include/require
- Path asset/file handler
*/

echo "------------------------------ PHP __FILE__ Magic Constant ------------------------------\n\n";

/*
1. Menampilkan path lengkap dari file saat ini
   - Berguna untuk debugging saat mengembangkan modul atau script lokal
*/

echo "1. This file is located at:\n";
echo __FILE__ . "\n\n"; // Output: Full file path seperti: C:\xampp\htdocs\project\file.php

/*
2. Digunakan dalam logging error
   - Menyertakan informasi file untuk trace log
*/

function logError($message)
{
    echo "2. ERROR in file: " . __FILE__ . " - $message\n"; // Output: File path + error message
}

logError("Unable to connect to API");
echo "\n";

/*
3. Menentukan direktori dinamis untuk load file konfigurasi
   - Berguna saat memuat file dari path relatif berbasis lokasi file
*/

$configPath = dirname(__FILE__) . "/config/app.php";
echo "3. Config path resolved as:\n";
echo $configPath . "\n\n"; // Output: C:\xampp\htdocs\project\config\app.php

/*
4. Menyimpan lokasi file saat melakukan backup
   - Cocok untuk script backup otomatis file tertentu
*/

function backupFile($filePath)
{
    echo "4. Backing up file: $filePath\n"; // Output: Full file path
}

$currentFile = __FILE__;
backupFile($currentFile);
echo "\n";

/*
5. Menampilkan path saat digunakan dalam class atau library
   - Digunakan untuk dokumentasi otomatis atau sistem plugin
*/

class Logger
{
    public function report()
    {
        echo "5. Report generated from file: " . __FILE__ . "\n"; // Output: Full path file
    }
}

$logger = new Logger();
$logger->report();
echo "\n";

/*
6. Digabung dengan basename() untuk mendapatkan hanya nama file
   - Berguna untuk UI dashboard admin atau audit trail
*/

$currentFileName = basename(__FILE__);
echo "6. Current file name only: " . $currentFileName . "\n"; // Output: file.php
echo "\n";

/*
7. __FILE__ dalam sistem autoloading atau package manager
   - Umum digunakan untuk register path dalam loader
*/

function registerModule($module)
{
    echo "7. Module '$module' registered from: " . __FILE__ . "\n"; // Output: file path
}

registerModule("AuthModule");
