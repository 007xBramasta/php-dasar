<?php

function sayHello($name){
    echo "Hallo $name" . PHP_EOL;
}

sayHello("Bram");
sayHello("Kirana");


function Hello($name = "ANJAYYYYYY"){     //DEFAULT ARGUMENT
    echo "Hallo $name" . PHP_EOL;
}

Hello();


function Hallo($firstName, $lastName=""){    //DEFAULT ARGUMENT YANG KANAN YANG DI ISI!
    echo "Hallo $firstName $lastName" . PHP_EOL;
}

Hallo("Bram", "Ganteng");

function sum(int $first, int $last) //TIPE DATA
{
    $total = $first + $last;
    echo "Total $first + $last = $total" . PHP_EOL;
}

sum(100,100);
sum("100", "100");
sum(true,false);

function sumAll(...$values){     //FUNCTION ARGUMENT LIST
    $total = 0;
    foreach ($values as $value){
        $total += $value;
    }
    echo "Total" . implode(",", $values) . " = $total" . PHP_EOL;
}

$values = [1, 2, 3, 4, 5];

sumAll(1, 2, 3, 4, 5);
sumAll(...$values);