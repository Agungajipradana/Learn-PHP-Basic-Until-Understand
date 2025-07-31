<?php

/*
PHP Math Function `pi()`
Fungsi pi() mengembalikan nilai konstanta π (pi), yang biasa digunakan dalam
perhitungan geometri seperti keliling, luas, atau volume lingkaran/tabung.

Fungsi ini sangat berguna dalam pengembangan web untuk:
- Kalkulasi luas/keliling pada fitur desain
- Perhitungan dimensi
- Estimasi matematis dalam logika bisnis
*/

echo "------------------------------ PHP pi() Function ------------------------------\n\n";

/*
1. Menampilkan nilai konstanta pi
   - Berguna untuk mengenal nilai dasar dari konstanta π.
*/

echo "1. Nilai konstanta pi:\n";
echo pi(); // Output: 3.1415926535898
echo "\n\n";

/*
2. Menghitung keliling lingkaran dari diameter
   - Dapat digunakan untuk fitur desain seperti kalkulator ukuran lingkaran.
*/

$diameter = 20;
$circumference = pi() * $diameter;

echo "2. Keliling lingkaran (diameter 20):\n";
echo $circumference . "\n\n"; // Output: 62.831853071796

/*
3. Menghitung luas lingkaran berdasarkan radius
   - Relevan untuk aplikasi dengan visualisasi grafik atau elemen SVG.
*/

$radius = 10;
$area = pi() * pow($radius, 2);

echo "3. Luas lingkaran (radius 10):\n";
echo $area . "\n\n"; // Output: 314.15926535898

/*
4. Menghitung volume tabung
   - Sering digunakan untuk simulasi logistik, pengiriman, atau estimasi kapasitas.
*/

$height = 15;
$volume = pi() * pow($radius, 2) * $height;

echo "4. Volume tabung (radius 10, tinggi 15):\n";
echo $volume . "\n\n"; // Output: 4712.3889803847

/*
5. Menampilkan pi dengan 2 desimal untuk UI
   - Berguna saat menampilkan angka presisi di form atau laporan.
*/

$piRounded = round(pi(), 2);

echo "5. Pi dibulatkan ke 2 angka desimal:\n";
echo $piRounded . "\n"; // Output: 3.14
