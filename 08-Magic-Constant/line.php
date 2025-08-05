<?php

/*
PHP Magic Constant: __LINE__
Konstanta ini mengembalikan nomor baris saat dijalankan.
Sangat berguna dalam pengembangan web untuk:
- Debugging
- Logging error
- Validasi dan pelacakan bug
*/

echo "------------------------------ PHP __LINE__ Magic Constant ------------------------------\n\n";

/*
1. Menampilkan baris saat ini
   - Berguna saat ingin tahu letak posisi saat testing
*/

echo "1. This code is on line: " . __LINE__ . "\n"; // Output: 17 (atau sesuai posisi)
echo "\n";

/*
2. Digunakan dalam fungsi sederhana
   - Untuk melihat baris dari logika dalam fungsi
*/

function checkFunctionLine()
{
    echo "2. Inside function at line: " . __LINE__ . "\n"; // Output: 24
}
checkFunctionLine();
echo "\n";

/*
3. Digunakan dalam proses login (debugging logic)
   - Menunjukkan baris jika user tidak valid
*/

$name = "John";
$isLoggedIn = false;

if (!$isLoggedIn) {
    echo "3. Login failed for $name at line: " . __LINE__ . "\n"; // Output: 34
}
echo "\n";

/*
4. Logging custom error saat input form tidak valid
   - Cocok untuk frontend/backend form validator
*/

function validateEmail($email)
{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "4. Invalid email '$email' found at line: " . __LINE__ . "\n"; // Output: 43
    }
}

$email = "john.doe@invalid";
validateEmail($email);
echo "\n";

/*
5. Logging error dalam array proses data
   - Cocok untuk loop data user, validasi, atau pemrosesan data
*/

$users = ["Jane", "Alex", "", "Michael"];

foreach ($users as $index => $user) {
    if (empty($user)) {
        echo "5. Empty user at index $index on line: " . __LINE__ . "\n"; // Output: 54
    }
}
echo "\n";

/*
6. Kombinasi __LINE__ dan __FILE__ untuk sistem logging
   - Biasa digunakan pada framework atau library log
*/

function logError($message)
{
    echo "6. ERROR at " . __FILE__ . " on line " . __LINE__ . ": $message\n"; // Output: line 62
}

logError("Database connection failed");
echo "\n";

/*
7. Debug dalam class method
   - Membantu saat melakukan tracing dalam OOP
*/

class UserValidator
{
    public function validate($name)
    {
        if ($name === "") {
            echo "7. Name cannot be empty (line: " . __LINE__ . ")\n"; // Output: 73
        }
    }
}

$validator = new UserValidator();
$validator->validate("");
echo "\n";

/*
8. Digunakan saat exception dilempar
   - Bisa untuk debugging error dengan line info
*/

function riskyProcess()
{
    $status = false;
    if (!$status) {
        throw new Exception("8. Process failed at line: " . __LINE__); // Output: 84
    }
}

try {
    riskyProcess();
} catch (Exception $e) {
    echo $e->getMessage() . "\n";
}
