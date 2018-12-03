<?php
include '../ejercicio2/cabecera.php';
include '../ejercicio2/pie.php';
cabecera('ejercicio7');

$matriz1= array("cougar","ford",null,"2.500","V6",172);
$matriz2= array(2=>"cougar","ford",1=>null,0=>"2.500","V6",172);
asort($matriz2);
echo '<table><tr><th>Indice</th><th>0</th><th>1</th><th>2</th><th>3</th><th>4</th><th>5</th></tr>';
echo '<tr><td>$matriz1</td>';
foreach ($matriz1 as $rec){
    echo '<td>'.$rec.'</td>';
}
echo '</tr><tr><td>$matriz2</td>';
foreach ($matriz2 as $rec){
    echo '<td>'.$rec.'</td>';
}
echo '</tr></table>';

pie();
?>