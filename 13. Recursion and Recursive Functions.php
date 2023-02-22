<?php

//recursive function

// function printN($i){
//     if($i>=10){
//         return;
//     }
//     echo $i."\n";
//     $i++;
//     printN($i);
// }
// printN(0);


//recursive function


// function printNunder($counter,$end){
//     if($counter>$end){
//         return;
//     }
//     echo $counter."\n";
//     $counter++;
//     printNunder($counter, $end);
// }
// printNunder(20,25);


//recursive function

function printNunder($counter,$end, $stepping=1){
    if($counter>$end){
        return;
    }
    echo $counter."\n";
    $counter += $stepping;
    printNunder($counter, $end, $stepping);
}
printNunder(10,25,5);





