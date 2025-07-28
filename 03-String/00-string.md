# String dalam PHP

Tipe data `string` digunakan untuk menyimpan **teks atau kumpulan karakter**. String dapat ditulis menggunakan tanda **kutip tunggal** (`'`) atau **kutip ganda** (`"`). PHP juga menyediakan banyak fungsi bawaan untuk memanipulasi string.

---

## 1. Double or Single Quotes

PHP mendukung dua jenis tanda kutip untuk membuat string: tanda kutip tunggal (`'`) dan tanda kutip ganda (`"`).

```php
$name = "John Doe";

// Kutip ganda memproses variabel
echo "Hello, $name"; // Output: Hello, John Doe

// Kutip tunggal tidak memproses variabel
echo 'Hello, $name'; // Output: Hello, $name
```

---

## 2. String Length

Gunakan `strlen()` untuk menghitung jumlah karakter dalam string.

```php
$text = "Learning PHP";
echo strlen($text); // Output: 12
```

---

## 3. Word Count

Gunakan `str_word_count()` untuk menghitung jumlah kata dalam string.

```php
$text = "I am learning PHP at home";
echo str_word_count($text); // Output: 6
```

---

## 4. Search for Text

Gunakan `strpos()` untuk mencari posisi teks tertentu dalam string. Jika teks ditemukan, fungsi ini akan mengembalikan indeks pertama dari kemunculan teks tersebut.

```php
$message = "Welcome to the PHP world";
echo strpos($message, "PHP"); // Output: 15
```

---

## 5. Modify Strings

### a. `strtoupper()` – Convert to Uppercase

Mengubah semua huruf dalam string menjadi huruf besar.

```php
$text = "php is fun";
echo strtoupper($text); // Output: PHP IS FUN
```

### b. `strtolower()` – Convert to Lowercase

Mengubah semua huruf dalam string menjadi huruf kecil.

```php
$text = "PHP IS POWERFUL";
echo strtolower($text); // Output: php is powerful
```

### c. `str_replace()` – Replace String

Mengganti bagian tertentu dari string dengan string lain.

```php
$text = "I love JavaScript";
echo str_replace("JavaScript", "PHP", $text); // Output: I love PHP
```

### d. `strrev()` – Reverse String

Membalik urutan karakter dalam string.

```php
$text = "Programming";
echo strrev($text); // Output: gnimmargorP
```

### e. `trim()` – Remove Whitespace

Menghapus spasi di awal dan akhir string.

```php
$text = "   Hello PHP   ";
echo trim($text); // Output: Hello PHP
```

### f. `explode()` – Convert String to Array

Mengubah string menjadi array berdasarkan pemisah tertentu.

```php
$text = "PHP is a scripting language";
$words = explode(" ", $text);
print_r($words);

/*
Output:
Array
(
    [0] => PHP
    [1] => is
    [2] => a
    [3] => scripting
    [4] => language
)
*/
```

---

## 6. String Concatenation

Gunakan operator titik (`.`) untuk menggabungkan dua atau lebih string.

```php
$firstName = "John";
$lastName = "Doe";
echo $firstName . " " . $lastName; // Output: John Doe
```

---

## 7. String Slicing

Gunakan `substr()` untuk mengambil sebagian dari string.

### a. Slice to the End

Mengambil substring dari indeks tertentu hingga akhir.

```php
$text = "Learning PHP";
echo substr($text, 9); // Output: PHP
```

### b. Slice From the End

Mengambil sejumlah karakter dari akhir string.

```php
$text = "Learning PHP";
echo substr($text, -3); // Output: PHP
```

### c. Negative Length

Mengambil sebagian string dengan panjang negatif (mengabaikan karakter di akhir).

```php
$text = "Learning PHP";
echo substr($text, 0, -4); // Output: Learning
```

---

## 8. Escape Characters

Gunakan karakter escape (`\`) untuk menyisipkan karakter khusus dalam string.

```php
// Menampilkan tanda kutip dalam string
echo "He said, \"PHP is awesome!\"";

// Menambahkan baris baru
echo "Line 1\nLine 2";
```

Tabel escape characters yang umum:

| Escape | Deskripsi           |
| ------ | ------------------- |
| `\"`   | Tanda kutip ganda   |
| `\'`   | Tanda kutip tunggal |
| `\\`   | Backslash           |
| `\n`   | Baris baru          |
| `\r`   | Carriage return     |
| `\t`   | Tab                 |
| `\$`   | Tanda dolar         |

---

## 9. Data Type Check

Gunakan `gettype()` atau `var_dump()` untuk memeriksa tipe data string.

```php
$text = "PHP";
echo gettype($text); // Output: string
```
