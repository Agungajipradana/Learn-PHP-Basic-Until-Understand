<?php

/*
PHP Assignment Operators
Operator yang digunakan untuk menetapkan nilai ke variabel.
Digunakan untuk:
- Mengelola data user atau form
- Perhitungan akumulasi
- Pengurangan / penyesuaian nilai
- Proses dinamis pada sistem web
*/

echo "-------------------- PHP Assignment Operators --------------------\n\n";

/*
1. Penugasan nilai dasar (=)
   - Digunakan saat menyimpan data dari form atau input user.
*/

$userName = "Michael"; // Assign nama user
echo "1. Username: $userName\n"; // Output: Michael

echo "\n";

/*
2. Penambahan nilai secara bertahap (+=)
   - Cocok untuk menghitung total harga dari item yang dipilih.
*/

$totalPrice = 0;
$bookPrice = 20; // Harga buku oleh Olivia
$totalPrice += $bookPrice;
echo "2. Total after adding book: $totalPrice\n"; // Output: 20

$penPrice = 5;
$totalPrice += $penPrice;
echo "   Total after adding pen: $totalPrice\n"; // Output: 25

echo "\n";

/*
3. Pengurangan otomatis (–=)
   - Cocok untuk sistem saldo atau pembayaran.
*/

$wallet = 100; // Saldo awal dari Ethan
$purchase = 35;
$wallet -= $purchase;
echo "3. Wallet after purchase: $wallet\n"; // Output: 65

echo "\n";

/*
4. Perkalian bertahap (*=)
   - Berguna dalam perhitungan diskon massal.
*/

$discount = 10; // Diskon awal dari Chloe
$multiplier = 2; // Faktor diskon spesial event
$discount *= $multiplier;
echo "4. Special discount: $discount%\n"; // Output: 20%

echo "\n";

/*
5. Pembagian nilai (/=)
   - Digunakan dalam pembagian biaya atau rata-rata.
*/

$totalBandwidth = 200; // Bandwidth dari server Noah
$users = 4;
$totalBandwidth /= $users;
echo "5. Bandwidth per user: $totalBandwidth MB\n"; // Output: 50 MB

echo "\n";

/*
6. Modulus assignment (%=)
   - Bermanfaat saat mengecek sisa stok atau batch upload.
*/

$photosToUpload = 23; // Foto dari Emma
$maxPerPage = 10;
$photosToUpload %= $maxPerPage;
echo "6. Remaining photos for next page: $photosToUpload\n"; // Output: 3
