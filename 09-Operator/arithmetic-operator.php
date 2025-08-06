<?php

/*
PHP Arithmetic Operators
Operator yang digunakan untuk operasi matematika seperti penjumlahan, pengurangan, perkalian, pembagian, modulus, dan eksponen.
Digunakan untuk:
- Mengolah data numerik
- Menghitung total belanja, diskon, pajak, dsb.
- Statistika sederhana dalam aplikasi web
*/

echo "-------------------- PHP Arithmetic Operators --------------------\n\n";

/*
1. Penjumlahan harga dua produk
   - Relevan untuk fitur keranjang belanja di e-commerce.
*/

$productPrice1 = 25; // Harga produk dari Sarah
$productPrice2 = 15; // Harga produk dari John
$totalPrice = $productPrice1 + $productPrice2;
echo "1. Total price: $totalPrice\n"; // Output: 40

echo "\n";

/*
2. Pengurangan budget setelah pembelian
   - Cocok untuk tracking keuangan user.
*/

$budget = 100; // Budget dari Alice
$spent = 40; // Pengeluaran untuk belanja
$remaining = $budget - $spent;
echo "2. Remaining budget: $remaining\n"; // Output: 60

echo "\n";

/*
3. Perkalian jumlah item yang terjual
   - Berguna untuk dashboard penjualan admin.
*/

$pricePerItem = 10; // Harga per item dari Daniel
$itemsSold = 7; // Jumlah item terjual
$totalRevenue = $pricePerItem * $itemsSold;
echo "3. Total revenue: $totalRevenue\n"; // Output: 70

echo "\n";

/*
4. Pembagian total rating oleh jumlah user
   - Relevan untuk sistem review dan rating.
*/

$totalRating = 45; // Total rating dari pengguna
$totalUsers = 9; // Jumlah pengguna
$averageRating = $totalRating / $totalUsers;
echo "4. Average rating: $averageRating\n"; // Output: 5

echo "\n";

/*
5. Modulus untuk sisa halaman yang belum tercetak
   - Berguna dalam sistem cetak atau pagination.
*/

$totalPages = 55; // Total halaman dokumen dari Amanda
$pagesPerBatch = 10; // Jumlah halaman per cetak
$remainingPages = $totalPages % $pagesPerBatch;
echo "5. Remaining pages: $remainingPages\n"; // Output: 5

echo "\n";

/*
6. Eksponen untuk prediksi pertumbuhan user
   - Digunakan dalam analisis pertumbuhan trafik website.
*/

$baseVisitors = 3; // Pengunjung awal oleh developer site
$growthDays = 4; // Pertumbuhan selama 4 hari
$predictedVisitors = $baseVisitors ** $growthDays;
echo "6. Predicted visitors: $predictedVisitors\n"; // Output: 81
