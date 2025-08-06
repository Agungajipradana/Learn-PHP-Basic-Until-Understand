<?php

/*
PHP String Operators
Digunakan untuk menggabungkan (concatenate) atau menambahkan string ke variabel string.
Digunakan untuk:
- Menampilkan data dinamis di UI
- Menyusun pesan, URL, dan query
- Format log atau notifikasi
- Penamaan file otomatis, dll

Operator:
- .   (Concatenation)
- .=  (Concatenation Assignment)
*/

echo "-------------------- PHP String Operators --------------------\n\n";

/*
1. Concatenation (.)
   - Menggabungkan dua string.
   - Umum digunakan untuk menampilkan nama lengkap user.
*/

$firstName = "Emma";
$lastName = "Johnson";
$fullName = $firstName . " " . $lastName;

echo "1. Full name: $fullName\n"; // Output: Emma Johnson

echo "\n";

/*
2. Concatenation dengan teks statis
   - Cocok untuk menyusun pesan sambutan, notifikasi, atau email.
*/

$userName = "Oliver";
$greeting = "Welcome back, " . $userName . "!";

echo "2. Greeting message: $greeting\n"; // Output: Welcome back, Oliver!

echo "\n";

/*
3. Membuat URL dinamis
   - Digunakan dalam sistem routing atau pembuatan link share otomatis.
*/

$baseUrl = "https://example.com/user/";
$userSlug = "liam-smith";
$profileLink = $baseUrl . $userSlug;

echo "3. Profile link: $profileLink\n"; // Output: https://example.com/user/liam-smith

echo "\n";

/*
4. Menggabungkan string menggunakan assignment (.=)
   - Tambah string ke variabel string yang sudah ada.
   - Cocok untuk membangun konten HTML, log, atau data CSV.
*/

$log = "[INFO] ";
$log .= "User Ava logged in. ";
$log .= "Time: 10:45 AM";

echo "4. System log: $log\n";
// Output: [INFO] User Ava logged in. Time: 10:45 AM

echo "\n";

/*
5. Menyusun konten HTML dari backend
   - Relevan untuk CMS, email builder, atau laporan yang dikirim ke browser.
*/

$html = "<div>";
$html .= "<h1>Dashboard</h1>";
$html .= "<p>Welcome, Charlotte!</p>";
$html .= "</div>";

echo "5. HTML content:\n$html\n";
// Output: HTML dengan tag div, h1, dan p

echo "\n";

/*
6. Penggabungan data array ke dalam string (manual loop)
   - Berguna saat menyusun teks dari daftar user atau produk.
*/

$users = ["Noah", "Mason", "Lucas"];
$userList = "Users: ";

foreach ($users as $index => $name) {
    $userList .= $name;
    if ($index < count($users) - 1) {
        $userList .= ", ";
    }
}

echo "6. User list: $userList\n"; // Output: Users: Noah, Mason, Lucas
