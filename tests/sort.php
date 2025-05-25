<?php

function sortA($arr, $list)
{
    if ($arr == $list) {
        return 0;
    }

    return ($arr < $list) ? -1 : 1;
}

$arr = [3, 2, 5, 8, 1];

usort($arr, "sortA");

foreach ($arr as $key => $val) {
    echo "$key: $val<br>";
}
