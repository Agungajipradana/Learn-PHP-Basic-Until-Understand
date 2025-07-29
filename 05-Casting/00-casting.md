# Casting (Konversi Tipe Data) dalam PHP

**Casting** adalah proses mengubah tipe data secara eksplisit dari satu jenis ke jenis lainnya. PHP menyediakan beberapa jenis casting yang umum digunakan, terutama dalam pengembangan web seperti form handling, data sanitization, dan validasi tipe input.

---

## Change Data Type

PHP mendukung casting ke tipe data berikut:

- `(string)` → Mengubah ke tipe _String_
- `(int)` / `(integer)` → Mengubah ke tipe _Integer_
- `(float)` / `(double)` → Mengubah ke tipe _Float_
- `(bool)` / `(boolean)` → Mengubah ke tipe _Boolean_
- `(array)` → Mengubah ke tipe _Array_
- `(object)` → Mengubah ke tipe _Object_
- `(unset)` → Mengubah ke tipe _NULL_

---

## 1. (string) – Konversi ke String

```php
<?php

// Mengubah angka menjadi string untuk kebutuhan tampilan teks
$price = 100;
$priceText = (string) $price;

echo "String Casting: $priceText\n"; // Output: "100"
```

---

## 2. (int) – Konversi ke Integer

```php
<?php

// Mengubah string desimal menjadi integer untuk logika hitung stok
$quantity = "25.99";
$quantityInt = (int) $quantity;

echo "Integer Casting: $quantityInt\n"; // Output: 25
```

---

## 3. (float) – Konversi ke Float

```php
<?php

// Konversi dari input string ke float untuk perhitungan harga
$input = "199.95";
$floatValue = (float) $input;

echo "Float Casting: $floatValue\n"; // Output: 199.95
```

---

## 4. (bool) – Konversi ke Boolean

```php
<?php

// Konversi dari string ke boolean untuk validasi login
$userStatus = "active"; // String non-kosong akan jadi true
$isLoggedIn = (bool) $userStatus;

echo "Boolean Casting: " . ($isLoggedIn ? "true" : "false") . "\n"; // Output: true
```

---

## 5. (array) – Konversi ke Array

```php
<?php

// Mengubah string menjadi array satu elemen untuk penggunaan loop
$name = "Michael";
$nameArray = (array) $name;

print_r($nameArray); // Output: Array ( [0] => Michael )
```

---

## 6. (object) – Konversi ke Object

```php
<?php

// Mengubah string menjadi object dengan properti default 'scalar'
$email = "michael@example.com";
$emailObject = (object) $email;

echo "Object Casting: " . $emailObject->scalar . "\n"; // Output: michael@example.com
```

---

## 7. (unset) – Konversi ke NULL

```php
<?php

// Menghapus isi variabel secara eksplisit
$data = "Temporary Data";
$data = (unset) $data;

var_dump($data); // Output: NULL
```

---

## Catatan Penting

- PHP adalah **dynamically typed language**, artinya kamu tidak perlu mendeklarasikan tipe data secara eksplisit.
- Gunakan casting saat kamu perlu **memastikan tipe data** pada input dari user, API, atau database.
- Casting **tidak selalu aman** jika digunakan tanpa validasi (`is_numeric()`, `is_array()`, dll).
- Hindari casting sembarangan terhadap input yang tidak diketahui jenisnya karena bisa menyebabkan data loss atau error logika.
- Namun, casting berguna untuk **menghindari error**, **validasi data**, atau **mengubah perilaku tertentu** saat digunakan dalam operasi atau logika.
- Tidak semua tipe cocok dikonversi secara langsung (contoh: object ke integer perlu penanganan khusus).
