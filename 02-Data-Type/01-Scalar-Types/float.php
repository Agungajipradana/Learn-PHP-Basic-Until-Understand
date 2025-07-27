<?php

/*
Float (juga dikenal sebagai double atau floating-point) adalah tipe data dalam PHP yang digunakan untuk menyimpan bilangan pecahan atau desimal.

Contoh nilai float: 3.14, -0.5, 0.0, 2.718

Tipe data ini sangat berguna untuk perhitungan yang melibatkan angka desimal, seperti pengukuran, keuangan, dan operasi matematika tingkat lanjut.

Ciri-ciri Tipe Data Float:
    1. Memiliki bagian desimal, ditandai dengan titik (.)
    2. Bisa ditulis dalam notasi ilmiah, misalnya 1.2e3 (setara dengan 1200)
    3. Rentang dan presisi tergantung pada platform (biasanya mengikuti standar IEEE 754 double precision)
*/

echo "------------------------------------------- Contoh Penggunaan Float --------------------------------------" . "\n\n";

/*
1. Mendefinisikan Float secara Eksplisit
*/

echo "1. Mendefinisikan Float secara Eksplisit" . "\n\n";

$price = 19.99;
$temperature = -5.75;
$zeroFloat = 0.0;

echo "Harga: $price\n";
echo "Suhu: $temperature\n";
echo "Float dengan nilai nol: $zeroFloat\n\n";

/*
2. Operasi Aritmatika dengan Float
*/

echo "2. Operasi Aritmatika dengan Float" . "\n\n";

$valueA = 5.5;
$valueB = 2.0;

$addition = $valueA + $valueB;
$subtraction = $valueA - $valueB;
$multiplication = $valueA * $valueB;
$division = $valueA / $valueB;

echo "Penjumlahan (\$valueA + \$valueB): $addition\n";
echo "Pengurangan (\$valueA - \$valueB): $subtraction\n";
echo "Perkalian (\$valueA * \$valueB): $multiplication\n";
echo "Pembagian (\$valueA / \$valueB): $division\n\n";

/*
3. Float dalam Notasi Ilmiah (Scientific Notation)
*/

echo "3. Float dalam Notasi Ilmiah (Scientific Notation)\n\n";

$largeNumber = 1.5e3; // 1.5 x 10^3 = 1500
$smallNumber = 5e-2;  // 5 x 10^-2 = 0.05

echo "Nilai besar (1.5e3): $largeNumber\n";
echo "Nilai kecil (5e-2): $smallNumber\n\n";

/*
4. Float dalam Struktur Kendali
*/

echo "4. Float dalam Struktur Kendali\n\n";

$height = 1.75;

if ($height > 1.5) {
    echo "Tinggi lebih dari 1.5 meter\n";
} else {
    echo "Tinggi kurang dari atau sama dengan 1.5 meter\n";
}

echo "\n";

/*
5. Konversi Tipe Lain ke Float
*/

echo "5. Konversi Tipe Lain ke Float\n\n";

$stringValue = "3.14159";
$intValue = 7;
$booleanValue = true;

$floatFromString = (float)$stringValue;
$floatFromInt = (float)$intValue;
$floatFromBoolean = (float)$booleanValue;

echo "Konversi dari string '3.14159' ke float: $floatFromString\n";
echo "Konversi dari integer 7 ke float: $floatFromInt\n";
echo "Konversi dari boolean true ke float: $floatFromBoolean\n";
