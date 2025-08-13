<?php

/*
Function Arguments dalam PHP digunakan untuk mengirim data ke dalam fungsi agar dapat digunakan di dalam prosesnya.
Argumen membuat fungsi menjadi fleksibel dan dapat digunakan ulang untuk berbagai kebutuhan.
Contoh-contoh berikut disusun dari yang paling dasar hingga yang lebih kompleks dalam pengembangan web.
*/

echo "--------------------------------------------------- Function Arguments ---------------------------------------------------" . "\n\n";

/*
1. Single Argument
    - Kasus paling dasar: mengirim satu nilai untuk ditampilkan.
*/

echo "1. Function with One Argument\n\n";

function greetUser($name)
{
    echo "Hello, $name! Welcome to our website.";
}

greetUser("Michael"); // Output: Hello, Michael! Welcome to our website.

echo "\n\n";

/*
2. Multiple Arguments
    - Mengirim lebih dari satu nilai, berguna untuk menampilkan data lebih lengkap.
*/

echo "2. Function with Multiple Arguments\n\n";

function showUserProfile($name, $role)
{
    echo "$name is registered as: $role.";
}

showUserProfile("Emily", "Administrator"); // Output: Emily is registered as: Administrator.

echo "\n\n";

/*
3. Default Argument Value
    - Memberikan nilai default jika argumen tidak dikirim.
*/

echo "3. Default Argument Value\n\n";

function greetVisitor($name = "Guest")
{
    echo "Hello, $name! Enjoy browsing our site.";
}

greetVisitor();         // Output: Hello, Guest! Enjoy browsing our site.
echo "\n";
greetVisitor("David");  // Output: Hello, David! Enjoy browsing our site.

echo "\n\n";

/*
4. Argument as HTML Content
    - Mengirim data untuk membentuk elemen HTML (berguna dalam template web).
*/

echo "4. Argument in HTML Output\n\n";

function createButton($label, $url)
{
    echo "<a href='$url' style='padding:10px; background:#007BFF; color:white; text-decoration:none;'>$label</a>";
}

createButton("Read More", "/blog/how-to-learn-php");
// Output: HTML button with label and link

echo "\n\n";

/*
5. Passing Array as Argument
    - Berguna untuk mengirim data banyak sekaligus, misalnya data navigasi.
*/

echo "5. Passing Array as Argument\n\n";

function renderMenu($menuItems)
{
    echo "<ul style='list-style:none;'>";
    foreach ($menuItems as $item) {
        echo "<li><a href='{$item['url']}'>{$item['label']}</a></li>";
    }
    echo "</ul>";
}

$menu = [
    ["label" => "Home", "url" => "/"],
    ["label" => "About", "url" => "/about"],
    ["label" => "Contact", "url" => "/contact"]
];

renderMenu($menu);
// Output: HTML unordered list menu

echo "\n\n";

/*
6. Passing Arguments by Reference
    - Mengirim referensi variabel agar dapat diubah nilainya di dalam fungsi.
*/

echo "6. Passing Arguments by Reference\n\n";

function increaseViews(&$views)
{
    $views++;
}

$pageViews = 99;
increaseViews($pageViews);

echo "Page views: $pageViews"; // Output: Page views: 100

echo "\n\n";

/*
7. Variable Number of Arguments
    - Menggunakan ... untuk menerima jumlah argumen tak terbatas.
*/

echo "7. Variable Number of Arguments\n\n";

function calculateCartTotal(...$prices)
{
    $total = 0;
    foreach ($prices as $price) {
        $total += $price;
    }
    return $total;
}

echo "Total Price: $" . calculateCartTotal(10, 20, 5, 15);
// Output: Total Price: $50

echo "\n\n";

/*
8. Type Hinting on Arguments
    - Membatasi tipe data pada argumen agar lebih aman.
*/

echo "8. Type Hinting on Arguments\n\n";

function displayProduct(string $name, float $price)
{
    echo "Product: $name - Price: $$price";
}

displayProduct("Laptop", 999.99);
// Output: Product: Laptop - Price: $999.99

echo "\n";
