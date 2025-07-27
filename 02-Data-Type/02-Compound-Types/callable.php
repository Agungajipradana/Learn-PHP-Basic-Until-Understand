<?php

/*
Callable adalah tipe data dalam PHP yang mengacu pada fungsi atau metode yang dapat "dipanggil".

Tipe data ini memungkinkan kita untuk menyimpan fungsi ke dalam variabel, lalu memanggilnya kemudian. Ini sangat berguna untuk callback, higher-order function, dan pola desain fungsional.

Ciri-ciri Tipe Data Callable:
    1. Bisa berupa nama fungsi (string), array berisi [object, method], atau closure (function tanpa nama).
    2. Dapat digunakan sebagai parameter untuk fungsi lain.
    3. Digunakan dengan fungsi bawaan seperti `is_callable()` dan `call_user_func()`.
*/

echo "------------------------------------------- Contoh Penggunaan Callable --------------------------------------" . "\n\n";

/*
1. Callable sebagai Nama Fungsi (String)
*/

echo "1. Callable sebagai Nama Fungsi (String)\n\n";

function greet($name)
{
    return "Hello, $name!";
}

$functionName = "greet"; // callable sebagai string

if (is_callable($functionName)) {
    echo $functionName("Alice") . "\n"; // Output: Hello, Alice!
} else {
    echo "Fungsi tidak bisa dipanggil.\n";
}

echo "\n";

/*
2. Callable sebagai Closure (Function tanpa nama)
*/

echo "2. Callable sebagai Closure\n\n";

$calculateSquare = function ($number) {
    return $number * $number;
};

echo "Hasil kuadrat dari 4 adalah: " . $calculateSquare(4) . "\n"; // Output: 16

echo "\n";

/*
3. Callable sebagai Array [Object, Method]
*/

echo "3. Callable sebagai Array [Object, Method]\n\n";

class Calculator
{
    public function multiply($a, $b)
    {
        return $a * $b;
    }
}

$calculator = new Calculator();
$methodReference = [$calculator, "multiply"];

if (is_callable($methodReference)) {
    echo "Hasil perkalian 6 x 7 adalah: " . call_user_func($methodReference, 6, 7) . "\n"; // Output: 42
} else {
    echo "Metode tidak bisa dipanggil.\n";
}

echo "\n";

/*
4. Callable sebagai Parameter Function
*/

echo "4. Callable sebagai Parameter Function\n\n";

function executeCallback(callable $callback, $value)
{
    return $callback($value);
}

$toUpperCase = function ($text) {
    return strtoupper($text);
};

$result = executeCallback($toUpperCase, "hello world");

echo "Hasil callback: $result\n"; // Output: HELLO WORLD
