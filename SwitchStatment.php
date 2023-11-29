<?php

$nilai = "B";

if($nilai == "A"){
    echo "Anda lulus dengan nilai yang sangat baik";
} else if($nilai == "B" || $nilai == "C"){
    echo "Anda lulus ";
} else if($nilai == "D" ){
    echo "Anda tidak lulus";
} else {
    echo "Anda salah jurusan"; 
};

switch ($nilai){                    //switch statment   
    case "A":
        echo "Anda lulus dengan nilai yang sangat baik";
        break;
    case "B":
    case "C":
        echo "Anda lulus ";
        break;
    case "D":
        echo "Anda tidak lulus";
    default:
        echo "Anda salah jurusan";                 
};

switch ($nilai):                        //sytax anlternatif menggunakan :
    case "A":
        echo "Anda lulus dengan nilai yang sangat baik"; 
        break;
    case "B":
    case "C":
        echo "Anda lulus ";
        break;
    case "D":
        echo "Anda tidak lulus";
    default:
        echo "Anda salah jurusan";                 
    endswitch;