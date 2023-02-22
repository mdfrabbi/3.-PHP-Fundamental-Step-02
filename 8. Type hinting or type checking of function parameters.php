<?php

function factoril( $n) {
    $result = 1;
    for($i = $n ; $i >1; $i++ ){
        $result *= $i;
    }
    return $result;
}

$x = 30;

echo "Factorial of {$x} is". factoril($x);