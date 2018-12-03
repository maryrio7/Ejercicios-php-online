<?php
include '../ejercicio2/cabecera.php';
include '../ejercicio2/pie.php';
cabecera('ejercicio4');

$datos = array ("Nombre: " => "Pedro Torres ", "Dirección : "
    => "C\Mayor 37", "Teléfono: " => "123456789");
$cont=0;
foreach ($datos as $index => $rec){
    echo $index.$rec;
    if ($cont>0)
        echo '<br>';
    $cont++;
}



pie();
?>