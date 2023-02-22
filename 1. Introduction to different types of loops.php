<?php

// for loop
echo "For";
for( $r = 1; $r<=10; $r+=2 ){
    //echo $r;
    echo PHP_EOL;
    for($s=0; $s<$r; $s++){
        echo "*";
    }
}



// while loop
echo PHP_EOL;
echo "While";
echo PHP_EOL;
$r =0;

while($r<5){
    $r++;
    echo $r.PHP_EOL;
}



// Do While
echo PHP_EOL;
echo "Do While";
echo PHP_EOL;
$r=0;
do{
    $r++;
    echo $r.PHP_EOL;
}while($r<5);


// go to
echo PHP_EOL;
echo "GOto";
echo PHP_EOL;

$r=0;
a: $r++;
echo $r.PHP_EOL;
if($r<6) goto a;