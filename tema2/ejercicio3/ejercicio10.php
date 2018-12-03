<?php
include '../ejercicio2/cabecera.php';
include '../ejercicio2/pie.php';
cabecera('ejercicio10');

$estadios_futbol = array('Barcelona'=>'Camp Nou', 'Real Madrid'=>'Santiago Bernabeu',
    'Valencia'=>'Mestalla', 'Real Sociedad'=>'Anoeta');

echo '<table><tr><th>Indice</th><th>Valor</th></tr>';
foreach ($estadios_futbol as $index=>$rec){
    echo '<tr><td>'.$index.'</td><td>'.$rec.'</td></tr>';

}
echo '</table>';
unset($estadios_futbol['Real Madrid']);

echo '<ol>';
foreach ($estadios_futbol as $index=>$rec){
    echo '<li>'.$index.' => '.$rec.'</li>';
}
echo '</ol>';


pie();
?>