<?php
include '../ejercicio2/cabecera.php';
include '../ejercicio2/pie.php';
cabecera('ejercicio11');

$familias = array (
    'Familia Los Simpson' => array ( 'padre'=> 'Homer',
        'madre'=> 'Marge',
        'hijos'=> 'Bart, Lisa y Maggie'),
    'Familia los Griffin' => array ( 'padre'=> 'Peter',
        'madre'=> 'Lois',
        'hijos'=> 'Chris, Meg y Stewie')
);

foreach ($familias as $index=>$rec){
    echo $index;
    echo '<br>';
    foreach ($rec as $index2=>$rec2){
        echo $index2.': '.$rec2;
        echo '<br>';
    }
    echo '<br>';
}

pie();
?>