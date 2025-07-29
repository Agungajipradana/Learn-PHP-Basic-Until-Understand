<?php

/*
(bool) digunakan untuk mengonversi tipe data lain menjadi boolean (true atau false).
Konversi ini sangat penting dalam pengembangan web, seperti validasi input, pengecekan login, dan logika kondisi.
*/

echo "--------------------------- Cast to Boolean in PHP ---------------------------\n\n";

/*
1. Konversi nilai true ke boolean
   - Sudah bernilai true, hanya untuk kejelasan eksplicit.
*/

$isAdmin = true;
$converted = (bool) $isAdmin;

echo "1. Is admin: " . ($converted ? "true" : "false") . "\n"; // Output: true


/*
2. Konversi angka 1 dan 0 ke boolean
   - 1 → true, 0 → false
   - Sering digunakan pada data status dari database.
*/

$statusFromDB = 1;
$statusBool = (bool) $statusFromDB;

echo "2. Status from DB (1): " . ($statusBool ? "true" : "false") . "\n"; // Output: true

$statusFromDB = 0;
$statusBool = (bool) $statusFromDB;

echo "   Status from DB (0): " . ($statusBool ? "true" : "false") . "\n"; // Output: false


/*
3. Konversi string kosong dan non-kosong
   - String kosong → false
   - String apapun selain kosong → true
   - Umum digunakan pada validasi input form
*/

$username = "";
$isValid = (bool) $username;

echo "3. Is username valid (empty): " . ($isValid ? "true" : "false") . "\n"; // Output: false

$username = "johndoe";
$isValid = (bool) $username;

echo "   Is username valid ('johndoe'): " . ($isValid ? "true" : "false") . "\n"; // Output: true


/*
4. Konversi NULL ke boolean
   - NULL → false
   - Umum pada pengecekan apakah data tersedia atau belum.
*/

$data = null;
$isAvailable = (bool) $data;

echo "4. Is data available (null): " . ($isAvailable ? "true" : "false") . "\n"; // Output: false


/*
5. Konversi array kosong dan array berisi elemen
   - Array kosong → false
   - Array dengan isi → true
*/

$tags = [];
$isFilled = (bool) $tags;

echo "5. Tags exist (empty): " . ($isFilled ? "true" : "false") . "\n"; // Output: false

$tags = ["php", "html"];
$isFilled = (bool) $tags;

echo "   Tags exist (filled): " . ($isFilled ? "true" : "false") . "\n"; // Output: true


/*
6. Konversi angka selain 0 ke boolean
   - Semua angka non-zero → true
*/

$cartCount = 5;
$isCartActive = (bool) $cartCount;

echo "6. Is cart active (5 items): " . ($isCartActive ? "true" : "false") . "\n"; // Output: true


/*
7. Konversi hasil ekspresi ke boolean
   - Digunakan dalam logika login, redirect, validasi, dll.
*/

$input = "john@example.com";
$isValidEmail = (bool) strpos($input, "@");

echo "7. Is valid email: " . ($isValidEmail ? "true" : "false") . "\n"; // Output: true


/*
8. Konversi dari hasil API string kosong
   - API sering mengembalikan string kosong "" jika data tidak tersedia.
*/

$response = "";
$isResponseOK = (bool) $response;

echo "8. API response valid: " . ($isResponseOK ? "true" : "false") . "\n"; // Output: false


/*
9. Konversi string "0" ke boolean
   - Meskipun string, "0" → false (khusus di PHP)
   - Berbeda dengan "false", "null", atau "no" yang tetap dianggap true jika tidak kosong.
*/

$value = "0";
$boolValue = (bool) $value;

echo "9. Is '0' truthy?: " . ($boolValue ? "true" : "false") . "\n"; // Output: false
