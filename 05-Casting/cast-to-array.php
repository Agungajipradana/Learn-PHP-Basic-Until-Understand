<?php

/*
(array) digunakan untuk mengonversi tipe data lain menjadi array.
Sangat berguna dalam pengembangan web untuk memanipulasi data dari input form, API, dan objek dinamis.
*/

echo "--------------------------- Cast to Array in PHP ---------------------------\n\n";

/*
1. String ke array
   - Cocok saat ingin menjadikan string sebagai array satu elemen.
*/

$name = "John Doe";
$nameArray = (array) $name;

echo "1. Name to array:\n";
print_r($nameArray);
echo "\n";

/*
2. Integer ke array
   - Biasa digunakan untuk membungkus nilai numerik sebelum diproses lebih lanjut.
*/

$age = 25;
$ageArray = (array) $age;

echo "2. Age to array:\n";
print_r($ageArray);
echo "\n";

/*
3. Float ke array
   - Sama seperti integer, dibungkus ke array indeks 0.
*/

$rating = 4.5;
$ratingArray = (array) $rating;

echo "3. Rating to array:\n";
print_r($ratingArray);
echo "\n";

/*
4. Boolean ke array
   - true → [0 => true], false → [0 => false]
*/

$isActive = false;
$statusArray = (array) $isActive;

echo "4. Status to array:\n";
print_r($statusArray);
echo "\n";

/*
5. Null ke array
   - Hasilnya array kosong []
*/

$empty = null;
$emptyArray = (array) $empty;

echo "5. Null to array:\n";
print_r($emptyArray);
echo "\n";

/*
6. Object stdClass ke array
   - Umum saat parsing hasil JSON ke object lalu dikonversi ke array.
*/

$user = new stdClass();
$user->name = "Alice";
$user->email = "alice@example.com";

$userArray = (array) $user;

echo "6. Object to array:\n";
print_r($userArray);
echo "\n";

/*
7. Object dengan properti protected/private
   - PHP akan menyimpan nama property dalam format khusus.
*/

class Product {
    public $name = "Laptop";
    protected $stock = 10;
    private $price = 1499.99;
}

$item = new Product("Laptop");
$itemArray = (array) $item;

echo "7. Object with protected/private to array:\n";
print_r($itemArray);
echo "\n";

/*
8. JSON string (object) ke array
   - Biasanya JSON object dikembalikan oleh API.
*/

$jsonString = '{"title": "Learn PHP", "views": 1024}';
$dataObject = json_decode($jsonString); // hasil object
$dataArray = (array) $dataObject;

echo "8. JSON object to array:\n";
print_r($dataArray);
echo "\n";

/*
9. JSON string ke array langsung (assoc = true)
   - Cara praktis langsung ubah JSON ke array.
*/

$jsonString = '{"id": 101, "status": "published"}';
$dataArrayDirect = json_decode($jsonString, true); // langsung array

echo "9. JSON to associative array:\n";
print_r($dataArrayDirect);
echo "\n";

/*
10. Objek bersarang menjadi array multidimensi
   - Berguna jika API mengembalikan nested data.
*/

$response = new stdClass();
$response->post = new stdClass();
$response->post->title = "PHP Tips";
$response->post->author = "Emily";

$responseArray = (array) $response;
$responseArray["post"] = (array) $responseArray["post"];

echo "10. Nested object to array:\n";
print_r($responseArray);
echo "\n";
