<?php

class Point {
    private float $x;
    private float $y;
    private float $z;

    // Принимает значения точки
    public function __construct(float $x, float $y, float $z) {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }

    // distanceTo метод вычисляет расстояние до другой точки
    public function distanceTo(Point $other) : float {
        return sqrt(
            ($this->x - $other->x) ** 2 +
            ($this->y - $other->y) ** 2 +
            ($this->z - $other->z) ** 2
        );
    }
}