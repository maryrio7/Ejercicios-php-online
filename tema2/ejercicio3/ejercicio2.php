<?php
include '../ejercicio2/cabecera.php';
include '../ejercicio2/pie.php';
cabecera('ejercicio2');

$v = array();
$v[1]=90;$v[30]=7;$v['e']=99;$v['hola']=43;

foreach ($v as $rec){
    echo $rec.'<br>';
}

pie();
?>