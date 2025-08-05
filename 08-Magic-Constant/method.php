<?php

/*
PHP Magic Constant: __METHOD__
__METHOD__ mengembalikan nama lengkap method saat ini (format: ClassName::methodName).
Cocok digunakan untuk:
- Debugging
- Logging method aktif
- Tracking aktivitas dalam class
*/

echo "-------------------- PHP __METHOD__ Magic Constant --------------------\n\n";

/*
1. Menampilkan nama method dalam method biasa
   - Cocok untuk mengetahui method mana yang sedang dipanggil.
*/

class Application
{
    public function getMethodName()
    {
        echo "1. Current method: " . __METHOD__ . "\n"; // Output: Application::getMethodName
    }
}

$app = new Application();
$app->getMethodName();
echo "\n";

/*
2. Menampilkan nama method dalam method statis
   - Bermanfaat untuk helper method dan class utilitas.
*/

class Logger
{
    public static function write()
    {
        echo "2. Called static method: " . __METHOD__ . "\n"; // Output: Logger::write
    }
}

Logger::write();
echo "\n";

/*
3. Menampilkan method di dalam inheritance
   - Berguna saat method diwariskan dari parent class.
*/

class Controller
{
    public function show()
    {
        echo "3. Called from parent method: " . __METHOD__ . "\n"; // Output: Controller::show
    }
}

class ProductController extends Controller {}

$product = new ProductController();
$product->show();
echo "\n";

/*
4. Logging method otomatis dalam aplikasi modular
   - Cocok untuk mencatat aktivitas method yang berjalan.
*/

class Auth
{
    public function login($name)
    {
        echo "4. Logging: " . __METHOD__ . " called for user $name\n"; // Output: Auth::login called for user ...
    }
}

$auth = new Auth();
$auth->login("Daniel");
echo "\n";

/*
5. Digunakan dalam struktur framework (contoh struktur MVC)
   - Cocok digunakan pada controller untuk mencatat method apa yang dijalankan.
*/

class UserController
{
    public function register($name)
    {
        echo "5. Method executed: " . __METHOD__ . " for new user $name\n"; // Output: UserController::register for new user ...
    }
}

$user = new UserController();
$user->register("Emily");
echo "\n";

/*
6. __METHOD__ dalam method private dan protected
   - Membantu debug method dengan akses terbatas.
*/

class InternalSystem
{
    private function check()
    {
        echo "6. Inside private method: " . __METHOD__ . "\n"; // Output: InternalSystem::check
    }

    public function callPrivate()
    {
        $this->check();
    }
}

$system = new InternalSystem();
$system->callPrivate();
echo "\n";

/*
7. __METHOD__ digunakan dalam trait
   - Sangat berguna ketika trait digunakan oleh banyak class.
*/

trait Sluggable
{
    public function createSlug($text)
    {
        echo "7. Trait method called: " . __METHOD__ . " for '$text'\n"; // Output: Sluggable::createSlug for '...'
    }
}

class Article
{
    use Sluggable;
}

$article = new Article();
$article->createSlug("PHP Magic Constants");
echo "\n";
