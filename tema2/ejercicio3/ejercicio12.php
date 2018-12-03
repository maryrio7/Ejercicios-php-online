<?php
include '../ejercicio2/cabecera.php';
include '../ejercicio2/pie.php';
cabecera('ejercicio12');

$deportes = array('futbol','baloncesto','natacion','tenis');
for ($i=0; $i<count($deportes); $i++){
    echo $deportes[$i].' - ';
}
echo '<br>';
echo 'El array tiene '.count($deportes).' valores';
echo '<br>';
reset($deportes);
echo current($deportes);
echo '<br>';
next($deportes);
echo current($deportes);
echo '<br>';
end($deportes);
echo current($deportes);

pie();
?>