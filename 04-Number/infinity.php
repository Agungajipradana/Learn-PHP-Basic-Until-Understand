<?php

/*
Infinity di PHP terjadi saat angka melebihi batas maksimum tipe float.
Biasanya dihasilkan dari perhitungan besar, pembagian dengan nol, atau eksponen tinggi.
Konsep ini penting untuk memvalidasi nilai ekstrem atau mencegah crash dalam aplikasi web.
*/

echo "--------------------------------------------------- Infinity in PHP ---------------------------------------------------\n\n";

/*
1. Menyimpan nilai infinity dari ekspresi besar
   - Terjadi jika angka melebihi batas maksimum float.
*/

echo "1. Basic Infinity\n\n";

$largeNumber = 1.9e308; // Lebih besar dari batas maksimum float
var_dump($largeNumber); // Output: float(INF)
echo "\n";

/*
2. Pembagian aman terhadap nol
   - Hindari DivisionByZeroError dengan validasi sebelum membagi.
*/

echo "2. Safe Division Check\n\n";

$number = 100;
$divider = 0;

if ($divider == 0) {
    echo "Cannot divide by zero.\n";
    $result = INF; // Atur hasil ke infinity secara manual jika perlu
} else {
    $result = $number / $divider;
}

var_dump($result);
echo "\n";

/*
3. Mengecek apakah nilai adalah infinity dengan is_infinite()
   - Validasi penting saat menerima input besar dari user/API.
*/

echo "3. is_infinite() Check\n\n";

$value = 1.0e309;
if (is_infinite($value)) {
    echo "The value is infinite.\n";
}
echo "\n";

/*
4. Infinity digunakan sebagai batas maksimum
   - Berguna untuk set nilai "tanpa batas" dalam sistem seperti filter, pagination, limit kuota, dsb.
*/

echo "4. Unlimited Limit Example\n\n";

$limit = INF; // Tidak ada batas

$used = 2000;
if ($used < $limit) {
    echo "Usage within unlimited limit: $used units used\n";
}
echo "\n";

/*
5. Menghindari infinity dalam perhitungan aplikasi web
   - Validasi input numerik agar tidak menghancurkan kalkulasi logika.
*/

echo "5. Preventing Infinity in Calculation\n\n";

function calculateDiscount($price, $discountPercent)
{
    if ($discountPercent == 100) {
        return 0;
    }

    $discount = $price * ($discountPercent / 100);
    $final = $price - $discount;

    if (is_infinite($final)) {
        return "Invalid price calculation";
    }

    return $final;
}

echo "Discounted Price: " . calculateDiscount(9999999999999999, 10) . "\n\n";

/*
6. Infinity sebagai error flag (misalnya hasil invalid dari API atau input tidak sah)
   - Berguna untuk debugging atau fallback jika hitungan keluar dari batas.
*/

echo "6. Infinity as Error Flag\n\n";

function getUploadQuota($userType)
{
    if ($userType === "premium") {
        return INF; // Unlimited
    } else {
        return 1000; // Regular limit
    }
}

$quota = getUploadQuota("premium");
if (is_infinite($quota)) {
    echo "You have unlimited upload quota.\n";
}
echo "\n";
