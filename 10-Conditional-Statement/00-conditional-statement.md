# PHP Conditional Statements

Dalam PHP, **conditional statements** digunakan untuk mengeksekusi blok kode tertentu berdasarkan kondisi yang diberikan. Salah satu yang paling sering digunakan adalah **if statement**.

---

## 1. The if Statement

Sintaks:

```php
if (condition) {
    // kode yang akan dijalankan jika condition bernilai true
}
```

**Contoh:**

```php
<?php
$name = "John"; // membuat variabel dengan nilai "John"

// Jika nama adalah John, maka jalankan perintah di dalam if
if ($name == "John") {
    echo "Hello, John!";
}
// Output: Hello, John!
?>
```

> **Penjelasan:** Kondisi `$name == "John"` bernilai **true**, maka blok kode dijalankan.

---

## 2. if Operators

### 2.1 Comparison Operators (Operator Perbandingan)

| Operator | Nama                          | Contoh      | Hasil                                          |
| -------- | ----------------------------- | ----------- | ---------------------------------------------- |
| `==`     | Sama dengan                   | `$a == $b`  | true jika \$a sama dengan \$b                  |
| `===`    | Identik (tipe dan nilai sama) | `$a === $b` | true jika \$a sama dan tipe sama               |
| `!=`     | Tidak sama                    | `$a != $b`  | true jika \$a tidak sama dengan \$b            |
| `<>`     | Tidak sama                    | `$a <> $b`  | true jika \$a tidak sama dengan \$b            |
| `!==`    | Tidak identik                 | `$a !== $b` | true jika \$a berbeda atau tipe berbeda        |
| `>`      | Lebih besar                   | `$a > $b`   | true jika \$a lebih besar dari \$b             |
| `<`      | Lebih kecil                   | `$a < $b`   | true jika \$a lebih kecil dari \$b             |
| `>=`     | Lebih besar atau sama         | `$a >= $b`  | true jika \$a lebih besar atau sama dengan \$b |
| `<=`     | Lebih kecil atau sama         | `$a <= $b`  | true jika \$a lebih kecil atau sama dengan \$b |

**Contoh:**

```php
<?php
$age = 25;

// Mengecek apakah umur lebih besar dari 18
if ($age > 18) {
    echo "You are an adult.";
}
// Output: You are an adult.
?>
```

---

### 2.2 Logical Operators (Operator Logika)

| Operator | Nama | Contoh      | Hasil                                          |       |     |       |                           |
| -------- | ---- | ----------- | ---------------------------------------------- | ----- | --- | ----- | ------------------------- |
| `and`    | DAN  | `$a and $b` | true jika \$a dan \$b sama-sama true           |       |     |       |                           |
| `&&`     | DAN  | `$a && $b`  | true jika \$a dan \$b sama-sama true           |       |     |       |                           |
| `or`     | ATAU | `$a or $b`  | true jika salah satu true                      |       |     |       |                           |
| \`       |      | \`          | ATAU                                           | \`\$a |     | \$b\` | true jika salah satu true |
| `xor`    | XOR  | `$a xor $b` | true jika salah satu true, tapi tidak keduanya |       |     |       |                           |
| `!`      | NOT  | `!$a`       | true jika \$a false                            |       |     |       |                           |

**Contoh:**

```php
<?php
$age = 20;
$hasID = true;

// Mengecek apakah umur lebih dari 18 DAN memiliki ID
if ($age > 18 && $hasID) {
    echo "Access granted.";
}
// Output: Access granted.
?>
```

---

## 3. The if...else Statement

Sintaks:

```php
if (condition) {
    // jika condition true
} else {
    // jika condition false
}
```

**Contoh:**

```php
<?php
$name = "Michael";

// Jika nama adalah John, sapa John. Jika bukan, tampilkan pesan lain
if ($name == "John") {
    echo "Hello, John!";
} else {
    echo "You are not John.";
}
// Output: You are not John.
?>
```

---

## 4. The if...elseif...else Statement

**Contoh:**

```php
<?php
$score = 85;

// Mengecek nilai dan memberikan kategori
if ($score >= 90) {
    echo "Grade A";
} elseif ($score >= 75) {
    echo "Grade B";
} elseif ($score >= 60) {
    echo "Grade C";
} else {
    echo "Grade D";
}
// Output: Grade B
?>
```

---

## 5. Shorthand if Statements (Pernyataan if Singkat)

### 5.1 Short Hand If (Ternary)

```php
$result = (condition) ? value_if_true : value_if_false;
```

**Contoh:**

```php
<?php
$age = 17;
$message = ($age >= 18) ? "Adult" : "Minor";
echo $message;
// Output: Minor
?>
```

### 5.2 Short Hand If...Else (Null Coalescing)

```php
$value = $_GET['name'] ?? 'Guest';
```

**Contoh:**

```php
<?php
$name = $_GET['name'] ?? "Guest";
echo "Hello, $name!";
// Jika tidak ada parameter name di URL: Output: Hello, Guest!
?>
```

---

## 6. Nested if Statement (Pernyataan if Bersarang)

**Contoh:**

```php
<?php
$username = "Emma";
$password = "12345";

// Mengecek username
if ($username == "Emma") {
    // Mengecek password
    if ($password == "12345") {
        echo "Login successful.";
    } else {
        echo "Incorrect password.";
    }
} else {
    echo "Username not found.";
}
// Output: Login successful.
?>
```

---

## Kesimpulan

- Gunakan **if** untuk memeriksa kondisi sederhana.
- Gunakan **if...else** untuk dua kemungkinan hasil.
- Gunakan **if...elseif...else** untuk banyak kondisi.
- Gunakan **shorthand** jika ingin menulis lebih ringkas.
- Gunakan **nested if** untuk pemeriksaan bersarang.
- Pahami **comparison operators** dan **logical operators** untuk membuat kondisi lebih kompleks.
