<?php

/*
PHP min() dan max() Functions
Digunakan untuk mencari nilai minimum dan maksimum dari sekumpulan angka.
Fungsi ini sangat berguna dalam pengembangan web, seperti validasi harga, 
menentukan skor tertinggi, atau rentang usia pengguna.
*/

echo "------------------------------ PHP min() and max() ------------------------------\n\n";

/*
1. Menentukan nilai minimum dari angka statis
   - Paling dasar, cocok untuk mulai mengenal fungsi min().
*/

echo "1. Nilai minimum dari (10, 20, 5, 8):\n";
echo min(10, 20, 5, 8) . "\n\n"; // Output: 5

/*
2. Menentukan nilai maksimum dari angka statis
   - Digunakan untuk mencari angka terbesar dari sekumpulan nilai tetap.
*/

echo "2. Nilai maksimum dari (3, 11, 9, 7):\n";
echo max(3, 11, 9, 7) . "\n\n"; // Output: 11

/*
3. Mencari harga terendah dan tertinggi dari array produk
   - Sangat berguna dalam e-commerce untuk filter harga atau sort produk.
*/

$productPrices = [199, 399, 149, 250, 320];

echo "3. Harga produk terendah: $" . min($productPrices) . "\n"; // 149
echo "   Harga produk tertinggi: $" . max($productPrices) . "\n\n"; // 399

/*
4. Menentukan skor tertinggi dalam ujian
   - Relevan untuk fitur dashboard siswa atau sistem penilaian.
*/

$scores = [85, 72, 90, 88, 76];

echo "4. Skor tertinggi siswa:\n";
echo max($scores) . "\n\n"; // Output: 90

/*
5. Menentukan usia pengguna termuda dan tertua
   - Digunakan untuk validasi usia atau statistik demografi.
*/

$userAges = [29, 35, 18, 22, 40];

$youngest = min($userAges);
$oldest = max($userAges);

echo "5. Pengguna termuda berusia: $youngest tahun\n";
echo "   Pengguna tertua berusia: $oldest tahun\n\n";

/*
6. Menentukan produk dengan harga termurah (berbasis array asosiatif)
   - Contoh nyata untuk e-commerce: cek item terendah dari daftar.
*/

$products = [
    "Keyboard" => 450,
    "Monitor" => 1250,
    "Mouse" => 199,
    "Printer" => 799
];

$minPrice = min($products);
$maxPrice = max($products);

echo "6. Produk termurah: $$minPrice\n"; // Output: 199
echo "   Produk termahal: $$maxPrice\n\n"; // Output: 1250
