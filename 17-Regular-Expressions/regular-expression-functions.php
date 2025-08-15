<?php
/*
Regular Expression Functions in PHP

Note:
- Regular Expression (RegEx) digunakan untuk pencarian, validasi, dan manipulasi teks dalam string.
- Fungsi utama yang digunakan:
  1. preg_match()      → Mencari pola pertama yang cocok.
  2. preg_match_all()  → Mencari semua pola yang cocok.
  3. preg_replace()    → Mengganti teks yang cocok dengan teks lain.
- Cocok digunakan pada pengembangan web untuk validasi form, pembersihan data HTML, atau pencarian teks spesifik.
*/

echo "-------------------- PHP Regular Expression Functions --------------------\n\n";

/*
1. preg_match() - Simple Word Search
   - Mencari kata tertentu dalam teks.
*/
echo "1. preg_match() - Simple Word Search\n\n";
$name = "Hello John, welcome to our platform.";
$pattern = "/John/";

if (preg_match($pattern, $name)) {
    echo "The name 'John' was found in the text.\n";
    // Output: The name 'John' was found in the text.
} else {
    echo "The name 'John' was not found.\n";
}
echo "\n\n";

/*
2. preg_match() - Email Validation
   - Memeriksa format email sederhana.
*/
echo "2. preg_match() - Email Validation\n\n";
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
3. preg_match_all() - Find All Digits
   - Mengambil semua angka dari string.
*/
echo "3. preg_match_all() - Find All Digits\n\n";
$text = "Order ID: 4598, Price: $120, Quantity: 3";
$pattern = "/\d+/";

if (preg_match_all($pattern, $text, $matches)) {
    echo "Numbers found: " . implode(", ", $matches[0]) . "\n";
    // Output: Numbers found: 4598, 120, 3
}
echo "\n\n";

/*
4. preg_match_all() - Extract All HTML Tags
   - Mengambil semua tag HTML dari string.
*/
echo "4. preg_match_all() - Extract All HTML Tags\n\n";
$htmlContent = "<h1>Welcome Michael</h1><p>Your order is ready</p>";
$pattern = "/<[^>]+>/";

if (preg_match_all($pattern, $htmlContent, $matches)) {
    echo "HTML tags found: " . implode(", ", $matches[0]) . "\n";
    // Output: HTML tags found: <h1>, </h1>, <p>, </p>
}
echo "\n\n";

/*
5. preg_replace() - Simple Text Replacement
   - Mengganti kata tertentu dalam string.
*/
echo "5. preg_replace() - Simple Text Replacement\n\n";
$text = "I like cats.";
$pattern = "/cats/";
$newText = preg_replace($pattern, "dogs", $text);

echo "Updated text: $newText\n";
// Output: Updated text: I like dogs.
echo "\n\n";

/*
6. preg_replace() - Remove Extra Spaces (Web Form Cleaning)
   - Menghapus spasi ganda dalam input form.
*/
echo "6. preg_replace() - Remove Extra Spaces\n\n";
$userInput = "This   is   a    test.";
$pattern = "/\s+/"; // \s+ → satu atau lebih spasi
$cleanText = preg_replace($pattern, " ", $userInput);

echo "Cleaned text: $cleanText\n";
// Output: Cleaned text: This is a test.
echo "\n\n";

/*
7. preg_replace() - Remove <script> Tags (Security)
   - Menghapus script untuk mencegah XSS.
*/
echo "7. preg_replace() - Remove <script> Tags\n\n";
$htmlInput = "<p>Hello Sarah</p><script>alert('Hacked!');</script>";
$pattern = "/<script.*?>.*?<\/script>/is";
$cleanHtml = preg_replace($pattern, "", $htmlInput);

echo "Clean HTML: $cleanHtml\n";
// Output: Clean HTML: <p>Hello Sarah</p>
echo "\n\n";
