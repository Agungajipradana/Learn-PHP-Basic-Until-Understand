# PHP Built-in Functions 

PHP memiliki banyak fungsi bawaan yang siap digunakan untuk mempermudah pengolahan data tanpa harus membuat fungsi dari nol. Berikut adalah penjelasan dan contoh berdasarkan kategori.

---

## 1. Array Built-in Functions 

Array functions digunakan untuk memanipulasi dan mengolah data dalam bentuk array.

### 1.1 `count()` - Menghitung jumlah elemen array

```php
<?php
// Membuat array nama
$names = ["John", "Michael", "Sarah", "Emma"];

// Menghitung jumlah elemen
$totalNames = count($names);

// Menampilkan jumlah
echo $totalNames; // Output: 4
?>
```



### 1.2 `array_push()` - Menambahkan elemen di akhir array

```php
<?php
$names = ["John", "Michael"];
array_push($names, "Sarah", "Emma"); // Menambah 2 nama
print_r($names);
/*
Output:
Array
(
    [0] => John
    [1] => Michael
    [2] => Sarah
    [3] => Emma
)
*/
?>
```

### 1.3 `array_pop()` - Menghapus elemen terakhir

```php
<?php
$names = ["John", "Michael", "Sarah"];
array_pop($names); // Menghapus Sarah
print_r($names);
/*
Output:
Array
(
    [0] => John
    [1] => Michael
)
*/
?>
```

### 1.4 `in_array()` - Mengecek apakah nilai ada di array

```php
<?php
$names = ["John", "Michael", "Sarah"];
if (in_array("Michael", $names)) {
    echo "Michael is in the list"; // Output: Michael is in the list
}
?>
```

### 1.5 `array_merge()` - Menggabungkan dua array

```php
<?php
$names1 = ["John", "Michael"];
$names2 = ["Sarah", "Emma"];
$merged = array_merge($names1, $names2);
print_r($merged);
/*
Output:
Array
(
    [0] => John
    [1] => Michael
    [2] => Sarah
    [3] => Emma
)
*/
?>
```

---

## 2. Boolean Built-in Functions 

Boolean functions digunakan untuk memeriksa kebenaran atau kondisi logika.

### 2.1 `is_bool()` - Mengecek apakah nilai bertipe boolean

```php
<?php
$value = true;
if (is_bool($value)) {
    echo "Value is boolean"; // Output: Value is boolean
}
?>
```

### 2.2 `var_dump()` - Menampilkan tipe dan nilai variabel

```php
<?php
$flag = false;
var_dump($flag); // Output: bool(false)
?>
```

### 2.3 `empty()` - Mengecek apakah variabel kosong

```php
<?php
$name = "";
if (empty($name)) {
    echo "Name is empty"; // Output: Name is empty
}
?>
```

---

## 3. Date and Time Built-in Functions

Fungsi ini digunakan untuk memproses waktu dan tanggal.

### 3.1 `date()` - Menampilkan tanggal dan waktu

```php
<?php
echo date("Y-m-d"); // Output: 2025-08-14 (contoh)
?>
```

### 3.2 `time()` - Menampilkan timestamp saat ini

```php
<?php
echo time(); // Output: 1734228000 (contoh angka timestamp)
?>
```

### 3.3 `strtotime()` - Mengubah string menjadi timestamp

```php
<?php
$timestamp = strtotime("2025-12-31");
echo $timestamp; // Output: 1767139200 (contoh)
?>
```

### 3.4 `mktime()` - Membuat timestamp dari nilai jam, menit, detik, bulan, tanggal, tahun

```php
<?php
$timestamp = mktime(0, 0, 0, 12, 31, 2025);
echo $timestamp;
?>
```

---

## 4. File Handling Built-in Functions 

Digunakan untuk membaca, menulis, dan mengelola file.

### 4.1 `fopen()` - Membuka file

```php
<?php
$file = fopen("example.txt", "r"); // Membuka file dalam mode read
fclose($file); // Menutup file
?>
```

### 4.2 `fread()` - Membaca isi file

```php
<?php
$file = fopen("example.txt", "r");
$content = fread($file, filesize("example.txt"));
fclose($file);
echo $content; // Output: isi file
?>
```

### 4.3 `file_get_contents()` - Membaca isi file dengan mudah

```php
<?php
$content = file_get_contents("example.txt");
echo $content;
?>
```

### 4.4 `file_put_contents()` - Menulis isi file

```php
<?php
file_put_contents("example.txt", "Hello World!");
?>
```

---

## 5. Number Built-in Functions 

Fungsi ini memudahkan operasi pada angka.

### 5.1 `is_numeric()` - Mengecek apakah nilai angka

```php
<?php
$value = "123";
if (is_numeric($value)) {
    echo "Value is numeric"; // Output: Value is numeric
}
?>
```

### 5.2 `round()` - Membulatkan angka

```php
<?php
echo round(4.7); // Output: 5
?>
```

### 5.3 `ceil()` - Pembulatan ke atas

```php
<?php
echo ceil(4.1); // Output: 5
?>
```

### 5.4 `floor()` - Pembulatan ke bawah

```php
<?php
echo floor(4.9); // Output: 4
?>
```

### 5.5 `rand()` - Angka acak

```php
<?php
echo rand(1, 10); // Output: angka acak antara 1-10
?>
```

---

## 6. String Built-in Functions 

Digunakan untuk memproses teks atau string.

### 6.1 `strlen()` - Menghitung panjang string

```php
<?php
$name = "John";
echo strlen($name); // Output: 4
?>
```

### 6.2 `strtoupper()` - Mengubah ke huruf besar

```php
<?php
$name = "John";
echo strtoupper($name); // Output: JOHN
?>
```

### 6.3 `strtolower()` - Mengubah ke huruf kecil

```php
<?php
$name = "JOHN";
echo strtolower($name); // Output: john
?>
```

### 6.4 `substr()` - Mengambil sebagian string

```php
<?php
$name = "Michael";
echo substr($name, 0, 4); // Output: Mich
?>
```

### 6.5 `str_replace()` - Mengganti teks

```php
<?php
$text = "Hello John";
echo str_replace("John", "Michael", $text); // Output: Hello Michael
?>
```

