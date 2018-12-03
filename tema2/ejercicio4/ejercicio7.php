<?php
include '../ejercicio2/cabecera.php';
include '../ejercicio2/pie.php';
cabecera('ejercicio7');

$arr1=range(1, 100, 5);
$arr2=range(2, 20, 2);
$arr3=array_merge($arr1, $arr2);
arsort($arr3);

echo '<table><tr><th>Indice</th><th>Valor</th></tr>';
foreach($arr3 as $index => $rec){
    echo '<tr><td>'.$index.'</td><td>'.$rec.'</td></tr>';
}
echo '</table>';


pie();
?>