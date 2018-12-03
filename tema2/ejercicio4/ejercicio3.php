<?php
include '../ejercicio2/cabecera.php';
include '../ejercicio2/pie.php';
cabecera('ejercicio3');

$a=array(1,2,3,1,1,2,3,3,4,4,4,0,1);
$b=array("blanco","azul","blanco","blanco","azul","Blanco","Azul");
$c=array( "b" =>"verde",
    "c" =>"rojo",
    "e" =>"verde",
    "f" =>"Rojo",
    "g" =>"Verde",
    "a"=>"rojo",
    "d" =>"azul");

sort($a);
print_r($a);
echo '<br><br>';

rsort($a);
print_r($a);
echo '<br><br>';

ksort($b);
print_r($b);
echo '<br><br>';

krsort($b);
print_r($b);
echo '<br><br>';

asort($c);
print_r($c);
echo '<br><br>';

arsort($c);
print_r($c);
echo '<br><br>';

unset($c['c']);
print_r($c);


pie();
?>