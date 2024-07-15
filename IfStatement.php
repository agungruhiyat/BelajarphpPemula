<?php
$nilai = 80;
$absen = 98;

if ($nilai >= 80 && $absen >= 80){
    echo "Selamat Anda Lulus" . PHP_EOL;
} else {
    echo "Maaf Anda Tidak Lulus" . PHP_EOL;  
}

/**
 * else if
 */
if ($nilai >= 80 && $absen >= 80) {
    echo "NIlai Anda A" . PHP_EOL;
} else if ($nilai >= 60 && $absen >= 60) {
    echo "NIlai Anda B" . PHP_EOL;
} else if ($nilai >= 50 && $absen >= 50) {
    echo "Nilai Anda C" . PHP_EOL;
} else if ($nilai >= 40 && $absen >= 40) {
    echo "Nilai Anda D" . PHP_EOL;
}

/**
 * Syintak alternatif
 */
if ($nilai >= 80 && $absen >= 80) :
    echo "NIlai Anda A" . PHP_EOL;
elseif ($nilai >= 60 && $absen >= 60) :
    echo "NIlai Anda B" . PHP_EOL;
elseif ($nilai >= 50 && $absen >= 50) :
    echo "Nilai Anda C" . PHP_EOL;
elseif ($nilai >= 40 && $absen >= 40) :
    echo "Nilai Anda D" . PHP_EOL;
else :
        echo "Nilai Anda E" . PHP_EOL;
endif;

?>