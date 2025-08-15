<?php
/*
PHP Regular Expression Grouping

Note:
- Grouping digunakan untuk mengelompokkan bagian pola regex dengan tanda kurung ().
- Berguna untuk:
  1. Mengatur prioritas pencocokan.
  2. Menggunakan quantifier pada grup tertentu.
  3. Menangkap grup untuk digunakan kembali.
- Urutan contoh: dari yang paling sederhana hingga yang lebih kompleks.
*/

echo "-------------------- PHP Regular Expression Grouping --------------------\n\n";

/*
1. Grouping Dasar
   - Mengelompokkan beberapa karakter menjadi satu unit.
*/
echo "1. Basic Grouping\n\n";
$name = "JohnSmith";
$pattern = "/(John|Jane)Smith/";

if (preg_match($pattern, $name)) {
    echo "Name matches either JohnSmith or JaneSmith.\n";
    // Output: Name matches either JohnSmith or JaneSmith
}
echo "\n\n";

/*
2. Grouping dengan Quantifier
   - Memberi quantifier pada hasil grouping.
*/
echo "2. Grouping with Quantifier\n\n";
$username = "MikeMikeMike";
$pattern = "/(Mike){3}/";

if (preg_match($pattern, $username)) {
    echo "Username contains 'Mike' repeated 3 times.\n";
    // Output: Username contains 'Mike' repeated 3 times
}
echo "\n\n";

/*
3. Nested Grouping (Grouping Bersarang)
   - Grup di dalam grup untuk pola lebih kompleks.
*/
echo "3. Nested Grouping\n\n";
$productCode = "ABC-123";
$pattern = "/(ABC-(\d{3}))/";

if (preg_match($pattern, $productCode, $matches)) {
    echo "Product code matches, full: {$matches[1]}, number part: {$matches[2]}.\n";
    // Output: Product code matches, full: ABC-123, number part: 123
}
echo "\n\n";

/*
4. Non-Capturing Group
   - Grup yang tidak menyimpan hasil pencocokan (?: ).
*/
echo "4. Non-Capturing Group\n\n";
$url = "https://example.com";
$pattern = "/https?:\/\/(?:www\.)?example\.com/";

if (preg_match($pattern, $url)) {
    echo "URL matches example.com with or without www.\n";
    // Output: URL matches example.com with or without www
}
echo "\n\n";

/*
5. Alternation dengan Grouping
   - Menggunakan grup untuk OR dengan beberapa pilihan.
*/
echo "5. Alternation with Grouping\n\n";
$page = "about-us";
$pattern = "/^(about|contact|services)-us$/";

if (preg_match($pattern, $page)) {
    echo "Page is either about-us, contact-us, or services-us.\n";
    // Output: Page is either about-us, contact-us, or services-us
}
echo "\n\n";

/*
6. Capture Multiple Groups
   - Mengambil beberapa bagian dari string menggunakan banyak grup.
*/
echo "6. Capture Multiple Groups\n\n";
$fullName = "Emma Watson";
$pattern = "/^(\w+)\s(\w+)$/";

if (preg_match($pattern, $fullName, $matches)) {
    echo "First name: {$matches[1]}, Last name: {$matches[2]}.\n";
    // Output: First name: Emma, Last name: Watson
}
echo "\n\n";

/*
7. Complex Grouping with Repetition
   - Pola kompleks untuk validasi input form.
*/
echo "7. Complex Grouping with Repetition\n\n";
$email = "james.bond007@example.com";
$pattern = "/^([a-zA-Z0-9]+(\.[a-zA-Z0-9]+)*)@([a-zA-Z0-9\-]+\.[a-z]{2,})$/";

if (preg_match($pattern, $email, $matches)) {
    echo "Local part: {$matches[1]}, Domain: {$matches[3]}.\n";
    // Output: Local part: james.bond007, Domain: example.com
}
echo "\n\n";
