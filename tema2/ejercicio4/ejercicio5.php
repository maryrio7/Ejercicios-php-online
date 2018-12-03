<?php
include '../ejercicio2/cabecera.php';
include '../ejercicio2/pie.php';
cabecera('ejercicio5');


echo '<table>';
for($c=0; $c<5; $c++){
    echo '<tr>';
    for($f=0; $f<5; $f++){
        if ($c==$f){
            echo '<td>'.'1'.'</td>';
        }
        else
            echo '<td>'.'0'.'</td>';
    }
    echo '</tr>';
}
echo '</table>';


pie();
?>