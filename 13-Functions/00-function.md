# PHP Functions

Fungsi adalah blok kode yang dirancang untuk melakukan tugas tertentu.  
Keuntungan menggunakan fungsi:

- Mengurangi duplikasi kode.
- Memudahkan perawatan.
- Membuat program lebih rapi.

---

## 1. Create a Function

Digunakan untuk mendefinisikan fungsi baru. Wajib menggunakan kata kunci `function` diikuti nama fungsi dan tanda kurung `()`.

```php
<?php
function sayHello() {
    echo "Hello, World!";
}
?>
```

---

## 2. Call a Function

Untuk mengeksekusi fungsi yang sudah dibuat, cukup tulis nama fungsi dan tanda kurung `()`.

```php
<?php
function greet() {
    echo "Hello, everyone!";
}

greet(); // Output: Hello, everyone!
?>
```

---

## 3. Function Arguments

Argumen adalah data yang dikirim ke fungsi agar dapat digunakan di dalamnya.

```php
<?php
function greetPerson($name) {
    echo "Hello, $name!";
}

greetPerson("John"); // Output: Hello, John!
?>
```

---

## 4. Function with Parameters

Fungsi dapat memiliki satu atau lebih parameter untuk menerima nilai dari luar.

```php
<?php
function introduce($name, $age) {
    echo "My name is $name and I am $age years old.";
}

introduce("Michael", 25);
// Output: My name is Michael and I am 25 years old.
?>
```

---

## 5. Function without Parameters

Fungsi dapat dibuat tanpa parameter jika tidak memerlukan input.

```php
<?php
function welcomeMessage() {
    echo "Welcome to our website!";
}

welcomeMessage();
// Output: Welcome to our website!
?>
```

---

## 6. Default Argument Value

Parameter dapat memiliki nilai default yang digunakan jika tidak diberikan argumen.

```php
<?php
function sayHi($name = "Guest") {
    echo "Hi, $name!";
}

sayHi();       // Output: Hi, Guest!
sayHi("David"); // Output: Hi, David!
?>
```

---

## 7. Function with Return Value

Fungsi dapat mengembalikan nilai dengan `return` untuk digunakan di luar fungsi.

```php
<?php
function sum($a, $b) {
    return $a + $b;
}

$result = sum(5, 7);
echo $result; // Output: 12
?>
```

---

## 8. Function without Return Value

Fungsi ini hanya menjalankan tugas tanpa mengembalikan nilai.

```php
<?php
function printMessage($message) {
    echo $message;
}

printMessage("Learning PHP is fun!");
// Output: Learning PHP is fun!
?>
```

---

## 9. Passing Arguments by Reference

Menggunakan `&` agar parameter mengubah nilai variabel aslinya.

```php
<?php
function addOne(&$number) {
    $number++;
}

$value = 5;
addOne($value);
echo $value; // Output: 6
?>
```

---

## 10. Variable Number of Arguments

Gunakan `...` untuk membuat fungsi menerima jumlah argumen tak terbatas.

```php
<?php
function sumAll(...$numbers) {
    $total = 0;
    foreach ($numbers as $num) {
        $total += $num;
    }
    return $total;
}

echo sumAll(1, 2, 3, 4, 5); // Output: 15
?>
```

---

## 11. Loosely Typed Language (Bahasa yang Tipe Datanya Longgar)

PHP tidak memerlukan tipe data yang ketat, sehingga parameter dapat menerima tipe apa saja.

```php
<?php
function displayValue($value) {
    echo "Value: $value";
}

displayValue(123);      // Output: Value: 123
displayValue("Hello");  // Output: Value: Hello
?>
```

---

## 12. Return Type Declarations

Dapat menentukan tipe data hasil `return` agar lebih aman dan konsisten.

```php
<?php
function multiply(int $a, int $b): float {
    return $a * $b;
}

echo multiply(5, 3); // Output: 15
?>
```

---

## 13. Anonymous Functions (Fungsi Tanpa Nama)

Fungsi yang tidak memiliki nama, biasanya disimpan di variabel atau digunakan sebagai callback.

```php
<?php
$greet = function($name) {
    echo "Hello, $name!";
};

$greet("Emily"); // Output: Hello, Emily!
?>
```

---

## 14. Custom Function

Fungsi yang dibuat sesuai kebutuhan kita.

```php
<?php
function convertToUpper($text) {
    return strtoupper($text);
}

echo convertToUpper("good morning"); // Output: GOOD MORNING
?>
```

---

## 15. Error and Exception Handling Functions

Fungsi dapat digunakan untuk memeriksa kesalahan dan melempar exception.

```php
<?php
function divide($a, $b) {
    if ($b == 0) {
        throw new Exception("Division by zero is not allowed.");
    }
    return $a / $b;
}

try {
    echo divide(10, 2); // Output: 5
    echo divide(10, 0); // Akan menghasilkan exception
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
```

---

## 16. Function in Class

Fungsi di dalam kelas disebut **method**, digunakan untuk operasi pada objek.

```php
<?php
class Person {
    public $name;

    public function setName($name) {
        $this->name = $name;
    }

    public function greet() {
        echo "Hello, my name is $this->name.";
    }
}

$person = new Person();
$person->setName("Robert");
$person->greet(); // Output: Hello, my name is Robert.
?>
```

---

## 17. Recursive Functions

Fungsi yang memanggil dirinya sendiri, biasanya untuk perhitungan berulang.

```php
<?php
function factorial($n) {
    if ($n <= 1) {
        return 1;
    }
    return $n * factorial($n - 1);
}

echo factorial(5); // Output: 120
?>
```

---

## 18. Variable Function

Menyimpan nama fungsi dalam variabel dan memanggilnya melalui variabel tersebut.

```php
<?php
function greetHello($name) {
    echo "Hello, $name!";
}

$functionName = "greetHello";
$functionName("Alice"); // Output: Hello, Alice!
?>
```

---

## Catatan Penting

1. **Fungsi** membuat kode lebih terstruktur dan efisien.
2. Gunakan **parameter** untuk fleksibilitas.
3. Gunakan **return** untuk mengembalikan nilai dari fungsi.
4. Gunakan **exception** untuk menangani error dengan baik.
5. Fungsi dapat digunakan di luar maupun di dalam kelas.
