<?php

/*
Casting di PHP digunakan untuk mengubah tipe data secara eksplisit.
Dalam konteks ini, kita akan fokus pada konversi string dan float ke integer.
Ini penting untuk menangani input dari form, API, atau hasil perhitungan numerik.
*/

echo "---------------------------------- Casting Strings and Floats to Integers ----------------------------------\n\n";

/*
1. Casting string numerik sederhana ke integer
   - Cocok saat mendapatkan input angka dari form dalam bentuk string.
*/

echo "1. Casting String to Integer\n\n";

$input = "150";
$intValue = (int) $input;
echo "Result: $intValue\n\n"; // Output: 150

/*
2. Casting float ke integer (membuang angka di belakang koma)
   - Digunakan saat ingin membulatkan ke bawah (floor-like behavior).
*/

echo "2. Casting Float to Integer\n\n";

$price = 89.99;
$rounded = (int) $price;
echo "Rounded Down: $rounded\n\n"; // Output: 89

/*
3. Casting string float ke integer
   - Kombinasi dua konversi: string → float → integer.
*/

echo "3. Casting String Float to Integer\n\n";

$value = "123.45";
$asInt = (int) $value;
echo "Converted: $asInt\n\n"; // Output: 123

/*
4. String dengan teks campuran (parsial angka)
   - PHP hanya mengambil bagian numerik awal sebelum karakter non-numeric.
*/

echo "4. Partial Numeric String\n\n";

$input = "99abc";
$number = (int) $input;
echo "Parsed as Integer: $number\n\n"; // Output: 99

/*
5. Casting negatif dan nol
   - Termasuk bagian penting untuk logika harga diskon atau kredit.
*/

echo "5. Casting Negative and Zero\n\n";

$negative = (int) "-50.75";
$zero = (int) "0.0";

echo "Negative as Int: $negative\n"; // Output: -50
echo "Zero as Int: $zero\n\n";       // Output: 0

/*
6. Validasi sebelum casting
   - Penting agar tidak meng-cast string tidak valid seperti "abc", yang hasilnya 0.
*/

echo "6. Validate Before Casting\n\n";

$userInput = "abc";

if (is_numeric($userInput)) {
    $converted = (int) $userInput;
    echo "Valid number: $converted\n";
} else {
    echo "Invalid numeric input: $userInput\n";
}
echo "\n";

/*
7. Penggunaan casting dalam pemrosesan input API
   - Data dari API seringkali berupa string, meskipun bertipe angka.
*/

echo "7. Casting API Response\n\n";

$apiResponse = [
    "views" => "10000",
    "rating" => "4.9"
];

$views = (int) $apiResponse["views"];
$rating = (int) $apiResponse["rating"]; // Note: desimal akan dibuang

echo "Views (int): $views\n";    // Output: 10000
echo "Rating (int): $rating\n\n"; // Output: 4

/*
8. Menghindari kesalahan casting dalam sistem validasi
   - Cocok untuk memastikan bahwa nilai hanya angka murni sebelum proses penting.
*/

echo "8. Strict Numeric Validation Before Casting\n\n";

function castIfValid($value)
{
    if (preg_match('/^-?\d+(\.\d+)?$/', $value)) {
        return (int) $value;
    }
    return "Invalid input: $value";
}

echo castIfValid("45.67") . "\n"; // Output: 45
echo castIfValid("hello") . "\n"; // Output: Invalid input: hello
echo "\n";
