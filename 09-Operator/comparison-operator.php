<?php

/*
PHP Comparison Operators
Digunakan untuk membandingkan dua nilai.
Digunakan untuk:
- Validasi input form
- Kondisi login dan keamanan
- Sistem filter dan pencarian
- Penilaian data statistik
*/

echo "-------------------- PHP Comparison Operators --------------------\n\n";

/*
1. Sama dengan (==)
   - Cocok untuk memeriksa apakah input user sesuai dengan value tertentu.
*/

$passwordInput = "secret123"; // Input dari user
$actualPassword = "secret123"; // Password tersimpan
var_dump($passwordInput == $actualPassword); // Output: true

echo "\n";

/*
2. Tidak sama dengan (!=)
   - Digunakan untuk menolak input yang tidak valid.
*/

$userRole = "guest"; // Role yang masuk
$requiredRole = "admin";
var_dump($userRole != $requiredRole); // Output: true

echo "\n";

/*
3. Lebih besar dari (>)
   - Umum pada validasi minimal jumlah belanja atau rating.
*/

$cartTotal = 120; // Total belanja dari Ava
$minOrder = 100;
var_dump($cartTotal > $minOrder); // Output: true

echo "\n";

/*
4. Kurang dari atau sama dengan (<=)
   - Digunakan untuk membatasi kuota, halaman, dsb.
*/

$currentPage = 5;
$maxPage = 10;
var_dump($currentPage <= $maxPage); // Output: true

echo "\n";

/*
5. Identik (===)
   - Cek nilai dan tipe data, penting untuk keamanan seperti login.
*/

$userIdInput = "123"; // Input dari form
$storedUserId = 123; // ID dari database
var_dump($userIdInput === $storedUserId); // Output: false (string !== int)

echo "\n";

/*
6. Tidak identik (!==)
   - Digunakan untuk memastikan nilai dan tipe benar-benar berbeda.
*/

$statusInput = false; // Dari user toggle
$statusExpected = 0; // Di-backend dianggap integer
var_dump($statusInput !== $statusExpected); // Output: true

echo "\n";

/*
7. Spaceship Operator (<=>)
   - Cocok untuk sorting dan ranking data.
   - Hasil: -1 jika kiri lebih kecil, 0 jika sama, 1 jika kiri lebih besar
*/

$ratingJohn = 4.8;
$ratingMike = 4.6;
echo $ratingJohn <=> $ratingMike; // Output: 1

echo "\n";

$ratingAnna = 4.6;
echo $ratingMike <=> $ratingAnna; // Output: 0

echo "\n";

$ratingLiam = 5.0;
echo $ratingMike <=> $ratingLiam; // Output: -1
