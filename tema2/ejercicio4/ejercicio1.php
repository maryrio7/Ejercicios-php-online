<?php
include '../ejercicio2/cabecera.php';
include '../ejercicio2/pie.php';
cabecera('ejercicio1');

$email='abc..abc@gmail..es';


echo 'El correo '.$email.' ';

if (strstr($email, '@')){
    if (strstr($email, '.')){
        if (!strstr($email, '..')){
            echo 'es válido';
        }
        else
            echo 'no es válido';
    }
    else
        echo 'no es válido';
}
else
    echo 'no es válido';

pie();
?>