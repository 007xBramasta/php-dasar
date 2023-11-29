<?php

$counter = 1;
 for (; $counter <=10;){                            //PERULANGAN DENGAN KONDISI
    echo "Hallo For Loop ke-$counter "  . PHP_EOL;
    $counter++;
 }

 
 for ($counter = 1; $counter <=10;){                //PERULANGAN DENGAN INIT STATMENT
    echo "Hallo For Loop ke-$counter "  . PHP_EOL;
    $counter++;
 }

 for ($counter = 10; $counter >=1; $counter--){        //PERULANGAN DENGAN POST STATMENT
    echo "Hallo For Loop ke-$counter "  . PHP_EOL;
 }

 for ($counter = 1; $counter <=10;):                //PERULANGAN DENGAN SYTAX ALTERNATIF LOOP
    echo "Hallo For Loop ke-$counter "  . PHP_EOL;
    $counter++;
 endfor;

 for ($counter = 10; $counter >=1; $counter--):
    echo "Hallo For Loop ke-$counter "  . PHP_EOL;
 endfor;