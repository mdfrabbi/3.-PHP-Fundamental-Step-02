
<?php
//include_once "function.php";

 function serve($foodType="coffee",$numberOfItems="1 Cup"){
     echo "{$numberOfItems} of {$foodType} has been service";
 }

$ft = "Coffee";
$n = "2 Cups";
serve($ft, $n);

echo PHP_EOL; 
serve();