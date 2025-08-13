<?php
/*
Passing Arguments by Reference dalam PHP berarti kita mengirimkan
referensi dari variabel, bukan salinannya, ke dalam fungsi.
Dengan cara ini, fungsi dapat langsung memodifikasi nilai variabel asli.

- By Value (default) → fungsi hanya menerima salinan, variabel asli tidak berubah.
- By Reference (&) → fungsi menerima referensi sehingga perubahan di dalam fungsi mempengaruhi variabel asli.

Contoh di bawah disusun dari yang paling sederhana hingga lebih kompleks,
dan relevan untuk kasus di pengembangan web.
*/

echo "--------------------------------------------------- Passing Arguments by Reference ---------------------------------------------------\n\n";

/*
1. Basic Variable Modification
   Mengubah nilai variabel secara langsung, contoh untuk counter page views.
*/
function increaseViews(&$views)
{
    $views++;
}

$pageViews = 99;
increaseViews($pageViews);
echo "Page views: $pageViews"; // Output: Page views: 100

echo "\n\n";

/*
2. Change String Value
   Mengubah format nama user menjadi kapital huruf pertama (untuk tampilan profil).
*/
function formatUserName(&$name)
{
    $name = ucfirst(strtolower($name));
}

$userName = "mICHAEL";
formatUserName($userName);
echo "Formatted name: $userName"; // Output: Formatted name: Michael

echo "\n\n";

/*
3. Multiple Variables by Reference
   Mengubah sekaligus nama dan role user.
*/
function updateUserInfo(&$name, &$role)
{
    $name = ucfirst(strtolower($name));
    $role = ucfirst($role);
}

$userName = "emily";
$userRole = "administrator";
updateUserInfo($userName, $userRole);
echo "User: $userName - Role: $userRole";
// Output: User: Emily - Role: Administrator

echo "\n\n";

/*
4. Reference in Array Element
   Mengubah role user langsung dari array (misalnya untuk promosi user).
*/
function promoteUserRole(&$role)
{
    $role = "Administrator";
}

$user = [
    "name" => "David",
    "role" => "Editor"
];
promoteUserRole($user["role"]);
echo "{$user['name']} is now: {$user['role']}";
// Output: David is now: Administrator

echo "\n\n";

/*
5. Passing Large Data Structures by Reference
   Memberikan diskon pada semua produk dalam array tanpa membuat salinan baru.
*/
function applyDiscount(&$products, $percentage)
{
    foreach ($products as &$product) {
        $product["price"] -= $product["price"] * ($percentage / 100);
    }
}

$products = [
    ["name" => "Laptop", "price" => 1200],
    ["name" => "Headphones", "price" => 200],
    ["name" => "Keyboard", "price" => 100]
];
applyDiscount($products, 10);
foreach ($products as $p) {
    echo "{$p['name']} - New Price: \${$p['price']}\n";
}
/*
Output:
Laptop - New Price: $1080
Headphones - New Price: $180
Keyboard - New Price: $90
*/

echo "\n";

/*
6. Building HTML Content by Reference
   Menambahkan item menu navigasi secara dinamis ke dalam HTML.
*/
function addListItem(&$html, $label, $url)
{
    $html .= "<li><a href='$url'>$label</a></li>\n";
}

$menuHtml = "<ul>\n";
addListItem($menuHtml, "Home", "/");
addListItem($menuHtml, "About", "/about");
addListItem($menuHtml, "Contact", "/contact");
$menuHtml .= "</ul>";

echo $menuHtml;
/*
Output:
<ul>
<li><a href='/'>Home</a></li>
<li><a href='/about'>About</a></li>
<li><a href='/contact'>Contact</a></li>
</ul>
*/
