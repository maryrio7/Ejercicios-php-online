<html>
<head>
  <meta charset="utf8">
  <link href="../estilos/estilos3_1.css"
      rel="stylesheet" type="text/css">
</head>
<body>

<?php
if (isset($_POST['votar']) && !empty($_POST['votar'])){
    $conexion = new mysqli('localhost', 'mario', 'mario', 'inmobiliaria');
    $error = $conexion->connect_errno;
    if ($error == null) {
        if ($_POST['opcion']=='si'){
            $consulta="update votos set votos1=votos1+1 ";
        }
        else
            $consulta="update votos set votos2=votos2+1 ";
        $resultado = $conexion->query($consulta);
        if($resultado){
            echo '<h1>Encuesta. Voto registrado</h1>';
            echo 'Su voto ha sido registrado. Gracias por participar<br>';
            echo '<a href="ejercicio1b.php">Ver resultados</a>';
        }
        $conexion->close();
    }
    else{
        echo "<p>Error $error conectando a la BD: $conexion->connect_error</p>";
    }
}
else{
    ?>
    <h1>Encuesta</h1>
<span>¿Cree ud. que el precio de la vivienda seguirá subiendo al ritmo actual?</span>
<form  action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" >
    <input type="radio" name="opcion" value="si">Sí</option><br>
    <input type="radio" name="opcion" value="no">No</option><br>
    <input id="enviar" type="submit" name="votar" value="votar">
</form>
<a href="ejercicio1b.php">Ver resultados</a>
    <?php
}
?>

</body>
</html>