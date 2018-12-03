<html>
<body>
  <h1>Adivinar numero - Resultado</h1>
<?php
if (isset($_POST['enviar']) ) {
    $numero=$_POST['num'];
    $random=rand(1,10);
    if ($numero>$random)
        echo 'El número '.$numero.' fue muy grande, lo siento';
    else if ($numero<$random)
        echo 'El número '.$numero.' fue muy pequeño, lo siento';
    else
        echo 'Has acertado!!';
    echo '<br><br>Yo pensé el número '.$random;
    echo '<br><br><a href="ejercicio6.html">Volver al formulario</a>';
}
else {
    ?>
<br><br>
<a href="ejercicio6.html">Volver al formulario</a>
<?php
}
?>