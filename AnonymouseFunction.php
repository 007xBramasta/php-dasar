<?php

$sayHallo = function (string $name) {
    echo "Hello $name" . PHP_EOL;
};

$sayHallo("Bramasta");

//ANONYMOUSE FUNCTION SEBAGAI ARGUMENT
function sayGoodBye(string $name, $filter){ 
    $finalName = $filter($name);
    echo "Goodbyee $finalName" . PHP_EOL;
}

sayGoodBye("Bramasta", function (string $name): string{
    return strtoupper($name);
});

$filterFunction = function (string $name): string {
    return strtoupper($name);
};
sayGoodBye("Bram", $filterFunction);

 //MENGAKSES VARIABEL LUAR
$firstName = "Bramasta";
$lastName = "Albatio";

$sayHalloBram = function () use ($firstName, $lastName) {
    echo "Hallo $firstName $lastName" . PHP_EOL;
};

$sayHalloBram();