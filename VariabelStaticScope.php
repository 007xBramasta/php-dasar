<?php

function increment()
{
    static $counter = 1; //static scope akan mengeksekusi function selajutnya
    echo "Counter = $counter" . PHP_EOL;
    $counter++;
}

increment();
increment();
increment();
increment();
increment();
increment();