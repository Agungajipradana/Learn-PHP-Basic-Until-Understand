<?php

/*
Iterable adalah tipe data gabungan dalam PHP yang mewakili nilai-nilai yang bisa diiterasi satu per satu, biasanya dalam perulangan (loop).

Tipe data iterable mencakup:
    - Array
    - Object yang mengimplementasikan interface Traversable (seperti Iterator, Generator)

`iterable` diperkenalkan di PHP 7.1, dan biasanya digunakan dalam deklarasi parameter atau return type untuk menunjukkan bahwa fungsi menerima/mengembalikan data yang bisa di-loop.
*/

echo "------------------------------------------- Contoh Penggunaan Iterable --------------------------------------" . "\n\n";

/*
1. Iterable sebagai Array
*/

echo "1. Iterable sebagai Array\n\n";

function printItems(iterable $items): void
{
    foreach ($items as $item) {
        echo "Item: $item\n";
    }
}

$arrayItems = ["Apple", "Banana", "Cherry"];
printItems($arrayItems);

echo "\n";

/*
2. Iterable sebagai Generator (fungsi dengan yield)
*/

echo "2. Iterable sebagai Generator\n\n";

function numberGenerator(int $start, int $end): iterable
{
    for ($i = $start; $i <= $end; $i++) {
        yield $i;
    }
}

$generatedNumbers = numberGenerator(1, 5);
printItems($generatedNumbers);

echo "\n";

/*
3. Iterable sebagai Object dengan Iterator
*/

echo "3. Iterable sebagai Object dengan Iterator\n\n";

class NumberList implements Iterator
{
    private array $numbers;
    private int $position = 0;

    public function __construct(array $numbers)
    {
        $this->numbers = $numbers;
    }

    public function current(): mixed
    {
        return $this->numbers[$this->position];
    }

    public function key(): int
    {
        return $this->position;
    }

    public function next(): void
    {
        ++$this->position;
    }

    public function rewind(): void
    {
        $this->position = 0;
    }

    public function valid(): bool
    {
        return isset($this->numbers[$this->position]);
    }
}

$numberList = new NumberList([10, 20, 30]);
printItems($numberList);
