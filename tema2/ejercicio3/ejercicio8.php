<?php
include '../ejercicio2/cabecera.php';
include '../ejercicio2/pie.php';
cabecera('ejercicio8');

$arr1 = array('Lagartija','Araña','Perro','Gato','Ratón');
$arr2 = array(12,34,45,52,12);
$arr3 = array('Sauce','Pino','Naranjo','Chopo','Perro',34);

$arr4 = array_merge($arr1,$arr2,$arr3);

print_r($arr4);

pie();
?>