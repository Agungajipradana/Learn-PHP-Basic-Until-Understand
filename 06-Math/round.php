<?php

/*
PHP round() Function
Fungsi round() digunakan untuk membulatkan angka desimal ke bilangan bulat terdekat.
Sangat berguna dalam pengembangan web, seperti pembulatan harga, rating, diskon, dan data keuangan.
*/

echo "------------------------------ PHP round() Function ------------------------------\n\n";

/*
1. Membulatkan angka desimal biasa
   - Contoh paling dasar dari fungsi round().
*/

echo "1. Membulatkan 4.3:\n";
echo round(4.3) . "\n\n"; // Output: 4

/*
2. Membulatkan angka mendekati atas
   - Jika nilai di belakang koma >= 0.5 maka akan dibulatkan ke atas.
*/

echo "2. Membulatkan 7.6:\n";
echo round(7.6) . "\n\n"; // Output: 8

/*
3. Membulatkan angka mendekati bawah
   - Jika nilai di belakang koma < 0.5 maka akan dibulatkan ke bawah.
*/

echo "3. Membulatkan 9.2:\n";
echo round(9.2) . "\n\n"; // Output: 9

/*
4. Membulatkan ke jumlah desimal tertentu
   - Cocok untuk pembulatan harga atau hasil kalkulasi dalam format uang.
*/

$price = 15.6789;
echo "4. Membulatkan harga $price menjadi 2 angka desimal:\n";
echo "$" . round($price, 2) . "\n\n"; // Output: $15.68

/*
5. Pembulatan negatif ke nilai terdekat
   - Menunjukkan bahwa round() bekerja juga pada angka negatif.
*/

echo "5. Membulatkan -3.7:\n";
echo round(-3.7) . "\n\n"; // Output: -4

/*
6. Membulatkan hasil diskon dinamis
   - Sering digunakan dalam sistem e-commerce atau potongan harga promo.
*/

$originalPrice = 120;
$discountPercentage = 15;
$discount = ($discountPercentage / 100) * $originalPrice;
$finalPrice = $originalPrice - $discount;

echo "6. Harga setelah diskon (dibulatkan):\n";
echo "$" . round($finalPrice) . "\n\n"; // Output: $102

/*
7. Menampilkan skor review pengguna dibulatkan
   - Relevan untuk sistem rating pengguna, review hotel, aplikasi, dll.
*/

$ratings = [4.4, 4.6, 4.8, 5, 3.9];
$averageRating = array_sum($ratings) / count($ratings);

echo "7. Rata-rata rating pengguna (dibulatkan):\n";
echo round($averageRating, 1) . " stars\n\n"; // Output: 4.5 stars
