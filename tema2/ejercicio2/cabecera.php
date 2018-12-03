<?php
function cabecera($titulo){
    echo
'<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8">
    <title>'.$titulo.'</title>
    <link href="../estilos/estilos.css"
      rel="stylesheet" type="text/css">
</head>
<body>
<h1>'.$titulo.'</h1>';
}
?>