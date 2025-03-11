<?php

// Arrays
// Good
$cyborgsXy = [
    'shooter' => 'shoot',
    'rock' => 'demolitionist',
    'high-speed' => 'scouts',
    'drill' => 'underground',
    'exterminated' => 'air support'
];

array_multisort($cyborgsXy);
var_dump($cyborgsXy);

echo "<pre>";
print_r($cyborgsXy);
echo "</pre>";


// Evil
$monsters = [
    'dragon' => 'destroy with flame',
    'zero' => 'helper of dragon',
    'hell-boy' => 'leader of monsters',
    'army' => 100000
];

array_multisort($monsters);
var_dump($monsters);

echo "<pre>";
print_r($monsters);
echo "</pre>";

foreach ($cyborgsXy as $key => $value)
{
    print($key . ': ');
    print($value . '<br>');
}


// Classes

class Shooter {
    public $a;
    public $b;
    public $model;
    public $software;
    public $weapon;
    public function handCombat() {
        echo "Hand combat go hard";
    }
}
echo "<br>";

$shooter = new Shooter;
$shooter->model = "XY";
$shooter->software = "iOS for cyborg";
$shooter->weapon = "byte";


class Point {
    private $x;
    private $y;
    private $z;

    public function __construct($x, $y, $z) {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }

    public function getX() {
        return $this->x;
    }

    public function getY() {
        return $this->y;
    }

    public function getZ() {
        return $this->z;
    }

    public function distanceTo(Point $other) {
        $dx = $this->x - $other->getX();
        $dy = $this->y - $other->getY();
        $dz = $this->z - $other->getZ();
        return sqrt($dx * $dx + $dy * $dy + $dz * $dz);
    }
}

$point1 = new Point(1, 2, 3);
$point2 = new Point(4, 5, 6);

$distance = $point1->distanceTo($point2);

echo "Расстояние между точками: " . $distance;
echo "<br>";


?>