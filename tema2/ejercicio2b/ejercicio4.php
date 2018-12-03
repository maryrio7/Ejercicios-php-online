<?php
include '../ejercicio2/cabecera.php';
include '../ejercicio2/pie.php';
cabecera('ejercicio4');

$cadena='Vamos Al cine';
echo '<table><tr><th>frase</th><th>vamos Al cine...</th></tr>
<tr><td>strtoupper(frase)</td><td>'.strtoupper($cadena).'</td></tr>
<tr><td>strtolower(frase)</td><td>'.strtolower($cadena).'</td></tr>
<tr><td>ucfirst(frase)</td><td>'.ucfirst($cadena).'</td></tr>
<tr><td>ucwords(frase)</td><td>'.ucwords($cadena).'</td></tr>
</table>';

pie();
?>