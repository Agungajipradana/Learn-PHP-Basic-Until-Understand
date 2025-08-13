<?php
/*
Function with and without Parameters dalam PHP digunakan untuk membuat fungsi 
baik dengan atau tanpa data masukan.  
- Without Parameters → cocok untuk menampilkan data statis atau mengambil data global.  
- With Parameters → cocok untuk membuat output dinamis berdasarkan input.  

Contoh di bawah disusun dari yang paling sederhana hingga lebih kompleks, relevan untuk pengembangan web.
*/

echo "-------------------------------- Function without Parameters --------------------------------\n\n";

/*
1. Without Parameters - Static Welcome Message
   Fungsi tanpa parameter untuk menampilkan pesan selamat datang statis.
*/
function welcomeMessage()
{
    echo "Welcome to My Website!";
}
welcomeMessage(); // Output: Welcome to My Website!

echo "\n\n";

/*
2. Without Parameters - Static HTML Footer
   Cocok untuk menampilkan elemen HTML statis pada halaman web.
*/
function showFooter()
{
    echo "<footer>&copy; 2025 My Company</footer>";
}
showFooter(); // Output: HTML footer

echo "\n\n";

/*
3. Without Parameters - Fetch Default Site Settings (Simulation)
   Fungsi tanpa parameter yang mengambil data dari sumber global atau konfigurasi.
*/
function getDefaultSettings()
{
    $settings = [
        "site_name" => "Tech World",
        "theme_color" => "#1E90FF"
    ];
    echo "Site: {$settings['site_name']} | Theme Color: {$settings['theme_color']}";
}
getDefaultSettings(); // Output: Site: Tech World | Theme Color: #1E90FF

echo "\n\n";

echo "-------------------------------- Function with Parameters --------------------------------\n\n";

/*
4. With Parameters - Personalized Greeting
   Fungsi dengan parameter untuk menampilkan pesan yang dipersonalisasi.
*/
function greetUser($name)
{
    echo "Hello, $name! Welcome to our platform.";
}
greetUser("Michael"); // Output: Hello, Michael! Welcome to our platform.

echo "\n\n";

/*
5. With Parameters - Create HTML Button
   Membuat tombol dinamis berdasarkan label dan URL yang dikirim.
*/
function createButton($label, $url)
{
    echo "<a href='$url' style='padding:8px; background:#007BFF; color:white; text-decoration:none;'>$label</a>";
}
createButton("Read More", "/blog/how-to-use-php"); // Output: HTML button

echo "\n\n";

/*
6. With Parameters - User Profile Card
   Menampilkan profil pengguna dengan data yang dikirim sebagai parameter.
*/
function showUserProfile($name, $role)
{
    echo "<div style='border:1px solid #ccc; padding:10px;'>
            <h3>$name</h3>
            <p>Role: $role</p>
          </div>";
}
showUserProfile("Emily", "Administrator"); // Output: HTML profile card

echo "\n\n";

/*
7. With Parameters - Default Parameter Value
   Jika parameter tidak dikirim, akan menggunakan nilai default.
*/
function greetVisitor($name = "Guest")
{
    echo "Hello, $name! Enjoy your visit.";
}
greetVisitor();        // Output: Hello, Guest! Enjoy your visit.
echo "\n";
greetVisitor("David"); // Output: Hello, David! Enjoy your visit.

echo "\n\n";

/*
8. With Parameters - E-commerce Price Calculator
   Menghitung total harga dari harga satuan dan kuantitas.
*/
function calculateTotalPrice($price, $quantity)
{
    return $price * $quantity;
}
$total = calculateTotalPrice(20, 4);
echo "Total Price: $$total"; // Output: Total Price: $80

echo "\n\n";

/*
9. With Parameters - Generate Meta Tags for SEO
   Membuat tag meta HTML untuk pengoptimalan mesin pencari.
*/
function generateMetaTags($title, $description)
{
    echo "<title>$title</title>\n";
    echo "<meta name='description' content='$description'>\n";
}
generateMetaTags("Learn PHP Easily", "A beginner-friendly guide to mastering PHP for web development.");
// Output: HTML meta tags
