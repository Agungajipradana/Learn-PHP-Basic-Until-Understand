<?php
/*
Regular Expression Patterns in PHP

Note:
- Patterns adalah inti dari Regular Expressions yang digunakan untuk mencocokkan teks sesuai aturan tertentu.
- Sangat berguna dalam pengembangan web untuk validasi form, pencarian teks, dan pemrosesan data.
- Urutan contoh: dari yang paling sederhana hingga yang lebih kompleks.
*/

echo "-------------------- PHP Regular Expression Patterns --------------------\n\n";

/*
1. Basic Literal Match
   - Mencari teks yang persis sama.
*/
echo "1. Basic Literal Match\n\n";
$text = "Hello John, welcome to our website.";
$pattern = "/John/";

if (preg_match($pattern, $text)) {
    echo "The name 'John' was found.\n";
    // Output: The name 'John' was found.
}
echo "\n\n";

/*
2. Dot (.) - Any Single Character
   - Mencocokkan karakter apapun (kecuali newline).
*/
echo "2. Dot (.) - Any Single Character\n\n";
$email = "mike1@example.com";
$pattern = "/mike.@example\.com/";

if (preg_match($pattern, $email)) {
    echo "Match found with one character after 'mike'.\n";
    // Output: Match found with one character after 'mike'.
}
echo "\n\n";

/*
3. Character Classes []
   - Menentukan daftar karakter yang diperbolehkan.
*/
echo "3. Character Classes []\n\n";
$username = "David99";
$pattern = "/^[A-Za-z0-9]+$/"; // hanya huruf & angka

if (preg_match($pattern, $username)) {
    echo "Valid username.\n";
    // Output: Valid username.
}
echo "\n\n";

/*
4. Negated Character Classes [^]
   - Menolak karakter tertentu.
*/
echo "4. Negated Character Classes [^]\n\n";
$input = "Password123!";
$pattern = "/[^A-Za-z0-9]/"; // cari karakter selain huruf & angka

if (preg_match($pattern, $input)) {
    echo "Password contains special characters.\n";
    // Output: Password contains special characters.
}
echo "\n\n";

/*
5. Quantifiers (*, +, ?, {n})
   - Menentukan jumlah karakter yang dicocokkan.
*/
echo "5. Quantifiers (*, +, ?, {n})\n\n";
$phone = "555-1234";
$pattern = "/[0-9]{3}-[0-9]{4}/"; // format: 3 digit - 4 digit

if (preg_match($pattern, $phone)) {
    echo "Valid phone number format.\n";
    // Output: Valid phone number format.
}
echo "\n\n";

/*
6. Alternation (|)
   - Memilih salah satu pola.
*/
echo "6. Alternation (|)\n\n";
$text = "Hello Sarah";
$pattern = "/Sarah|Michael/";

if (preg_match($pattern, $text)) {
    echo "Either 'Sarah' or 'Michael' found.\n";
    // Output: Either 'Sarah' or 'Michael' found.
}
echo "\n\n";

/*
7. Anchors (^ and $)
   - Mencocokkan di awal (^) atau akhir ($) string.
*/
echo "7. Anchors (^ and $)\n\n";
$url = "https://example.com";
$pattern = "/^https:\/\//"; // harus diawali dengan https://

if (preg_match($pattern, $url)) {
    echo "URL starts with https://\n";
    // Output: URL starts with https://
}
echo "\n\n";

/*
8. Grouping and Capturing ( )
   - Mengelompokkan bagian pola untuk referensi atau pengelompokan.
*/
echo "8. Grouping and Capturing ( )\n\n";
$htmlTag = "<h1>Welcome</h1>";
$pattern = "/<h1>(.*?)<\/h1>/"; // menangkap teks di dalam <h1>

if (preg_match($pattern, $htmlTag, $matches)) {
    echo "Captured text: " . $matches[1] . "\n";
    // Output: Captured text: Welcome
}
echo "\n\n";

/*
9. Lookahead (?=...) & Negative Lookahead (?!...)
   - Mencocokkan pola hanya jika diikuti/ tidak diikuti pola lain.
*/
echo "9. Lookahead (?=...) & Negative Lookahead (?!...)\n\n";
$password = "Secret123";
$pattern = "/^(?=.*[A-Z])(?=.*[0-9]).+$/";
// Harus ada minimal satu huruf besar dan satu angka

if (preg_match($pattern, $password)) {
    echo "Password meets security requirements.\n";
    // Output: Password meets security requirements.
}
echo "\n\n";

/*
10. Complex Pattern: Email Validation
    - Memadukan karakter classes, quantifiers, dan anchors.
*/
echo "10. Complex Pattern: Email Validation\n\n";
$email = "emily.smith@example.co.uk";
$pattern = "/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/";

if (preg_match($pattern, $email)) {
    echo "Valid email address.\n";
    // Output: Valid email address.
}
echo "\n\n";
