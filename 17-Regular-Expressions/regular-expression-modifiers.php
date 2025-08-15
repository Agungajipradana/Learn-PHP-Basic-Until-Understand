<?php
/*
Regular Expression Modifiers in PHP

Note:
- Modifiers digunakan untuk mengubah cara pencocokan pola dalam Regular Expressions.
- Beberapa modifier yang umum digunakan:
  1. i → Case-insensitive (abaikan huruf besar/kecil)
  2. m → Multiline mode (awal/akhir (^ dan $) berlaku di setiap baris)
  3. u → UTF-8 mode (pencocokan karakter Unicode dengan benar)
- Berguna dalam pengembangan web untuk validasi form, pencarian teks multi-baris, atau dukungan bahasa internasional.
*/

echo "-------------------- PHP Regular Expression Modifiers --------------------\n\n";

/*
1. Modifier i (Case-insensitive Search)
   - Pencarian tanpa memperhatikan huruf besar atau kecil.
*/
echo "1. Modifier i (Case-insensitive Search)\n\n";
$name = "HELLO John";
$pattern = "/hello/i"; // 'i' = ignore case

if (preg_match($pattern, $name)) {
    echo "Pattern 'hello' found (case-insensitive).\n";
    // Output: Pattern 'hello' found (case-insensitive).
}
echo "\n\n";

/*
2. Modifier i (Case-insensitive Username Check)
   - Memvalidasi username tanpa peduli kapitalisasi huruf.
*/
echo "2. Modifier i (Case-insensitive Username Check)\n\n";
$username = "Michael2025";
$pattern = "/^michael[0-9]+$/i"; // Terima 'Michael', 'michael', 'MICHAEL' dst.

if (preg_match($pattern, $username)) {
    echo "Valid username (case-insensitive).\n";
    // Output: Valid username (case-insensitive).
} else {
    echo "Invalid username.\n";
}
echo "\n\n";

/*
3. Modifier m (Multiline Mode)
   - Mencocokkan pola di awal (^) atau akhir ($) pada setiap baris.
*/
echo "3. Modifier m (Multiline Mode)\n\n";
$multiLineText = "Welcome John\nHello Sarah\nHi Michael";
$pattern = "/^Hello/m"; // ^Hello di awal setiap baris

if (preg_match_all($pattern, $multiLineText, $matches)) {
    echo "Matches found: " . implode(", ", $matches[0]) . "\n";
    // Output: Matches found: Hello Sarah
}
echo "\n\n";

/*
4. Modifier m (Find All Lines Ending with 'n')
   - Menemukan semua baris yang diakhiri huruf 'n'.
*/
echo "4. Modifier m (Find All Lines Ending with 'n')\n\n";
$multiLineText = "John\nAlice\nEthan\nMichael";
$pattern = "/n$/m"; // $n di akhir baris

if (preg_match_all($pattern, $multiLineText, $matches)) {
    echo "Lines ending with 'n': " . count($matches[0]) . "\n";
    // Output: Lines ending with 'n': 2
}
echo "\n\n";

/*
5. Modifier u (UTF-8 Unicode Matching)
   - Pencarian kata dengan karakter non-ASCII (contoh: é, ñ, ü).
*/
echo "5. Modifier u (UTF-8 Unicode Matching)\n\n";
$text = "I love café and jalapeño.";
$pattern = "/café/u"; // Tanpa 'u', pola bisa gagal pada beberapa server

if (preg_match($pattern, $text)) {
    echo "The word 'café' was found (UTF-8 mode).\n";
    // Output: The word 'café' was found (UTF-8 mode).
}
echo "\n\n";

/*
6. Modifier u (Validate International Name)
   - Memastikan nama mengandung huruf Unicode (misal: nama beraksen).
*/
echo "6. Modifier u (Validate International Name)\n\n";
$name = "José";
$pattern = "/^[\p{L}]+$/u";
// \p{L} → semua huruf dalam Unicode
// 'u' → memastikan pencocokan UTF-8

if (preg_match($pattern, $name)) {
    echo "Valid international name.\n";
    // Output: Valid international name.
} else {
    echo "Invalid name format.\n";
}
echo "\n\n";
