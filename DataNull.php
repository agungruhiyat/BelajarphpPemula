<?php
$name = "Agung";
$name = null;

$age = null;

echo "name: ";
echo $name;
echo "\n";

echo "Age: ";
echo $age;
echo "\n";


echo " Is Name Null? :";
var_dump(is_null($name));
echo "\n";

$contoh = "Agung";
unset($contoh);

$contoh = "Ruhiyat";
$contoh = null;

var_dump(isset($contoh));
?>
