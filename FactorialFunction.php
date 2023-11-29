<?php

function factorialLoop(int $value): int
{
    $total =1;

    for ($i = 1; $i<= $value; $i++) {
        $total *= $i;
    }

    return $total;
}

var_dump(factorialLoop(5));
var_dump(1 * 2 * 3 * 4 * 5);

function FactorialRecursive(int $value): int 
{
    if($value ==1){
        return 1;
    } else {
        return $value * FactorialRecursive($value -1);
    }
}

var_dump(FactorialRecursive(6));

function loop(int $value)
{
    if($value== 0) {
        echo "End loop" . PHP_EOL;
    }else {
        echo "Loop-$value" . PHP_EOL;
        loop($value -1);
    }
}

loop(100);  //JANGAN TERLALU BANYAK LOOP KARNA BISA KEPENUHAN MEMORI