# PHP Operators

## Arithmetic Operators

| Operator | Name           | Example    | Result                                  |
| -------- | -------------- | ---------- | --------------------------------------- |
| +        | Addition       | $x + $y    | Sum of $x and $y                        |
| -        | Subtraction    | $x - $y    | Difference of $x and $y                 |
| \*       | Multiplication | $x \* $y   | Product of $x and $y                    |
| /        | Division       | $x / $y    | Quotient of $x and $y                   |
| %        | Modulus        | $x % $y    | Remainder of $x divided by $y           |
| \*\*     | Exponentiation | $x \*\* $y | Result of raising $x to the $y'th power |

```php
$x = 10;
$y = 3;

// Penjumlahan
echo $x + $y; // Output: 13

// Pengurangan
echo $x - $y; // Output: 7

// Perkalian
echo $x * $y; // Output: 30

// Pembagian
echo $x / $y; // Output: 3.3333333333

// Sisa bagi
echo $x % $y; // Output: 1

// Eksponen
echo $x ** $y; // Output: 1000
```

## Assignment Operators

| Operator | Example   | Same as         |
| -------- | --------- | --------------- |
| =        | $x = $y   | Assign $y to $x |
| +=       | $x += $y  | $x = $x + $y    |
| -=       | $x -= $y  | $x = $x - $y    |
| \*=      | $x \*= $y | $x = $x \* $y   |
| /=       | $x /= $y  | $x = $x / $y    |
| %=       | $x %= $y  | $x = $x % $y    |

```php
$x = 5;
$y = 2;

$x += $y; // $x = 7
$x -= $y; // $x = 5
$x *= $y; // $x = 10
$x /= $y; // $x = 5
$x %= $y; // $x = 1
```

## Comparison Operators

| Operator | Name                  | Example   | Result                                   |
| -------- | --------------------- | --------- | ---------------------------------------- |
| ==       | Equal                 | $x == $y  | True if $x is equal to $y                |
| ===      | Identical             | $x === $y | True if $x is equal to $y and same type  |
| !=       | Not equal             | $x != $y  | True if $x is not equal to $y            |
| <>       | Not equal             | $x <> $y  | Same as !=                               |
| !==      | Not identical         | $x !== $y | True if $x is not equal or not same type |
| >        | Greater than          | $x > $y   | True if $x is greater than $y            |
| <        | Less than             | $x < $y   | True if $x is less than $y               |
| >=       | Greater than or equal | $x >= $y  | True if $x >= $y                         |
| <=       | Less than or equal    | $x <= $y  | True if $x <= $y                         |
| <=>      | Spaceship             | $x <=> $y | -1, 0, or 1                              |

```php
$x = 5;
$y = "5";

var_dump($x == $y);  // true
var_dump($x === $y); // false
var_dump($x != $y);  // false
var_dump($x !== $y); // true
```

## Increment / Decrement Operators

| Operator | Name           | Example | Description                    |
| -------- | -------------- | ------- | ------------------------------ |
| ++$x     | Pre-increment  | ++$x    | Increments $x, then returns $x |
| $x++     | Post-increment | $x++    | Returns $x, then increments $x |
| --$x     | Pre-decrement  | --$x    | Decrements $x, then returns $x |
| $x--     | Post-decrement | $x--    | Returns $x, then decrements $x |

```php
$x = 5;
echo ++$x; // Output: 6
echo $x++; // Output: 6 (then becomes 7)
echo --$x; // Output: 6
echo $x--; // Output: 6 (then becomes 5)
```

## Logical Operators

| Operator | Name | Example   | Result                          |
| -------- | ---- | --------- | ------------------------------- | --- | --- | --- | ------------------------------ |
| and      | And  | $x and $y | True if both are true           |
| or       | Or   | $x or $y  | True if either is true          |
| xor      | Xor  | $x xor $y | True if one is true             |
| &&       | And  | $x && $y  | Same as and (higher precedence) |
|          |      |           | Or                              | $x  |     | $y  | Same as or (higher precedence) |
| !        | Not  | !$x       | True if $x is false             |

```php
$x = true;
$y = false;

var_dump($x && $y); // false
var_dump($x || $y); // true
var_dump(!$x);      // false
```

## String Operators

| Operator | Name          | Example  | Result                 |
| -------- | ------------- | -------- | ---------------------- |
| .        | Concatenation | $x . $y  | Concatenates $x and $y |
| .=       | Append        | $x .= $y | Appends $y to $x       |

```php
$name = "John";
$greeting = "Hello, ";
$greeting .= $name; // Hello, John
echo $greeting;
```

## Array Operators

| Operator | Name         | Example   | Result                            |
| -------- | ------------ | --------- | --------------------------------- |
| +        | Union        | $x + $y   | Union of $x and $y                |
| ==       | Equality     | $x == $y  | True if $x and $y have same pairs |
| ===      | Identity     | $x === $y | True if $x and $y are identical   |
| !=       | Inequality   | $x != $y  | True if $x and $y are not equal   |
| <>       | Inequality   | $x <> $y  | Same as !=                        |
| !==      | Non-identity | $x !== $y | True if $x and $y not identical   |

```php
$a = ["a" => "apple", "b" => "banana"];
$b = ["a" => "apple", "b" => "banana"];
$c = ["a" => "apple", "b" => "grape"];

var_dump($a == $b);  // true
var_dump($a === $b); // true
var_dump($a != $c);  // true
```

## Conditional Assignment Operators

| Operator | Name            | Example      | Result                                          |
| -------- | --------------- | ------------ | ----------------------------------------------- |
| ?:       | Ternary         | $x ? $x : $y | Returns $x if $x is true, otherwise $y          |
| ??       | Null Coalescing | $x ?? $y     | Returns $x if exists and not null, otherwise $y |

```php
$name = null;
echo $name ?? "Guest"; // Output: Guest

$age = 18;
echo $age >= 18 ? "Adult" : "Minor"; // Output: Adult
```
