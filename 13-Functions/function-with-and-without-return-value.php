<?php
/*
Function with and without Return Value dalam PHP digunakan untuk membuat fungsi 
yang bisa mengembalikan data (return) atau hanya menjalankan aksi tanpa mengembalikan nilai.
- Without Return Value → biasanya digunakan untuk menampilkan output langsung atau memproses data tanpa hasil balik.
- With Return Value → mengembalikan nilai sehingga bisa digunakan kembali di bagian lain program.

Contoh di bawah disusun dari yang paling sederhana hingga lebih kompleks, relevan untuk pengembangan web.
*/

echo "-------------------------------- Function without Return Value --------------------------------\n\n";

/*
1. Without Return Value - Static Welcome Message
   Fungsi tanpa return untuk menampilkan pesan selamat datang.
*/
function showWelcome()
{
    echo "Welcome to My Website!";
}
showWelcome(); // Output: Welcome to My Website!

echo "\n\n";

/*
2. Without Return Value - Display Current Year
   Cocok untuk menampilkan tahun berjalan di footer.
*/
function showCurrentYear()
{
    echo "&copy; " . date("Y") . " My Company";
}
showCurrentYear(); // Output: © 2025 My Company

echo "\n\n";

/*
3. Without Return Value - Show Product List (Simulation)
   Menampilkan daftar produk dalam bentuk HTML list.
*/
function showProductList()
{
    $products = ["Laptop", "Smartphone", "Headphones"];
    echo "<ul>";
    foreach ($products as $product) {
        echo "<li>$product</li>";
    }
    echo "</ul>";
}
showProductList(); // Output: HTML list of products

echo "\n\n";

echo "--------------------------------------------------- Function with and without Return Value ---------------------------------------------------\n\n";

/*
4. With Return Value - Get Site Name
   Fungsi mengembalikan string yang bisa digunakan kembali.
*/
function getSiteName()
{
    return "Tech World";
}
$siteName = getSiteName();
echo "Welcome to $siteName"; // Output: Welcome to Tech World

echo "\n\n";

/*
5. With Return Value - Calculate Discounted Price
   Mengembalikan harga setelah diskon untuk digunakan dalam e-commerce.
*/
function getDiscountedPrice($price, $discountPercent)
{
    return $price - ($price * $discountPercent / 100);
}
$finalPrice = getDiscountedPrice(100, 15);
echo "Final Price: $$finalPrice"; // Output: Final Price: $85

echo "\n\n";

/*
6. With Return Value - Generate HTML Link
   Mengembalikan kode HTML link untuk digunakan di berbagai tempat.
*/
function generateLink($label, $url)
{
    return "<a href='$url'>$label</a>";
}
echo generateLink("Visit Blog", "/blog");
// Output: HTML anchor link

echo "\n\n";

/*
7. With Return Value - Get User Profile HTML
   Mengembalikan card profil user untuk digunakan di halaman web.
*/
function getUserProfile($name, $role)
{
    return "<div style='border:1px solid #ccc; padding:10px;'>
                <h3>$name</h3>
                <p>Role: $role</p>
            </div>";
}
echo getUserProfile("Emma", "Moderator"); 
// Output: HTML profile card
