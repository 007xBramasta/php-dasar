<?php

$firstName = "Bramsta";
$lastName = "Albatio";

$anonymouseFunction = function () use($firstName, $lastName): string {
    return "Hallo $firstName $lastName" . PHP_EOL;
};

//ARROW FUNCTION
$arrowFunction = fn() => "Hallo $firstName $lastName" . PHP_EOL;

echo $anonymouseFunction();
echo $arrowFunction();