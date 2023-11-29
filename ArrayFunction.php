<?php

$data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]; //MENGUBAH DATA ARRAY SEBELUMMNYA MENJADI DATA BARU DENGAN MENGGUNAKAN SEBUAH FUNCTION

$datarResult = array_map(fn(int $value) =>$value * 10, $data);
var_dump($datarResult);

rsort($data); //DECENDING DARI YANG BESAR KE YANG KECIL
var_dump($data);

var_dump(array_keys($data));
var_dump(array_values($data));

$person = [
    "first_name" => "Bramasta",
    "last_name" => "Albatio"
];

var_dump(array_keys($person)); //MEMANGGIL KEY NYA AJA
var_dump(array_values($person)); //MEMANGGIL VALUE NYA AJA