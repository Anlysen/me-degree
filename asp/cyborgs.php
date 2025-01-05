<?php

// Good
$cyborgsXy = [
    'killer' => 'shoot',
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

?>