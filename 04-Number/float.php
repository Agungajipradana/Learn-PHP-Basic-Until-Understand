<?php

/*
Tipe data float digunakan untuk menyimpan bilangan desimal atau pecahan.
Dalam pengembangan web, float sering digunakan untuk nilai seperti harga, rating, berat, dan diskon.
*/

echo "--------------------------------------------------- Float in PHP ---------------------------------------------------\n\n";

/*
1. Menyimpan nilai desimal sederhana
   - Digunakan untuk nilai harga, suhu, berat, dan lain-lain.
*/

echo "1. Basic Float Variable\n\n";

$price = 49.99;
echo "Product Price: \$$price\n\n";

/*
2. Operasi aritmatika dengan float
   - Penjumlahan, pengurangan, perkalian, pembagian dengan angka desimal.
*/

echo "2. Float Arithmetic\n\n";

$length = 12.5;
$width = 7.25;
$area = $length * $width;

echo "Area of Rectangle: $area\n\n";

/*
3. Format angka float dengan number_format()
   - Digunakan untuk menampilkan nilai uang atau angka dengan jumlah desimal tertentu.
*/

echo "3. Format Float Output\n\n";

$total = 123456.789;
echo "Formatted: " . number_format($total, 2, '.', ',') . "\n\n"; // Output: 123,456.79

/*
4. Memeriksa apakah nilai adalah float
   - Berguna untuk validasi data dari form atau API.
*/

echo "4. Float Type Check\n\n";

$rating = 4.5;
if (is_float($rating)) {
    echo "Rating is a float value.\n";
}
echo "\n";

/*
5. Operasi diskon harga (contoh praktis dalam toko online)
   - Digunakan untuk menghitung harga setelah diskon dalam e-commerce.
*/

echo "5. Discount Calculation\n\n";

$originalPrice = 150.00;
$discount = 15.0; // 15 percent
$finalPrice = $originalPrice - ($originalPrice * ($discount / 100));

echo "Original: \$$originalPrice\n";
echo "Discount: $discount%\n";
echo "Final Price: \$$finalPrice\n\n";

/*
6. Perbandingan float dengan toleransi (precision problem)
   - Untuk membandingkan dua angka float dengan toleransi error.
*/

echo "6. Float Comparison with Tolerance\n\n";

$a = 0.1 + 0.2;
$b = 0.3;

if (abs($a - $b) < 0.00001) {
    echo "Values are approximately equal.\n";
} else {
    echo "Values are NOT equal.\n";
}
echo "\n";

/*
7. Float dari input pengguna atau form
   - Menangani input harga, rating, atau persen sebagai string dan konversi ke float.
*/

echo "7. User Input as Float\n\n";

$input = "89.75";
$score = (float) $input;

echo "User Input Score: $score\n";
echo "Type: " . gettype($score) . "\n\n";

/*
8. Float dalam penghitungan pajak
   - Digunakan dalam fitur checkout untuk menghitung PPN atau biaya layanan.
*/

echo "8. Tax Calculation\n\n";

$subtotal = 500.00;
$taxRate = 10; // percent
$tax = $subtotal * ($taxRate / 100);
$grandTotal = $subtotal + $tax;

echo "Subtotal: \$$subtotal\n";
echo "Tax (10%): \$$tax\n";
echo "Grand Total: \$$grandTotal\n\n";
