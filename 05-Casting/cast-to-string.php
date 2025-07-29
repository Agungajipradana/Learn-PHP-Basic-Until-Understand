<?php

/*
(string) digunakan untuk mengonversi tipe data lain menjadi string.
Ini penting dalam pengembangan web, terutama saat menampilkan data angka, boolean, atau hasil logika ke pengguna atau HTML.
*/

echo "--------------------------- Cast to String in PHP ---------------------------\n\n";

/*
1. Konversi integer ke string
   - Umum saat ingin menampilkan angka seperti harga atau ID dalam HTML.
*/

$price = 100;
$priceText = (string) $price;

echo "1. Price as string: " . $priceText . "\n"; // Output: "100"


/*
2. Konversi float ke string
   - Berguna untuk menampilkan hasil perhitungan angka pecahan dalam tampilan web.
*/

$rating = 4.9;
$ratingText = (string) $rating;

echo "2. Rating as string: " . $ratingText . "\n"; // Output: "4.9"


/*
3. Konversi boolean ke string
   - true → "1", false → ""
   - Umum digunakan saat menampilkan status aktif/tidak aktif dalam sistem.
*/

$isActive = true;
$statusText = (string) $isActive;

echo "3. Boolean to string: " . $statusText . "\n"; // Output: "1"


/*
4. Konversi NULL ke string
   - NULL akan menjadi string kosong "".
   - Berguna dalam validasi input kosong.
*/

$userBio = null;
$bioText = (string) $userBio;

echo "4. Null to string: '" . $bioText . "'\n"; // Output: ''


/*
5. Konversi array ke string
   - Hanya menghasilkan string "Array", tidak menampilkan isi array.
   - Tidak dianjurkan jika ingin mendapatkan isi array secara langsung.
*/

$tags = ["php", "backend", "web"];
$tagString = (string) $tags;

echo "5. Array to string: " . $tagString . "\n"; // Output: "Array"


/*
6. Konversi object ke string (harus ada __toString())
   - Cocok saat membuat class yang bisa ditampilkan sebagai string di UI.
*/

class Product
{
    public string $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function __toString()
    {
        return "Product: " . $this->name;
    }
}

$item = new Product("Laptop");
$itemText = (string) $item;

echo "6. Object to string: " . $itemText . "\n"; // Output: Product: Laptop


/*
7. Mengonversi data API (numeric) ke string
   - API biasanya mengembalikan angka dalam string, tetapi terkadang kita perlu menyesuaikan balik.
*/

$apiResponse = [
    "views" => 1050,
    "likes" => 320
];

$viewsText = (string) $apiResponse["views"];
$likesText = (string) $apiResponse["likes"];

echo "7. API views: $viewsText, likes: $likesText\n"; // Output: API views: 1050, likes: 320


/*
8. Konversi hasil logika ke string
   - Cocok untuk debugging atau menampilkan status sebagai string.
*/

$hasAccess = (5 > 3);
$status = (string) $hasAccess;

echo "8. Logic result to string: $status\n"; // Output: 1
