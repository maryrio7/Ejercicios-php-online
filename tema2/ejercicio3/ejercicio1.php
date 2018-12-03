<?php
include '../ejercicio2/cabecera.php';
include '../ejercicio2/pie.php';
cabecera('ejercicio1');

$pares = array();
for ($i=2; $i<=20; $i+=2){
    $pares[]=$i;
}
foreach ($pares as $rec){
    echo $rec.'<br>';
}

pie();
?>