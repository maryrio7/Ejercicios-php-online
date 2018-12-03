<?php
include '../ejercicio2/cabecera.php';
include '../ejercicio2/pie.php';
cabecera('ejercicio5');

$cadena='El libro cubre las técnicas basadas en el lenguaje PHP';

echo '<table><tr><th>cadena</th><td>'.$cadena.'</td></tr>
    <tr><th>substr_count(cadena,"a")</th><td>'.substr_count($cadena,'a').'</td></tr></table>';

pie();
?>