<?php
/*
$_SESSION (Sessions in PHP)

Note:
- $_SESSION adalah array asosiatif untuk menyimpan data user di server.
- Session berbeda dengan cookie, karena data disimpan di server, bukan di browser.
- Session sangat berguna untuk login, shopping cart, atau menyimpan preferensi pengguna.
- Pastikan session_start() selalu dipanggil sebelum menggunakan $_SESSION.
*/

// Start the session
session_start();

echo "-------------------- PHP \$_SESSION Examples --------------------\n\n";

/*
1. Setting a Simple Session
   - Menyimpan data user di session.
*/
echo "1. Setting a Simple Session\n\n";
$_SESSION["userName"] = "Michael";
echo "Session 'userName' set to 'Michael'.\n";
// Output example: Hello, Michael
echo "\n\n";

/*
2. Reading a Session
   - Mengambil data session yang telah dibuat.
*/
echo "2. Reading a Session\n\n";
if (isset($_SESSION["userName"])) {
    echo "Hello, " . $_SESSION["userName"] . "\n";
    // Output example: Hello, Michael
} else {
    echo "No session data found for 'userName'.\n";
}
echo "\n\n";

/*
3. Storing Multiple Data in Session
   - Menyimpan beberapa informasi pengguna.
*/
echo "3. Storing Multiple Data in Session\n\n";
$_SESSION["userEmail"] = "michael@example.com";
$_SESSION["userRole"] = "Admin";
echo "Multiple session values stored: userEmail & userRole.\n";
/*
Output example:
userEmail = michael@example.com
userRole = Admin
*/
echo "\n\n";

/*
4. Session for Shopping Cart (Web Development Use Case)
   - Menyimpan daftar belanja user.
*/
echo "4. Session for Shopping Cart\n\n";
$_SESSION["cartItems"] = ["Laptop", "Wireless Mouse", "USB-C Hub"];
echo "Items in cart: " . implode(", ", $_SESSION["cartItems"]) . "\n";
/*
Output example:
Items in cart: Laptop, Wireless Mouse, USB-C Hub
*/
echo "\n\n";

/*
5. Updating a Session Value
   - Mengubah nilai session yang sudah ada.
*/
echo "5. Updating a Session Value\n\n";
$_SESSION["userName"] = "Sarah";
echo "Session 'userName' updated to 'Sarah'.\n";
// Output example: Hello, Sarah
echo "\n\n";

/*
6. Removing a Specific Session Value
   - Menghapus salah satu data dari session.
*/
echo "6. Removing a Specific Session Value\n\n";
unset($_SESSION["userRole"]);
echo "Session 'userRole' removed.\n";
/*
Output example:
userRole no longer exists in $_SESSION
*/
echo "\n\n";

/*
7. Destroying All Session Data (Advanced)
   - Menghapus semua data session dan mengakhiri session.
*/
echo "7. Destroying All Session Data\n\n";
session_unset();    // Remove all session variables
session_destroy();  // Destroy the session
echo "All session data destroyed.\n";
/*
Output example:
All session data destroyed. New requests will not have old session values.
*/
echo "\n\n";
