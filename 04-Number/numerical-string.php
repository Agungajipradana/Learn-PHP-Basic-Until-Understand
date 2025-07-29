<?php

/*
Numerical strings adalah string di PHP yang berisi angka dan dapat diperlakukan sebagai angka dalam operasi aritmatika.
PHP secara otomatis mengkonversi string angka menjadi integer atau float jika digunakan dalam konteks numerik.
*/

echo "--------------------------------------------------- Numerical Strings in PHP ---------------------------------------------------\n\n";

/*
1. Penambahan angka dan string numerik
   - PHP secara otomatis mengubah string menjadi angka.
*/

echo "1. Basic Numerical String Addition\n\n";

$price = "100";  // string
$tax = 10;       // integer
$total = $price + $tax;

echo "Total Price: $total\n\n"; // Output: 110

/*
2. Perhitungan dari string input form
   - Relevan saat pengguna memasukkan angka sebagai string.
*/

echo "2. Form Input as Number\n\n";

$userInput = "200";
$shippingCost = 25;
$finalCost = $userInput + $shippingCost;

echo "Final Cost: $finalCost\n\n"; // Output: 225

/*
3. Cek apakah string valid sebagai angka menggunakan is_numeric()
   - Penting saat memproses input user atau data dari API.
*/

echo "3. is_numeric() Check\n\n";

$input1 = "500";
$input2 = "abc123";

echo "Input1 is numeric? " . (is_numeric($input1) ? "Yes" : "No") . "\n";
echo "Input2 is numeric? " . (is_numeric($input2) ? "Yes" : "No") . "\n\n";

/*
4. Operasi float dengan string numerik
   - Cocok untuk hitung diskon atau persentase berbasis input string.
*/

echo "4. Discount Calculation from String\n\n";

$price = "350.00";
$discountPercent = "15";
$discountAmount = $price * ($discountPercent / 100);
$finalPrice = $price - $discountAmount;

echo "Final Price after discount: $finalPrice\n\n"; // Output: 297.5

/*
5. String numerik dengan teks tambahan (parsial numerik)
   - PHP hanya akan mengambil angka dari awal string.
*/

echo "5. Partial Numeric String\n\n";

$value = "1000USD";
$result = $value + 50;

echo "Parsed Value: $result\n"; // Output: 1050
echo "(Teks setelah angka diabaikan)\n\n";

/*
6. Konversi string numerik secara eksplisit (casting)
   - Berguna saat ingin memastikan tipe data.
*/

echo "6. Explicit Casting\n\n";

$input = "99.99";
$asFloat = (float) $input;
$asInt = (int) $input;

echo "As Float: $asFloat\n"; // Output: 99.99
echo "As Integer: $asInt\n\n"; // Output: 99

/*
7. Penanganan data numerik dari API (biasanya string)
   - Relevan dalam integrasi layanan pihak ketiga.
*/

echo "7. API Data as Numeric\n\n";

$apiResponse = [
    "price" => "150.00",
    "discount" => "10"
];

if (is_numeric($apiResponse["price"]) && is_numeric($apiResponse["discount"])) {
    $discount = $apiResponse["price"] * ($apiResponse["discount"] / 100);
    $total = $apiResponse["price"] - $discount;
    echo "Total after API discount: $total\n";
} else {
    echo "Invalid API values.\n";
}

echo "\n";

/*
8. Validasi ketat input numerik dari user (bukan float, bukan int, hanya angka saja)
   - Berguna saat hanya ingin angka murni (tanpa huruf/karakter lain).
*/

echo "8. Strict Numeric Validation\n\n";

function isStrictNumeric($value)
{
    return preg_match('/^\d+(\.\d+)?$/', $value);
}

$testValue = "123.45";
echo "Is '$testValue' strictly numeric? " . (isStrictNumeric($testValue) ? "Yes" : "No") . "\n\n";
