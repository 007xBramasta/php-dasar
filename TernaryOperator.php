<?php

$gender = "WANITA";
$hi = null;

if($gender == "PRIA"){
    $hi = "Hai Bro!";
}else{
    $hi = "Hai Sayang!";
}

echo $hi . PHP_EOL;


$gender = "PRIA"; //Ternary Operator
$hi = $gender== "PRIA" ? "Hi Bro!" : "Hi Sayang";


echo $hi . PHP_EOL;