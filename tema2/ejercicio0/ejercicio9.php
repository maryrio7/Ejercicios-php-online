<?php
$nombre='Mario Fernandez Gonzalez';
echo 'Numero de caracteres: '.strlen($nombre);
echo '<br>Nombre: '.substr($nombre, 0, 5);
echo '<br>Apellidos: '.substr($nombre, 6);
echo '<br>Nombre y apellidos con la primera letra en mayúscula: '.ucwords($nombre);
echo '<br>Extraigo el nombre y lo visualizo en mayúsculas: '.strtoupper(substr($nombre, 0,5));
?>