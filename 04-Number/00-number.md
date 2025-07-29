# Number (Tipe Angka) dalam PHP

Tipe data angka (`number`) di PHP digunakan untuk menyimpan nilai berupa bilangan. PHP membaginya menjadi beberapa tipe utama:

- **Integer** → Bilangan bulat
- **Float** (atau Double) → Bilangan desimal
- **Infinity** → Nilai tak hingga
- **NaN** (Not a Number) → Hasil operasi matematika yang tidak valid
- **Numerical Strings** → String yang berisi angka
- **Casting** → Mengubah tipe data menjadi integer

---

## 1. Integer

Tipe data `integer` digunakan untuk menyimpan bilangan bulat tanpa desimal, baik positif maupun negatif.

```php
// Bilangan bulat positif
$age = 30;

// Bilangan bulat negatif
$temperature = -5;

// Tahun
$year = 2025;
```

---

## 2. Float (Double)

Tipe data `float` menyimpan bilangan desimal. Sering digunakan untuk menyimpan nilai seperti harga, berat, atau nilai ilmiah.

```php
// Harga produk
$price = 99.99;

// Berat dalam kilogram
$weight = 65.5;

// Nilai pi
$pi = 3.141592;
```

---

## 3. Infinity

Jika angka melebihi batas maksimum float di PHP, maka nilainya akan menjadi `INF` (infinity).

```php
// Nilai melebihi batas
$infiniteValue = 1.9e308;

// Menampilkan INF
var_dump($infiniteValue); // Output: float(INF)
```

---

## 4. NaN (Not a Number)

`NaN` muncul jika sebuah operasi matematika tidak valid, seperti akar kuadrat dari bilangan negatif atau pembagian nol oleh nol.

```php
// Operasi tidak valid
$invalid = acos(2); // cosine tidak valid di luar -1 hingga 1

var_dump($invalid); // Output: float(NAN)
```

---

## 5. PHP Numerical Strings

PHP memperlakukan **string yang berisi angka** sebagai nilai numerik jika digunakan dalam konteks perhitungan.

```php
// String numerik
$quantity = "10";
$price = "5.5";

// PHP akan otomatis konversi ke angka saat perhitungan
$total = $quantity * $price;

echo $total; // Output: 55
```

---

## 6. PHP Casting Strings and Floats to Integers

PHP memungkinkan kita untuk mengubah nilai float atau string menjadi integer dengan **type casting**.

```php
// Dari float ke integer (desimal dibuang)
$score = 89.75;
$scoreInt = (int) $score; // Output: 89

// Dari string ke integer
$input = "123abc";
$number = (int) $input; // Output: 123 (karakter setelah angka diabaikan)

// String tanpa angka akan menghasilkan 0
$invalidInput = "abc";
$invalidNumber = (int) $invalidInput; // Output: 0
```

---

## Catatan Tambahan

- Gunakan `is_int()`, `is_float()`, dan `is_numeric()` untuk memeriksa tipe atau validitas angka.
- Hindari operasi langsung pada string jika kamu tidak yakin isinya numerik, gunakan casting atau validasi.

```php
$input = "45";
if (is_numeric($input)) {
    echo "$input is numeric";
}
```
