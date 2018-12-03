<?php
include '../ejercicio2/cabecera.php';
include '../ejercicio2/pie.php';
cabecera('ejercicio5');

$ciudades = array ('Madrid','Barcelona','Londres','New York',
    'Los Angeles','Chicago');
foreach ($ciudades as $index=>$rec){
    echo 'La ciudad con el indice '.$index.' tiene de nombre '.$rec;
    echo '<br>';
}


pie();
?>