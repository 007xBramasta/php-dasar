<?php
 
 $name = "Bramasta Albatio Haryono";

 echo "Nama :" . $name . PHP_EOL; //PHP_EOL = Enter
 echo "Nilai :" . 100 . PHP_EOL; //Dot Operator .

$NilaiString = (String)100; //Konversi ke number atau (string) sebaliknya
var_dump($NilaiString);

 $NilaiInt = (int)"100";
 var_dump($NilaiInt);

 $NilaiFloat = (float)"7.77";
 var_dump($NilaiFloat);

 $name = "Bram"; //mengakses karakter
 echo $name[0] . PHP_EOL;
 echo $name[1] . PHP_EOL;
 echo $name[2] . PHP_EOL;
 echo $name[3] . PHP_EOL;

 echo "Hello $name, Selamat Belajar PHP" . PHP_EOL; //Variabel Pharsing

 $bram = "Bramasta";
 echo "Semangat belajar {$bram}Albatio, anjay"; //Curly Brace