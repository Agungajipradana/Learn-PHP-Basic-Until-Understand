<?php

/*
Apa itu Number dalam PHP?

Number adalah salah satu tipe data di PHP yang digunakan untuk merepresentasikan nilai numerik. Tipe data ini mencakup bilangan bulat (integer), bilangan desimal (floating point), dan bilangan khusus seperti bilangan besar atau kecil yang menggunakan notasi ilmiah (scientific notation).
*/

echo "------------------------------------------- Jenis Number di PHP --------------------------------------" . "\n\n";

/*
1. Integer

    - Bilangan bulat tanpa koma desimal.
    - Bisa positif atau negatif.
    - Range integer pada sistem 64-bit: -2,147,483,648 hingga 2,147,483,647.
    - Basis bilangan yang didukung:
        - Decimal (basis 10)
        - Octal (basis 8, diawali dengan 0)
        - Hexadecimal (basis 16, diawali dengan 0x)
        - Binary (basis 2, diawali dengan 0b).
*/

echo "1. Integer: Bilangan bulat tanpa koma desimal." . "\n\n";

echo "Bilangan Decimal: " . $decimal = 1234 . "\n\n"; // 1234

echo "Bilangan Octal: " . $octal = 01234 . "\n\n";  // Octal (ini sama dengan 668 dalam decimal)

echo "Bilangan Octal: " . $hexadecimal = 0x1A . "\n\n"; // Hexadecimal (ini sama dengan 26 dalam decimal)

echo "Bilangan Octal: " . $binary = 0b1111 . "\n\n"; // Binary (ini sama dengan 15 dalam decimal)

/*
2. Floating Point

    - Bilangan desimal dengan koma atau bilangan berbasis notasi ilmiah.
    - Mendukung angka dengan presisi lebih tinggi dibanding integer.
    - Bisa positif atau negatif.
*/

echo "2. Floating Point: Bilangan desimal dengan koma atau bilangan berbasis notasi ilmiah." . "\n\n";

echo "Floating point biasa: " . $float1 = 3.14 . "\n\n"; // Floating point biasa


echo "Notasi ilmiah: 1.2 x 10^3: " . $float2 = 1.2e3 . "\n\n"; // Notasi ilmiah: 1.2 x 10^3 (hasilnya 1200)


echo "Notasi ilmiah: 7 x 10^-3: " . $float3 = 7E-3 . "\n\n"; // Notasi ilmiah: 7 x 10^-3 (hasilnya 0.007)


/*
3. Arithmetic Operations

    - Operasi matematika pada bilangan seperti penjumlahan, pengurangan, perkalian, pembagian, dan modulus.
    - PHP juga mendukung operator bitwise untuk bilangan bulat.
*/

echo "3. Arithmetic Operations: Operasi matematika pada bilangan seperti penjumlahan, pengurangan, perkalian, pembagian, dan modulus." . "\n\n";

echo "------------------------------------------- Operasi Dasar dengan Number --------------------------------------" . "\n\n";

/*
    3.1 Penjumlahan (+)
*/

echo "3.1 Penjumlahan (+)" . "\n\n";

$a = 5;
$b = 10;
echo "\$a + \$b: " . $a + $b . "\n\n"; // Output: 15

/*
    3.2 Pengurangan (-)
*/

echo "3.2 Pengurangan (-)" . "\n\n";

$a = 20;
$b = 8;
echo "\$a - \$b: " . $a - $b . "\n\n";// Output: 12

/*
    3.3 Perkalian (*)
*/

echo "3.3 Perkalian (*)" . "\n\n";

$a = 4;
$b = 5;
echo "\$a * \$b: " . $a * $b . "\n\n"; // Output: 20

/*
    3.4 Pembagian (/)
*/

echo "3.4 Pembagian (/)" . "\n\n";

$a = 20;
$b = 4;
echo "\$a / \$b: " . $a / $b . "\n\n"; // Output: 5

/*
    3.5 Modulus (%)
        - Menghasilkan sisa pembagian.
*/

echo "3.5 Modulus (%) : Menghasilkan sisa pembagian." . "\n\n";

$a = 7;
$b = 3;
echo "\$a % \$b: " . $a % $b . "\n\n"; // Output: 1

/*
    3.6 Eksponen ()**
*/

echo "3.6 Eksponen ()**" . "\n\n";

$a = 3;
$b = 2;
echo "\$a ** \$b: " . $a ** $b . "\n\n"; // Output: 9 (3 pangkat 2)
