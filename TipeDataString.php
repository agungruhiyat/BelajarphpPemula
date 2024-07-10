<?php
echo 'Nama :';
echo 'Agung Ruhiyat';
echo "\n";
//menambah enter dan teb//
echo "Nama :";
echo "Agung\t Ruhiuyat\t 16 Tahun\n";

//menggunakan heredoc//

echo <<<Agung
Saya adalah agung 
saya berusia 16 tahun 
saya sudah kelas 12 di smk daarul abroor
jurusan RPL
Agung;

//Menggunakan Nowdoc//
echo <<<'Agung'
ini adalah contoh string yang sangan panjang , 
Dan ini juga gak perlu ngtik enter secara manual,
"bisa quote"juga
Agung;
?>