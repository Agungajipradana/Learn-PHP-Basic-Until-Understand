<?php

/*
PHP Conditional Assignment Operators
Digunakan untuk menetapkan nilai berdasarkan kondisi.
Digunakan untuk:
- Menyederhanakan if-else
- Menangani nilai default
- Validasi input form
- Mengatur fallback pada sistem konfigurasi

Operator:
- ?:  (Ternary)
- ??  (Null Coalescing)
*/

echo "-------------------- PHP Conditional Assignment Operators --------------------\n\n";

/*
1. Ternary operator dasar (?:)
   - Menentukan status user berdasarkan login.
   - Cocok untuk tampilan UI yang berubah tergantung kondisi login.
*/

$isLoggedIn = true;
$status = $isLoggedIn ? "Online" : "Offline";
echo "1. User status: $status\n"; // Output: Online

echo "\n";

/*
2. Ternary operator dengan angka
   - Menentukan kategori berdasarkan umur.
   - Digunakan pada form registrasi atau fitur pembatasan usia.
*/

$age = 17;
$category = ($age >= 18) ? "Adult" : "Teenager";
echo "2. User category: $category\n"; // Output: Teenager

echo "\n";

/*
3. Ternary nested sederhana
   - Memberi label akses user: Admin, Editor, atau Guest.
   - Cocok untuk sistem role-based access control.
*/

$role = "editor";

$accessLevel = ($role === "admin") ? "Full Access"
    : (($role === "editor") ? "Partial Access" : "Limited Access");

echo "3. Access level: $accessLevel\n"; // Output: Partial Access

echo "\n";

/*
4. Null Coalescing Operator (??)
   - Menetapkan nilai default jika variabel tidak diset (null).
   - Berguna untuk input form, config file, dan pengaturan opsional.
*/

$userInput = null;
$defaultName = "Guest";
$name = $userInput ?? $defaultName;

echo "4. Username: $name\n"; // Output: Guest

echo "\n";

/*
5. Null Coalescing dengan array config
   - Mengambil pengaturan dari config, fallback ke default jika tidak ada.
   - Relevan dalam pengembangan sistem konfigurasi atau ENV.
*/

$config = [
    "timezone" => "Asia/Jakarta"
];

$selectedLang = $config["language"] ?? "en";
$selectedZone = $config["timezone"] ?? "UTC";

echo "5. Language: $selectedLang\n";  // Output: en
echo "   Timezone: $selectedZone\n"; // Output: Asia/Jakarta

echo "\n";

/*
6. Kombinasi ternary dan null coalescing
   - Memilih nama tampilan user jika tersedia, jika tidak ambil nama asli, jika tidak ada semua tampilkan 'Anonymous'.
   - Umum dalam fitur profile user.
*/

$profileName = null;
$realName = "Charlotte";

$displayName = $profileName ?? ($realName ?? "Anonymous");
echo "6. Display name: $displayName\n"; // Output: Charlotte
