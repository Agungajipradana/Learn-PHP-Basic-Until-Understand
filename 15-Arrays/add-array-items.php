<?php
/*
Add Array Items pada PHP berarti menambahkan elemen baru ke dalam array.
Ini sangat berguna dalam pengembangan web, misalnya untuk menambah data pengguna,
menambahkan item ke keranjang belanja, atau memperbarui daftar konten.
*/

echo "-------------------- Add Array Items in PHP --------------------" . "\n\n";

/*
1. Add Array Item (Indexed Array)
   - Menambahkan satu item baru ke dalam array dengan indeks numerik.
*/

echo "1. Add Array Item (Indexed Array)" . "\n\n";

$products = ["Laptop", "Smartphone"];
$products[] = "Tablet"; // Menambahkan item baru

print_r($products);
/*
Output:
Array
(
    [0] => Laptop
    [1] => Smartphone
    [2] => Tablet
)
*/
echo "\n\n";

/*
2. Add Array Item (Associative Array)
   - Menambahkan item baru dengan key dan value.
*/

echo "2. Add Array Item (Associative Array)" . "\n\n";

$user = [
    "name" => "Michael",
    "email" => "michael@example.com"
];

$user["role"] = "Admin"; // Menambahkan key-value baru

print_r($user);
/*
Output:
Array
(
    [name] => Michael
    [email] => michael@example.com
    [role] => Admin
)
*/
echo "\n\n";

/*
3. Add Multiple Array Items (Indexed Array)
   - Menambahkan beberapa item sekaligus menggunakan array_merge().
*/

echo "3. Add Multiple Array Items (Indexed Array)" . "\n\n";

$frontendFrameworks = ["React", "Vue"];
$moreFrameworks = ["Angular", "Svelte"];

$frontendFrameworks = array_merge($frontendFrameworks, $moreFrameworks);

print_r($frontendFrameworks);
/*
Output:
Array
(
    [0] => React
    [1] => Vue
    [2] => Angular
    [3] => Svelte
)
*/
echo "\n\n";

/*
4. Add Multiple Items to Associative Arrays
   - Menambahkan beberapa key-value sekaligus ke array asosiatif.
*/

echo "4. Add Multiple Items to Associative Arrays" . "\n\n";

$team = [
    "John" => "Frontend Developer",
    "Emma" => "Backend Developer"
];

$newMembers = [
    "Robert" => "UI/UX Designer",
    "Sophia" => "Project Manager"
];

$team = array_merge($team, $newMembers);

print_r($team);
/*
Output:
Array
(
    [John] => Frontend Developer
    [Emma] => Backend Developer
    [Robert] => UI/UX Designer
    [Sophia] => Project Manager
)
*/
echo "\n\n";

/*
5. Complex Example in Web Development Context
   - Menambahkan produk baru ke dalam katalog e-commerce.
*/

echo "5. Complex Example in Web Development Context" . "\n\n";

$catalog = [
    ["name" => "Gaming Laptop", "price" => 1500],
    ["name" => "4K Monitor", "price" => 400]
];

$newProducts = [
    ["name" => "Mechanical Keyboard", "price" => 120],
    ["name" => "Wireless Mouse", "price" => 50]
];

// Menambahkan produk baru ke katalog
$catalog = array_merge($catalog, $newProducts);

print_r($catalog);
/*
Output:
Array
(
    [0] => Array
        (
            [name] => Gaming Laptop
            [price] => 1500
        )

    [1] => Array
        (
            [name] => 4K Monitor
            [price] => 400
        )

    [2] => Array
        (
            [name] => Mechanical Keyboard
            [price] => 120
        )

    [3] => Array
        (
            [name] => Wireless Mouse
            [price] => 50
        )
)
*/
echo "\n\n";
