<?php

//Global Scope

// $name = "Rabbi";

// function doSomething(){
//    // global $name;
//     //echo $name;
//     echo $GLOBALS['name'];
// }
// doSomething();



// function doSomething(){
//     global $name;
//     echo $name = "Rabbi";
   
// }
// doSomething();
// // echo $name;



function doSomething(){
   static $i;
    $i = $i ?? 0;

    
    $i++;
    echo $i."\n";

   
}
doSomething();
doSomething();
doSomething();
// echo $name;


