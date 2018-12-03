<html>
<body>
  <h1>Comprobar sexo - Resultado</h1>
<?php
if (isset($_POST['enviar']) && isset($_POST['sexo']) ) {
    $sexo=$_POST['sexo'];
    if ($sexo=='M')
        echo 'Es un <span style="color:green">hombre</span>';
    else if ($sexo=='F')
        echo 'Es una <span style="color:green">mujer</span>';

    echo '<br><br><a href="ejercicio7.html">Volver al formulario</a>';
}
else {
    ?>

<p style="color:red">No ha marcado su sexo</p>

<a href="ejercicio7.html">Volver al formulario</a>
<?php
}
?>