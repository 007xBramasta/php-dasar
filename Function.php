<?php

function sayHallo(){
    echo "Halo guys" . PHP_EOL;
}

sayHallo();

$buat = true;           //DI DALAM IF
if($buat){
    function bilangHallo()
    {
        echo "Hallo Function" . PHP_EOL;
    }
}

bilangHallo();