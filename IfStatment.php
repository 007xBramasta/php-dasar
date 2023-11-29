<?php

$nilai = 70;
$absen = 70;

if ($nilai >=80 && $absen >= 80){ // menggunakan {} else if
    echo "Nilai Anda A" . PHP_EOL;
} else if ($nilai >= 70 && $absen >= 70){
    echo "Nilai ANDA B" . PHP_EOL;
} else if ($nilai >= 60 && $absen >= 60){
    echo "Nilai ANDA C" . PHP_EOL;
} else if ($nilai >= 50 && $absen >= 50){
    echo "Nilai ANDA D" . PHP_EOL;
} else {
    echo "Nilai ANDA E" . PHP_EOL;
}

if ($nilai >=80 && $absen >= 80): //menggunakan : elseif endif
    echo "Nilai Anda A" . PHP_EOL;
 elseif ($nilai >= 70 && $absen >= 70) :                       
    echo "Nilai ANDA B" . PHP_EOL;
 elseif ($nilai >= 60 && $absen >= 60) :
    echo "Nilai ANDA C" . PHP_EOL;
 elseif ($nilai >= 50 && $absen >= 50) :
    echo "Nilai ANDA D" . PHP_EOL;
 else :
    echo "Nilai ANDA E" . PHP_EOL;
endif ;