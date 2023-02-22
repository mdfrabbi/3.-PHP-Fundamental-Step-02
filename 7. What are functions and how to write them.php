<?php

// to inclue a diffrent file for function you can use include_once "URL" for the extranal file link
// include_once "function.php";

function evenOrOdd($n){
    if($n%2==0){
        return true;
    }
    
    return false;
    
}

$rabbi = 21;

if(evenOrOdd($rabbi)){
    echo "$rabbi is a even number";
}else{
    echo "$rabbi is a odd number";
}