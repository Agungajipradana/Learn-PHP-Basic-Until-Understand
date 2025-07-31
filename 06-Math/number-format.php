<?php

/*
PHP number_format() Function
Digunakan untuk memformat angka agar mudah dibaca oleh manusia, terutama dalam konteks mata uang, statistik, atau laporan.
*/

echo "------------------------------ PHP number_format() Function ------------------------------\n\n";

/*
1. Format angka ribuan tanpa desimal
   - Cocok untuk statistik pengunjung, followers, atau jumlah item.
*/

$visitors = 12000;

echo "1. Total pengunjung:\n";
echo number_format($visitors) . "\n\n"; // Output: 12,000

/*
2. Format angka dengan dua desimal
   - Umum digunakan dalam e-commerce untuk menampilkan harga.
*/

$price = 1499.5;

echo "2. Harga produk:\n";
echo "$" . number_format($price, 2) . "\n\n"; // Output: $1,499.50

/*
3. Format angka dengan pemisah ribuan dan desimal kustom
   - Cocok untuk region non-English seperti Eropa atau Indonesia.
*/

$total = 58267.89;

echo "3. Format lokal (koma sebagai desimal):\n";
echo number_format($total, 2, ',', '.') . "\n\n"; // Output: 58.267,89

/*
4. Format nilai total transaksi
   - Digunakan untuk laporan keuangan atau invoice.
*/

$invoiceAmount = 1267890.75;

echo "4. Total tagihan invoice:\n";
echo "$" . number_format($invoiceAmount, 2, '.', ',') . "\n\n"; // Output: $1,267,890.75

/*
5. Format angka besar untuk data analytics
   - Berguna untuk laporan bulanan dalam dashboard admin.
*/

$monthlyRevenue = 97342659.456;

echo "5. Total pendapatan bulanan:\n";
echo "$" . number_format($monthlyRevenue, 2, '.', ',') . "\n\n"; // Output: $97,342,659.46

/*
6. Format angka negatif sebagai kerugian
   - Berguna dalam laporan finansial untuk menunjukkan nilai minus.
*/

$loss = -15420.9;

echo "6. Kerugian bulan ini:\n";
echo "$" . number_format($loss, 2, '.', ',') . "\n\n"; // Output: -$15,420.90

/*
7. Format jumlah donasi dengan satuan khusus
   - Digunakan pada situs penggalangan dana.
*/

$donation = 324567.1;

echo "7. Total donasi:\n";
echo "Rp " . number_format($donation, 0, ',', '.') . "\n\n"; // Output: Rp 324.567
