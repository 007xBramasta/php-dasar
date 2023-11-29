<?php

goto a;
echo "Hello Wolrd";

a:
echo "Hello A";

$counter = 1;
while (true){              
    echo "Hallo For While Loop ke-$counter "  . PHP_EOL;
    $counter++;

    if($counter >20){
        goto end;
    }
 }

 end:
 echo "End Loop";