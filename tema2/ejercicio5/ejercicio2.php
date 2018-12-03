<html>
<body>
  <h1>Tabla numerada - Resultado</h1>
<?php
if (isset($_POST['enviar']) && ($_POST['c1']<=$_POST['c2'])) {
    echo '<table style="border:1px solid purple; background:#FFB6C1"><tr>';
    for ($i=0; $i<$_POST['c2']; $i++){
        if ($i<$_POST['c1'])
            echo '<td>'.($i+1).'</td>';
        else
            echo '<td>-</td>';
    }
    echo '</tr></table><br>';
    echo '<a href="ejercicio2.html">Volver al formulario</a>';
}
else {
    ?>
<span style="color:red">El numero de columnas numeradas no puede ser mayor que el
numero total de columnas</span>
<br>
<a href="ejercicio2.html">Volver al formulario</a>
<?php
}
?>