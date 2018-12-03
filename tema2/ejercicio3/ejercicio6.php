<?php
include '../ejercicio2/cabecera.php';
include '../ejercicio2/pie.php';
cabecera('ejercicio6');

$ciudades = array ('MD'=>'Madrid','BC'=>'Barcelona',
    'LN'=>'Londres','NY'=>'New York',
    'LA'=>'Los Angeles','CH'=>'Chicago');
foreach ($ciudades as $index=>$rec){
    echo 'La ciudad con el indice '.$index.' tiene de nombre '.$rec;
    echo '<br>';
}


pie();
?>