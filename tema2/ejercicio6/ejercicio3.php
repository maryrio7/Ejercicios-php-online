<?php
if (isset($_POST['enviar']) ) {

    if (empty($_POST['nombre']))
        echo '<br><span style="color:red">No ha indicado su nombre</span>';
    else echo '<br>Su nombre es '.$_POST['nombre'];
    if (empty($_POST['apellidos']))
        echo '<br><span style="color:red">No ha indicado sus apellidos</span>';
    else echo '<br>Sus apellidos son '.$_POST['apellidos'];
    if (empty($_POST['edad']))
        echo '<br><span style="color:red">No ha indicado su edad</span>';
    else echo '<br>Tiene '.$_POST['edad'];
    if (empty($_POST['peso']))
        echo '<br><span style="color:red">No ha indicado su peso</span>';
    else echo '<br>Su peso es de '.$_POST['peso'].' Kg.';
    if (empty($_POST['sexo']))
        echo '<br><span style="color:red">No ha indicado su sexo</span>';
    else echo '<br>Su sexo es '.$_POST['nombre'];
    if (empty($_POST['civil']))
        echo '<br><span style="color:red">No ha indicado su estado civil</span>';
    else echo '<br>Su estado civil es '.$_POST['civil'];
    if (empty($_POST['cine']) && empty($_POST['literatura'] )&&
        empty($_POST['deporte']) && empty($_POST['tebeos'] )&&
        empty($_POST['musica']) && empty($_POST['television']))
        echo '<br><span style="color:red">No ha indicado sus aficiones</span>';
    else {
        echo '<br>Sus aficiones son: ';
        if (isset($_POST['cine'])) echo 'cine ';
        if (isset($_POST['literatura'])) echo 'literatura ';
        if (isset($_POST['tebeos'])) echo 'tebeos ';
        if (isset($_POST['deporte'])) echo 'deporte ';
        if (isset($_POST['television'])) echo 'television ';
        if (isset($_POST['musica'])) echo 'musica';
    }
}
else {
    ?>
<a href="ejercicio3.html">Volver al formulario</a>
<?php
}
?>