<?php
/*
Quantifiers in PHP Regular Expressions

Note:
- Quantifiers digunakan di regex untuk menentukan berapa kali sebuah karakter atau grup harus muncul.
- Sangat berguna untuk validasi form, pencarian teks, dan manipulasi data di web development.
- Urutan contoh: dari yang paling sederhana hingga yang lebih kompleks.
*/

echo "-------------------- PHP Regular Expression Quantifiers --------------------\n\n";

/*
1. Asterisk (*) - Zero or More Occurrences
   - Mencocokkan nol atau lebih karakter sebelumnya.
*/
echo "1. Asterisk (*) - Zero or More Occurrences\n\n";
$username = "Mike";
$pattern = "/Mi*k/";

if (preg_match($pattern, $username)) {
    echo "Username matches the pattern.\n";
    // Output: Username matches the pattern
}
echo "\n\n";

/*
2. Plus (+) - One or More Occurrences
   - Mencocokkan satu atau lebih karakter sebelumnya.
*/
echo "2. Plus (+) - One or More Occurrences\n\n";
$comment = "Good!!!";
$pattern = "/Good!+/";

if (preg_match($pattern, $comment)) {
    echo "Comment contains enthusiastic exclamation.\n";
    // Output: Comment contains enthusiastic exclamation
}
echo "\n\n";

/*
3. Question Mark (?) - Zero or One Occurrence
   - Mencocokkan nol atau satu karakter sebelumnya (opsional).
*/
echo "3. Question Mark (?) - Zero or One Occurrence\n\n";
$color = "color";
$pattern = "/colou?r/";

if (preg_match($pattern, $color)) {
    echo "Color spelling is valid (US or UK).\n";
    // Output: Color spelling is valid (US or UK)
}
echo "\n\n";

/*
4. Exact Braces ({n}) - Exact Number of Occurrences
   - Mencocokkan karakter sebelumnya sebanyak n kali.
*/
echo "4. Exact Braces ({n}) - Exact Number of Occurrences\n\n";
$productId = "AB123";
$pattern = "/AB\d{3}/";

if (preg_match($pattern, $productId)) {
    echo "Product ID format is correct.\n";
    // Output: Product ID format is correct
}
echo "\n\n";

/*
5. Range Braces ({n,m}) - Range of Occurrences
   - Mencocokkan jumlah karakter dalam rentang tertentu.
*/
echo "5. Range Braces ({n,m}) - Range of Occurrences\n\n";
$orderCode = "XYZ9999";
$pattern = "/XYZ\d{2,4}/";

if (preg_match($pattern, $orderCode)) {
    echo "Order code format is valid.\n";
    // Output: Order code format is valid
}
echo "\n\n";

/*
6. Open-Ended Braces ({n,}) - Minimum Number of Occurrences
   - Mencocokkan minimal n kali atau lebih.
*/
echo "6. Open-Ended Braces ({n,}) - Minimum Number of Occurrences\n\n";
$password = "Secret1234";
$pattern = "/[A-Za-z0-9]{8,}/";

if (preg_match($pattern, $password)) {
    echo "Password meets the minimum length requirement.\n";
    // Output: Password meets the minimum length requirement
}
echo "\n\n";

/*
7. Lazy Quantifier (*?, +?, ??)
   - Mencocokkan seminimal mungkin.
*/
echo "7. Lazy Quantifier (*?, +?, ??) - Minimal Match\n\n";
$html = "<p>Hello World</p>";
$pattern = "/<p>.*?<\/p>/";

if (preg_match($pattern, $html, $matches)) {
    echo "Found minimal HTML paragraph: " . $matches[0] . "\n";
    // Output: Found minimal HTML paragraph: <p>Hello World</p>
}
echo "\n\n";

/*
8. Greedy Quantifier (*, +, ? without ?)
   - Mencocokkan sebanyak mungkin.
*/
echo "8. Greedy Quantifier (*, +, ?) - Maximum Match\n\n";
$html = "<p>Hello</p><p>World</p>";
$pattern = "/<p>.*<\/p>/";

if (preg_match($pattern, $html, $matches)) {
    echo "Found greedy match: " . $matches[0] . "\n";
    // Output: Found greedy match: <p>Hello</p><p>World</p>
}
echo "\n\n";
