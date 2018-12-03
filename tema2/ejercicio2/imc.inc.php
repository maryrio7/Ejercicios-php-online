<?php
function imc($peso,$altura){
    $imc=$peso/($altura*$altura);
    return $imc;
}
?>