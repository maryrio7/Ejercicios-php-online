<html>
<body>
  <h1>Convertidor de temperaturas - Resultado</h1>
<?php
if (isset($_POST['enviar']) && (is_numeric($_POST['temp']))) {
    if ($_POST['tipo']=='C')
        echo $_POST['temp'].'ºF son '.($_POST['temp']-32)/(18/10).'ºC';
    else
        echo $_POST['temp'].'ºC son '.($_POST['temp']*18/10+32).'ºF';
    echo '<br><br><a href="ejercicio4.html">Volver al formulario</a>';
}
else {
    ?>
<span style="color:red">No ha escrito la temperatura como número</span>
<br><br>
<span>Has escrito <?php $_POST['anio'] ?> </span>
<br><br>
<a href="ejercicio4.html">Volver al formulario</a>
<?php
}
?>