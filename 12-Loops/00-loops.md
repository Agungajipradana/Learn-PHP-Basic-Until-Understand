# PHP Loops (Perulangan)

Dokumen ini menjelaskan berbagai jenis perulangan di PHP beserta penggunaan **break** dan **continue** serta alternatif sintaks.

---

## 1. while Loop 

Perulangan while menjalankan blok kode selama kondisi bernilai true.

```php
<?php
// Contoh while Loop sederhana
$name = "Alice";
$counter = 1;

// Menampilkan nama Alice sebanyak 3 kali
while ($counter <= 3) {
    echo "Hello, $name! Count: $counter\n"; // Output: Hello, Alice! Count: 1 ... 3
    $counter++;
}
?>
```

### 1.1 break Statement pada while Loop

```php
<?php
// Menghentikan while loop jika counter sudah 2
$counter = 1;
while (true) {
    if ($counter > 2) {
        break; // Keluar dari loop jika counter > 2
    }
    echo "Counter: $counter\n"; // Output: Counter: 1, Counter: 2
    $counter++;
}
?>
```

### 1.2 continue Statement pada while Loop

```php
<?php
// Melewati iterasi ketika counter bernilai 2
$counter = 0;
while ($counter < 4) {
    $counter++;
    if ($counter == 2) {
        continue; // Lewatkan iterasi saat counter = 2
    }
    echo "Counter: $counter\n"; // Output: 1,3,4 (2 dilewati)
}
?>
```

### 1.3 Alternative Syntax while Loop 

Digunakan terutama dalam template PHP.

```php
<?php
$counter = 1;
while ($counter <= 3) :
    echo "Hello, Bob! Count: $counter\n";
    $counter++;
endwhile;
?>
```

---

## 2. do...while Loop 

Melakukan minimal satu kali eksekusi sebelum cek kondisi.

```php
<?php
// do...while loop menampilkan minimal 1 kali
$counter = 1;
do {
    echo "Name: Charlie, Count: $counter\n"; // Output: Count 1..3
    $counter++;
} while ($counter <= 3);
?>
```

### 2.1 break Statement pada do...while Loop

```php
<?php
$counter = 1;
do {
    if ($counter == 2) {
        break; // Hentikan loop jika counter 2
    }
    echo "Counter: $counter\n"; // Output: Counter: 1
    $counter++;
} while (true);
?>
```

### 2.2 continue Statement pada do...while Loop

```php
<?php
$counter = 0;
do {
    $counter++;
    if ($counter == 2) {
        continue; // Lewati iterasi saat counter = 2
    }
    echo "Counter: $counter\n"; // Output: 1,3,4 (2 dilewati)
} while ($counter < 4);
?>
```

---

## 3. for Loop 

Perulangan dengan inisialisasi, kondisi, dan increment/decrement.

```php
<?php
// Menampilkan angka 1 sampai 5
for ($i = 1; $i <= 5; $i++) {
    echo "Number: $i\n"; // Output: 1..5
}
?>
```

### 3.1 break Statement pada for Loop

```php
<?php
for ($i = 1; $i <= 5; $i++) {
    if ($i == 3) {
        break; // Hentikan loop saat i=3
    }
    echo "Number: $i\n"; // Output: 1, 2
}
?>
```

### 3.2 continue Statement pada for Loop

```php
<?php
for ($i = 1; $i <= 5; $i++) {
    if ($i == 3) {
        continue; // Lewati iterasi saat i=3
    }
    echo "Number: $i\n"; // Output: 1,2,4,5
}
?>
```

---

## 4. foreach Loop 

Untuk iterasi pada array dan objek.

### 4.1 foreach Loop on Arrays (Perulangan pada Array)

```php
<?php
$fruits = ["Apple", "Banana", "Cherry"];
foreach ($fruits as $fruit) {
    echo "Fruit: $fruit\n"; // Output: Apple, Banana, Cherry
}
?>
```

### 4.2 foreach Loop on Arrays with Keys and Values

```php
<?php
$person = [
    "firstName" => "David",
    "lastName" => "Smith"
];

foreach ($person as $key => $value) {
    echo "$key: $value\n"; // Output: firstName: David, lastName: Smith
}
?>
```

### 4.3 foreach Loop on Objects

```php
<?php
class User {
    public $name = "Eve";
    public $age = 30;
}

$user = new User();

foreach ($user as $property => $value) {
    echo "$property: $value\n"; // Output: name: Eve, age: 30
}
?>
```

### 4.4 break Statement pada foreach Loop

```php
<?php
$names = ["Frank", "Grace", "Hank"];
foreach ($names as $name) {
    if ($name == "Grace") {
        break; // Hentikan jika nama Grace ditemukan
    }
    echo "Name: $name\n"; // Output: Frank
}
?>
```

### 4.5 continue Statement pada foreach Loop

```php
<?php
$names = ["Ivy", "Jack", "Kate"];
foreach ($names as $name) {
    if ($name == "Jack") {
        continue; // Lewati nama Jack
    }
    echo "Name: $name\n"; // Output: Ivy, Kate
}
?>
```

### 4.6 Foreach Loop By Reference 

```php
<?php
$numbers = [1, 2, 3];
foreach ($numbers as &$num) {
    $num *= 2; // Mengubah elemen array asli
}
unset($num); // Hapus referensi setelah loop

print_r($numbers);
/*
Output:
Array
(
    [0] => 2
    [1] => 4
    [2] => 6
)
*/
?>
```

### 4.7 Alternative Syntax foreach Loop

```php
<?php
$colors = ["Red", "Green", "Blue"];
foreach ($colors as $color) :
    echo "Color: $color\n";
endforeach;
?>
```

---

## 5. Break Statement

Digunakan untuk menghentikan loop secara langsung.

### 5.1 Break in For loop

```php
<?php
for ($i = 1; $i <= 5; $i++) {
    if ($i == 4) {
        break; // Hentikan loop di i=4
    }
    echo "Number: $i\n"; // Output: 1,2,3
}
?>
```

### 5.2 Break in While Loop

```php
<?php
$i = 1;
while ($i <= 5) {
    if ($i == 4) {
        break; // Hentikan loop saat i=4
    }
    echo "Number: $i\n"; // Output: 1,2,3
    $i++;
}
?>
```

### 5.3 Break in Do While Loop

```php
<?php
$i = 1;
do {
    if ($i == 4) {
        break; // Hentikan loop saat i=4
    }
    echo "Number: $i\n"; // Output: 1,2,3
    $i++;
} while ($i <= 5);
?>
```

### 5.4 Break in Foreach Loop

```php
<?php
$letters = ["A", "B", "C", "D"];
foreach ($letters as $letter) {
    if ($letter == "C") {
        break; // Hentikan saat ketemu huruf C
    }
    echo "Letter: $letter\n"; // Output: A, B
}
?>
```

---

## 6. Continue Statement

Melompati iterasi saat ini dan lanjut ke iterasi berikutnya.

### 6.1 Continue in For Loops

```php
<?php
for ($i = 1; $i <= 5; $i++) {
    if ($i == 3) {
        continue; // Lewati i=3
    }
    echo "Number: $i\n"; // Output: 1,2,4,5
}
?>
```

### 6.2 Continue in While Loop

```php
<?php
$i = 0;
while ($i < 5) {
    $i++;
    if ($i == 3) {
        continue; // Lewati saat i=3
    }
    echo "Number: $i\n"; // Output: 1,2,4,5
}
?>
```

### 6.3 Continue in Do While Loop

```php
<?php
$i = 0;
do {
    $i++;
    if ($i == 3) {
        continue; // Lewati i=3
    }
    echo "Number: $i\n"; // Output: 1,2,4,5
} while ($i < 5);
?>
```

### 6.4 Continue in Foreach Loop

```php
<?php
$items = ["Pen", "Pencil", "Eraser"];
foreach ($items as $item) {
    if ($item == "Pencil") {
        continue; // Lewati "Pencil"
    }
    echo "Item: $item\n"; // Output: Pen, Eraser
}
?>
```

---

# Penutup

Dokumen ini memberikan gambaran lengkap penggunaan loop di PHP beserta cara menghentikan atau melewati iterasi menggunakan `break` dan `continue`. Juga disertakan alternatif sintaks yang umum dipakai terutama pada template PHP.
