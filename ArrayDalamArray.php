<?php
$agung = array(
    "id"   => "agung",
    "name" => "Agung Ruhiayat",
    "age"  => 16,
    "address" => array(
        "city" => "Tasikmalaya",
        "country" => "Indonesia"
    )
);
var_dump($agung);
var_dump($agung["name"]);
var_dump( $agung["address"]["country"]);

?>