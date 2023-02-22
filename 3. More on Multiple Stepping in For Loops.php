<?php

for($i=0;$i<100;$i++){
    
    //echo $i.PHP_EOL;

    //if($i % 7 == 0) echo $i.PHP_EOL;
    //if($i % 11 == 0) echo $i.PHP_EOL;

    // echo ($i % 7) == 0 ? $i.PHP_EOL : '';
    //echo ($i % 11) == 0 ? $i.PHP_EOL : '';

}

// doing samething is multi step

for($i=0, $j=0; $i<100; $i+=7, $j+=11){
    //echo $i.PHP_EOL;
    //echo $j.PHP_EOL;

    echo $j <100 ? $j.PHP_EOL:'';

}

