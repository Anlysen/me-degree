<?php

function info($word)
{
    echo $word . "<br>";
}

function math($x, $y)
{
    $res = $x * $y;
    info($res);
}

math(2, 2);
math(5, 5);
