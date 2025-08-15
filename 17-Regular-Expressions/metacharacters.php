<?php
/*
Metacharacters in PHP Regular Expressions

Note:
- Metacharacters adalah karakter khusus di regex yang punya arti spesifik.
- Sangat berguna untuk validasi form, pencarian teks, dan manipulasi data di web development.
- Urutan contoh: dari yang paling sederhana hingga yang lebih kompleks.
*/

echo "-------------------- PHP Regular Expression Metacharacters --------------------\n\n";

/*
1. Dot (.)
   - Mencocokkan karakter apapun kecuali newline.
*/
echo "1. Dot (.) - Any Single Character\n\n";
$username = "John_123";
$pattern = "/John.123/";

if (preg_match($pattern, $username)) {
    echo "Username matches the pattern.\n";
    // Output: Username matches the pattern
}
echo "\n\n";

/*
2. Caret (^)
   - Mencocokkan pola di awal string.
*/
echo "2. Caret (^) - Match at the Beginning\n\n";
$email = "admin@example.com";
$pattern = "/^admin/";

if (preg_match($pattern, $email)) {
    echo "Email starts with 'admin'.\n";
    // Output: Email starts with 'admin'
}
echo "\n\n";

/*
3. Dollar Sign ($)
   - Mencocokkan pola di akhir string.
*/
echo "3. Dollar Sign ($) - Match at the End\n\n";
$url = "https://mywebsite.com";
$pattern = "/\.com$/";

if (preg_match($pattern, $url)) {
    echo "URL ends with .com.\n";
    // Output: URL ends with .com
}
echo "\n\n";

/*
4. Star (*)
   - Mencocokkan nol atau lebih karakter sebelumnya.
*/
echo "4. Star (*) - Zero or More Occurrences\n\n";
$productCode = "ABC123";
$pattern = "/ABC\d*/";

if (preg_match($pattern, $productCode)) {
    echo "Product code is valid.\n";
    // Output: Product code is valid
}
echo "\n\n";

/*
5. Plus (+)
   - Mencocokkan satu atau lebih karakter sebelumnya.
*/
echo "5. Plus (+) - One or More Occurrences\n\n";
$comment = "Niceeee!";
$pattern = "/Nice+!/";

if (preg_match($pattern, $comment)) {
    echo "Comment contains extended 'Nice'.\n";
    // Output: Comment contains extended 'Nice'
}
echo "\n\n";

/*
6. Question Mark (?)
   - Mencocokkan nol atau satu karakter sebelumnya (opsional).
*/
echo "6. Question Mark (?) - Optional Character\n\n";
$color = "color";
$pattern = "/colou?r/";

if (preg_match($pattern, $color)) {
    echo "Color spelling is valid (US or UK).\n";
    // Output: Color spelling is valid (US or UK)
}
echo "\n\n";

/*
7. Braces ({n,m})
   - Mencocokkan jumlah karakter dalam rentang tertentu.
*/
echo "7. Braces ({n,m}) - Specific Range of Occurrences\n\n";
$orderId = "ORD999";
$pattern = "/ORD\d{3}/";

if (preg_match($pattern, $orderId)) {
    echo "Order ID format is correct.\n";
    // Output: Order ID format is correct
}
echo "\n\n";

/*
8. Square Brackets ([ ])
   - Mencocokkan satu karakter dari daftar yang diizinkan.
*/
echo "8. Square Brackets ([ ]) - Character Set\n\n";
$page = "page5";
$pattern = "/page[1-9]/";

if (preg_match($pattern, $page)) {
    echo "Page number is valid.\n";
    // Output: Page number is valid
}
echo "\n\n";

/*
9. Pipe (|)
   - Berfungsi sebagai operator OR.
*/
echo "9. Pipe (|) - Alternation\n\n";
$role = "admin";
$pattern = "/admin|editor/";

if (preg_match($pattern, $role)) {
    echo "User role is admin or editor.\n";
    // Output: User role is admin or editor
}
echo "\n\n";

/*
10. Backslash (\)
    - Meng-escape karakter khusus agar dianggap literal.
*/
echo "10. Backslash (\\) - Escape Special Character\n\n";
$price = "$100";
$pattern = "/\$100/";

if (preg_match($pattern, $price)) {
    echo "Price matches exactly $100.\n";
    // Output: Price matches exactly $100
}
echo "\n\n";
