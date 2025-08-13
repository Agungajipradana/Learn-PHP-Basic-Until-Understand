<?php
/*
Anonymous Functions (Closure) adalah fungsi tanpa nama yang disimpan di dalam variabel 
atau langsung digunakan sebagai argumen. Sangat berguna untuk operasi singkat 
atau ketika kita ingin membuat fungsi "on the fly" tanpa mendeklarasikannya secara global.

Contoh di bawah disusun dari yang paling sederhana hingga lebih kompleks, relevan untuk pengembangan web.
*/

echo "-------------------------------- Anonymous Functions --------------------------------\n\n";

/*
1. Basic Anonymous Function
   Menampilkan pesan sambutan.
*/
$welcomeMessage = function () {
    return "Welcome to TechWorld!";
};
echo $welcomeMessage(); // Output: Welcome to TechWorld!

echo "\n\n";

/*
2. Anonymous Function with Parameters
   Menampilkan salam personal.
*/
$greetUser = function (string $name) {
    return "Hello, $name!";
};
echo $greetUser("Emma"); // Output: Hello, Emma!

echo "\n\n";

/*
3. Anonymous Function with Multiple Parameters
   Menghitung total harga produk.
*/
$calculateTotal = function (float $price, int $quantity) {
    return $price * $quantity;
};
echo "Total: $" . $calculateTotal(49.99, 3); // Output: Total: $149.97

echo "\n\n";

/*
4. Passing Anonymous Function as Argument
   Memproses daftar nama user dan mengubah semua menjadi huruf besar.
*/
function processUsers(array $users, callable $callback)
{
    $processed = [];
    foreach ($users as $user) {
        $processed[] = $callback($user);
    }
    return $processed;
}

$users = ["Emma", "John", "Lucas"];
$uppercasedUsers = processUsers($users, function ($name) {
    return strtoupper($name);
});
echo "Uppercased Users: " . implode(", ", $uppercasedUsers);
// Output: Uppercased Users: EMMA, JOHN, LUCAS

echo "\n\n";

/*
5. Using Anonymous Function with array_map
   Menghasilkan URL profil user.
*/
$usernames = ["emma", "john", "lucas"];
$profileUrls = array_map(function ($username) {
    return "/profile/" . urlencode($username);
}, $usernames);

echo "Profile URLs: " . implode(", ", $profileUrls);
// Output: Profile URLs: /profile/emma, /profile/john, /profile/lucas

echo "\n\n";

/*
6. Anonymous Function Using 'use' Keyword
   Mengakses variabel luar di dalam fungsi anonim.
*/
$discountPercent = 10;
$applyDiscount = function (float $price) use ($discountPercent) {
    return $price - ($price * $discountPercent / 100);
};
echo "Discounted Price: $" . $applyDiscount(200); // Output: Discounted Price: $180

echo "\n\n";

/*
7. Complex Example - Filtering Active Users
   Menggunakan fungsi anonim untuk memfilter data user.
*/
$usersData = [
    ["name" => "Emma", "active" => true],
    ["name" => "John", "active" => false],
    ["name" => "Lucas", "active" => true]
];

$activeUsers = array_filter($usersData, function ($user) {
    return $user["active"] === true;
});

foreach ($activeUsers as $user) {
    echo "Active User: " . $user["name"] . "\n";
}
// Output:
// Active User: Emma
// Active User: Lucas
