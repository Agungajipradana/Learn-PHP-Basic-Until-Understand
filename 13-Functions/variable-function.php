<?php

/*
Variable Functions dalam PHP adalah teknik memanggil fungsi
menggunakan nilai variabel yang berisi nama fungsi tersebut.

Fitur ini berguna pada situasi seperti:
- Memanggil fungsi berdasarkan input user
- Routing sistem sederhana
- Pemanggilan callback function
- Modul atau plugin yang dapat dipanggil secara dinamis

Contoh di bawah disusun dari yang paling sederhana hingga lebih kompleks,
dan relevan untuk pengembangan web.
*/

echo "-------------------------------- Variable Functions --------------------------------\n\n";

/*
1. Contoh Paling Sederhana - Greeting
   Memanggil fungsi menggunakan variabel yang menyimpan nama fungsi.
*/
function greet()
{
    echo "Hello, welcome to our website!\n";
}

$functionName = "greet";
$functionName();
// Output: Hello, welcome to our website!

echo "\n\n";

/*
2. Variable Function dengan Parameter
   Memanggil fungsi secara dinamis dan mengirimkan nilai.
*/
function sayHello($name)
{
    echo "Hello, $name!\n";
}

$func = "sayHello";
$func("Michael");
// Output: Hello, Michael!

echo "\n\n";

/*
3. Routing Sederhana
   Berguna untuk menentukan halaman web mana yang harus ditampilkan.
*/
function homePage()
{
    echo "Welcome to the Home Page\n";
}

function aboutPage()
{
    echo "This is the About Page\n";
}

$page = "home"; // Bisa diisi dari $_GET['page']
$routes = [
    "home" => "homePage",
    "about" => "aboutPage"
];

if (isset($routes[$page])) {
    $routes[$page]();
}
// Output: Welcome to the Home Page

echo "\n\n";

/*
4. Role-Based Access
   Menentukan dashboard yang ditampilkan sesuai peran pengguna.
*/
function adminDashboard()
{
    echo "Welcome to the Admin Dashboard\n";
}

function userDashboard()
{
    echo "Welcome to the User Dashboard\n";
}

$userRole = "admin"; // Contoh dari database
$dashboards = [
    "admin" => "adminDashboard",
    "user" => "userDashboard"
];

if (isset($dashboards[$userRole])) {
    $dashboards[$userRole]();
}
// Output: Welcome to the Admin Dashboard

echo "\n\n";

/*
5. Memuat Modul Website Secara Dinamis
   Digunakan pada CMS atau sistem plugin.
*/
function loadBlogModule()
{
    echo "Blog module loaded successfully.\n";
}

function loadShopModule()
{
    echo "Shop module loaded successfully.\n";
}

$module = "shop"; // Bisa dari pengaturan CMS
$modules = [
    "blog" => "loadBlogModule",
    "shop" => "loadShopModule"
];

if (isset($modules[$module])) {
    $modules[$module]();
}
// Output: Shop module loaded successfully.

echo "\n\n";

/*
6. Memanggil Method pada Class secara Dinamis
   Berguna untuk memanggil method sesuai kebutuhan tanpa hardcode.
*/
class Website
{
    public function contact()
    {
        echo "This is the Contact Page\n";
    }

    public function services()
    {
        echo "These are our Services\n";
    }
}

$site = new Website();
$method = "services";
$site->$method();
// Output: These are our Services

echo "\n\n";

/*
7. Handler API Dinamis
   Menangani request API berdasarkan parameter yang dikirim user.
*/
function getUsers()
{
    echo json_encode([
        ["name" => "John", "email" => "john@example.com"],
        ["name" => "Emma", "email" => "emma@example.com"]
    ], JSON_PRETTY_PRINT) . "\n";
}

function getProducts()
{
    echo json_encode([
        ["product" => "Laptop", "price" => 1200],
        ["product" => "Phone", "price" => 800]
    ], JSON_PRETTY_PRINT) . "\n";
}

$apiAction = "getProducts"; // Bisa diisi dari $_GET['action']
if (function_exists($apiAction)) {
    $apiAction();
}
/*
Output:
[
    {
        "product": "Laptop",
        "price": 1200
    },
    {
        "product": "Phone",
        "price": 800
    }
]
*/
