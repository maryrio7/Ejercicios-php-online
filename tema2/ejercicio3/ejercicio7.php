<?php
include '../ejercicio2/cabecera.php';
include '../ejercicio2/pie.php';
cabecera('ejercicio7');

$enteros = array(1,2,3,4,5,6,7,8,9,10);
$media=0; $cont=0;
foreach ($enteros as $index=>$pares){
    if ($index%2!=0){
        $media+=$pares;
        $cont++;
    }
    else echo $pares.'<br>';
}
echo 'La media de pares es '.$media/$cont;

pie();
?>