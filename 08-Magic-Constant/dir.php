<?php

/*
PHP Magic Constant: __DIR__
Mengembalikan direktori dari file saat ini (tanpa nama file).
Berguna untuk:
- Include/require file lain dengan path yang tepat
- Setup konfigurasi atau autoloading
- Penanganan file di server

*/

echo "------------------------------ PHP __DIR__ Magic Constant ------------------------------\n\n";

/*
1. Menampilkan direktori file ini berada
   - Berguna untuk debugging atau dokumentasi
*/

echo "1. This file is located in directory:\n";
echo __DIR__ . "\n\n"; // Output: C:\xampp\htdocs\project

/*
2. Membuat path file konfigurasi secara dinamis
   - Berguna untuk include file dari folder config
*/

$configPath = __DIR__ . "/config/settings.php";
echo "2. Config path generated as:\n";
echo $configPath . "\n\n"; // Output: C:\xampp\htdocs\project\config\settings.php

/*
3. Digunakan dalam fungsi untuk load file
   - Berguna dalam sistem plugin/modular
*/

function loadTemplate($template)
{
    $path = __DIR__ . "/templates/$template.php";
    echo "3. Template to load:\n";
    echo $path . "\n"; // Output: full path template
}

loadTemplate("login");
echo "\n";

/*
4. Menggunakan __DIR__ dalam class
   - Relevan untuk membuat library internal dengan struktur folder
*/

class TemplateLoader
{
    public function getLayoutPath()
    {
        return __DIR__ . "/layouts/main.php";
    }
}

$loader = new TemplateLoader();
echo "4. Layout path from class:\n";
echo $loader->getLayoutPath() . "\n\n"; // Output: path ke layout

/*
5. Digabung dengan realpath() untuk path absolut
   - Cocok untuk keamanan atau path validasi
*/

$realPath = realpath(__DIR__ . "/uploads");
echo "5. Absolute path to upload folder:\n";
echo $realPath . "\n\n"; // Output: full absolute path if folder exists

/*
6. Include file lain secara aman menggunakan __DIR__
   - Umum pada sistem MVC
*/

// Simulasi output tanpa benar-benar include
$controllerPath = __DIR__ . "/controllers/UserController.php";
echo "6. Simulated include of controller:\n";
echo "Including file from: $controllerPath\n\n"; // Output: full path to controller

/*
7. Membangun sistem autoload sederhana menggunakan __DIR__
   - Relevan dalam project skala menengah ke atas
*/

spl_autoload_register(function ($class) {
    $file = __DIR__ . "/classes/" . $class . ".php";
    echo "7. Autoload attempt for: $file\n";
    // include_once($file); // Uncomment if file exists
});

class_exists("Auth"); // Simulasi
