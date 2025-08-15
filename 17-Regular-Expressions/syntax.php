<?php
/*
Regular Expressions Syntax (Sintaks Dasar) in PHP

Note:
- Regular Expression (RegEx) adalah pola yang digunakan untuk mencocokkan teks dalam string.
- Di PHP, pola RegEx umumnya ditulis di antara delimiter seperti /pattern/.
- RegEx sering digunakan dalam pengembangan web untuk validasi input, pencarian teks, dan pembersihan data.
- Fungsi utama yang digunakan: preg_match(), preg_match_all(), preg_replace().
*/

echo "-------------------- PHP Regular Expressions: Syntax --------------------\n\n";

/*
1. Simple Pattern Search
   - Mencari kata sederhana di dalam string.
*/
echo "1. Simple Pattern Search\n\n";
$name = "Hello John, welcome to our website.";
$pattern = "/John/";

if (preg_match($pattern, $name)) {
    echo "Pattern 'John' found in the text.\n";
    // Output: Pattern 'John' found in the text.
} else {
    echo "Pattern 'John' not found.\n";
}
echo "\n\n";

/*
2. Case-Insensitive Search
   - Pencarian kata tanpa memperdulikan huruf besar/kecil.
*/
echo "2. Case-Insensitive Search\n\n";
$name = "Hello ALICE, welcome to the dashboard.";
$pattern = "/alice/i"; // 'i' = case-insensitive

if (preg_match($pattern, $name)) {
    echo "Pattern 'alice' found (case-insensitive).\n";
    // Output: Pattern 'alice' found (case-insensitive).
}
echo "\n\n";

/*
3. Username Validation
   - Memastikan username hanya berisi huruf dan angka.
*/
echo "3. Username Validation\n\n";
$username = "Michael2025";
$pattern = "/^[A-Za-z0-9]+$/";

if (preg_match($pattern, $username)) {
    echo "Valid username format.\n";
    // Output: Valid username format.
} else {
    echo "Invalid username format.\n";
}
echo "\n\n";

/*
4. Email Validation
   - Memeriksa format email sederhana.
*/
echo "4. Email Validation\n\n";
$email = "sarah.connor@example.com";
$pattern = "/^[\w\.-]+@[\w\.-]+\.\w+$/";

if (preg_match($pattern, $email)) {
    echo "Valid email format.\n";
    // Output: Valid email format.
} else {
    echo "Invalid email format.\n";
}
echo "\n\n";

/*
5. Extract Numbers from HTML
   - Mengambil semua angka dari konten HTML.
*/
echo "5. Extract Numbers from HTML\n\n";
$htmlContent = "<p>Order ID: 4598, Price: $120</p>";
$pattern = "/\d+/";

if (preg_match_all($pattern, $htmlContent, $matches)) {
    echo "Numbers found: " . implode(", ", $matches[0]) . "\n";
    // Output: Numbers found: 4598, 120
}
echo "\n\n";

/*
6. URL Validation
   - Memeriksa format URL sederhana untuk input form.
*/
echo "6. URL Validation\n\n";
$url = "https://www.example.com/products?id=25";
$pattern = "/^(https?:\/\/)?([\w\-]+\.)+[a-z]{2,6}(\/[\w\-._~:\/?#[\]@!$&'()*+,;=]*)?$/i";

if (preg_match($pattern, $url)) {
    echo "Valid URL format.\n";
    // Output: Valid URL format.
} else {
    echo "Invalid URL format.\n";
}
echo "\n\n";

/*
7. Find HTML Tags
   - Menemukan semua tag HTML dalam sebuah string.
*/
echo "7. Find HTML Tags\n\n";
$htmlCode = "<h1>Welcome John</h1><p>This is your profile</p>";
$pattern = "/<[^>]+>/";

if (preg_match_all($pattern, $htmlCode, $matches)) {
    echo "HTML tags found: " . implode(", ", $matches[0]) . "\n";
    // Output: HTML tags found: <h1>, </h1>, <p>, </p>
}
echo "\n\n";

/*
8. Remove <script> Tags (Web Security)
   - Menghapus tag <script> untuk mencegah XSS.
*/
echo "8. Remove <script> Tags\n\n";
$htmlInput = "<p>Hello Michael</p><script>alert('Hacked!');</script>";
$pattern = "/<script.*?>.*?<\/script>/is";

$cleanHtml = preg_replace($pattern, "", $htmlInput);
echo "Clean HTML: $cleanHtml\n";
// Output: Clean HTML: <p>Hello Michael</p>
echo "\n\n";
