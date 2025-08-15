<?php
/*
$_REQUEST pada PHP digunakan untuk mengambil data yang dikirim
melalui GET, POST, atau COOKIE.

Note:
- $_REQUEST mencampur semua data GET, POST, COOKIE (urutan tergantung konfigurasi PHP).
- Untuk aplikasi web modern, biasanya GET dan POST digunakan terpisah
  untuk keamanan dan kejelasan.
*/

echo "-------------------- PHP \$_REQUEST Examples --------------------\n\n";

/*
1. Basic GET Request
   - Mengambil data dari URL.
   - Misal: request.php?name=John&age=30
*/
echo "1. Basic GET Request\n\n";
if (isset($_REQUEST['name']) && isset($_REQUEST['age'])) {
    $name = $_REQUEST['name']; // e.g., John
    $age = $_REQUEST['age'];   // e.g., 30
    echo "Hello, my name is $name and I am $age years old.\n";
    // Output contoh: Hello, my name is John and I am 30 years old.
} else {
    echo "No data received via GET.\n";
}
echo "\n\n";

/*
2. Basic POST Request
   - Data dikirim melalui form dengan method POST.
   - Lebih aman untuk data sensitif.
*/
echo "2. Basic POST Request\n\n";
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_REQUEST['username'])) {
    $username = $_REQUEST['username']; // e.g., Michael
    echo "User $username has submitted the form.\n";
    // Output contoh: User Michael has submitted the form.
} else {
    echo "Form not submitted via POST.\n";
}
echo "\n\n";

/*
3. Combining GET and POST
   - $_REQUEST bisa mengambil data dari GET dan POST secara bersamaan.
*/
echo "3. Combining GET and POST\n\n";
if (!empty($_REQUEST['city']) || !empty($_REQUEST['country'])) {
    $city = $_REQUEST['city'] ?? 'Unknown City';
    $country = $_REQUEST['country'] ?? 'Unknown Country';
    echo "Location: $city, $country\n";
    // Output contoh: Location: London, United Kingdom
} else {
    echo "No location data received.\n";
}
echo "\n\n";

/*
4. Default Value with Null Coalescing
   - Menggunakan ?? untuk menghindari error jika data tidak ada.
*/
echo "4. Default Value with Null Coalescing\n\n";
$job = $_REQUEST['job'] ?? 'Web Developer';
echo "My profession is $job.\n";
// Output contoh: My profession is Web Developer
echo "\n\n";

/*
5. Iterating Over $_REQUEST
   - Menampilkan semua data request untuk debugging.
*/
echo "5. Iterating Over \$_REQUEST\n\n";
if (!empty($_REQUEST)) {
    foreach ($_REQUEST as $key => $value) {
        echo ucfirst($key) . ": $value\n";
    }
    // Output contoh:
    // Name: Sarah
    // Age: 25
} else {
    echo "No request data available.\n";
}
echo "\n\n";

/*
6. Practical Example: Search Form Handler
   - Simulasi form pencarian produk dengan GET atau POST.
*/
echo "6. Practical Example: Search Form Handler\n\n";
$search = $_REQUEST['search'] ?? '';
if ($search) {
    echo "Searching for: $search\n";
    // Output contoh: Searching for: laptop
} else {
    echo "Please enter a search term.\n";
}
echo "\n\n";

/*
7. Advanced: Handling Both GET (for filters) and POST (for submission)
   - GET untuk filter kategori
   - POST untuk submit data
*/
echo "7. Advanced: Handling Both GET (filters) and POST (submission)\n\n";
$category = $_REQUEST['category'] ?? 'All';
$productName = $_REQUEST['productName'] ?? '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $productName) {
    echo "Product '$productName' added to category '$category'.\n";
    // Output contoh: Product 'iPhone 15' added to category 'Electronics'.
} else {
    echo "Viewing category: $category\n";
}
echo "\n\n";

/*
8. Debug Mode (Developer Tool)
   - Menampilkan semua data $_REQUEST dalam format JSON.
*/
echo "8. Debug Mode: JSON Output\n\n";
echo json_encode($_REQUEST, JSON_PRETTY_PRINT);
// Output contoh:
// {
//     "name": "David",
//     "age": "40",
//     "city": "New York"
// }
