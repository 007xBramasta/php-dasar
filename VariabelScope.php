<?php

$name = "Bram";

function sayhello(){
    global $name; //global keywoard
    echo $name . PHP_EOL;
    echo $GLOBALS["name"] . PHP_EOL; //MEMANGGIL GLOBAL DENGAN KEYWORD YANG DI BUTUHKAN
}

sayhello();