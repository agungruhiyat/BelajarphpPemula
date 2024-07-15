<?php
$total = 0;

$fruit       = 8000;
$chicken     = 10000;
$orangeJuice = 5000;

$total += $fruit;
$total += $chicken;
$total += $orangeJuice;

var_dump($total);

//pengurangan//
$total -= $fruit;
$total -= $chicken;
$total -= $orangeJuice;
var_dump($total);

//perkalian//
$total *= $fruit;
$total *= $chicken;
$total *= $orangeJuice;
var_dump($total);

//pembagian//
$total /= $fruit;
$total /= $chicken;
$total /= $orangeJuice;
var_dump($total);

//hasilbagi// 
$total %= $fruit;
var_dump($total);

?>