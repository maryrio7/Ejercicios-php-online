<html>
<body>
  <h1>Casillas de verificación - Resultado</h1>
<?php
if (isset($_POST['enviar']) ) {
    $primero=true;
    if (isset($_POST['cine'])){
        if ($primero) {
            echo '<p>Le gusta: </p><ol>'; $primero=false;
        }
        echo '<li style="color:green">El cine</li>';}
    if (isset($_POST['literatura'])){
        if ($primero) {
            echo '<p>Le gusta: </p><ol>'; $primero=false;
        }
        echo '<li style="color:green">La literatura</li>';}
    if (isset($_POST['musica'])){
        if ($primero) {
            echo '<p>Le gusta: </p><ol>'; $primero=false;
        }
        echo '<li style="color:green">La música</li>';}
    if ($primero)
        echo '<span style="color:red">No ha marcado ninguna afición</span>';
    echo '<br><br><a href="ejercicio8.html">Volver al formulario</a>';
}
else {
    ?>

<p style="color:red">No ha marcado ninguna afición</p>

<a href="ejercicio8.html">Volver al formulario</a>
<?php
}
?>