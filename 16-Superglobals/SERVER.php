<?php
/*
$_SERVER pada PHP adalah array asosiatif yang menyimpan informasi
tentang server, lingkungan eksekusi, dan permintaan (request) yang sedang diproses.

Dalam pengembangan web, $_SERVER sering digunakan untuk:
- Mengetahui detail server (nama host, alamat IP)
- Menangani routing URL
- Mengambil informasi request method
- Mengatur pengalihan (redirect) berdasarkan kondisi tertentu
*/

echo "-------------------- PHP \$_SERVER Examples --------------------\n\n";

/*
1. Get Server Name (Nama Host Server)
   - Menampilkan nama host server yang menjalankan script.
   - Berguna untuk membuat script yang berjalan di berbagai domain.
*/
echo "1. Get Server Name\n\n";
echo "Server Name: " . $_SERVER['SERVER_NAME'] . "\n";
// Output contoh: Server Name: localhost
echo "\n\n";

/*
2. Get Server Software
   - Menampilkan informasi perangkat lunak server web.
   - Berguna untuk debugging atau menyesuaikan fitur sesuai server.
*/
echo "2. Get Server Software\n\n";
echo "Server Software: " . $_SERVER['SERVER_SOFTWARE'] . "\n";
// Output contoh: Server Software: Apache/2.4.54 (Win64) PHP/8.1.12
echo "\n\n";

/*
3. Get Request Method
   - Mengetahui apakah request menggunakan GET, POST, atau lainnya.
   - Penting untuk membedakan penanganan form.
*/
echo "3. Get Request Method\n\n";
echo "Request Method: " . $_SERVER['REQUEST_METHOD'] . "\n";
// Output contoh: Request Method: GET
echo "\n\n";

/*
4. Get Script Filename
   - Menampilkan path lengkap file PHP yang sedang dijalankan.
   - Berguna untuk logging dan debugging.
*/
echo "4. Get Script Filename\n\n";
echo "Script Filename: " . $_SERVER['SCRIPT_FILENAME'] . "\n";
// Output contoh: C:/xampp/htdocs/server.php
echo "\n\n";

/*
5. Get Client IP Address
   - Mengambil alamat IP pengunjung.
   - Digunakan untuk pencatatan atau pembatasan akses.
*/
echo "5. Get Client IP Address\n\n";
$clientIP = $_SERVER['REMOTE_ADDR'];
echo "Client IP: " . $clientIP . "\n";
// Output contoh: Client IP: 127.0.0.1
echo "\n\n";

/*
6. Get Request URI
   - Mengambil bagian URL setelah nama domain.
   - Sangat penting untuk routing pada aplikasi web.
*/
echo "6. Get Request URI\n\n";
echo "Request URI: " . $_SERVER['REQUEST_URI'] . "\n";
// Output contoh: /server.php?id=10
echo "\n\n";

/*
7. Get Query String Parameters
   - Mengambil parameter yang dikirim melalui URL.
   - Digunakan untuk pencarian, filter, dan navigasi dinamis.
*/
echo "7. Get Query String Parameters\n\n";
if (!empty($_SERVER['QUERY_STRING'])) {
    echo "Query String: " . $_SERVER['QUERY_STRING'] . "\n";
    // Output contoh: id=10&name=Michael
} else {
    echo "No Query String found.\n";
}
echo "\n\n";

/*
8. Combining Multiple $_SERVER Variables for Logging
   - Menggabungkan berbagai informasi untuk membuat log request.
*/
echo "8. Combining Multiple \$_SERVER Variables for Logging\n\n";
$logMessage = "[" . date('Y-m-d H:i:s') . "] " .
              "IP: " . $_SERVER['REMOTE_ADDR'] . " | " .
              "Method: " . $_SERVER['REQUEST_METHOD'] . " | " .
              "URI: " . $_SERVER['REQUEST_URI'] . "\n";

echo $logMessage;
// Contoh output: [2025-08-15 21:12:05] IP: 127.0.0.1 | Method: GET | URI: /server.php?id=10
echo "\n\n";

/*
9. Dynamic Redirect Based on Host
   - Mengarahkan user ke domain tertentu jika sedang berada di domain yang salah.
*/
echo "9. Dynamic Redirect Based on Host\n\n";
if ($_SERVER['SERVER_NAME'] !== 'mywebsite.com') {
    echo "Redirecting to https://mywebsite.com ...\n";
    // header("Location: https://mywebsite.com");
    // exit;
} else {
    echo "You are on the correct domain.\n";
}
