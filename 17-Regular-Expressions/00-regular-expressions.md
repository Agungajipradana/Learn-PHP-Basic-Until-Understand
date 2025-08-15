# PHP Regular Expressions

Regular Expressions (RegEx) adalah pola pencarian yang digunakan untuk mencocokkan teks dalam string.  
Di PHP, RegEx umumnya digunakan untuk pencarian, validasi, atau penggantian teks menggunakan fungsi seperti `preg_match()`, `preg_match_all()`, dan `preg_replace()`.

---

## 1. Syntax (Sintaks Dasar)

Di PHP, pola RegEx biasanya ditulis di antara tanda `/` (delimiter):

```php
<?php
// Membuat pola untuk mencari kata 'John'
$pattern = "/John/";

// String yang akan dicek
$name = "My name is John Doe.";

// Mengecek apakah pola ditemukan
if (preg_match($pattern, $name)) {
    echo "Pattern ditemukan"; // Output: Pattern ditemukan
} else {
    echo "Pattern tidak ditemukan";
}
?>
```

**Penjelasan:**

- **`/John/`** adalah pola RegEx untuk mencari kata "John".
- `preg_match()` mengembalikan 1 jika pola ditemukan, 0 jika tidak.

---

## 2. Regular Expression Functions

### 2.1 `preg_match()`

Mengembalikan 1 jika pola ditemukan, 0 jika tidak.

```php
<?php
// Pola mencari kata 'Alice'
$pattern = "/Alice/";
$text = "Hello Alice, welcome to London.";

// Mengecek apakah 'Alice' ada
if (preg_match($pattern, $text)) {
    echo "Alice ditemukan"; // Output: Alice ditemukan
}
?>
```

---

### 2.2 `preg_match_all()`

Mengembalikan jumlah total kecocokan pola.

```php
<?php
// Pola mencari kata 'dog'
$pattern = "/dog/";
$text = "The dog chased another dog in the park.";

// Hitung jumlah kemunculan 'dog'
$count = preg_match_all($pattern, $text);
echo "Jumlah kata 'dog': " . $count; // Output: Jumlah kata 'dog': 2
?>
```

---

### 2.3 `preg_replace()`

Mengganti teks yang cocok dengan pola tertentu.

```php
<?php
// Pola mencari kata 'cat'
$pattern = "/cat/";
$text = "The cat is sleeping.";
$newText = preg_replace($pattern, "dog", $text);

echo $newText; // Output: The dog is sleeping.
?>
```

---

## 3. Regular Expression Modifiers

- `i` → Case-insensitive (abaikan huruf besar/kecil)
- `m` → Multiline mode (pencarian awal/akhir berlaku di tiap baris)
- `u` → UTF-8 mode (pencocokan karakter Unicode)

```php
<?php
// Contoh modifier i (case-insensitive)
$pattern = "/hello/i";
$text = "HELLO world";
echo preg_match($pattern, $text); // Output: 1

// Contoh modifier m (multiline)
$pattern = "/^World/m";
$text = "Hello\nWorld";
echo preg_match($pattern, $text); // Output: 1

// Contoh modifier u (UTF-8)
$pattern = "/café/u";
$text = "I love café";
echo preg_match($pattern, $text); // Output: 1
?>
```

---

## 4. Regular Expression Patterns

```php
<?php
// [abc] → Cari karakter a, b, atau c
preg_match("/[abc]/", "banana", $matches); // Cocok

// [^abc] → Cari karakter yang bukan a, b, atau c
preg_match("/[^abc]/", "dog", $matches); // Cocok

// [a-z] → Semua huruf kecil
preg_match("/[a-z]/", "hello", $matches); // Cocok

// [A-Z] → Semua huruf besar
preg_match("/[A-Z]/", "Hello", $matches); // Cocok

// [0-9] → Semua angka
preg_match("/[0-9]/", "Age 25", $matches); // Cocok
?>
```

---

## 5. Metacharacters (Karakter Khusus)

```php
<?php
// | → Salah satu pilihan
preg_match("/cat|dog/", "I have a dog", $matches); // Cocok

// . → Karakter apa saja
preg_match("/c.t/", "cat", $matches); // Cocok

// ^ → Awal string
preg_match("/^Hello/", "Hello world", $matches); // Cocok

// $ → Akhir string
preg_match("/world$/", "Hello world", $matches); // Cocok

// \d → Digit
preg_match("/\d/", "Room 9", $matches); // Cocok

// \D → Bukan digit
preg_match("/\D/", "Room A", $matches); // Cocok

// \s → Spasi
preg_match("/\s/", "Hello world", $matches); // Cocok

// \S → Bukan spasi
preg_match("/\S/", "Hello world", $matches); // Cocok

// \w → Huruf/angka
preg_match("/\w/", "Name123", $matches); // Cocok

// \W → Bukan huruf/angka
preg_match("/\W/", "Hello!", $matches); // Cocok

// \b → Batas kata
preg_match("/\bcat\b/", "A cat sat", $matches); // Cocok
?>
```

---

## 6. Quantifiers

```php
<?php
// n+ → Satu atau lebih
preg_match("/a+/", "aaa", $matches); // Cocok

// n* → Nol atau lebih
preg_match("/a*/", "bbb", $matches); // Cocok (0 kali)

// n? → Nol atau satu
preg_match("/a?/", "abc", $matches); // Cocok

// n{3} → Tepat 3
preg_match("/a{3}/", "aaa", $matches); // Cocok

// n{2,5} → Minimal 2, maksimal 5
preg_match("/a{2,5}/", "aaaa", $matches); // Cocok

// n{3,} → Minimal 3
preg_match("/a{3,}/", "aaaaaa", $matches); // Cocok
?>
```

---

## 7. Grouping 

Grouping digunakan dengan tanda `( )` untuk mengelompokkan pola.

```php
<?php
// Mengelompokkan kata 'red' atau 'blue'
preg_match("/(red|blue) car/", "I saw a blue car", $matches);
print_r($matches); // Output: Array ( [0] => blue car [1] => blue )
?>
```

**Penjelasan:**

- `(red|blue)` berarti cocokkan "red" atau "blue".
- `car` harus ada setelahnya.
- `$matches[0]` adalah keseluruhan kecocokan.
- `$matches[1]` adalah grup pertama.
