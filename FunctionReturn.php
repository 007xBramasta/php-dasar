<?php

function sum(int $first, int $second): int
{
    $total = $first + $second;
    return $total;
}

$result = sum(10, 10);
var_dump($result);

$result = sum(100,100);
var_dump($result);

function getFinalValue(int $value): string
{
    if ($value >= 80) {
        return "A";
    } else if ($value >= 70){
        return "B";
    } else if ($value >= 60){
        return "C";
    } else if ($value >= 50){
        return "D";
    } else {
        return "E";
    }
        
    echo "Ehh" . PHP_EOL;
}

$score = getFinalValue(90);
var_dump($score);

$score = getFinalValue(50);
var_dump($score);