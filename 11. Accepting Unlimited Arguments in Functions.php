<?php

function sum($x, $y, int ...$numbers):int{
    // return "abc";
    //return $x+$y+$z;
    $result = 0;
    $i=0;
    for($i ; $i<count($numbers) ; $i++){
        $result += $numbers[$i];
    }
    return $result;
}

echo sum(5,10,15,25,35);