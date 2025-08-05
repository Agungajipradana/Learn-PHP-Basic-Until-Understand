<?php

/*
PHP Magic Constant: __CLASS__
__CLASS__ mengembalikan nama class tempat kode dideklarasikan.
Digunakan untuk:
- Debugging class
- Logging otomatis
- Identifikasi class aktif dalam OOP
*/

echo "-------------------- PHP __CLASS__ Magic Constant --------------------\n\n";

/*
1. Menampilkan nama class di dalam method instance
   - Cocok untuk mengetahui class yang sedang dipakai.
*/

class App
{
    public function showClassName()
    {
        echo "1. Class name: " . __CLASS__ . "\n"; // Output: App
    }
}

$app = new App();
$app->showClassName();
echo "\n";

/*
2. Menampilkan nama class dalam static method
   - Cocok untuk utilitas dan class helper.
*/

class Utility
{
    public static function logClass()
    {
        echo "2. Logging from class: " . __CLASS__ . "\n"; // Output: Utility
    }
}

Utility::logClass();
echo "\n";

/*
3. Menyimpan nama class di variabel dan gunakan untuk log
   - Relate saat membangun sistem log otomatis.
*/

class Logger
{
    public function log($message)
    {
        $class = __CLASS__;
        echo "3. [$class] $message\n"; // Output: [Logger] ...
    }
}

$logger = new Logger();
$logger->log("System initialized.");
echo "\n";

/*
4. Menggunakan __CLASS__ di inheritance
   - Method tetap mengacu ke class tempat method didefinisikan (bukan yang dipanggil).
*/

class BaseController
{
    public function getOrigin()
    {
        echo "4. Defined in class: " . __CLASS__ . "\n"; // Output: BaseController
    }
}

class HomeController extends BaseController {}

$controller = new HomeController();
$controller->getOrigin(); // Tetap output: BaseController
echo "\n";

/*
5. Gunakan get_class($this) jika ingin tahu class sebenarnya dari object
   - Digunakan saat inheritance dan polymorphism.
*/

class APIController
{
    public function currentHandler()
    {
        echo "5. Actual instance: " . get_class($this) . "\n"; // Output: CustomAPIController
    }
}

class CustomAPIController extends APIController {}

$api = new CustomAPIController();
$api->currentHandler(); // Output: CustomAPIController
echo "\n";

/*
6. Digunakan untuk debug otomatis class dalam struktur MVC
   - Bermanfaat dalam framework buatan sendiri atau modular apps.
*/

class ProductController
{
    public function debug()
    {
        echo "6. Loaded controller: " . __CLASS__ . "\n"; // Output: ProductController
    }
}

$product = new ProductController();
$product->debug();
