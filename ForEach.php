<?php

$names = ["Bramasta", "Albatio", "Haryono"]; //TANPA FOREACH

for ($i=0; $i < count($names); $i++) {
    echo "Data ke $i =$names[$i]" . PHP_EOL;
}

$names = ["Bramasta", "Albatio", "Haryono"]; //MENGGUNAKAN FOREACH

foreach ($names as $name) {
    echo "Hallo $name" . PHP_EOL;
}

$person = [
    "first_name" => "Bramasta",
    "middle_name" => "Albatio",
    "last_name" => "Haryono"
];

foreach ($person as $key => $value){
    echo "$key : $value" . PHP_EOL;
}