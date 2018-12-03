<?php
include '../ejercicio2/cabecera.php';
include '../ejercicio2/pie.php';
cabecera('ejercicio1');

$cadena='bienvenidos';
echo '<table><tr><th>Carácter</th><th>Posición</th></tr>';
for($i=0;$i<strlen($cadena);$i++){
    echo '<tr><td>'.substr($cadena, $i,1).'</td><td>'
        .strlen(substr($cadena, 0,$i)).'</td></tr>';
}
echo '</table>';

pie();
?>