<?php

namespace App;

/*
PHP Magic Constant: __NAMESPACE__
__NAMESPACE__ mengembalikan nama namespace saat ini.
Berguna untuk:
- Modularisasi aplikasi besar
- Otomatisasi loader
- Manajemen class dalam skala besar
*/

echo "-------------------- PHP __NAMESPACE__ Magic Constant --------------------\n\n";

/*
1. Menampilkan namespace dari global function
   - Berguna saat membuat helper atau utilitas dalam modul tertentu.
*/

function getNamespaceName()
{
    echo "1. Current namespace (function): '" . __NAMESPACE__ . "'\n"; // Output: App
}
getNamespaceName();
echo "\n";

/*
2. Menampilkan namespace dari dalam class
   - Cocok untuk mengetahui class sedang berada di modul mana.
*/

class ProductController
{
    public function printNamespace()
    {
        echo "2. Inside class namespace: '" . __NAMESPACE__ . "'\n"; // Output: App
    }
}
$product = new ProductController();
$product->printNamespace();
echo "\n";

/*
3. Namespace untuk service
   - Relevan dalam struktur service-oriented seperti AuthService.
*/

class AuthService
{
    public function show()
    {
        echo "3. AuthService is under namespace: '" . __NAMESPACE__ . "'\n"; // Output: App
    }
}
$auth = new AuthService();
$auth->show();
echo "\n";

/*
4. Logging dengan nama namespace
   - Bermanfaat saat logging berasal dari modul tertentu.
*/

class Logger
{
    public function log($message)
    {
        echo "4. [" . __NAMESPACE__ . "] $message\n"; // Output: [App] Login successful
    }
}
$logger = new Logger();
$logger->log("Login successful.");
echo "\n";

/*
5. Menyusun nama class dinamis menggunakan namespace
   - Cocok dalam sistem autoload atau resolver.
*/

function resolveClass($class)
{
    $fullPath = __NAMESPACE__ . "\\" . $class;
    echo "5. Full resolved class name: $fullPath\n"; // Output: App\PaymentHandler
}
resolveClass("PaymentHandler");
