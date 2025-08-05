<?php

/*
PHP Magic Constant: __FUNCTION__
__FUNCTION__ mengembalikan nama fungsi saat ini sebagai string.
Sangat berguna untuk:
- Logging/debugging nama fungsi secara otomatis
- Error reporting yang akurat
- Tracking flow eksekusi program
*/

echo "------------------------------ PHP __FUNCTION__ Magic Constant ------------------------------\n\n";

/*
1. Menampilkan nama fungsi saat ini
   - Cocok untuk debugging fungsi kecil
*/

function greetUser()
{
    echo "1. Currently in function: " . __FUNCTION__ . "\n"; // Output: greetUser
}
greetUser();
echo "\n";

/*
2. Fungsi dengan parameter dinamis dan log
   - Umum digunakan saat menangani input API/user
*/

function logActivity($user, $action)
{
    echo "2. Logging from function: " . __FUNCTION__ . "\n"; // Output: logActivity
    echo "$user performed: $action\n";
}
logActivity("William", "login");
echo "\n";

/*
3. Menggunakan __FUNCTION__ dalam array of callable
   - Digunakan pada sistem route/handler sederhana
*/

function handleDashboard()
{
    echo "3. Routing to: " . __FUNCTION__ . "\n"; // Output: handleDashboard
}

$routes = [
    "dashboard" => "handleDashboard"
];

echo "Calling handler from route:\n";
$functionName = $routes["dashboard"];
$functionName(); // Menjalankan handleDashboard
echo "\n";

/*
4. Menyimpan nama fungsi ke dalam log error
   - Berguna dalam debugging framework atau aplikasi kompleks
*/

function fetchData()
{
    $log = "4. Error occurred in function: " . __FUNCTION__;
    echo $log . "\n"; // Output: Error occurred in function: fetchData
}
fetchData();
echo "\n";

/*
5. Gunakan __FUNCTION__ dalam anonymous logger
   - Berguna untuk log otomatis di aplikasi besar
*/

function processOrder($orderId)
{
    $logger = function () {
        echo "5. Anonymous log inside: " . __FUNCTION__ . "\n"; // Output: processOrder
    };

    $logger();
}

processOrder("ORD-7890");
echo "\n";

/*
6. Menggunakan __FUNCTION__ dalam trait atau reusable module
   - Sangat relevan untuk OOP dan pengembangan library
*/

trait LoggerTrait
{
    public function logCurrentFunction()
    {
        echo "6. Called from trait method: " . __FUNCTION__ . "\n"; // Output: logCurrentFunction
    }
}

class Payment
{
    use LoggerTrait;

    public function payNow()
    {
        $this->logCurrentFunction();
    }
}

$payment = new Payment();
$payment->payNow();
echo "\n";
