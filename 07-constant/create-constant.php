<?php

/*
Create a PHP Constant
Konstanta dalam PHP adalah nilai tetap yang tidak bisa diubah setelah didefinisikan.
Biasanya digunakan untuk menyimpan konfigurasi, nama aplikasi, URL, dan nilai tetap lainnya.
*/

echo "------------------------------ Create a PHP Constant ------------------------------\n\n";

/*
1. Konstanta dasar dengan nama aplikasi
   - Berguna untuk mencetak nama aplikasi di header, footer, atau log.
*/
define("APP_NAME", "MyWebApp");
echo "1. Nama aplikasi: " . APP_NAME . "\n"; // Output: 1. Nama aplikasi: MyWebApp
echo "\n";

/*
2. Konstanta dengan URL dasar
   - Sering digunakan untuk merujuk ke alamat website utama atau endpoint API.
*/
define("BASE_URL", "https://mywebapp.com");
echo "2. URL dasar: " . BASE_URL . "\n"; // Output: 2. URL dasar: https://mywebapp.com
echo "\n";

/*
3. Konstanta nilai maksimum unggahan
   - Berguna untuk validasi batas file upload (misalnya 1MB).
*/
define("MAX_UPLOAD_SIZE", 1048576); // 1 MB dalam byte
echo "3. Maksimum upload (bytes): " . MAX_UPLOAD_SIZE . "\n"; // Output: 3. Maksimum upload (bytes): 1048576
echo "\n";

/*
4. Konstanta array bahasa yang didukung
   - Berguna dalam pengaturan multi-bahasa pada web app.
*/
define("SUPPORTED_LANGUAGES", ["en", "id", "fr"]);
echo "4. Bahasa yang didukung:\n";
print_r(SUPPORTED_LANGUAGES); // Output: Array ( [0] => en [1] => id [2] => fr )
echo "\n";

/*
5. Konstanta waktu expired token
   - Umum dipakai pada aplikasi yang menggunakan autentikasi.
*/
define("TOKEN_EXPIRE_SECONDS", 3600); // 1 jam
echo "5. Token akan expired dalam " . TOKEN_EXPIRE_SECONDS . " detik\n"; // Output: 5. Token akan expired dalam 3600 detik
echo "\n";

/*
6. Menggunakan konstanta dalam fungsi
   - Menunjukkan bahwa konstanta bersifat global dan bisa diakses dari fungsi manapun.
*/
function printAppInfo()
{
    echo "6. Info Aplikasi: " . APP_NAME . " (" . BASE_URL . ")\n"; // Output: 6. Info Aplikasi: MyWebApp (https://mywebapp.com)
}

printAppInfo();
