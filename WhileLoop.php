<?php

$counter = 1;
while ($counter <=10){              
    echo "Hallo For While Loop ke-$counter "  . PHP_EOL;
    $counter++;
 }

 $counter = 1;
while ($counter <=10):         
    echo "Hallo For While Loop ke-$counter "  . PHP_EOL;
    $counter++;
endwhile;