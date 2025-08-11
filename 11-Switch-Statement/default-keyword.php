<?php

/*
PHP default Keyword
Digunakan untuk:
- switch statement, menangani kondisi yang tidak cocok dengan case manapun.
- Memberikan fallback agar program tetap berjalan dengan benar.
*/

echo "-------------------- PHP default Keyword --------------------\n\n";

/*
1. Default pada switch sederhana
   - Memberikan pesan jika pilihan tidak tersedia.
*/
$day = "Monday";
switch ($day) {
    case "Friday":
        echo "1. Today is Friday. Weekend is near!\n";
        break;
    case "Saturday":
    case "Sunday":
        echo "1. It's the weekend!\n";
        break;
    default:
        echo "1. It's a weekday.\n"; // Output: It's a weekday.
}

echo "\n";

/*
2. Default pada switch dengan data user role
   - Memberikan akses sesuai role, default untuk role yang tidak dikenal.
*/
$userRole = "guest";
switch ($userRole) {
    case "admin":
        echo "2. Welcome Admin. You have full access.\n";
        break;
    case "editor":
        echo "2. Welcome Editor. You can edit content.\n";
        break;
    case "customer":
        echo "2. Welcome Customer. You can view products.\n";
        break;
    default:
        echo "2. Access denied. Unknown role.\n"; // Output: Access denied. Unknown role.
}

echo "\n";

/*
3. Default pada switch dengan kategori produk
   - Relevan untuk e-commerce.
*/
$productCategory = "Furniture";
switch ($productCategory) {
    case "Electronics":
        echo "3. Showing all electronics.\n";
        break;
    case "Fashion":
        echo "3. Showing all fashion items.\n";
        break;
    case "Books":
        echo "3. Showing all books.\n";
        break;
    default:
        echo "3. Category not found. Showing featured products.\n";
        // Output: Category not found. Showing featured products.
}

echo "\n";

/*
4. Default pada switch dengan bahasa situs
   - Relevan untuk multi-language website.
*/
$language = "Spanish";
switch ($language) {
    case "English":
        echo "4. Welcome to our website!\n";
        break;
    case "Indonesian":
        echo "4. Selamat datang di situs kami!\n";
        break;
    case "French":
        echo "4. Bienvenue sur notre site!\n";
        break;
    default:
        echo "4. Language not supported. Showing in English.\n";
        // Output: Language not supported. Showing in English.
}

echo "\n";

/*
5. Default pada switch dengan status pesanan
   - Relevan untuk backend e-commerce.
*/
$orderStatus = "processing";
switch ($orderStatus) {
    case "pending":
        echo "5. Your order is being processed.\n";
        break;
    case "shipped":
        echo "5. Your order is on the way.\n";
        break;
    case "delivered":
        echo "5. Your order has been delivered.\n";
        break;
    default:
        echo "5. Unknown status. Please contact support.\n";
        // Output: Unknown status. Please contact support.
}

echo "\n";

/*
6. Default pada switch nested (switch di dalam switch)
   - Mengelola role dan action sekaligus.
*/
$userRole = "editor";
$action = "delete";
switch ($userRole) {
    case "admin":
        echo "6. Admin access granted.\n";
        break;
    case "editor":
        switch ($action) {
            case "edit":
                echo "6. Editor can edit content.\n";
                break;
            case "view":
                echo "6. Editor can view content.\n";
                break;
            default:
                echo "6. Action not allowed for editor.\n";
                // Output: Action not allowed for editor.
        }
        break;
    default:
        echo "6. Role not recognized.\n";
}
