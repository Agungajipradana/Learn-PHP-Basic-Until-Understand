<?php

/*
PHP floor() dan ceil() Functions
Digunakan untuk melakukan pembulatan angka desimal.
- floor() membulatkan ke bawah (nilai terkecil).
- ceil() membulatkan ke atas (nilai terbesar berikutnya).
Keduanya sangat berguna dalam aplikasi web seperti perhitungan harga, diskon, dan pagination.
*/

echo "------------------------------ PHP floor() dan ceil() Functions ------------------------------\n\n";

/*
1. floor() pada angka desimal positif
   - Cocok untuk perhitungan harga minimal.
*/

$price = 15.75;

echo "1. floor() dari $price:\n";
echo floor($price) . "\n\n"; // Output: 15

/*
2. ceil() pada angka desimal positif
   - Cocok untuk pembulatan ke atas seperti ongkos kirim minimum.
*/

$shippingCost = 12.25;

echo "2. ceil() dari $shippingCost:\n";
echo ceil($shippingCost) . "\n\n"; // Output: 13

/*
3. floor() pada angka desimal negatif
   - Digunakan saat ingin menurunkan nilai negatif.
*/

$loss = -7.4;

echo "3. floor() dari $loss:\n";
echo floor($loss) . "\n\n"; // Output: -8

/*
4. ceil() pada angka desimal negatif
   - Cocok untuk memperkecil pengurangan atau kerugian.
*/

$debt = -5.8;

echo "4. ceil() dari $debt:\n";
echo ceil($debt) . "\n\n"; // Output: -5

/*
5. Pembulatan diskon dinamis
   - Relevan dalam e-commerce ketika menampilkan nilai diskon dibulatkan.
*/

$originalPrice = 200;
$discount = 12.6;

$priceAfterDiscount = $originalPrice - $discount;

echo "5. Harga setelah diskon dibulatkan (floor):\n";
echo floor($priceAfterDiscount) . "\n\n"; // Output: 187

/*
6. Pembulatan jumlah halaman pagination
   - Berguna untuk menentukan jumlah halaman saat menampilkan data.
*/

$totalItems = 47;
$itemsPerPage = 10;

$totalPages = ceil($totalItems / $itemsPerPage);

echo "6. Total halaman (dengan ceil):\n";
echo $totalPages . " pages\n\n"; // Output: 5 pages

/*
7. Kombinasi floor() dan ceil() untuk interval harga
   - Berguna dalam filter harga produk (range slider).
*/

$minPrice = 19.99;
$maxPrice = 104.75;

echo "7. Range harga (dibulatkan):\n";
echo "Mulai dari $" . floor($minPrice) . " hingga $" . ceil($maxPrice) . "\n\n"; // Output: $19 - $105
