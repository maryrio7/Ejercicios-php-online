<html>
<head>
    <meta charset="utf8">
    <link href="../estilos/estilos_6-3.css"
      rel="stylesheet" type="text/css">
</head>
<body>
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
    <div >
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" >


<legend>Datos personales</legend>
<p>Escriba los datos siguientes:  </p>
<table>
    <tr>
        <th>Nombre:</th>
        <th>Apellidos:</th>
        <th>Edad:</th>
        <td></td>
    </tr>
    <tr>
        <td><input type="text" name="nombre"
        pattern="[A-Za-zÁ-Úá-úñ-]{1-40}" value=""></td>
        <td><input type="text" name="apellidos"
        pattern="[A-Za-zÁÉÍÓÚáéíóúñ-]{1-40}" value=""></td>
        <td><select name="edad">
        <option value=""></option>
        <option value="menos de 20 años">Menos de 20 años</option>
        <option value="entre 20 y 39 años">Entre 20 y 39 años</option>
        <option value="entre 40 y 59 años">Entre 40 y 59 años</option>
        <option value="60 años o más">60 años o más</option></td>
        <td></td>
    </tr>
    <tr>
        <th>Peso:</th>
        <th>Sexo:</th>
        <th>Estado Civil:</th>
        <td></td>
    </tr>
    <tr>
        <td><input type="number" id="peso" name="peso" value="" min=0>kg</td>
        <td><input type="radio" name="sexo" value="hombre" />Hombre
        <input type="radio" name="sexo" value="mujer" />Mujer</td>
        <td><input type="radio" name="civil" value="soltero" />Soltero
        <input type="radio" name="civil" value="casado" />Casado
        <input type="radio" name="civil" value="otro" />Otro</td>
        <td></td>
    </tr>
    <tr>
        <th rowspan="2">Aficiones:</th>
        <td><input type="checkbox" name="cine" value="cine"/>Cine</td>
        <td><input type="checkbox" name="literatura" value="Literatura"/>Literatura</td>
        <td><input type="checkbox" name="tebeos" value="tebeos"/>Tebeos</td>
    </tr>
    <tr>
        <td><input type="checkbox" name="deporte" value="deporte"/>Deporte</td>
        <td><input type="checkbox" name="musica" value="musica"/>Música</td>
        <td><input type="checkbox" name="television" value="television"/>Televisión</td>
    </tr>
</table>
<span style="float:right; margin-right: 5px;">
        <input type="submit" name="enviar" value="Enviar">
        <input type="reset" name="borrar" value="Borrar">
    </span>
</form>

</div>
<?php
}
?>
</body>
</html>