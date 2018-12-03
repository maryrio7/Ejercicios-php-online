<?php
include '../ejercicio2/cabecera.php';
include '../ejercicio2/pie.php';
cabecera('ejercicio2');

$cadena='bienvenidos';
$array=count_chars($cadena);
echo '<table><tr><th>Carácter</th><th>Frecuencia</th></tr>';

$cont=0;
foreach ($array as $rec){
    for ($i=0; $i<strlen($cadena);$i++){
        if (ord(substr($cadena, $i,1))==$cont){
            echo '<tr><td>'.substr($cadena, $i,1).'</td><td>'.$rec.'</td></tr>';
        }
    }
    $cont++;
}
echo '</table>';
pie();
?>
