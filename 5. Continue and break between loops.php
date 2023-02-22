<?php

for($i=0; $i<10; $i++){
    echo $i;
    
    echo PHP_EOL;
    
    if ($i==6){
        break;
    }
}

echo PHP_EOL;
echo PHP_EOL;
//break;
for($j=20; $j<50; $j++){
    
    
    if ($j % 13 ==0){
        echo $j;
        echo PHP_EOL;
        break;
    }
  
}


echo PHP_EOL;
echo PHP_EOL;
//break;
for($j=20; $j<50; $j++){
    
    
    if ($j <=25){
        echo $j;
        echo PHP_EOL;
        continue;
    }
  
}



