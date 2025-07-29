<?php

/*
(int) digunakan untuk mengonversi tipe data lain menjadi integer.
Sangat berguna dalam pengembangan web ketika memproses data dari form, API, atau database yang awalnya dalam bentuk string atau float.
*/

echo "--------------------------- Cast to Integer in PHP ---------------------------\n\n";

/*
1. Konversi string angka ke integer
   - Umum saat memproses input dari form (input HTML selalu bertipe string).
*/

$inputAge = "30";
$age = (int) $inputAge;

echo "1. Age: $age\n"; // Output: 30


/*
2. Konversi float ke integer
   - Nilai desimal akan dibulatkan ke bawah (tanpa pembulatan).
*/

$price = 99.99;
$priceInt = (int) $price;

echo "2. Price as integer: $priceInt\n"; // Output: 99


/*
3. Konversi boolean ke integer
   - true → 1, false → 0
   - Biasa digunakan untuk menyimpan status aktif (1) / tidak aktif (0) dalam database.
*/

$isActive = true;
$status = (int) $isActive;

echo "3. Status (active): $status\n"; // Output: 1


/*
4. Konversi string tidak valid ke integer
   - String yang diawali angka akan diambil angkanya, sisanya diabaikan.
   - Jika string tidak diawali angka, hasilnya 0.
*/

$input = "123abc";
$converted = (int) $input;

echo "4. Mixed string to integer: $converted\n"; // Output: 123


/*
5. Konversi string non-numerik ke integer
   - Hasilnya adalah 0, berguna dalam validasi input.
*/

$invalidInput = "hello";
$converted = (int) $invalidInput;

echo "5. Non-numeric string to integer: $converted\n"; // Output: 0


/*
6. Konversi nilai NULL ke integer
   - NULL akan dikonversi menjadi 0.
*/

$userScore = null;
$score = (int) $userScore;

echo "6. Null to integer: $score\n"; // Output: 0


/*
7. Konversi hasil perhitungan ke integer
   - Misalnya untuk menghitung diskon dalam angka bulat.
*/

$discount = 15.75;
$discountInt = (int) ($discount * 2);

echo "7. Total discount: $discountInt\n"; // Output: 31


/*
8. Konversi hasil input JSON (string) ke integer
   - Relevan dalam API response yang mengembalikan semua data sebagai string.
*/

$json = '{"views": "2500", "likes": "450"}';
$data = json_decode($json, true);

$views = (int) $data["views"];
$likes = (int) $data["likes"];

echo "8. Views: $views, Likes: $likes\n"; // Output: Views: 2500, Likes: 450


/*
9. Konversi data form kosong ke integer
   - String kosong ("") akan menjadi 0.
*/

$formInput = "";
$formValue = (int) $formInput;

echo "9. Empty input to integer: $formValue\n"; // Output: 0


/*
10. Konversi waktu dalam detik (string) ke integer untuk logika durasi
*/

$duration = "180.5"; // durasi detik dari input user
$durationInt = (int) $duration;

echo "10. Duration in seconds: $durationInt\n"; // Output: 180
