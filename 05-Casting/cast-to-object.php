<?php

/*
(object) digunakan untuk mengonversi nilai ke dalam bentuk object.
Sangat berguna dalam pengembangan web, seperti saat menangani data API, form, dan konfigurasi dinamis.
*/

echo "--------------------------- Cast to Object in PHP ---------------------------\n\n";

/*
1. Array asosiatif ke object
   - Umum saat mengubah data form POST menjadi object.
*/

$userArray = [
    "name" => "John Doe",
    "email" => "john@example.com"
];

$userObject = (object) $userArray;

echo "1. User array to object:\n";
echo "Name: " . $userObject->name . "\n";
echo "Email: " . $userObject->email . "\n\n";

/*
2. Array numerik ke object
   - Index akan dikonversi menjadi properti numerik.
*/

$numbers = [10, 20, 30];
$numbersObject = (object) $numbers;

echo "2. Numeric array to object:\n";
echo "First: " . $numbersObject->{0} . "\n";
echo "Second: " . $numbersObject->{1} . "\n\n";

/*
3. String ke object
   - Akan menghasilkan objek dengan properti scalar bernama 'scalar'.
*/

$title = "PHP Developer";
$titleObject = (object) $title;

echo "3. String to object:\n";
echo "Title: " . $titleObject->scalar . "\n\n";

/*
4. Integer ke object
   - Sama seperti string, properti akan bernama 'scalar'.
*/

$age = 30;
$ageObject = (object) $age;

echo "4. Integer to object:\n";
echo "Age: " . $ageObject->scalar . "\n\n";

/*
5. Float ke object
   - Nilai float dibungkus dalam properti 'scalar'.
*/

$rating = 4.7;
$ratingObject = (object) $rating;

echo "5. Float to object:\n";
echo "Rating: " . $ratingObject->scalar . "\n\n";

/*
6. Boolean ke object
   - true/false dikonversi menjadi object dengan properti 'scalar'.
*/

$isAdmin = true;
$statusObject = (object) $isAdmin;

echo "6. Boolean to object:\n";
echo "Is Admin: " . ($statusObject->scalar ? "Yes" : "No") . "\n\n";

/*
7. Null ke object
   - Menghasilkan object kosong.
*/

$empty = null;
$emptyObject = (object) $empty;

echo "7. Null to object:\n";
print_r($emptyObject); // stdClass tanpa properti
echo "\n";

/*
8. JSON string ke object via json_decode
   - Salah satu praktik paling umum saat parsing API response.
*/

$json = '{"framework": "Laravel", "version": 10}';
$config = json_decode($json); // langsung menjadi object stdClass

echo "8. JSON string to object:\n";
echo "Framework: " . $config->framework . "\n";
echo "Version: " . $config->version . "\n\n";

/*
9. Konversi array multidimensi ke nested object
   - Berguna untuk representasi data kompleks dari form atau API.
*/

$blogPost = [
    "title" => "Learn PHP",
    "author" => [
        "name" => "Alice",
        "email" => "alice@example.com"
    ]
];

$postObject = json_decode(json_encode($blogPost)); // trik aman untuk nested

echo "9. Multidimensional array to nested object:\n";
echo "Title: " . $postObject->title . "\n";
echo "Author Name: " . $postObject->author->name . "\n";
echo "Author Email: " . $postObject->author->email . "\n\n";
