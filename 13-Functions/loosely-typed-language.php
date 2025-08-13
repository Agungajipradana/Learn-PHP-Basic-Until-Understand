<?php
/*
Loosely Typed Language dalam PHP artinya kita tidak perlu menentukan tipe data variabel secara eksplisit.
PHP secara otomatis menentukan tipe data berdasarkan nilai yang diberikan.
Hal ini memudahkan dalam pengembangan web karena kita bisa fleksibel menggunakan data.

Contoh di bawah disusun dari yang paling sederhana hingga lebih kompleks.
*/

echo "-------------------------------- Loosely Typed Language --------------------------------\n\n";

/*
1. Simple Variable Change
   Mengubah tipe data variabel dari string menjadi integer secara otomatis.
*/
$name = "John";
echo "User Name: $name\n"; // Output: User Name: John

$name = 25; // PHP otomatis mengubah tipe data menjadi integer
echo "User Age: $name\n"; // Output: User Age: 25

echo "\n";

/*
2. String to Number in Calculation
   Cocok untuk kasus input form yang berupa string, tetapi digunakan untuk perhitungan.
*/
$productPrice = "150"; // String
$tax = 10; // Integer

$totalPrice = $productPrice + $tax; // PHP otomatis mengkonversi string ke integer
echo "Total Price: $$totalPrice\n"; // Output: Total Price: $160

echo "\n";

/*
3. Boolean Auto Conversion
   Sering dipakai dalam kondisi login atau hak akses.
*/
$isLoggedIn = "1"; // String "1" dianggap true
if ($isLoggedIn) {
    echo "Access Granted\n"; // Output: Access Granted
}

$isLoggedIn = 0; // Integer 0 dianggap false
if (!$isLoggedIn) {
    echo "Access Denied\n"; // Output: Access Denied
}

echo "\n";

/*
4. Array and String Auto Conversion
   Menyimpan data user dalam bentuk array, lalu ubah jadi string untuk keperluan output.
*/
$userData = ["Alice", "Developer"];
echo "User Data (Array to String): " . implode(" - ", $userData) . "\n";
// Output: User Data (Array to String): Alice - Developer

echo "\n";

/*
5. Complex Web Example - User Cart Calculation
   Menggabungkan string, integer, dan float secara otomatis.
*/
$userName = "Michael";
$item1 = "200"; // String
$item2 = 150;   // Integer
$shippingCost = 20.5; // Float

$totalCart = $item1 + $item2 + $shippingCost; // PHP auto converts
echo "Hello $userName, your total cart value is: $$totalCart\n";
// Output: Hello Michael, your total cart value is: $370.5

echo "\n";

/*
6. Form Input Simulation
   Input dari form HTML biasanya bertipe string, tapi PHP bisa langsung memprosesnya sesuai kebutuhan.
*/
$formQuantity = "3"; // String
$formPricePerItem = "99.99"; // String

$totalPayment = $formQuantity * $formPricePerItem; // Auto convert to float
echo "Total Payment: $$totalPayment\n"; 
// Output: Total Payment: $299.97
