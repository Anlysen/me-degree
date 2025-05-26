<?php

$nums = [1, 2, 3, 4, 5];

foreach ($nums as $num) {
    var_dump($num);
}

for ($i = 0; $i < 10; $i++) {
    if ($i % 2 == 0) {
        continue;
    }

    echo "$i <br>";
}

$users = [
    ["name" => "Alex", "age" => 25, "active" => true],
    ["name" => "Mary", "age" => 17, "active" => true],
    ["name" => "John", "age" => 30, "active" => true]
];

foreach ($users as $user) {
    if (!$user['active']) {
        continue;
    }

    echo "Name: " . $user['name'];

    if ($user['age'] >= 18) {
        echo " Совершеннолетний";
    } else {
        echo " Несовершеннолетний";
    }

    echo "<br>";
}
