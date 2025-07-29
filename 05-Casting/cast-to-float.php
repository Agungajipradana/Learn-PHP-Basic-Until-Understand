<?php

/*
(float) digunakan untuk mengonversi tipe data lain menjadi float (angka desimal).
Ini sangat penting dalam pengembangan web, terutama saat memproses harga, diskon, rating, atau data numerik dengan pecahan.
*/

echo "--------------------------- Cast to Float in PHP ---------------------------\n\n";

/*
1. Konversi integer ke float
   - Berguna ketika ingin memastikan hasil perhitungan menampilkan desimal.
*/

$quantity = 3;
$quantityFloat = (float) $quantity;

echo "1. Quantity (float): $quantityFloat\n"; // Output: 3


/*
2. Konversi string desimal ke float
   - Umum dalam input form (semua nilai form adalah string).
*/

$inputPrice = "19.99";
$price = (float) $inputPrice;

echo "2. Price from form: $price\n"; // Output: 19.99


/*
3. Konversi string integer ke float
   - Masih valid, hanya akan menjadi float secara eksplisit.
*/

$inputStock = "150";
$stockFloat = (float) $inputStock;

echo "3. Stock (float): $stockFloat\n"; // Output: 150


/*
4. Konversi boolean ke float
   - true → 1.0, false → 0.0
   - Bisa digunakan untuk logika perhitungan poin, status aktif, dll.
*/

$isSubscribed = true;
$value = (float) $isSubscribed;

echo "4. Subscribed value: $value\n"; // Output: 1


/*
5. Konversi string campuran ke float
   - Bagian awal angka akan dikonversi, sisanya diabaikan.
*/

$input = "75.5kg";
$weight = (float) $input;

echo "5. Weight from input: $weight\n"; // Output: 75.5


/*
6. Konversi string non-numerik ke float
   - Akan menghasilkan 0.0
*/

$invalidInput = "hello";
$floatValue = (float) $invalidInput;

echo "6. Invalid input: $floatValue\n"; // Output: 0


/*
7. Konversi NULL ke float
   - NULL menjadi 0.0
*/

$rating = null;
$ratingFloat = (float) $rating;

echo "7. Rating (null): $ratingFloat\n"; // Output: 0


/*
8. Konversi dari hasil perhitungan integer
   - Jika dua angka dibagi dan hasilnya perlu ditampilkan sebagai float.
*/

$total = 45;
$items = 4;
$average = (float) ($total / $items);

echo "8. Average per item: $average\n"; // Output: 11.25


/*
9. Konversi data dari API JSON
   - API kadang mengembalikan nilai numerik sebagai string.
*/

$response = '{"tax": "0.075"}';
$data = json_decode($response, true);
$taxRate = (float) $data["tax"];

echo "9. Tax rate from API: $taxRate\n"; // Output: 0.075


/*
10. Konversi hasil input kosong ke float
   - String kosong akan menjadi 0.0
*/

$formInput = "";
$floatInput = (float) $formInput;

echo "10. Empty form input: $floatInput\n"; // Output: 0
