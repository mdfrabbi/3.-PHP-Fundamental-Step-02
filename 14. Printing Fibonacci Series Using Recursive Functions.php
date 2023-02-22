<?php

// function fivo($old, $new, $start, $end){
    
//     if($start>$end){
//         return;
//     }
//     $start++;

//     echo $old. " ";
//     $_temp = $old + $new;
//     $old = $new;
//     $new = $_temp;

//     fivo($old, $new, $start,$end);
// }

// fivo(0,1,1,10);


function fivo($old, $new, $end){
    
    static $start;
    $start = $start ?? 1;

    if($start>$end){
        return;
    }
    $start++;

    echo $old." ";
    $_temp = $old + $new;
    $old = $new;
    $new = $_temp;

    fivo($old, $new, $end);
}

fivo(0,1,5);


