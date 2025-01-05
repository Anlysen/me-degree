<?php

$summer = ['sun' => 'солнце', 'pool' => 'бассейн', 'beach' => 'пляж'];

function getDailyWords()
{
    shuffle($summer);
    return array_slice($summer, 0, 3);
}

//$dailyWords = getDailyWords($summer);
var_dump($summer);

?>