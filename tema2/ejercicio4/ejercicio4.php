<?php
include '../ejercicio2/cabecera.php';
include '../ejercicio2/pie.php';
cabecera('ejercicio4');

$rand=array();
for($i=0;$i<15;$i++){
    $rand[]=rand(1,400);
}
print_r($rand);
$n=5;
echo '<br><br>';
$suma=0;
for($i=0;$i<$n;$i++){
    $suma+=$rand[$i];
}
echo 'La suma de los '.$n.' primeros numeros del array es '.$suma;



pie();
?>