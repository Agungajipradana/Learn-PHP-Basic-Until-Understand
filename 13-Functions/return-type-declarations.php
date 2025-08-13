<?php
/*
Return Type Declarations digunakan untuk menentukan tipe data apa yang harus dikembalikan oleh sebuah fungsi.
Sejak PHP 7, kita bisa mendeklarasikan tipe data pengembalian (return type) seperti: string, int, float, array, bool, dll.
Jika tipe data yang dikembalikan tidak sesuai, PHP akan menampilkan error (kecuali tipenya nullable).

Contoh di bawah disusun dari yang paling sederhana hingga yang lebih kompleks, relevan untuk pengembangan web.
*/

echo "-------------------------------- Return Type Declarations --------------------------------\n\n";

/*
1. Simple String Return
   Mengembalikan string untuk menampilkan site name.
*/
function getSiteName(): string
{
    return "TechWorld";
}
echo getSiteName(); // Output: TechWorld

echo "\n\n";

/*
2. Integer Return
   Mengembalikan jumlah user online.
*/
function getOnlineUsers(): int
{
    return 125;
}
echo "Online Users: " . getOnlineUsers(); // Output: Online Users: 125

echo "\n\n";

/*
3. Float Return
   Mengembalikan total harga keranjang belanja.
*/
function getCartTotal(): float
{
    return 249.75;
}
echo "Cart Total: $" . getCartTotal(); // Output: Cart Total: $249.75

echo "\n\n";

/*
4. Boolean Return
   Mengecek apakah user sudah login atau belum.
*/
function isUserLoggedIn(string $username): bool
{
    $loggedInUsers = ["Emma", "John", "Michael"];
    return in_array($username, $loggedInUsers);
}
echo "Is Emma logged in? " . (isUserLoggedIn("Emma") ? "Yes" : "No"); // Output: Yes
echo "\n";
echo "Is Lucas logged in? " . (isUserLoggedIn("Lucas") ? "Yes" : "No"); // Output: No

echo "\n\n";

/*
5. Array Return
   Mengembalikan daftar produk.
*/
function getProductList(): array
{
    return ["Laptop", "Smartphone", "Tablet"];
}
$products = getProductList();
echo "Product List: " . implode(", ", $products); // Output: Product List: Laptop, Smartphone, Tablet

echo "\n\n";

/*
6. Nullable Return Type
   Mengembalikan profil user atau null jika tidak ditemukan.
*/
function getUserProfile(string $username): ?array
{
    $users = [
        "Emma" => ["role" => "Admin", "email" => "emma@example.com"],
        "John" => ["role" => "Editor", "email" => "john@example.com"]
    ];
    return $users[$username] ?? null;
}

$userProfile = getUserProfile("Emma");
if ($userProfile) {
    echo "Name: Emma, Role: {$userProfile['role']}, Email: {$userProfile['email']}";
    // Output: Name: Emma, Role: Admin, Email: emma@example.com
} else {
    echo "User not found.";
}

echo "\n\n";

/*
7. Complex Example - Calculate Discount
   Menggunakan float return type untuk menghitung harga akhir setelah diskon.
*/
function calculateDiscount(float $price, float $discountPercent): float
{
    return $price - ($price * $discountPercent / 100);
}
$finalPrice = calculateDiscount(100, 15);
echo "Final Price after discount: $$finalPrice"; // Output: Final Price after discount: $85
