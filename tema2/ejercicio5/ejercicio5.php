<html>
<body>
  <h1>Comprobar email - Resultado</h1>
<?php
if (isset($_POST['enviar']) ) {
    $email=$_POST['email'];
    echo 'El correo '.$email.' ';

    if (strstr($email, '@')){
        if (strstr($email, '.')){
            if (!strstr($email, '..')){
                echo 'es válido';
            }
            else
                echo 'no es válido';
        }
        else
            echo 'no es válido';
    }
    else
        echo 'no es válido';
    echo '<br><br><a href="ejercicio5.html">Volver al formulario</a>';
}
else {
    ?>
<br><br>
<a href="ejercicio5.html">Volver al formulario</a>
<?php
}
?>