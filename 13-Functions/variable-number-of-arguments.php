<?php
/*
Variable Number of Arguments dalam PHP adalah teknik yang memungkinkan
kita membuat fungsi yang dapat menerima jumlah argumen yang bervariasi
(tidak tetap).

Ini berguna untuk situasi seperti:
- Menangani data input yang fleksibel
- Menggabungkan teks dari beberapa sumber
- Menghitung total nilai dari banyak parameter

Cara umum:
- func_get_args() → Mengambil semua argumen sebagai array
- func_num_args() → Mendapatkan jumlah argumen
- func_get_arg($index) → Mendapatkan argumen berdasarkan index
- Parameter ...$variable (variadic function) → Cara modern PHP untuk menangkap argumen

Contoh di bawah disusun dari termudah hingga lebih kompleks dan relevan untuk pengembangan web.
*/

echo "--------------------------------------------------- Variable Number of Arguments ---------------------------------------------------\n\n";

/*
1. Simple Greeting with func_get_args()
   Fungsi menampilkan ucapan selamat datang untuk semua user yang dikirimkan.
*/
function greetUsers()
{
    $users = func_get_args();
    foreach ($users as $user) {
        echo "Welcome, $user!\n";
    }
}

greetUsers("John", "Emma", "Michael");
/*
Output:
Welcome, John!
Welcome, Emma!
Welcome, Michael!
*/

echo "\n";

/*
2. Counting Arguments with func_num_args()
   Menampilkan berapa banyak halaman yang diminta user (misalnya untuk sitemap generator).
*/
function countPages()
{
    $count = func_num_args();
    echo "Total pages to generate: $count\n";
}

countPages("Home", "About", "Contact", "Blog");
// Output: Total pages to generate: 4

echo "\n";

/*
3. Access Argument by Index with func_get_arg()
   Mengambil argumen pertama (misalnya untuk menentukan halaman utama).
*/
function getFirstPage()
{
    $firstPage = func_get_arg(0);
    echo "Main page: $firstPage\n";
}

getFirstPage("Dashboard", "Settings", "Profile");
// Output: Main page: Dashboard

echo "\n";

/*
4. Modern Variadic Function (...$variable)
   Menggabungkan string menjadi satu kalimat (misalnya untuk meta description).
*/
function createMetaDescription(...$sentences)
{
    return implode(" ", $sentences);
}

$meta = createMetaDescription("Best", "web", "development", "resources", "online.");
echo "Meta Description: $meta\n";
// Output: Meta Description: Best web development resources online.

echo "\n";

/*
5. Sum Product Prices (E-commerce Example)
   Menghitung total harga produk menggunakan variadic parameters.
*/
function calculateCartTotal(...$prices)
{
    return array_sum($prices);
}

$total = calculateCartTotal(120, 50, 30, 100);
echo "Total Price: $$total\n";
// Output: Total Price: $300


echo "\n";

/*
6. Flexible HTML Tag Generator
   Membuat tag HTML <li> untuk setiap item menu (jumlahnya bebas).
*/
function generateMenu(...$items)
{
    $html = "<ul>\n";
    foreach ($items as $item) {
        $html .= "  <li>$item</li>\n";
    }
    $html .= "</ul>";
    return $html;
}

echo generateMenu("Home", "About", "Services", "Contact");
/*
Output:
<ul>
  <li>Home</li>
  <li>About</li>
  <li>Services</li>
  <li>Contact</li>
</ul>
*/

echo "\n";

/*
7. Dynamic User Profile Builder
   Membuat profil user dengan field yang fleksibel (jumlahnya bebas).
*/
function buildUserProfile($name, ...$fields)
{
    $html = "<div style='border:1px solid #ccc; padding:10px;'>";
    $html .= "<h3>$name</h3>";
    foreach ($fields as $field) {
        $html .= "<p>$field</p>";
    }
    $html .= "</div>";
    return $html;
}

echo buildUserProfile("Sophia", "Role: Developer", "Location: New York", "Email: sophia@example.com");
/*
Output:
<div style='border:1px solid #ccc; padding:10px;'>
  <h3>Sophia</h3>
  <p>Role: Developer</p>
  <p>Location: New York</p>
  <p>Email: sophia@example.com</p>
</div>
*/
