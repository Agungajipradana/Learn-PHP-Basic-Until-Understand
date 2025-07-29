<?php

/*
NaN (Not a Number) adalah nilai khusus dalam PHP yang menunjukkan hasil operasi numerik yang tidak valid.
NaN biasanya dihasilkan saat menggunakan operasi matematika yang tidak terdefinisi, seperti akar kuadrat dari bilangan negatif.
*/

echo "--------------------------------------------------- NaN in PHP ---------------------------------------------------\n\n";

/*
1. Menghasilkan NaN dengan sqrt() dari angka negatif
   - Ini adalah cara paling umum menghasilkan NaN dalam PHP.
*/

echo "1. Basic NaN Example\n\n";

$value = sqrt(-1);
var_dump($value); // Output: float(NAN)
echo "\n";

/*
2. Cek apakah nilai adalah NaN dengan is_nan()
   - Berguna saat memvalidasi hasil perhitungan dari input user atau API.
*/

echo "2. is_nan() Check\n\n";

$check = acos(2); // acos() diluar rentang valid (-1 hingga 1)
if (is_nan($check)) {
    echo "Value is not a number (NaN).\n";
}
echo "\n";

/*
3. Operasi matematis yang menghasilkan NaN
   - Beberapa fungsi trigonometri atau logaritma dengan input salah bisa menghasilkan NaN.
*/

echo "3. Invalid Math Operation\n\n";

$invalidLog = log(-10); // log negatif tidak terdefinisi
var_dump($invalidLog); // Output: float(NAN)
echo "\n";

/*
4. Validasi hasil perhitungan dalam form (misalnya hitung diskon)
   - Penting untuk mengecek agar tidak menyimpan nilai NaN ke database.
*/

echo "4. Validate User Calculation Result\n\n";

$discount = -20;
$price = 100;

$final = $price - ($price * ($discount / 100)); // diskon negatif
if (is_nan($final)) {
    echo "Invalid discount calculation detected.\n";
} else {
    echo "Final Price: $final\n";
}
echo "\n";

/*
5. NaN dalam array / data batch
   - Digunakan untuk membersihkan data yang error sebelum diproses lebih lanjut.
*/

echo "5. Clean Invalid Data from Array\n\n";

$inputs = [200, NAN, 150, 0, sqrt(-1)];
$valid = [];

foreach ($inputs as $item) {
    if (!is_nan($item)) {
        $valid[] = $item;
    }
}

echo "Valid Data: ";
print_r($valid);
echo "\n";

/*
6. NaN sebagai tanda error dalam API
   - Beberapa API bisa mengembalikan NaN jika ada error dalam perhitungan matematis.
   - Harus divalidasi sebelum diproses ke dalam logika bisnis.
*/

echo "6. Handle NaN from External Source\n\n";

function getApiCalculationResult()
{
    return log(-5); // mensimulasikan respons error dari API
}

$result = getApiCalculationResult();
if (is_nan($result)) {
    echo "API returned invalid result (NaN).\n";
} else {
    echo "API Result: $result\n";
}
echo "\n";
