<?php
/*
$_COOKIE (Cookies in PHP)

Note:
- $_COOKIE adalah array asosiatif yang menyimpan data yang dikirim dari client (browser) ke server.
- Cookie digunakan untuk menyimpan informasi kecil di browser, seperti session ID, preferensi pengguna, atau login status.
- Cookie memiliki masa berlaku (expiry time).
*/

echo "-------------------- PHP \$_COOKIE Examples --------------------\n\n";

/*
1. Setting a Simple Cookie
   - Cookie disimpan di browser, lalu dikirim kembali ke server di setiap request.
*/
echo "1. Setting a Simple Cookie\n\n";
setcookie("userName", "Michael", time() + 3600, "/"); // Expires in 1 hour
echo "Cookie 'userName' set to 'Michael'. Please refresh the page to see it in \$_COOKIE.\n";
// Output example after refresh: Hello, Michael
echo "\n\n";

/*
2. Reading a Cookie
   - Mengakses nilai cookie yang telah dibuat sebelumnya.
*/
echo "2. Reading a Cookie\n\n";
if (isset($_COOKIE['userName'])) {
    echo "Hello, " . $_COOKIE['userName'] . "\n";
    // Output example: Hello, Michael
} else {
    echo "Cookie 'userName' not found.\n";
}
echo "\n\n";

/*
3. Setting Multiple Cookies
   - Menyimpan lebih dari satu data di browser.
*/
echo "3. Setting Multiple Cookies\n\n";
setcookie("userEmail", "michael@example.com", time() + 3600, "/");
setcookie("userRole", "Admin", time() + 3600, "/");
echo "Multiple cookies set: userEmail & userRole.\n";
/*
Output example after refresh:
userEmail = michael@example.com
userRole = Admin
*/
echo "\n\n";

/*
4. Cookie for Theme Preference (Web Development Use Case)
   - Menyimpan preferensi tema pengguna.
*/
echo "4. Cookie for Theme Preference\n\n";
setcookie("theme", "dark", time() + (86400 * 30), "/"); // 30 days
if (isset($_COOKIE['theme'])) {
    echo "User theme preference: " . $_COOKIE['theme'] . "\n";
    // Output example: User theme preference: dark
}
echo "\n\n";

/*
5. Updating a Cookie
   - Mengubah nilai cookie yang sudah ada.
*/
echo "5. Updating a Cookie\n\n";
setcookie("userName", "Sarah", time() + 3600, "/");
echo "Cookie 'userName' updated to 'Sarah'.\n";
// Output example after refresh: Hello, Sarah
echo "\n\n";

/*
6. Deleting a Cookie
   - Menghapus cookie dengan mengatur waktu kedaluwarsa di masa lalu.
*/
echo "6. Deleting a Cookie\n\n";
setcookie("userRole", "", time() - 3600, "/");
echo "Cookie 'userRole' deleted.\n";
/*
Output example after refresh:
userRole is no longer available in $_COOKIE
*/
echo "\n\n";

/*
7. Secure & HTTPOnly Cookie (Advanced Web Security)
   - Cookie yang hanya bisa diakses oleh server (tidak bisa diakses JavaScript).
   - Cocok untuk menyimpan session ID atau token.
*/
echo "7. Secure & HTTPOnly Cookie\n\n";
setcookie(
    "sessionToken",
    "ABC123XYZ789",
    [
        "expires" => time() + 3600,
        "path" => "/",
        "secure" => true,     // Only sent over HTTPS
        "httponly" => true,   // Not accessible by JavaScript
        "samesite" => "Strict"
    ]
);
echo "Secure & HTTPOnly cookie 'sessionToken' has been set.\n";
/*
Output example after refresh:
sessionToken exists but cannot be accessed via JavaScript
*/
echo "\n\n";
