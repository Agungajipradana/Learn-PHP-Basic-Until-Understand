<?php

/*
PHP if...elseif...else Statement
Digunakan untuk:
- Mengeksekusi salah satu dari beberapa blok kode berdasarkan beberapa kondisi
- Validasi berlapis pada input/form
- Menentukan kategori atau status berdasarkan nilai tertentu
*/

echo "-------------------- PHP if...elseif...else Statement --------------------\n\n";

/*
1. Menentukan kategori umur user
   - Relevan untuk pembatasan konten berdasarkan umur.
*/
$age = 15; // Usia milik Michael
if ($age >= 60) {
    echo "1. You are categorized as Senior.\n";
} elseif ($age >= 18) {
    echo "1. You are categorized as Adult.\n";
} else {
    echo "1. You are categorized as Minor.\n"; // Output: You are categorized as Minor.
}

echo "\n";

/*
2. Menentukan status nilai ujian
   - Digunakan di sistem e-learning.
*/
$score = 82; // Nilai ujian Sarah
if ($score >= 90) {
    echo "2. Grade: A\n";
} elseif ($score >= 75) {
    echo "2. Grade: B\n"; // Output: Grade: B
} elseif ($score >= 60) {
    echo "2. Grade: C\n";
} else {
    echo "2. Grade: D\n";
}

echo "\n";

/*
3. Menentukan level keanggotaan
   - Digunakan untuk fitur membership.
*/
$membershipPoints = 450; // Poin milik David
if ($membershipPoints >= 1000) {
    echo "3. Membership Level: Platinum\n";
} elseif ($membershipPoints >= 500) {
    echo "3. Membership Level: Gold\n";
} elseif ($membershipPoints >= 200) {
    echo "3. Membership Level: Silver\n"; // Output: Membership Level: Silver
} else {
    echo "3. Membership Level: Bronze\n";
}

echo "\n";

/*
4. Menentukan diskon berdasarkan total belanja
   - Relevan untuk promo e-commerce.
*/
$totalPurchase = 300; // Total belanja milik Emma
if ($totalPurchase >= 500) {
    echo "4. Discount: 20%\n";
} elseif ($totalPurchase >= 300) {
    echo "4. Discount: 10%\n"; // Output: Discount: 10%
} elseif ($totalPurchase >= 100) {
    echo "4. Discount: 5%\n";
} else {
    echo "4. No discount.\n";
}

echo "\n";

/*
5. Menentukan status koneksi user
   - Digunakan di aplikasi real-time.
*/
$ping = 250; // Ping dalam milidetik
if ($ping < 100) {
    echo "5. Connection Status: Excellent\n";
} elseif ($ping < 200) {
    echo "5. Connection Status: Good\n";
} elseif ($ping < 300) {
    echo "5. Connection Status: Fair\n"; // Output: Connection Status: Fair
} else {
    echo "5. Connection Status: Poor\n";
}

echo "\n";

/*
6. Menentukan pesan selamat berdasarkan waktu
   - Digunakan untuk personalisasi user experience.
*/
$currentHour = date("H"); // Jam saat ini
if ($currentHour >= 5 && $currentHour < 12) {
    echo "6. Good morning, John!\n";
} elseif ($currentHour >= 12 && $currentHour < 17) {
    echo "6. Good afternoon, John!\n";
} elseif ($currentHour >= 17 && $currentHour < 21) {
    echo "6. Good evening, John!\n";
} else {
    echo "6. Good night, John!\n";
}

echo "\n";

/*
7. Menentukan status ketersediaan produk & stok
   - Relevan di halaman produk e-commerce.
*/
$productStock = 8; // Stok produk milik Sarah
if ($productStock >= 20) {
    echo "7. Status: In Stock (Plenty)\n";
} elseif ($productStock >= 10) {
    echo "7. Status: In Stock (Limited)\n";
} elseif ($productStock > 0) {
    echo "7. Status: Low Stock\n"; // Output: Low Stock
} else {
    echo "7. Status: Out of Stock\n";
}

echo "\n";

/*
8. Menentukan kategori pelanggan berdasarkan pembelian tahunan
   - Digunakan untuk segmentasi pelanggan.
*/
$annualSpending = 1200; // Total pembelian tahunan milik David
if ($annualSpending >= 5000) {
    echo "8. Customer Category: VIP\n";
} elseif ($annualSpending >= 2000) {
    echo "8. Customer Category: Premium\n";
} elseif ($annualSpending >= 1000) {
    echo "8. Customer Category: Regular\n"; // Output: Customer Category: Regular
} else {
    echo "8. Customer Category: New\n";
}

echo "\n";

/*
9. Menentukan status pengiriman
   - Relevan untuk tracking paket.
*/
$deliveryStatus = "shipped";
if ($deliveryStatus == "delivered") {
    echo "9. Your package has been delivered.\n";
} elseif ($deliveryStatus == "shipped") {
    echo "9. Your package is on the way.\n"; // Output: Your package is on the way.
} elseif ($deliveryStatus == "processing") {
    echo "9. Your order is being prepared.\n";
} else {
    echo "9. Order status unknown.\n";
}

echo "\n";

/*
10. Menentukan status pembayaran
    - Digunakan untuk checkout dan invoice.
*/
$paymentStatus = "pending"; // Status pembayaran
if ($paymentStatus == "paid") {
    echo "10. Payment completed successfully.\n";
} elseif ($paymentStatus == "pending") {
    echo "10. Payment is pending.\n"; // Output: Payment is pending.
} elseif ($paymentStatus == "failed") {
    echo "10. Payment failed. Please try again.\n";
} else {
    echo "10. Unknown payment status.\n";
}
