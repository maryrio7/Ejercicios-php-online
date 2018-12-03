<html>
<body>
  <h1>Calculadora de años bisiestos - Resultado</h1>
<?php
if (isset($_POST['enviar']) && (ctype_digit($_POST['anio']))) {
    $anio=$_POST['anio'];
    if ($anio%4==0) {
        if ($anio%100==0 and $anio%400!=0)
            echo 'El año '.$_POST['anio'].' NO es bisiesto.';
            else
                echo 'El año '.$_POST['anio'].' es bisiesto porque es múltiplo
    de 4, pero no es multiplo de 100';
    }
    else
        echo 'El año '.$_POST['anio'].' NO es bisiesto.';


    echo '<br><br><a href="ejercicio3.html">Volver al formulario</a>';
}
else {
    ?>
<span style="color:red">No ha escrito el año como numero entero positivo</span>
<br><br>
<span>Has escrito <?php $_POST['anio'] ?> </span>
<br><br>
<a href="ejercicio3.html">Volver al formulario</a>
<?php
}
?>