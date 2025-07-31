<?php

/*
PHP sqrt() Function
Fungsi sqrt() digunakan untuk menghitung akar kuadrat dari sebuah angka.
Dalam pengembangan web, fungsi ini berguna untuk logika perhitungan geometri, animasi grafis, algoritma rating, atau fitur kalkulasi.
*/

echo "------------------------------ PHP sqrt() Function ------------------------------\n\n";

/*
1. Akar kuadrat dari bilangan bulat
   - Contoh paling dasar untuk memahami penggunaan sqrt().
*/

echo "1. Akar kuadrat dari 16:\n";
echo sqrt(16) . "\n\n"; // Output: 4

/*
2. Akar kuadrat dari angka desimal
   - Menunjukkan hasil berupa float.
*/

echo "2. Akar kuadrat dari 20.25:\n";
echo sqrt(20.25) . "\n\n"; // Output: 4.5

/*
3. Menghitung panjang sisi dari persegi (jika diketahui luas)
   - Relevan untuk fitur desain grafis berbasis grid.
*/

$area = 81;
$sideLength = sqrt($area);

echo "3. Panjang sisi dari persegi dengan luas 81:\n";
echo $sideLength . "\n\n"; // Output: 9

/*
4. Menghitung jarak antara dua titik secara kasar (tanpa koordinat)
   - Berguna dalam simulasi atau animasi posisi objek.
*/

$distanceSquared = 625;
$distance = sqrt($distanceSquared);

echo "4. Jarak antar dua titik (akar dari 625):\n";
echo $distance . "\n\n"; // Output: 25

/*
5. Validasi apakah suatu nilai adalah kuadrat sempurna
   - Cocok untuk fitur edukasi matematika atau validasi form input.
*/

$number = 36;
$sqrtValue = sqrt($number);

if (floor($sqrtValue) == $sqrtValue) {
    echo "5. $number adalah kuadrat sempurna.\n\n";
} else {
    echo "5. $number bukan kuadrat sempurna.\n\n";
}

/*
6. Perhitungan statistik sederhana: Standar Deviasi (simulasi)
   - Berguna dalam analisis data pengguna atau laporan nilai.
*/

$numbers = [85, 90, 92, 88, 95];
$mean = array_sum($numbers) / count($numbers);
$sumOfSquares = 0;

foreach ($numbers as $value) {
    $sumOfSquares += pow($value - $mean, 2);
}

$standardDeviation = sqrt($sumOfSquares / count($numbers));

echo "6. Standar deviasi dari nilai:\n";
echo round($standardDeviation, 2) . "\n\n"; // Output misal: 3.4
