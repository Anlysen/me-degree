<?php

$cyborgsXy = [
    'killer' => 'shoot',
    'rock' => 'demolitionist',
    'high-speed' => 'scouts',
    'drill' => 'underground'
];

array_multisort($cyborgsXy);
var_dump($cyborgsXy);

echo "<pre>";
print_r($cyborgsXy);
echo "</pre>";

echo __DIR__;

?>