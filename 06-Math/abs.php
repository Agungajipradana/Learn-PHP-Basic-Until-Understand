<?php

/*
PHP abs() Function
Fungsi abs() digunakan untuk mendapatkan nilai absolut (selalu positif) dari sebuah angka.
Ini sangat berguna dalam pengembangan web saat bekerja dengan selisih nilai, logika pembayaran, perhitungan skor, dan sebagainya.
*/

echo "------------------------------ PHP abs() Function ------------------------------\n\n";

/*
1. Menampilkan nilai absolut dari angka negatif
   - Dasar untuk memahami cara kerja abs().
*/

echo "1. Nilai absolut dari -15:\n";
echo abs(-15) . "\n\n"; // Output: 15

/*
2. Nilai absolut dari angka positif tetap sama
   - Berguna untuk mempertegas bahwa abs() tidak mengubah nilai positif.
*/

echo "2. Nilai absolut dari 25:\n";
echo abs(25) . "\n\n"; // Output: 25

/*
3. Menghitung selisih antara dua angka (positif dan negatif)
   - Cocok untuk menghitung jarak nilai harga, skor, atau rating.
*/

$oldPrice = 250;
$newPrice = 300;

$priceDifference = abs($oldPrice - $newPrice);

echo "3. Selisih harga:\n";
echo $priceDifference . "\n\n"; // Output: 50

/*
4. Menghitung selisih skor antara dua tim
   - Digunakan dalam sistem pertandingan atau leaderboard.
*/

$teamAScore = 88;
$teamBScore = 92;

$scoreGap = abs($teamAScore - $teamBScore);

echo "4. Selisih skor antar tim:\n";
echo $scoreGap . "\n\n"; // Output: 4

/*
5. Menentukan nilai pengembalian (refund) jika pembayaran lebih
   - Relevan untuk fitur keuangan seperti refund atau penyesuaian tagihan.
*/

$totalDue = 500;
$amountPaid = 550;

$refund = abs($totalDue - $amountPaid);

echo "5. Jumlah pengembalian:\n";
echo "$" . $refund . "\n\n"; // Output: $50

/*
6. Menghindari nilai negatif pada diskon atau penalti
   - Umum pada perhitungan promosi atau denda yang perlu tetap positif.
*/

$penalty = -100;
$finalPenalty = abs($penalty);

echo "6. Total denda setelah abs():\n";
echo "$" . $finalPenalty . "\n\n"; // Output: $100
