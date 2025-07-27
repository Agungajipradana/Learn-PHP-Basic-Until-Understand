# Compound Types (Tipe Gabungan / Kompleks) dalam PHP

Compound types adalah tipe data yang digunakan untuk menyimpan **kumpulan nilai** atau **struktur kompleks**. Tidak seperti scalar types yang menyimpan satu nilai tunggal, compound types memungkinkan kita menyimpan dan mengelola banyak nilai atau elemen yang saling terkait.

PHP memiliki empat tipe data compound utama:

---

## 1. Array

Tipe data `array` digunakan untuk menyimpan banyak nilai dalam satu variabel. PHP mendukung:

- Indexed array (menggunakan indeks numerik)
- Associative array (menggunakan key string)
- Multidimensional array (array di dalam array)

Contoh:

```php
// Indexed array
$colors = ["red", "green", "blue"];

// Associative array
$user = ["name" => "Alice", "email" => "alice@example.com"];

// Multidimensional array
$matrix = [
  [1, 2, 3],
  [4, 5, 6]
];
```

---

## 2. Object

Tipe data `object` digunakan untuk merepresentasikan instance dari sebuah class. Objek menyimpan **properti** (data) dan **method** (fungsi).

Contoh:

```php
class Car {
    public $brand = "Toyota";
    public function drive() {
        return "Driving...";
    }
}

$myCar = new Car();
echo $myCar->brand; // Output: Toyota
```

---

## 3. Callable

Tipe `callable` mengacu pada variabel yang dapat dipanggil seperti fungsi. Bisa berupa:

- Nama fungsi sebagai string
- Array berisi objek dan nama metode
- Anonymous function (closure)

Contoh:

```php
// Named function
function greet() {
    return "Hello!";
}

$fn = "greet";
echo $fn(); // Output: Hello!

// Anonymous function
$greet = function($name) {
    return "Hello, $name!";
};

echo $greet("John"); // Output: Hello, John!
```

---

## 4. Iterable

Tipe `iterable` diperkenalkan di PHP 7.1. Merupakan tipe data yang bisa di-_looping_ menggunakan `foreach`, termasuk array dan object yang mengimplementasikan `Traversable`.

Contoh:

```php
function printItems(iterable $items) {
    foreach ($items as $item) {
        echo $item . "\n";
    }
}

$names = ["Alice", "Bob", "Charlie"];
printItems($names);
```

---

## Catatan Tambahan

- Tipe-tipe ini sangat penting dalam pengelolaan data kompleks dan struktur program yang lebih besar.
- PHP mendukung pemeriksaan dan _type hinting_ untuk `array`, `object`, `callable`, dan `iterable` dalam definisi fungsi atau class.
