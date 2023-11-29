<?php

$nama ="Bram";
$nama = null;

$umur = null;

echo "Nama :";
echo $nama;
echo "\n";

echo "Umur ;";
echo $umur;
echo "\n";

echo "Is Name Null? : "; //Mengecek variabel kalo yakin ada atau tidak hasilnya Boolean False atau True
var_dump (is_null($nama));
echo "\n";

$contoh = "Bram";
unset($contoh); //Menghapus sebuah variabel

var_dump(isset($contoh)); //Mengecek sebuah varibael yang gak yakin null atau tidak