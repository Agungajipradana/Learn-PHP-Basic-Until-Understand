<?php
/*
Error and Exception Handling Functions dalam PHP digunakan 
untuk menangani error atau pengecualian (exception) 
sehingga aplikasi tidak langsung berhenti ketika terjadi kesalahan.

Contoh di bawah disusun dari yang paling sederhana hingga lebih kompleks,
dan relevan untuk pengembangan web.
*/

echo "-------------------------------- Error and Exception Handling Functions --------------------------------\n\n";

/*
1. Basic Error Handling - Check if File Exists
   Menggunakan die() untuk menghentikan eksekusi jika file tidak ditemukan.
*/
$file = "config.php";
if (!file_exists($file)) {
    die("Error: File $file not found!");
}
// Jika file ada, kode di bawah akan dijalankan
echo "File $file loaded successfully.";
// Output jika file tidak ada: Error: File config.php not found!

echo "\n\n";

/*
2. Using trigger_error() - Custom Error Message
   Memicu error custom untuk validasi input.
*/
$email = "invalid-email";
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    trigger_error("Invalid email format: $email", E_USER_WARNING);
}
// Output: PHP Warning:  Invalid email format: invalid-email

echo "\n\n";

/*
3. set_error_handler() - Custom Error Handler Function
   Menangkap error dengan fungsi khusus.
*/
function customErrorHandler($errno, $errstr)
{
    echo "Custom Error [$errno]: $errstr\n";
}
set_error_handler("customErrorHandler");

// Memicu error (misalnya variabel yang belum didefinisikan)
echo $undefinedVar;
// Output: Custom Error [8]: Undefined variable: undefinedVar

echo "\n\n";

/*
4. Basic Exception Handling - try...catch
   Menangani exception agar aplikasi tidak berhenti.
*/
try {
    if (true) {
        throw new Exception("Something went wrong!");
    }
} catch (Exception $e) {
    echo "Exception caught: " . $e->getMessage();
}
// Output: Exception caught: Something went wrong!

echo "\n\n";

/*
5. Exception Handling with Parameters - User Login
   Menangani error login dengan pengecualian khusus.
*/
function loginUser($username, $password)
{
    if ($username !== "Michael" || $password !== "secure123") {
        throw new Exception("Invalid username or password");
    }
    return "Welcome, $username!";
}

try {
    echo loginUser("John", "wrongpass");
} catch (Exception $e) {
    echo "Login Error: " . $e->getMessage();
}
// Output: Login Error: Invalid username or password

echo "\n\n";

/*
6. Custom Exception Class - User Registration
   Membuat pengecualian khusus untuk validasi user.
*/
class UserRegistrationException extends Exception {}

function registerUser($name, $email)
{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        throw new UserRegistrationException("Invalid email address for $name");
    }
    return "User $name registered successfully!";
}

try {
    echo registerUser("Emma", "emma[at]mail.com");
} catch (UserRegistrationException $e) {
    echo "Registration Error: " . $e->getMessage();
}
// Output: Registration Error: Invalid email address for Emma

echo "\n\n";

/*
7. Combining Error & Exception Handling - File Upload Simulation
   Menangani error upload dengan pengecualian dan custom error handler.
*/
set_error_handler(function ($errno, $errstr) {
    echo "Upload Error [$errno]: $errstr\n";
});

function uploadFile($filename)
{
    if (!file_exists($filename)) {
        trigger_error("File '$filename' not found.", E_USER_WARNING);
        return false;
    }
    if (filesize($filename) > 500000) {
        throw new Exception("File is too large to upload.");
    }
    return "File '$filename' uploaded successfully.";
}

try {
    echo uploadFile("photo.jpg");
} catch (Exception $e) {
    echo "Upload Exception: " . $e->getMessage();
}
// Output jika file tidak ada: Upload Error [512]: File 'photo.jpg' not found.
