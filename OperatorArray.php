<?php

$first = [
    "first_name" =>"Bramasta"
];

$last = [ //Union
    "last_name" =>"Albatio"
];

$fullname = $first + $last; //variabel yang di tulis pertama yang di eksekuasi terlebih dahulu
var_dump($fullname);

$a = [
    "first_name" =>"Bramasta",
    "last_name" =>"Albatio"
];

$b = [
    "last_name" =>"Albatio",
    "first_name" =>"Bramasta"
];

var_dump($a==$b); //Equality
var_dump($a===$b); //Identity

$bram = [
    "Programmer" => "Php"
];

$kirana = [
    "Penjahit" => "Baju"
];

var_dump($bram != $kirana); //Inequality
var_dump($bram !== $kirana); //Noidentity