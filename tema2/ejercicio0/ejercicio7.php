<?php
$numeros=[7,43,1,0,22,10,16,2,39,80];
$mayor=0;
foreach ($numeros as $num){
    if ($num>$mayor)
        $mayor=$num;
}
echo 'El maximo es '.$mayor;
?>