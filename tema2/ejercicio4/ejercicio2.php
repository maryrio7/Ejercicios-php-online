<?php
include '../ejercicio2/cabecera.php';
include '../ejercicio2/pie.php';
cabecera('ejercicio2');

$nombres = array ('Roberto','juan','Marta','Mercedes','martin',
    'Jorge','Miriam','Nanci','MIRTA');
$nombres2=array();
foreach($nombres as $rec){
    if (substr($rec, 0,1)=='m' or substr($rec, 0,1)=='M'){

        $nombres2[]=ucfirst(strtolower($rec));
    }
}
$con=0;
foreach($nombres2 as $rec){
    if ($con==0){
        echo $rec;
    }
    else echo ', '.$rec;
    $con=1;
} echo '.';

pie();
?>