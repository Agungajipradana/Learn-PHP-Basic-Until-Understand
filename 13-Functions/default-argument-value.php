<?php

/*
Default Argument Value dalam PHP digunakan untuk memberikan nilai bawaan pada parameter fungsi.
Jika argumen tidak diberikan saat pemanggilan fungsi, maka nilai default akan digunakan.
Hal ini sangat berguna untuk membuat fungsi lebih fleksibel dan menghindari error karena parameter kosong.
Contoh-contoh berikut disusun dari yang paling dasar hingga yang lebih kompleks dalam pengembangan web.
*/

echo "--------------------------------------------------- Default Argument Value ---------------------------------------------------" . "\n\n";

/*
1. Default Argument - Simple Greeting
    - Memberikan salam default jika nama tidak diisi.
*/

echo "1. Default Argument - Simple Greeting\n\n";

function greetUser($name = "Guest")
{
    echo "Hello, $name!";
}

greetUser();        // Output: Hello, Guest!
echo "\n";
greetUser("Michael"); // Output: Hello, Michael!

echo "\n\n";

/*
2. Default Argument - Static HTML Button
    - Membuat tombol HTML dengan teks dan link default.
*/

echo "2. Default Argument - Static HTML Button\n\n";

function createButton($label = "Click Here", $url = "/home")
{
    echo "<a href='$url' style='padding:10px; background:#007BFF; color:white; text-decoration:none;'>$label</a>";
}

createButton();
// Output: HTML button dengan label "Click Here" dan link "/home"
echo "\n";
createButton("Read More", "/blog");
// Output: HTML button dengan label "Read More" dan link "/blog"

echo "\n\n";

/*
3. Default Argument - Currency Format
    - Menggunakan nilai default untuk simbol mata uang.
*/

echo "3. Default Argument - Currency Format\n\n";

function formatPrice($amount, $currency = "$")
{
    echo $currency . number_format($amount, 2);
}

formatPrice(1500);       // Output: $1,500.00
echo "\n";
formatPrice(1500, "€");  // Output: €1,500.00

echo "\n\n";

/*
4. Default Argument - User Role in Profile
    - Menampilkan profil user dengan peran default "Member".
*/

echo "4. Default Argument - User Role in Profile\n\n";

function showUserProfile($name, $role = "Member")
{
    echo "<h3>$name</h3><p>Role: $role</p>";
}

showUserProfile("Emily");
// Output: HTML profil dengan role default "Member"
echo "\n";
showUserProfile("David", "Administrator");
// Output: HTML profil dengan role "Administrator"

echo "\n\n";

/*
5. Default Argument - Pagination
    - Fungsi untuk menampilkan pagination dengan jumlah item per halaman default.
*/

echo "5. Default Argument - Pagination\n\n";

function showPagination($totalItems, $itemsPerPage = 10)
{
    $totalPages = ceil($totalItems / $itemsPerPage);
    echo "Total Pages: $totalPages";
}

showPagination(45);       // Output: Total Pages: 5
echo "\n";
showPagination(45, 15);   // Output: Total Pages: 3

echo "\n\n";

/*
6. Default Argument - Fetch Articles (Simulasi)
    - Mengambil artikel dengan jumlah default 5 jika tidak diisi.
*/

echo "6. Default Argument - Fetch Articles (Simulated)\n\n";

function fetchArticles($limit = 5)
{
    $articles = [
        "PHP Basics",
        "Laravel Tips",
        "JavaScript DOM Guide",
        "Next.js for Beginners",
        "Mastering MySQL",
        "Advanced TypeScript"
    ];
    $selectedArticles = array_slice($articles, 0, $limit);
    foreach ($selectedArticles as $article) {
        echo "- $article\n";
    }
}

fetchArticles();
// Output: 5 artikel pertama
echo "\n";
fetchArticles(3);
// Output: 3 artikel pertama

echo "\n\n";

/*
7. Default Argument - Discount Calculator
    - Menghitung harga setelah diskon dengan persentase default.
*/

echo "7. Default Argument - Discount Calculator\n\n";

function calculateDiscount($price, $discount = 10)
{
    $finalPrice = $price - ($price * ($discount / 100));
    echo "Final Price: $" . number_format($finalPrice, 2);
}

calculateDiscount(200);        // Output: Final Price: $180.00
echo "\n";
calculateDiscount(200, 25);    // Output: Final Price: $150.00

echo "\n\n";

/*
8. Default Argument - Generate HTML Card
    - Membuat card HTML dengan konten default jika tidak diisi.
*/

echo "8. Default Argument - Generate HTML Card\n\n";

function generateCard($title = "Default Title", $content = "This is default content.")
{
    echo "<div style='border:1px solid #ccc; padding:10px;'>
            <h3>$title</h3>
            <p>$content</p>
          </div>";
}

generateCard();
// Output: Card dengan judul dan konten default
echo "\n";
generateCard("Welcome", "Learn PHP with real-world examples.");
// Output: Card dengan data custom

echo "\n\n";
