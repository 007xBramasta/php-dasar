<?php

$values = array(1, 2, 3, 4, 5.5); //array
var_dump($values);

$names = ["Bramasta", "Albatio", "Haryono"]; //array
var_dump($names);
var_dump($names[1]);

$names[2] = "Kirana"; //mengubah data array
var_dump($names);

unset($names[2]); //menghapus data array
var_dump($names);

$names[] = "Domes"; //menambahkan data array
var_dump($names);

var_dump(count($names)); //menghitung jumlah data array

$bram = array(         //Map di php
    "id" => "Bramasta", //Mengubah key sesuai keinginan kita
    "name" => "Bramasta Albatio",
    "age" => 20,
    "address" => array( //menambahkan array di dalam array
        "city" => "Trenggalek",
        "country" => "Indonesia"
    )
);
var_dump($bram);
var_dump($bram["id"]); //memanggil salah satu data
var_dump($bram["address"]["city"]); //memanggil salah satu data array di dalam array melalui salah satu key

$kirana = [        //Map di php menggunakan [] 
    "id" => "kirana", //Mengubah key sesuai keinginan kita
    "name" => "kirana cantik",
    "age" => 20 ,
    "address" => [ //menambahkan array di dalam array
        "city" => "Watulimo",
        "country" => "Indonesia"
    ]
];  

var_dump($kirana);
var_dump($kirana["id"]); 
var_dump($kirana["address"]["country"]);