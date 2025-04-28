<?php

// МАССИВЫ

$names = ['Paul', 'John', 'Thomas', 'Courtney', 'Alex', 'Harold'];

echo "<pre>";
print_r($names);
echo "</pre>";

$cities = [
    'Russia' => 'Rostov-on-Don',
    'USA' => 'Los Angeles',
    'England' => 'London',
    'Germany' => 'Berlin'
];

echo "<pre>";
print_r($cities);
echo "</pre>";

$matrix = [
    [3, 5, 9, 4],
    [20, 10.1],
    [1, "2"]
];

echo $matrix[0][1];
echo "<pre>";
print_r($matrix);
echo "</pre>";
