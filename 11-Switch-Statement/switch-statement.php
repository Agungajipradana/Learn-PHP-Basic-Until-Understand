<?php

/*
PHP switch Statement
Digunakan untuk:
- Mengeksekusi salah satu blok kode dari banyak kemungkinan berdasarkan nilai variabel.
- Cocok untuk memeriksa nilai yang pasti dan terbatas (misalnya status, tipe, kategori).
- Lebih rapi daripada if...elseif jika memeriksa banyak kondisi nilai tunggal.
*/

echo "-------------------- PHP switch Statement --------------------\n\n";

/*
1. Menentukan role user
   - Digunakan untuk sistem manajemen akses.
*/
$role = "admin"; // Role milik Michael
switch ($role) {
    case "admin":
        echo "1. Access granted: Full permissions.\n"; // Output: Access granted: Full permissions.
        break;
    case "editor":
        echo "1. Access granted: Edit permissions.\n";
        break;
    case "viewer":
        echo "1. Access granted: View only.\n";
        break;
    default:
        echo "1. Access denied.\n";
}

echo "\n";

/*
2. Menentukan bahasa tampilan
   - Relevan untuk fitur multi-language.
*/
$language = "en"; // Bahasa milik Sarah
switch ($language) {
    case "en":
        echo "2. Welcome to our website!\n"; // Output: Welcome to our website!
        break;
    case "es":
        echo "2. ¡Bienvenido a nuestro sitio web!\n";
        break;
    case "fr":
        echo "2. Bienvenue sur notre site Web!\n";
        break;
    default:
        echo "2. Language not supported.\n";
}

echo "\n";

/*
3. Menentukan metode pembayaran
   - Digunakan di halaman checkout.
*/
$paymentMethod = "paypal"; // Metode pembayaran milik David
switch ($paymentMethod) {
    case "credit_card":
        echo "3. Processing payment via Credit Card.\n";
        break;
    case "paypal":
        echo "3. Processing payment via PayPal.\n"; // Output: Processing payment via PayPal.
        break;
    case "bank_transfer":
        echo "3. Processing payment via Bank Transfer.\n";
        break;
    default:
        echo "3. Unknown payment method.\n";
}

echo "\n";

/*
4. Menentukan jenis file upload
   - Digunakan di fitur upload file.
*/
$fileType = "jpg"; // Tipe file upload milik Emma
switch ($fileType) {
    case "jpg":
    case "jpeg":
        echo "4. Image file detected: JPG format.\n"; // Output: Image file detected: JPG format.
        break;
    case "png":
        echo "4. Image file detected: PNG format.\n";
        break;
    case "pdf":
        echo "4. Document file detected: PDF format.\n";
        break;
    default:
        echo "4. Unsupported file type.\n";
}

echo "\n";

/*
5. Menentukan status order
   - Digunakan di halaman tracking.
*/
$orderStatus = "shipped";
switch ($orderStatus) {
    case "pending":
        echo "5. Your order is pending confirmation.\n";
        break;
    case "processing":
        echo "5. Your order is being prepared.\n";
        break;
    case "shipped":
        echo "5. Your package is on the way.\n"; // Output: Your package is on the way.
        break;
    case "delivered":
        echo "5. Your package has been delivered.\n";
        break;
    default:
        echo "5. Unknown order status.\n";
}

echo "\n";

/*
6. Menentukan kategori harga produk
   - Relevan di e-commerce.
*/
$priceCategory = "mid"; // Kategori harga produk
switch ($priceCategory) {
    case "low":
        echo "6. This product is budget-friendly.\n";
        break;
    case "mid":
        echo "6. This product offers a good balance of price and quality.\n"; // Output
        break;
    case "high":
        echo "6. This product is premium quality.\n";
        break;
    default:
        echo "6. Price category not set.\n";
}

echo "\n";

/*
7. Menentukan zona waktu untuk salam
   - Digunakan untuk personalisasi user.
*/
$timezone = "evening"; // Zona waktu milik John
switch ($timezone) {
    case "morning":
        echo "7. Good morning, John!\n";
        break;
    case "afternoon":
        echo "7. Good afternoon, John!\n";
        break;
    case "evening":
        echo "7. Good evening, John!\n"; // Output: Good evening, John!
        break;
    case "night":
        echo "7. Good night, John!\n";
        break;
    default:
        echo "7. Hello, John!\n";
}

echo "\n";

/*
8. Menentukan level membership
   - Digunakan untuk program loyalitas.
*/
$membershipLevel = "silver";
switch ($membershipLevel) {
    case "bronze":
        echo "8. Membership Level: Bronze\n";
        break;
    case "silver":
        echo "8. Membership Level: Silver\n"; // Output: Membership Level: Silver
        break;
    case "gold":
        echo "8. Membership Level: Gold\n";
        break;
    case "platinum":
        echo "8. Membership Level: Platinum\n";
        break;
    default:
        echo "8. Unknown membership level.\n";
}

echo "\n";

/*
9. Menentukan status login
   - Digunakan di sistem autentikasi.
*/
$loginStatus = "locked";
switch ($loginStatus) {
    case "logged_in":
        echo "9. Welcome back, user!\n";
        break;
    case "logged_out":
        echo "9. Please log in to continue.\n";
        break;
    case "locked":
        echo "9. Your account is locked. Contact support.\n"; // Output
        break;
    default:
        echo "9. Login status unknown.\n";
}

echo "\n";

/*
10. Menentukan tema tampilan
    - Digunakan untuk preferensi UI.
*/
$theme = "dark";
switch ($theme) {
    case "light":
        echo "10. Light theme activated.\n";
        break;
    case "dark":
        echo "10. Dark theme activated.\n"; // Output: Dark theme activated.
        break;
    case "blue":
        echo "10. Blue theme activated.\n";
        break;
    default:
        echo "10. Unknown theme.\n";
}
