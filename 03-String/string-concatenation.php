<?php

/*
String Concatenation (Penggabungan String) dalam PHP digunakan untuk menggabungkan dua atau lebih string menjadi satu.
Operator yang digunakan adalah tanda titik ( . )
Contoh-contoh berikut disusun dari yang paling dasar hingga yang lebih kompleks dalam pengembangan web.
*/

echo "--------------------------------------------------- String Concatenation ---------------------------------------------------" . "\n\n";

/*
1. Menggabungkan Nama Depan dan Nama Belakang
    - Kasus umum saat menampilkan nama lengkap pengguna.
*/

echo "1. Concatenate First and Last Name\n\n";

$firstName = "John";
$lastName = "Doe";
$fullName = $firstName . " " . $lastName;

echo "Full Name: $fullName\n\n";

/*
2. Menampilkan Salam Selamat Datang
    - Digunakan untuk tampilan dashboard atau area pribadi pengguna.
*/

echo "2. Welcome Message\n\n";

$userName = "Alice";
$welcomeMessage = "Welcome back, " . $userName . "!";

echo $welcomeMessage . "\n\n";

/*
3. Menyusun Tautan atau URL Dinamis
    - Berguna dalam membuat link berdasarkan data (seperti slug, ID).
*/

echo "3. Dynamic URL Generation\n\n";

$baseUrl = "https://example.com/post/";
$slug = "how-to-learn-php";
$fullUrl = $baseUrl . $slug;

echo "Generated URL: $fullUrl\n\n";

/*
4. Menggabungkan String dalam HTML Output
    - Contoh nyata saat membuat elemen HTML dengan data dinamis (template sederhana).
*/

echo "4. Dynamic HTML Output\n\n";

$title = "Learn PHP";
$button = "<a href='#' class='btn'>" . $title . "</a>";

echo "Generated Button HTML: $button\n\n";

/*
5. Membangun Query String untuk Form
    - Digunakan untuk mengirim data lewat URL (GET parameter).
*/

echo "5. Build Query String\n\n";

$search = "php";
$sort = "latest";
$queryString = "?q=" . $search . "&sort=" . $sort;

echo "Query URL: /search" . $queryString . "\n\n";

/*
6. Menggabungkan Banyak String dalam Loop
    - Kasus umum untuk menyusun list, output dinamis, atau log aktivitas.
*/

echo "6. Concatenation in Loop\n\n";

$items = ["PHP", "JavaScript", "CSS"];
$list = "";

foreach ($items as $index => $item) {
    $list .= ($index + 1) . ". " . $item . "\n";
}

echo "Generated List:\n$list\n";
