<?php

/*
Integer adalah salah satu tipe data skalar (sederhana) dalam PHP yang digunakan untuk menyimpan bilangan bulat, baik positif maupun negatif, tanpa bagian desimal.

Contoh nilai integer: 1, -20, 0, 999, -1000

Integer sering digunakan untuk operasi aritmatika, penghitungan, pengulangan (loop), dan kondisi dalam program.

Ciri-ciri Tipe Data Integer:
    1. Bilangan Bulat: Tidak memiliki bagian desimal.
    2. Basis Angka: Bisa dalam bentuk desimal (basis 10), oktal (basis 8, dengan awalan 0), heksadesimal (basis 16, dengan awalan 0x), atau biner (basis 2, dengan awalan 0b).
    3. Rentang Nilai: Tergantung sistem (umumnya -2,147,483,648 sampai 2,147,483,647 di sistem 32-bit).
    4. Tidak menggunakan tanda kutip (berbeda dengan string).
*/

echo "------------------------------------------- Contoh Penggunaan Integer --------------------------------------" . "\n\n";

/*
1. Mendefinisikan Integer secara Eksplisit
*/

echo "1. Mendefinisikan Integer secara Eksplisit" . "\n\n";

$numberOne = 42;
$numberTwo = -100;
$numberZero = 0;

echo "Nilai \$numberOne: $numberOne\n";
echo "Nilai \$numberTwo: $numberTwo\n";
echo "Nilai \$numberZero: $numberZero\n\n";

/*
2. Operasi Aritmatika dengan Integer
*/

echo "2. Operasi Aritmatika dengan Integer" . "\n\n";

$valueA = 10;
$valueB = 3;

$addition = $valueA + $valueB;
$subtraction = $valueA - $valueB;
$multiplication = $valueA * $valueB;
$division = $valueA / $valueB;
$modulus = $valueA % $valueB;

echo "Penjumlahan (\$valueA + \$valueB): $addition\n";
echo "Pengurangan (\$valueA - \$valueB): $subtraction\n";
echo "Perkalian (\$valueA * \$valueB): $multiplication\n";
echo "Pembagian (\$valueA / \$valueB): $division\n";
echo "Modulus (\$valueA % \$valueB): $modulus\n\n";

/*
3. Format Penulisan Integer Lainnya
*/

echo "3. Format Penulisan Integer Lainnya" . "\n\n";

$decimal = 255;
$octal = 0377;            // Oktal (basis 8)
$hexadecimal = 0xFF;      // Heksadesimal (basis 16)
$binary = 0b11111111;     // Biner (basis 2)

echo "Desimal: $decimal\n";
echo "Oktal (0377): $octal\n";
echo "Hexadecimal (0xFF): $hexadecimal\n";
echo "Binary (0b11111111): $binary\n\n";

/*
4. Integer dalam Struktur Kendali
*/

echo "4. Integer dalam Struktur Kendali" . "\n\n";

$itemCount = 5;

if ($itemCount > 0) {
    echo "Jumlah item lebih besar dari 0\n";
} else {
    echo "Jumlah item tidak lebih besar dari 0\n";
}

echo "\n";

/*
5. Konversi Tipe Lain ke Integer
*/

echo "5. Konversi Tipe Lain ke Integer\n\n";

$stringValue = "123abc";
$floatValue = 9.99;
$booleanValue = true;

$intFromString = (int)$stringValue;
$intFromFloat = (int)$floatValue;
$intFromBoolean = (int)$booleanValue;

echo "Konversi dari string '123abc' ke integer: $intFromString\n";
echo "Konversi dari float 9.99 ke integer: $intFromFloat\n";
echo "Konversi dari boolean true ke integer: $intFromBoolean\n";
