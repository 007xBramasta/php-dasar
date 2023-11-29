<?php

function sayHello(string $filter, callable $name)
{
    $finalName = call_user_func($name, $filter);
    echo "Hello $finalName" . PHP_EOL;
}


SayHello("Bramsata", "strtoupper");
SayHello("Bramsata", "strtolower");
sayHello("Bramasta", function (string $name): string {
    return strtoupper($name);
});
SayHello("Bramasta", fn($name) => strtoupper($name));