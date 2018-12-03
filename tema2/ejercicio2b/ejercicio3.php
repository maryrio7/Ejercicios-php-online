<?php
include '../ejercicio2/cabecera.php';
include '../ejercicio2/pie.php';
cabecera('ejercicio3');

$cad1='Atención'; $cad2='atención';

echo '<table style="margin: 0 auto;">
<tr><td>Cadena 1</td><td>'.$cad1.'</td></tr>
<tr><td>Cadena 2</td><td>'.$cad2.'</td></tr>
<tr><td>strcmp(cadena1, cadena2)</td><td>'.strcmp($cad1,$cad2).'</td></tr>
<tr><td>strcasecmp(cadena1, cadena2)</td><td>'.strcasecmp($cad1,$cad2).'</td></tr>
</table>';

pie();
?>
