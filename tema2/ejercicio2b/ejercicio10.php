<?php
include '../ejercicio2/cabecera.php';
include '../ejercicio2/pie.php';
cabecera('ejercicio10');

$matriz1= array("café","harina","carne","vegetales","zumo","pasta");

echo var_dump($matriz1);
echo '<br><br>';
echo print_r($matriz1);

asort($matriz1);
arsort($matriz1);
echo '<br><br>';
echo current($matriz1);
echo '<br><br>';
next($matriz1); next($matriz1);
echo key($matriz1);

pie();
?>