<?php

/*
Fungsi untuk Menangani Error dan Exception (Error and Exception Handling Functions)
PHP menyediakan beberapa fungsi untuk menangani error dan exception. Ini termasuk set_error_handler(), set_exception_handler(), error_reporting(), dan penggunaan try-catch.
*/

// Menangani error dengan custom error handler
function customError($errno, $errstr)
{
    echo "Error [$errno]: $errstr";
}

set_error_handler("customError");
echo $undefinedVar;  // Akan menampilkan error