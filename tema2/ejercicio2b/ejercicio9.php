<?php
include '../ejercicio2/cabecera.php';
include '../ejercicio2/pie.php';
cabecera('ejercicio9');

$matriz1= array("cougar","ford",null,"2.500","V6",172);

unset($matriz1[3]);
echo var_dump($matriz1);
echo '<br><br>';
echo print_r($matriz1);

foreach($matriz1 as $index => $rec){
    unset($matriz1[$index]);
}
$matriz1[]='seat';
$matriz1[]='mercedes';

echo '<br><br>d) En los primeros indices disponibles';

$matriz1=array_values($matriz1);


pie();
?>