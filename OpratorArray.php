<?php
$first = [
    "first_name" => "Agung"
];

$last = [
    "first_name" => "Agung",
    "last_name"  => "Ruhiyat"
];

$full = $first + $last;
var_dump($full);

$a = [
    "first_name" => "Agung",
    "last_name"  => "Ruhiyat"
];
$b = [
    "last_name"  => "Ruhiyat",
    "first_name" => "Agung"
];
var_dump($a == $b);
var_dump($a === $b);

?>