<?php

class complexNumber { // Реализует операции сложения, вычитания и умноюжения
    private float $real;
    private float $imaginary;

    public function __construct(float $real, float $imaginary) {
        $this->real = $real;
        $this->imaginary = $imaginary;
    }

    public function add(complexNumber $other) : complexNumber {
        return new complexNumber(
            $this->real + $other->real,
            $this->imaginary + $other->imaginary
        );
    }

    public function subtract(complexNumber $other) : complexNumber {
        return new complexNumber(
            $this->real - $other->real,
            $this->imaginary - $other->imaginary
        );
    }

    public function multiply(complexNumber $other) : complexNumber {
        return new complexNumber(
            $this->real * $other->real - $this->imaginary * $other->imaginary,
            $this->real * $other->imaginary + $this->imaginary * $other->real
        );
    }

    public function __toString(): string {
        return "{$this->real} " . ($this->imaginary >= 0 ? "+ " : "- ") . abs($this->imaginary) . "i";
    }
}

//Пример использования

$z1 = new complexNumber(3, 4);
$z2 = new complexNumber(1, -2);

echo "z1 = $z1 <br>";
echo "z2 = $z2 <br>";
echo "Сложение: " . $z1->add($z2) . "<br>";
echo "Вычитание: " . $z1->subtract($z2) . "<br>";
echo "Умножение: " . $z1->multiply($z2) . "<br>";
