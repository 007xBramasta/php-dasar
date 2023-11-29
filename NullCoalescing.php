<?php

$data = [
    "action" => "create"
];

if (isset($data["action"])){ //IF ELSE
    $action = $data["action"];
}else {
    $action = "Nothing";
}

echo $action . PHP_EOL;

$data = [];
$action = $data["action"] ?? "Nothing"; //NULL COALESCING

echo $action . PHP_EOL;
