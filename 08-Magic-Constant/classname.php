<?php

/*
PHP Magic Constant: ClassName::class
`ClassName::class` mengembalikan nama class sebagai string.
Berguna dalam:
- Debugging
- Dependency Injection
- Autoloading
- Routing berbasis class
*/

echo "-------------------------- PHP ClassName::class Magic Constant --------------------------\n\n";

/*
1. Menampilkan nama class dasar
   - Cocok untuk mencetak nama class secara langsung.
*/

class User {}

echo "1. Class name string: " . User::class . "\n"; // Output: User
echo "\n";

/*
2. Menyimpan nama class ke dalam variabel
   - Berguna untuk sistem autoload, konfigurasi, atau dynamic instantiation.
*/

class Product {}

$productClass = Product::class;
echo "2. Stored class name: $productClass\n"; // Output: Product
echo "\n";

/*
3. Menggunakan class name di array konfigurasi
   - Umum dalam service container, routing, atau registrasi modul.
*/

class OrderService {}

$services = [
    'order' => OrderService::class
];

echo "3. Service registered: " . $services['order'] . "\n"; // Output: OrderService
echo "\n";

/*
4. Dependency injection sederhana menggunakan nama class
   - Cocok untuk membuat sistem ringan tanpa framework.
*/

class Logger {}

function resolve($className)
{
    echo "4. Resolving class: $className\n";
    return new $className;
}

$logger = resolve(Logger::class); // Output: Logger
echo "\n";

/*
5. Menggunakan ClassName::class untuk sistem routing
   - Digunakan untuk mencocokkan URL ke controller class.
*/

class AuthController
{
    public function login()
    {
        echo "5. AuthController login()\n";
    }
}

$routes = [
    '/login' => AuthController::class
];

$controller = new $routes['/login'];
$controller->login(); // Output: AuthController login()
echo "\n";

/*
6. Digabung dengan function_exists atau method_exists
   - Untuk mengecek class & method tersedia sebelum dipanggil.
*/

class PaymentGateway
{
    public function process()
    {
        echo "6. Payment processed using PaymentGateway\n";
    }
}

$className = PaymentGateway::class;

if (class_exists($className) && method_exists($className, 'process')) {
    $gateway = new $className;
    $gateway->process();
}
