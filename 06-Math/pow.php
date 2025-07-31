<?php

/*
PHP pow() Function
Fungsi pow() digunakan untuk menghitung nilai pangkat dari suatu angka.
Cocok digunakan dalam berbagai kasus pengembangan web seperti perhitungan volume, pertumbuhan eksponensial, atau logika matematika lainnya.
*/

echo "------------------------------ PHP pow() Function ------------------------------\n\n";

/*
1. Perpangkatan bilangan positif sederhana
   - Digunakan untuk operasi matematika dasar.
*/

echo "1. 2 pangkat 3:\n";
echo pow(2, 3) . "\n\n"; // Output: 8

/*
2. Perpangkatan angka negatif
   - Menunjukkan hasil positif/negatif tergantung pangkatnya.
*/

echo "2. (-4) pangkat 2:\n";
echo pow(-4, 2) . "\n\n"; // Output: 16

/*
3. Menghitung luas persegi (sisi × sisi)
   - Cocok untuk aplikasi kalkulator properti.
*/

$side = 12;
$area = pow($side, 2);

echo "3. Luas persegi (sisi $side):\n";
echo $area . " square units\n\n"; // Output: 144

/*
4. Menghitung volume kubus (sisi³)
   - Berguna dalam perhitungan dimensi ruang.
*/

$length = 5;
$volume = pow($length, 3);

echo "4. Volume kubus (sisi $length):\n";
echo $volume . " cubic units\n\n"; // Output: 125

/*
5. Simulasi pertumbuhan eksponensial user
   - Cocok untuk simulasi statistik pengguna atau konten.
*/

$baseUser = 2;
$growth = pow($baseUser, 6); // setiap hari user berlipat ganda

echo "5. Total user setelah 6 hari (eksponensial):\n";
echo $growth . " users\n\n"; // Output: 64

/*
6. Perhitungan skor berdasarkan bobot pangkat
   - Digunakan dalam sistem ranking atau leaderboard.
*/

$baseScore = 10;
$weight = 4;

$finalScore = $baseScore * pow(2, $weight); // Setiap level meningkatkan skor 2x

echo "6. Skor akhir dengan bobot level:\n";
echo $finalScore . "\n\n"; // Output: 160

/*
7. Perhitungan bunga majemuk
   - Digunakan untuk simulasi finansial atau investasi.
*/

$initialAmount = 1000;
$interestRate = 1.05; // 5% bunga per tahun
$years = 3;

$futureValue = $initialAmount * pow($interestRate, $years);

echo "7. Nilai uang setelah $years tahun (bunga majemuk):\n";
echo round($futureValue, 2) . "\n\n"; // Output: sekitar 1157.63
