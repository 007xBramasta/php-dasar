<?php

$name = "Bram";

$OtherName = &$name;

$OtherName = "Budi";

echo $name . PHP_EOL;

function increment(int &$value)
{
    $value++;
}

$counter = 8;
increment($counter);

echo $counter . PHP_EOL;

function &getValue()
{
    static $value = 100;
    return $value;        
}

$a = &getValue();
$a = 500;

$b = getValue() ;
echo $b . PHP_EOL;