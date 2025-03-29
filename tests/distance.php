<?php

require_once 'point.php';

// Сохдаются обьекты и вычисляются расстояния между ними
$point1 = new Point(1, 2, 3);
$point2 = new Point(4, 6, 9);

$distance = $point1->distanceTo($point2);
echo "Расстояние между точками: " . $distance;