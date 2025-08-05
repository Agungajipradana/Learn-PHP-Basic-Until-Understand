<?php

/*
PHP Magic Constant: __TRAIT__
__TRAIT__ mengembalikan nama trait tempat kode tersebut dieksekusi.

Cocok digunakan untuk:
- Debugging trait
- Logging trait
- Mengetahui asal method saat menggunakan trait di banyak class
*/

echo "-------------------------- PHP __TRAIT__ Magic Constant --------------------------\n\n";

/*
1. Menampilkan nama trait dalam method
   - Cocok untuk debugging saat menggunakan banyak trait dalam satu class.
*/

trait LoggerTrait
{
    public function printTraitName()
    {
        echo "1. This method belongs to trait: " . __TRAIT__ . "\n"; // Output: LoggerTrait
    }
}

class App
{
    use LoggerTrait;
}

$app = new App();
$app->printTraitName();
echo "\n";

/*
2. Menampilkan trait dalam class controller
   - Berguna dalam framework MVC saat controller menggunakan banyak trait.
*/

trait AuthTrait
{
    public function authenticate()
    {
        echo "2. Authentication handled by trait: " . __TRAIT__ . "\n"; // Output: AuthTrait
    }
}

class UserController
{
    use AuthTrait;
}

$user = new UserController();
$user->authenticate();
echo "\n";

/*
3. Trait digunakan oleh banyak class
   - Cocok untuk memisahkan logika yang digunakan berulang-ulang.
*/

trait ResponseTrait
{
    public function send()
    {
        echo "3. Response sent by trait: " . __TRAIT__ . "\n"; // Output: ResponseTrait
    }
}

class API
{
    use ResponseTrait;
}

class Web
{
    use ResponseTrait;
}

$api = new API();
$api->send();

$web = new Web();
$web->send();
echo "\n";

/*
4. Menggunakan trait untuk konfigurasi dan debug dinamis
   - Cocok dalam development tools atau custom logging.
*/

trait DebugTrait
{
    public function logDebug($message)
    {
        echo "4. [" . __TRAIT__ . "] DEBUG: $message\n"; // Output: [DebugTrait] ...
    }
}

class Config
{
    use DebugTrait;
}

$config = new Config();
$config->logDebug("Cache has been cleared.");
echo "\n";

/*
5. Menggunakan trait di dalam inheritance
   - Berguna saat class turunan mewarisi dan menggunakan trait dari parent.
*/

trait NotificationTrait
{
    public function notify($user)
    {
        echo "5. [" . __TRAIT__ . "] Notification sent to $user\n"; // Output: [NotificationTrait] Notification sent to Olivia
    }
}

class BaseService
{
    use NotificationTrait;
}

class EmailService extends BaseService {}

$email = new EmailService();
$email->notify("Olivia");
echo "\n";
