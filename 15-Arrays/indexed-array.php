<?php
/*
Indexed Arrays in PHP adalah array yang setiap elemennya memiliki indeks numerik.
Indeks dimulai dari 0 secara default.

Kegunaan Indexed Array:
- Menyimpan daftar data seperti nama pengguna, daftar produk, atau data lain yang berurutan.
- Sangat berguna untuk pengembangan web, misalnya menampilkan daftar di HTML.
*/

echo "-------------------- Indexed Arrays in PHP --------------------" . "\n\n";

/*
1. Access Indexed Array (Mengakses Array Indeks)

    - Mengakses elemen array menggunakan indeks numerik.
*/

echo "1. Access Indexed Array : Mengakses elemen array menggunakan indeks numerik." . "\n\n";

// Example: Storing a list of website menu items
$menuItems = ["Home", "About", "Services", "Contact"];

// Access each element by index
echo $menuItems[0]; // Output: Home
echo "\n";
echo $menuItems[1]; // Output: About
echo "\n";
echo $menuItems[2]; // Output: Services
echo "\n";
echo $menuItems[3]; // Output: Contact
echo "\n\n";

/*
2. Change Value (Mengubah Nilai Array)

    - Mengubah nilai elemen array berdasarkan indeksnya.
*/

echo "2. Change Value : Mengubah nilai elemen array berdasarkan indeksnya." . "\n\n";

// Example: Updating a menu item
$menuItems[2] = "Portfolio"; // Change "Services" to "Portfolio"
print_r($menuItems);
// Output: Array ( [0] => Home [1] => About [2] => Portfolio [3] => Contact )
echo "\n\n";

/*
3. Loop Through an Indexed Array (Perulangan Array Indeks)

    - Menggunakan perulangan untuk mengakses semua elemen dalam array.
*/

echo "3. Loop Through an Indexed Array : Menggunakan perulangan untuk mengakses semua elemen dalam array." . "\n\n";

// Example: Displaying menu items as HTML <ul>
echo "<ul>\n";
foreach ($menuItems as $item) {
    echo "  <li>$item</li>\n";
}
echo "</ul>\n";
/*
Output HTML:
<ul>
  <li>Home</li>
  <li>About</li>
  <li>Portfolio</li>
  <li>Contact</li>
</ul>
*/
echo "\n";

/*
4. Loop with Index (Perulangan dengan Indeks)

    - Mengakses indeks dan nilai sekaligus dalam perulangan.
*/

echo "4. Loop with Index : Mengakses indeks dan nilai sekaligus dalam perulangan." . "\n\n";

// Example: Numbering menu items for admin panel display
foreach ($menuItems as $index => $item) {
    echo "Menu " . ($index + 1) . ": $item\n";
}
/*
Output:
Menu 1: Home
Menu 2: About
Menu 3: Portfolio
Menu 4: Contact
*/
echo "\n";

/*
5. Complex Example: Dynamic Content Rendering

    - Contoh penerapan nyata: menampilkan daftar produk dari array secara dinamis di halaman web.
*/

echo "5. Complex Example : Dynamic Content Rendering." . "\n\n";

// Example: Product list
$products = ["Laptop", "Smartphone", "Headphones", "Smartwatch"];

// Display as HTML cards
foreach ($products as $product) {
    echo "<div class='product-card'>\n";
    echo "  <h3>$product</h3>\n";
    echo "  <p>High quality $product for your needs.</p>\n";
    echo "</div>\n";
}
/*
Output HTML:
<div class='product-card'>
  <h3>Laptop</h3>
  <p>High quality Laptop for your needs.</p>
</div>
<div class='product-card'>
  <h3>Smartphone</h3>
  <p>High quality Smartphone for your needs.</p>
</div>
<div class='product-card'>
  <h3>Headphones</h3>
  <p>High quality Headphones for your needs.</p>
</div>
<div class='product-card'>
  <h3>Smartwatch</h3>
  <p>High quality Smartwatch for your needs.</p>
</div>
*/
