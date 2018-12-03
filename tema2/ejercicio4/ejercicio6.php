<?php
include '../ejercicio2/cabecera.php';
include '../ejercicio2/pie.php';
cabecera('ejercicio6');

echo '<table>';
for($c=0; $c<5; $c++){
    echo '<tr>';
    for($f=0; $f<15; $f++){
        if ($c==0 or $c==4){
            echo '<td>'.'1'.'</td>';
        }
        else if ($f==0 or $f==14)
            echo '<td>'.'1'.'</td>';
        else
            echo '<td>'.'0'.'</td>';
    }
    echo '</tr>';
}
echo '</table>';


pie();
?>
