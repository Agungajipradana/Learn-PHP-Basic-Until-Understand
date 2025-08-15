<?php
/*
$_GET (Data URL)

Note:
- Digunakan untuk mengambil data dari URL melalui query string.
- Biasanya digunakan untuk search, pagination, filter data, atau navigasi antar halaman.
- Data terlihat di URL sehingga cocok untuk request yang tidak sensitif.
*/

echo "-------------------- PHP \$_GET Examples --------------------\n\n";

/*
1. Simple GET Parameter
   - Mengambil satu parameter dari URL.
   - Cocok untuk menampilkan data berdasarkan username atau ID.
   - URL Example: GET.php?username=Michael
*/
echo "1. Simple GET Parameter\n\n";
if (isset($_GET['username'])) {
    $username = $_GET['username']; // e.g., Michael
    echo "Hello, $username!\n";
    // Output example: Hello, Michael!
} else {
    echo "Please provide your username in the URL.\n";
}
echo "\n\n";

/*
2. Multiple GET Parameters
   - Mengambil beberapa data sekaligus dari URL.
   - URL Example: GET.php?name=Sarah&email=sarah@example.com
*/
echo "2. Multiple GET Parameters\n\n";
if (isset($_GET['name']) && isset($_GET['email'])) {
    $name  = $_GET['name'];  // e.g., Sarah Johnson
    $email = $_GET['email']; // e.g., sarah@example.com
    echo "Name: $name\nEmail: $email\n";
    // Output example:
    // Name: Sarah Johnson
    // Email: sarah@example.com
} else {
    echo "Please provide both name and email in the URL.\n";
}
echo "\n\n";

/*
3. GET with Validation & Sanitization
   - Membersihkan input untuk keamanan.
   - URL Example: GET.php?comment=This%20is%20amazing!
*/
echo "3. GET with Validation & Sanitization\n\n";
if (isset($_GET['comment'])) {
    $comment = htmlspecialchars(trim($_GET['comment']));
    echo "User comment: $comment\n";
    // Output example: User comment: This is amazing!
} else {
    echo "Please provide a comment in the URL.\n";
}
echo "\n\n";

/*
4. GET for Pagination
   - Menangani parameter page untuk navigasi halaman.
   - URL Example: GET.php?page=2
*/
echo "4. GET for Pagination\n\n";
if (isset($_GET['page'])) {
    $page = (int) $_GET['page']; // e.g., 2
    echo "You are on page: $page\n";
    // Output example: You are on page: 2
} else {
    echo "Please provide a page number in the URL.\n";
}
echo "\n\n";

/*
5. GET for Filtering Data (Multiple Values)
   - Menggunakan array di parameter GET.
   - URL Example: GET.php?category[]=Technology&category[]=Travel
*/
echo "5. GET for Filtering Data (Multiple Values)\n\n";
if (isset($_GET['category']) && is_array($_GET['category'])) {
    $categories = $_GET['category']; // e.g., ["Technology", "Travel"]
    echo "Selected categories:\n";
    foreach ($categories as $cat) {
        echo "- " . htmlspecialchars($cat) . "\n";
    }
    /*
    Output example:
    Selected categories:
    - Technology
    - Travel
    */
} else {
    echo "Please provide at least one category in the URL.\n";
}
echo "\n\n";

/*
6. GET with Search Functionality
   - Simulasi pencarian produk berdasarkan keyword.
   - URL Example: GET.php?search=phone
*/
echo "6. GET with Search Functionality\n\n";
if (isset($_GET['search'])) {
    $search   = strtolower(trim($_GET['search']));
    $products = ["laptop", "phone", "tablet", "smartwatch"];

    echo "Search results for '$search':\n";
    $found = false;
    foreach ($products as $product) {
        if (strpos($product, $search) !== false) {
            echo "- " . ucfirst($product) . "\n";
            $found = true;
        }
    }

    if (!$found) {
        echo "No products found.\n";
    }
    /*
    Output example:
    Search results for 'phone':
    - Phone
    */
} else {
    echo "Please provide a search term in the URL.\n";
}
