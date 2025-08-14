<?php
/*
Update Array Items pada PHP berarti mengubah nilai elemen di dalam array.
Dalam pengembangan web, ini sering digunakan untuk memperbarui data pengguna,
menyesuaikan daftar harga, atau memodifikasi data sebelum ditampilkan.
*/

echo "-------------------- Update Array Items in PHP --------------------" . "\n\n";

/*
1. Update Array Items in a Foreach Loop (Indexed Array)
   - Mengubah setiap nilai array numerik menggunakan foreach loop.
*/

echo "1. Update Array Items in a Foreach Loop (Indexed Array)" . "\n\n";

$products = ["Laptop", "Smartphone", "Tablet"];

foreach ($products as $index => $product) {
    $products[$index] = strtoupper($product); // Mengubah menjadi huruf besar
}

print_r($products);
/*
Output:
Array
(
    [0] => LAPTOP
    [1] => SMARTPHONE
    [2] => TABLET
)
*/
echo "\n\n";

/*
2. Update Array Items in a Foreach Loop (Associative Array)
   - Mengubah nilai array asosiatif sesuai kebutuhan.
*/

echo "2. Update Array Items in a Foreach Loop (Associative Array)" . "\n\n";

$team = [
    "John" => "Frontend Developer",
    "Emma" => "Backend Developer",
    "Robert" => "UI/UX Designer"
];

foreach ($team as $name => $role) {
    $team[$name] = "Senior " . $role; // Menambahkan kata "Senior" pada setiap role
}

print_r($team);
/*
Output:
Array
(
    [John] => Senior Frontend Developer
    [Emma] => Senior Backend Developer
    [Robert] => Senior UI/UX Designer
)
*/
echo "\n\n";

/*
3. Complex Example in Web Development Context
   - Mengubah daftar harga produk dalam e-commerce (contoh diskon 10%).
*/

echo "3. Complex Example in Web Development Context" . "\n\n";

$storeProducts = [
    ["name" => "Gaming Laptop", "price" => 1500],
    ["name" => "4K Monitor", "price" => 400],
    ["name" => "Mechanical Keyboard", "price" => 120]
];

foreach ($storeProducts as $index => $item) {
    // Terapkan diskon 10%
    $storeProducts[$index]["price"] = $item["price"] * 0.9;
}

print_r($storeProducts);
/*
Output:
Array
(
    [0] => Array
        (
            [name] => Gaming Laptop
            [price] => 1350
        )

    [1] => Array
        (
            [name] => 4K Monitor
            [price] => 360
        )

    [2] => Array
        (
            [name] => Mechanical Keyboard
            [price] => 108
        )
)
*/
echo "\n\n";
