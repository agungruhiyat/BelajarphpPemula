<?php
$nilai = "A";
switch ($nilai){
    case "A":
        echo "Anda Lulus Dengan Baik" . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Anda Lulus" . PHP_EOL;
        break;
    case "D":
        echo "Anda Tidak Lulus" . PHP_EOL;
        break;
    default:
    echo "mungkin anda salah jurusan " . PHP_EOL;
}

switch ($nilai) :
    case "A":
        echo "Anda Lulus Dengan Baik" . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Anda Lulus" . PHP_EOL;
        break;
    case "D":
        echo "Anda Tidak Lulus" . PHP_EOL;
        break;
    default:
        echo "mungkin anda salah jurusan " . PHP_EOL;
    endswitch;
