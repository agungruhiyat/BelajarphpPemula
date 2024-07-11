<?php
$names = ["Agung", "Ruhiyat", "16 Tahun"];
var_dump($names[0]);
$names[0] = "nendra";
var_dump($names);
unset($names[1]);
var_dump($names);
$names[] = "Agung";
var_dump($names);
var_dump(count($names));

?>