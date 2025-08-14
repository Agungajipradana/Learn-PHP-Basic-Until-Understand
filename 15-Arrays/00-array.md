# PHP Arrays

Array dalam PHP adalah struktur data yang digunakan untuk menyimpan banyak nilai dalam satu variabel. Nilai dalam array dapat diakses menggunakan indeks atau key (kunci).  
Array di PHP dibagi menjadi **Indexed Arrays**, **Associative Arrays**, dan **Multidimensional Arrays**.

---

## 1. Indexed Arrays 

Indexed Array adalah array yang setiap elemennya memiliki indeks numerik yang dimulai dari 0 secara default.

### 1.1 Access Indexed Array 

```php
<?php
// Membuat indexed array
$names = array("John", "Emma", "Michael");

// Mengakses elemen array
echo $names[0]; // Output: John
echo $names[1]; // Output: Emma
echo $names[2]; // Output: Michael
?>
```

### 1.2 Change Value 

```php
<?php
$names = array("John", "Emma", "Michael");

// Mengubah nilai indeks ke-1
$names[1] = "Olivia";

print_r($names);
/*
Output:
Array
(
    [0] => John
    [1] => Olivia
    [2] => Michael
)
*/
?>
```

### 1.3 Loop Through an Indexed Array 

```php
<?php
$names = array("John", "Emma", "Michael");

// Menggunakan for loop
for ($i = 0; $i < count($names); $i++) {
    echo $names[$i] . "\n";
}
/*
Output:
John
Emma
Michael
*/
?>
```

---

## 2. Associative Arrays 

Associative Array adalah array yang menggunakan key (kunci) berupa string untuk mengakses nilai.

### 2.1 Access Associative Arrays 

```php
<?php
$ages = array(
    "John" => 25,
    "Emma" => 30,
    "Michael" => 28
);

echo $ages["John"];   // Output: 25
echo $ages["Emma"];   // Output: 30
?>
```

### 2.2 Change Value 

```php
<?php
$ages = array(
    "John" => 25,
    "Emma" => 30
);

// Mengubah umur Emma
$ages["Emma"] = 31;

print_r($ages);
/*
Output:
Array
(
    [John] => 25
    [Emma] => 31
)
*/
?>
```

### 2.3 Loop Through an Associative Array 

```php
<?php
$ages = array(
    "John" => 25,
    "Emma" => 30
);

// Menggunakan foreach
foreach ($ages as $name => $age) {
    echo "$name is $age years old\n";
}
/*
Output:
John is 25 years old
Emma is 30 years old
*/
?>
```

---

## 3. Create Arrays 

### 3.1 Multiple Lines 

```php
<?php
$fruits = array(
    "Apple",
    "Banana",
    "Cherry"
);

print_r($fruits);
/*
Output:
Array
(
    [0] => Apple
    [1] => Banana
    [2] => Cherry
)
*/
?>
```

### 3.2 Trailing Comma (Koma di Akhir)

```php
<?php
$colors = array(
    "Red",
    "Green",
    "Blue",
);

print_r($colors);
/*
Output:
Array
(
    [0] => Red
    [1] => Green
    [2] => Blue
)
*/
?>
```

### 3.3 Array Keys (Menentukan Key Secara Manual)

```php
<?php
$person = array(
    1 => "John",
    2 => "Emma",
    3 => "Michael"
);

print_r($person);
/*
Output:
Array
(
    [1] => John
    [2] => Emma
    [3] => Michael
)
*/
?>
```

### 3.4 Declare Empty Array

```php
<?php
$data = array(); // Array kosong
$data[] = "Hello"; // Menambahkan elemen
print_r($data);
/*
Output:
Array
(
    [0] => Hello
)
*/
?>
```

### 3.5 Mixing Array Keys (Menggabungkan Key Angka dan String)

```php
<?php
$mixed = array(
    0 => "Apple",
    "color" => "Red",
    1 => "Banana"
);

print_r($mixed);
/*
Output:
Array
(
    [0] => Apple
    [color] => Red
    [1] => Banana
)
*/
?>
```

---

## 4. Access Arrays 

### 4.1 Double or Single Quotes

```php
<?php
$names = array("John", "Emma");

// Menggunakan kutip ganda
echo "$names[0]"; // Output: John

// Menggunakan kutip tunggal
echo $names[1]; // Output: Emma
?>
```

### 4.2 Execute a Function Item 

```php
<?php
$fruits = array("apple", "banana");

// Menggunakan strtoupper untuk mengubah huruf menjadi kapital
echo strtoupper($fruits[0]); // Output: APPLE
?>
```

### 4.3 Loop Through an Associative Array

```php
<?php
$ages = array(
    "John" => 25,
    "Emma" => 30
);

foreach ($ages as $name => $age) {
    echo "$name : $age\n";
}
/*
Output:
John : 25
Emma : 30
*/
?>
```

### 4.4 Loop Through an Indexed Array

```php
<?php
$colors = array("Red", "Green", "Blue");

foreach ($colors as $color) {
    echo $color . "\n";
}
/*
Output:
Red
Green
Blue
*/
?>
```

---

## 5. Update Array Items 

### 5.1 Update Array Items in a Foreach Loop 

```php
<?php
$numbers = array(1, 2, 3);

// Mengalikan setiap elemen dengan 2
foreach ($numbers as &$value) {
    $value *= 2;
}
unset($value); // Menghapus referensi

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

---

## 6. Add Array Items 

### 6.1 Add Array Item 

```php
<?php
$fruits = array("Apple", "Banana");
$fruits[] = "Cherry"; // Menambah di akhir array

print_r($fruits);
/*
Output:
Array
(
    [0] => Apple
    [1] => Banana
    [2] => Cherry
)
*/
?>
```

### 6.2 Add Array Item (Associative Arrays)

```php
<?php
$ages = array("John" => 25, "Emma" => 30);
$ages["Michael"] = 28; // Menambah dengan key baru

print_r($ages);
/*
Output:
Array
(
    [John] => 25
    [Emma] => 30
    [Michael] => 28
)
*/
?>
```

### 6.3 Add Multiple Array Items (Indexed Array)

```php
<?php
$colors = array("Red");
array_push($colors, "Green", "Blue");

print_r($colors);
/*
Output:
Array
(
    [0] => Red
    [1] => Green
    [2] => Blue
)
*/
?>
```

### 6.4 Add Multiple Items to Associative Arrays

```php
<?php
$person = array("Name" => "John");
$person += array("Age" => 25, "City" => "London");

print_r($person);
/*
Output:
Array
(
    [Name] => John
    [Age] => 25
    [City] => London
)
*/
?>
```

---

## 7. Delete Array Items 

### 7.1 Remove Array Item (Indexed Array)

```php
<?php
$fruits = array("Apple", "Banana", "Cherry");
unset($fruits[1]); // Menghapus indeks ke-1

print_r($fruits);
/*
Output:
Array
(
    [0] => Apple
    [2] => Cherry
)
*/
?>
```

### 7.2 Remove Multiple Array Items

```php
<?php
$numbers = array(1, 2, 3, 4, 5);
unset($numbers[1], $numbers[3]); // Menghapus indeks 1 dan 3

print_r($numbers);
/*
Output:
Array
(
    [0] => 1
    [2] => 3
    [4] => 5
)
*/
?>
```

### 7.3 Remove Item From an Associative Array

```php
<?php
$ages = array("John" => 25, "Emma" => 30);
unset($ages["Emma"]);

print_r($ages);
/*
Output:
Array
(
    [John] => 25
)
*/
?>
```

### 7.4 Using the array_diff Function

```php
<?php
$numbers = array(1, 2, 3, 4, 5);
$result = array_diff($numbers, array(2, 4));

print_r($result);
/*
Output:
Array
(
    [0] => 1
    [2] => 3
    [4] => 5
)
*/
?>
```

### 7.5 Remove the Last Item

```php
<?php
$fruits = array("Apple", "Banana", "Cherry");
array_pop($fruits);

print_r($fruits);
/*
Output:
Array
(
    [0] => Apple
    [1] => Banana
)
*/
?>
```

### 7.6 Remove the First Item

```php
<?php
$fruits = array("Apple", "Banana", "Cherry");
array_shift($fruits);

print_r($fruits);
/*
Output:
Array
(
    [0] => Banana
    [1] => Cherry
)
*/
?>
```

---

## 8. Sorting Arrays (Mengurutkan Array)

### 8.1 Sort Array in Ascending Order - sort()

```php
<?php
$numbers = array(3, 1, 4);
sort($numbers);

print_r($numbers);
/*
Output:
Array
(
    [0] => 1
    [1] => 3
    [2] => 4
)
*/
?>
```

### 8.2 Sort Array in Descending Order - rsort()

```php
<?php
$numbers = array(3, 1, 4);
rsort($numbers);

print_r($numbers);
/*
Output:
Array
(
    [0] => 4
    [1] => 3
    [2] => 1
)
*/
?>
```

### 8.3 Sort Array - asort()

```php
<?php
$ages = array("John" => 25, "Emma" => 30);
asort($ages);

print_r($ages);
/*
Output:
Array
(
    [John] => 25
    [Emma] => 30
)
*/
?>
```

### 8.4 Sort Array - ksort()

```php
<?php
$ages = array("Emma" => 30, "John" => 25);
ksort($ages);

print_r($ages);
/*
Output:
Array
(
    [Emma] => 30
    [John] => 25
)
*/
?>
```

### 8.5 Sort Array - arsort()

```php
<?php
$ages = array("John" => 25, "Emma" => 30);
arsort($ages);

print_r($ages);
/*
Output:
Array
(
    [Emma] => 30
    [John] => 25
)
*/
?>
```

### 8.6 Sort Array - krsort()

```php
<?php
$ages = array("Emma" => 30, "John" => 25);
krsort($ages);

print_r($ages);
/*
Output:
Array
(
    [John] => 25
    [Emma] => 30
)
*/
?>
```

---

## 9. Multidimensional Arrays 

### 9.1 Two-dimensional Arrays

```php
<?php
$students = array(
    array("John", 25, "London"),
    array("Emma", 30, "Paris"),
    array("Michael", 28, "New York")
);

echo $students[0][0]; // Output: John
echo $students[1][2]; // Output: Paris
?>
```

---

## 10. Array Functions 

Berikut contoh beberapa fungsi array yang sering digunakan.

```php
<?php
$fruits = array("Apple", "Banana", "Cherry");

// count()
echo count($fruits); // Output: 3

// in_array()
echo in_array("Banana", $fruits) ? "Yes" : "No"; // Output: Yes

// array_merge()
$newFruits = array_merge($fruits, array("Orange", "Mango"));
print_r($newFruits);

// array_keys()
print_r(array_keys($fruits));

// array_values()
print_r(array_values($fruits));

// array_unique()
$duplicates = array("Apple", "Banana", "Apple");
print_r(array_unique($duplicates));

// array_reverse()
print_r(array_reverse($fruits));
?>
```

---

## 11. Array Functions in PHP 

Fungsi-fungsi array di PHP membantu untuk memanipulasi, mencari, mengurutkan, dan memfilter data dengan mudah.

---

### 11.1 array() - Creates an array (Membuat array)

```php
<?php
$fruits = array("Apple", "Banana", "Cherry");
print_r($fruits);
/*
Output:
Array
(
    [0] => Apple
    [1] => Banana
    [2] => Cherry
)
*/
?>
```

### 11.2 array_change_key_case() - Changes all keys in an array to lowercase or uppercase

```php
<?php
$person = array("Name" => "John", "AGE" => 25);
print_r(array_change_key_case($person, CASE_LOWER));
print_r(array_change_key_case($person, CASE_UPPER));
/*
Output CASE_LOWER:
Array
(
    [name] => John
    [age] => 25
)
Output CASE_UPPER:
Array
(
    [NAME] => John
    [AGE] => 25
)
*/
?>
```

### 11.3 array_chunk() - Splits an array into chunks

```php
<?php
$numbers = range(1, 6);
print_r(array_chunk($numbers, 2));
/*
Output:
Array
(
    [0] => Array ( [0] => 1 [1] => 2 )
    [1] => Array ( [0] => 3 [1] => 4 )
    [2] => Array ( [0] => 5 [1] => 6 )
)
*/
?>
```

### 11.4 array_column() - Returns values from a single column

```php
<?php
$records = array(
    array("id" => 1, "name" => "John"),
    array("id" => 2, "name" => "Emma")
);
print_r(array_column($records, "name"));
/*
Output:
Array
(
    [0] => John
    [1] => Emma
)
*/
?>
```

### 11.5 array_combine() - Creates an array by using keys from one array and values from another

```php
<?php
$keys = array("Name", "Age");
$values = array("John", 25);
print_r(array_combine($keys, $values));
/*
Output:
Array
(
    [Name] => John
    [Age] => 25
)
*/
?>
```

### 11.6 array_count_values() - Counts all values

```php
<?php
$fruits = array("Apple", "Banana", "Apple", "Cherry");
print_r(array_count_values($fruits));
/*
Output:
Array
(
    [Apple] => 2
    [Banana] => 1
    [Cherry] => 1
)
*/
?>
```

### 11.7 array_diff() - Compare arrays and return differences (values only)

```php
<?php
$a = array("Apple", "Banana", "Cherry");
$b = array("Banana", "Cherry");
print_r(array_diff($a, $b));
/*
Output:
Array
(
    [0] => Apple
)
*/
?>
```

### 11.8 array_diff_assoc() - Compare arrays (keys and values)

```php
<?php
$a = array("a" => "Apple", "b" => "Banana");
$b = array("a" => "Apple", "b" => "Cherry");
print_r(array_diff_assoc($a, $b));
/*
Output:
Array
(
    [b] => Banana
)
*/
?>
```

### 11.9 array_diff_key() - Compare arrays (keys only)

```php
<?php
$a = array("a" => "Apple", "b" => "Banana");
$b = array("a" => "Orange");
print_r(array_diff_key($a, $b));
/*
Output:
Array
(
    [b] => Banana
)
*/
?>
```

### 11.10 array_fill() - Fill an array with values

```php
<?php
print_r(array_fill(0, 4, "Banana"));
/*
Output:
Array
(
    [0] => Banana
    [1] => Banana
    [2] => Banana
    [3] => Banana
)
*/
?>
```

### 11.11 array_fill_keys() - Fill array with values, specifying keys

```php
<?php
$keys = array("a", "b", "c");
print_r(array_fill_keys($keys, "Apple"));
/*
Output:
Array
(
    [a] => Apple
    [b] => Apple
    [c] => Apple
)
*/
?>
```

### 11.12 array_filter() - Filter array values with callback

```php
<?php
$numbers = array(1, 2, 3, 4, 5);
$result = array_filter($numbers, function($n) {
    return $n % 2 == 0;
});
print_r($result);
/*
Output:
Array
(
    [1] => 2
    [3] => 4
)
*/
?>
```

### 11.13 array_flip() - Exchange keys with values

```php
<?php
$fruits = array("a" => "Apple", "b" => "Banana");
print_r(array_flip($fruits));
/*
Output:
Array
(
    [Apple] => a
    [Banana] => b
)
*/
?>
```

### 11.14 array_intersect() - Compare arrays and return matches (values only)

```php
<?php
$a = array("Apple", "Banana", "Cherry");
$b = array("Banana", "Cherry", "Orange");
print_r(array_intersect($a, $b));
/*
Output:
Array
(
    [1] => Banana
    [2] => Cherry
)
*/
?>
```

### 11.15 array_intersect_assoc() - Compare arrays (keys and values)

```php
<?php
$a = array("a" => "Apple", "b" => "Banana");
$b = array("a" => "Apple", "b" => "Cherry");
print_r(array_intersect_assoc($a, $b));
/*
Output:
Array
(
    [a] => Apple
)
*/
?>
```

### 11.16 array_key_exists() - Check if a key exists

```php
<?php
$person = array("Name" => "John", "Age" => 25);
echo array_key_exists("Age", $person) ? "Yes" : "No"; // Output: Yes
?>
```

### 11.17 array_keys() - Return all keys

```php
<?php
$person = array("Name" => "John", "Age" => 25);
print_r(array_keys($person));
/*
Output:
Array
(
    [0] => Name
    [1] => Age
)
*/
?>
```

### 11.18 array_map() - Apply a function to each array value

```php
<?php
$numbers = array(1, 2, 3);
print_r(array_map(function($n) { return $n * 2; }, $numbers));
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

### 11.19 array_merge() - Merge two or more arrays

```php
<?php
$a = array("Apple", "Banana");
$b = array("Cherry", "Orange");
print_r(array_merge($a, $b));
/*
Output:
Array
(
    [0] => Apple
    [1] => Banana
    [2] => Cherry
    [3] => Orange
)
*/
?>
```

### 11.20 array_merge_recursive() - Merge arrays recursively

```php
<?php
$a = array("color" => array("favorite" => "red"), 5);
$b = array(10, "color" => array("favorite" => "green", "blue"));
print_r(array_merge_recursive($a, $b));
/*
Output:
Array
(
    [color] => Array
        (
            [favorite] => Array
                (
                    [0] => red
                    [1] => green
                )

            [0] => blue
        )

    [0] => 5
    [1] => 10
)
*/
?>
```

### 11.21 array_multisort() - Sort multiple arrays or multidimensional arrays

```php
<?php
$fruits = array("Lemon", "Orange", "Banana");
$colors = array("Yellow", "Orange", "Yellow");
array_multisort($colors, $fruits);
print_r($fruits);
/*
Output:
Array
(
    [0] => Banana
    [1] => Lemon
    [2] => Orange
)
*/
?>
```

### 11.22 array_pad() - Pad array to the specified length

```php
<?php
$input = array(1, 2, 3);
print_r(array_pad($input, 5, 0));
/*
Output:
Array
(
    [0] => 1
    [1] => 2
    [2] => 3
    [3] => 0
    [4] => 0
)
*/
?>
```

### 11.23 array_pop() - Pop the element off the end of array

```php
<?php
$stack = array("Orange", "Banana", "Apple");
array_pop($stack);
print_r($stack);
/*
Output:
Array
(
    [0] => Orange
    [1] => Banana
)
*/
?>
```

### 11.24 array_product() - Calculate the product of values

```php
<?php
$numbers = array(2, 3, 4);
echo array_product($numbers); // Output: 24
?>
```

### 11.25 array_push() - Push one or more elements onto the end of array

```php
<?php
$stack = array("Orange", "Banana");
array_push($stack, "Apple", "Cherry");
print_r($stack);
/*
Output:
Array
(
    [0] => Orange
    [1] => Banana
    [2] => Apple
    [3] => Cherry
)
*/
?>
```

### 11.26 array_rand() - Pick one or more random keys

```php
<?php
$fruits = array("Apple", "Banana", "Cherry");
$randKey = array_rand($fruits);
echo $fruits[$randKey];
?>
```

### 11.27 array_reduce() - Reduce array to a single value using callback

```php
<?php
$numbers = array(1, 2, 3, 4);
$sum = array_reduce($numbers, function($carry, $item) {
    return $carry + $item;
});
echo $sum; // Output: 10
?>
```

### 11.28 array_replace() - Replace values in array with values from others

```php
<?php
$base = array("orange", "banana", "apple");
$replacements = array(0 => "grape", 2 => "kiwi");
print_r(array_replace($base, $replacements));
/*
Output:
Array
(
    [0] => grape
    [1] => banana
    [2] => kiwi
)
*/
?>
```

### 11.29 array_reverse() - Return array with elements reversed

```php
<?php
$numbers = array(1, 2, 3);
print_r(array_reverse($numbers));
/*
Output:
Array
(
    [0] => 3
    [1] => 2
    [2] => 1
)
*/
?>
```

### 11.30 array_search() - Search array for a value

```php
<?php
$fruits = array("Apple", "Banana", "Cherry");
$key = array_search("Banana", $fruits);
echo $key; // Output: 1
?>
```

### 11.31 array_shift() - Shift element off the beginning of array

```php
<?php
$fruits = array("Apple", "Banana", "Cherry");
array_shift($fruits);
print_r($fruits);
/*
Output:
Array
(
    [0] => Banana
    [1] => Cherry
)
*/
?>
```

### 11.32 array_slice() - Extract a slice of the array

```php
<?php
$fruits = array("Apple", "Banana", "Cherry", "Orange");
print_r(array_slice($fruits, 1, 2));
/*
Output:
Array
(
    [0] => Banana
    [1] => Cherry
)
*/
?>
```

### 11.33 array_splice() - Remove and replace elements

```php
<?php
$fruits = array("Apple", "Banana", "Cherry");
array_splice($fruits, 1, 1, "Orange");
print_r($fruits);
/*
Output:
Array
(
    [0] => Apple
    [1] => Orange
    [2] => Cherry
)
*/
?>
```

### 11.34 array_sum() - Calculate sum of values

```php
<?php
$numbers = array(2, 4, 6);
echo array_sum($numbers); // Output: 12
?>
```

### 11.35 array_unique() - Remove duplicate values

```php
<?php
$fruits = array("Apple", "Banana", "Apple", "Cherry");
print_r(array_unique($fruits));
/*
Output:
Array
(
    [0] => Apple
    [1] => Banana
    [3] => Cherry
)
*/
?>
```

### 11.36 array_unshift() - Add elements to the beginning

```php
<?php
$fruits = array("Banana", "Cherry");
array_unshift($fruits, "Apple");
print_r($fruits);
/*
Output:
Array
(
    [0] => Apple
    [1] => Banana
    [2] => Cherry
)
*/
?>
```

### 11.37 array_values() - Return all values

```php
<?php
$person = array("Name" => "John", "Age" => 25);
print_r(array_values($person));
/*
Output:
Array
(
    [0] => John
    [1] => 25
)
*/
?>
```

### 11.38 array_walk() - Apply user function to every element

```php
<?php
$fruits = array("Apple", "Banana");
array_walk($fruits, function(&$item, $key) {
    $item = strtoupper($item);
});
print_r($fruits);
/*
Output:
Array
(
    [0] => APPLE
    [1] => BANANA
)
*/
?>
```

### 11.40 asort() - Sort array in ascending order, maintain key association

```php
<?php
$fruits = array("Banana" => 2, "Apple" => 4, "Cherry" => 1);
asort($fruits);
print_r($fruits);
/*
Output:
Array
(
    [Cherry] => 1
    [Banana] => 2
    [Apple] => 4
)
*/
?>
```

### 11.41 compact() - Create array from variables and values

```php
<?php
$city = "Jakarta";
$country = "Indonesia";
$result = compact("city", "country");
print_r($result);
/*
Output:
Array
(
    [city] => Jakarta
    [country] => Indonesia
)
*/
?>
```

### 11.42 count() - Count all elements in an array

```php
<?php
$fruits = array("Apple", "Banana", "Cherry");
echo count($fruits); // Output: 3
?>
```

### 11.43 current() - Return current element in an array

```php
<?php
$fruits = array("Apple", "Banana", "Cherry");
echo current($fruits); // Output: Apple
?>
```

### 11.44 each() - Return current key and value pair (deprecated)

```php
<?php
$fruits = array("Apple", "Banana");
while ($pair = each($fruits)) {
    print_r($pair);
}
/*
Output:
Array
(
    [1] => Apple
    [value] => Apple
    [0] => 0
    [key] => 0
)
Array
(
    [1] => Banana
    [value] => Banana
    [0] => 1
    [key] => 1
)
*/
?>
```

### 11.45 end() - Set internal pointer to last element

```php
<?php
$fruits = array("Apple", "Banana", "Cherry");
echo end($fruits); // Output: Cherry
?>
```

### 11.46 extract() - Import variables from an array

```php
<?php
$info = array("name" => "John", "age" => 30);
extract($info);
echo $name; // Output: John
?>
```

### 11.47 in_array() - Checks if a value exists in an array

```php
<?php
$fruits = array("Apple", "Banana", "Cherry");
if (in_array("Banana", $fruits)) {
    echo "Found";
}
// Output: Found
?>
```

### 11.48 key() - Fetch a key from an array

```php
<?php
$fruits = array("Apple", "Banana");
echo key($fruits); // Output: 0
?>
```

### 11.49 krsort() - Sort array by key in descending order

```php
<?php
$fruits = array("b" => "Banana", "a" => "Apple", "c" => "Cherry");
krsort($fruits);
print_r($fruits);
/*
Output:
Array
(
    [c] => Cherry
    [b] => Banana
    [a] => Apple
)
*/
?>
```

### 11.50 ksort() - Sort array by key in ascending order

```php
<?php
$fruits = array("b" => "Banana", "a" => "Apple", "c" => "Cherry");
ksort($fruits);
print_r($fruits);
/*
Output:
Array
(
    [a] => Apple
    [b] => Banana
    [c] => Cherry
)
*/
?>
```

### 11.51 list() - Assign variables as if they were an array

```php
<?php
$info = array("John", "Doe");
list($first, $last) = $info;
echo $first . " " . $last; // Output: John Doe
?>
```

### 11.52 natcasesort() - Sort array case-insensitively using "natural order"

```php
<?php
$files = array("img12.png", "img10.png", "Img2.png", "img1.png");
natcasesort($files);
print_r($files);
/*
Output:
Array
(
    [3] => img1.png
    [2] => Img2.png
    [1] => img10.png
    [0] => img12.png
)
*/
?>
```

### 11.53 natsort() - Sort array using "natural order"

```php
<?php
$files = array("img12.png", "img10.png", "img2.png", "img1.png");
natsort($files);
print_r($files);
/*
Output:
Array
(
    [3] => img1.png
    [2] => img2.png
    [1] => img10.png
    [0] => img12.png
)
*/
?>
```

### 11.54 next() - Advance array pointer

```php
<?php
$fruits = array("Apple", "Banana", "Cherry");
next($fruits);
echo current($fruits); // Output: Banana
?>
```

### 11.55 pos() - Alias of current()

```php
<?php
$fruits = array("Apple", "Banana");
echo pos($fruits); // Output: Apple
?>
```

### 11.56 prev() - Rewind array pointer

```php
<?php
$fruits = array("Apple", "Banana", "Cherry");
next($fruits); // Banana
prev($fruits);
echo current($fruits); // Output: Apple
?>
```

### 11.57 range() - Create array containing a range of elements

```php
<?php
$numbers = range(1, 5);
print_r($numbers);
/*
Output:
Array
(
    [0] => 1
    [1] => 2
    [2] => 3
    [3] => 4
    [4] => 5
)
*/
?>
```

### 11.58 reset() - Set array pointer to first element

```php
<?php
$fruits = array("Apple", "Banana");
next($fruits);
reset($fruits);
echo current($fruits); // Output: Apple
?>
```

### 11.59 rsort() - Sort array in descending order

```php
<?php
$numbers = array(4, 2, 8);
rsort($numbers);
print_r($numbers);
/*
Output:
Array
(
    [0] => 8
    [1] => 4
    [2] => 2
)
*/
?>
```

### 11.60 shuffle() - Shuffle array randomly

```php
<?php
$numbers = range(1, 5);
shuffle($numbers);
print_r($numbers);
// Output: urutan acak
?>
```
