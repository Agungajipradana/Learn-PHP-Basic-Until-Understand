<?php

/*
PHP Array Operators
Digunakan untuk membandingkan atau menggabungkan array.
Digunakan untuk:
- Menggabungkan data hasil query
- Validasi struktur array
- Cek perbedaan hak akses / role user
- Operasi pada array konfigurasi dan data form

Operator:
- +      (Union)
- ==     (Equality)
- ===    (Identity)
- != / <> (Inequality)
- !==    (Non-identical)
*/

echo "-------------------- PHP Array Operators --------------------\n\n";

/*
1. Union (+)
   - Menggabungkan dua array (tanpa menimpa key yang sama).
   - Cocok untuk menggabungkan data default dan data tambahan.
*/

$defaultSettings = ["theme" => "light", "lang" => "en"];
$userSettings = ["lang" => "fr", "timezone" => "UTC+1"];

$finalSettings = $defaultSettings + $userSettings;
print_r($finalSettings);
// Output: theme tetap light, lang tetap en (karena array kiri menang), timezone ditambahkan

echo "\n";

/*
2. Equality (==)
   - Cek apakah dua array memiliki key dan value yang sama (urutan tidak penting).
   - Digunakan untuk membandingkan data input user dengan template.
*/

$templateA = ["role" => "editor", "active" => true];
$templateB = ["active" => true, "role" => "editor"];

var_dump($templateA == $templateB); // Output: true

echo "\n";

/*
3. Identity (===)
   - Cek apakah dua array sama persis, termasuk urutan dan tipe data.
   - Cocok untuk validasi struktur data antar modul.
*/

$settingsA = ["volume" => 10, "mute" => false];
$settingsB = ["volume" => 10, "mute" => false];

var_dump($settingsA === $settingsB); // Output: true

$settingsC = ["mute" => false, "volume" => 10];
var_dump($settingsA === $settingsC); // Output: false (urutan beda)

echo "\n";

/*
4. Inequality (!= atau <>)
   - Cek apakah array berbeda.
   - Dipakai untuk mendeteksi perubahan preferensi user.
*/

$prevPrefs = ["darkMode" => true, "lang" => "en"];
$currentPrefs = ["darkMode" => true, "lang" => "id"];

var_dump($prevPrefs != $currentPrefs); // Output: true
var_dump($prevPrefs <> $currentPrefs); // Output: true

echo "\n";

/*
5. Non-identical (!==)
   - Cek apakah array tidak identik (urutan atau tipe berbeda).
   - Relevan saat membandingkan hasil API vs lokal.
*/

$dataFromAPI = ["id" => "123", "verified" => true];
$dataFromDB  = ["id" => 123, "verified" => true];

var_dump($dataFromAPI !== $dataFromDB); // Output: true (karena id string vs int)
