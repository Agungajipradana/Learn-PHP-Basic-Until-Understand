<?php
/*
Built-in function boolean adalah fungsi bawaan di PHP yang digunakan untuk memproses, memvalidasi, atau mengonversi nilai menjadi tipe data boolean (true atau false). Fungsi ini sering digunakan untuk mengevaluasi ekspresi, memeriksa kondisi, atau menentukan validitas data dalam program.
*/

echo "-------------------- Fungsi Built-in Boolean yang Sering Digunakan --------------------" . "\n\n";

/*
1. boolval()

    - Mengonversi nilai apa pun menjadi tipe boolean.
    - Nilai yang dianggap false:
        - 0 (integer)
        - 0.0 (float)
        - "" (string kosong)
        - "0" (string "0")
        - null
        - Array kosong []
        - Objek tanpa properti.
    - Selain itu dianggap true.
*/

echo "1. boolval() : Mengonversi nilai apa pun menjadi tipe boolean." . "\n\n";

echo "Nilai yang dianggap false 0 (integer) : " . boolval(0) . "\n\n"; // Output: false

echo "Nilai yang dianggap true dari (PHP) : " . boolval("PHP") . "\n\n"; // Output: true

echo "Nilai yang dianggap false (string kosong) : " . boolval("") . "\n\n"; // Output: false


/*
2. is_bool()

    - Memeriksa apakah sebuah variabel bertipe boolean (true atau false).
*/

echo "2. is_bool() : Memeriksa apakah sebuah variabel bertipe boolean (true atau false)." . "\n\n";

$var1 = true;
$var2 = "PHP";

echo "Apakah \$var1 bernilai true? : " . is_bool($var1) . "\n\n"; // Output: true

echo "Apakah \$var2 bernilai true? : " . is_bool($var2) . "\n\n"; // Output: false

/*
3. empty()

    - Memeriksa apakah sebuah variabel kosong atau bernilai false jika dikonversi ke boolean.
*/

echo "3. empty() : Memeriksa apakah sebuah variabel kosong atau bernilai false jika dikonversi ke boolean." . "\n\n";

$var1 = "";
$var2 = "PHP";

echo "Apakah \$var1 sebuah variabel kosong : " . empty($var1) . "\n\n"; // Output: true
echo "Apakah \$var2 bernilai false jika dikonversi ke boolean : " . empty($var2) . "\n\n"; // Output: false

/*
4. isset()

    - Memeriksa apakah sebuah variabel telah diatur dan tidak null.
*/

echo "4. isset() : Memeriksa apakah sebuah variabel telah diatur dan tidak null." . "\n\n";

$var1 = null;
$var2 = "PHP";

echo "Memeriksa apakah sebuah variabel \$var1 telah diatur dan tidak null: " . isset($var1) . "\n\n"; // Output: false

echo "Memeriksa apakah sebuah variabel \$var2 telah diatur dan tidak null: " . isset($var2) . "\n\n"; // Output: true

/*
5. filter_var()

    - Dapat digunakan dengan filter FILTER_VALIDATE_BOOLEAN untuk memvalidasi nilai boolean.
    - Filter ini juga mendukung string seperti "true", "false", "1", "0".
*/

echo "5. filter_var() : Dapat digunakan dengan filter FILTER_VALIDATE_BOOLEAN untuk memvalidasi nilai boolean." . "\n\n";

$var1 = "true";
$var2 = "yes";

echo "Apakah \$var1 memvalidasi nilai boolean : " . filter_var($var1, FILTER_VALIDATE_BOOLEAN) . "\n\n"; // Output: true
echo "Apakah \$var2 memvalidasi nilai boolean : " . filter_var($var2, FILTER_VALIDATE_BOOLEAN) . "\n\n"; // Output: false
