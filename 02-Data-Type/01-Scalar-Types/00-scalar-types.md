# Scalar Types (Tipe Skalar / Sederhana) dalam PHP

Tipe skalar adalah tipe data paling dasar di PHP yang menyimpan **satu nilai tunggal**. PHP memiliki empat jenis tipe skalar:

---

## 1. Integer

Tipe data `integer` digunakan untuk menyimpan **bilangan bulat**, baik positif maupun negatif, tanpa bagian desimal.

Contoh:

```php
$age = 30;
$year = -1990;
$quantity = 1000;
```

---

## 2. Float (Double)

Tipe data `float` (juga disebut `double`) digunakan untuk menyimpan **bilangan pecahan atau desimal**.

Contoh:

```php
$price = 19.99;
$temperature = -3.5;
$pi = 3.14159;
```

---

## 3. Boolean

Tipe data `boolean` hanya memiliki dua nilai logika: `true` (benar) dan `false` (salah). Biasanya digunakan dalam perbandingan atau kondisi.

Contoh:

```php
$isLoggedIn = true;
$hasPermission = false;
```

---

## 4. String

Tipe data `string` menyimpan **teks atau kumpulan karakter**. Bisa ditulis dengan tanda kutip tunggal `'` atau kutip ganda `"`.

Contoh:

```php
$name = "Alice";
$message = 'Welcome to the website!';
```

---

## Catatan Tambahan

- PHP secara otomatis menentukan tipe data berdasarkan nilai yang diberikan (dynamic typing).
- Untuk mengecek tipe data, kamu bisa menggunakan fungsi seperti `gettype()` atau `var_dump()`.

Contoh:

```php
$number = 42;
echo gettype($number); // Output: integer
```
