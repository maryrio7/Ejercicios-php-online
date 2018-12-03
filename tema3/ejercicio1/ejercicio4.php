<html>
<head>
  <meta charset="utf8">
  <link href="../estilos/estilos3_1.css"
      rel="stylesheet" type="text/css">
</head>
<body>
<?php
if (isset($_POST['enviar1'])){
    echo '<h1>Productos de la tienda</h1>';
    echo '<p>Categoria: <b>'.$_POST['categoria'].'</b></p><br>';
    $conexion = new mysqli('localhost', 'mario', 'mario', 'tienda');
    $error = $conexion->connect_errno;
    if ($error == null) {
        $consulta="select * from productos where codigo_categoria='".$_POST['categoria']."'";
        $resultado = $conexion->query($consulta);
        if($resultado){
            echo '<table><tr><th>Codigo</th><th>Descripcion</th>
<th>Precio</th><th>Stock</th></tr>';
            while ($reg = mysqli_fetch_array($resultado)){
                echo '<tr>';
                $codigo=$reg['codigo_producto'];
                $des=$reg['descripcion'];
                $precio=$reg['precio'];
                $stock=$reg['stock'];
                echo '<td>'.$codigo.'</td>';
                echo '<td>'.$des.'</td>';
                echo '<td>'.$precio.'</td>';
                echo '<td>'.$stock.'</td>';
                echo '</tr>';
            }
          echo '</table>';
          ?>
           <form  action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" >

                <input id="enviar" type="submit" name="enviar2" value="Añadir producto">
                </form>'
          <?php


        }
        $conexion->close();
    }
    else{
        echo "<p>Error $error conectando a la BD: $conexion->connect_error</p>";
    }

}
else if(isset($_POST['enviar2'])){
    include('ejercicio3.php');
}
else{
?>

<span>Seleccione una categoría</span>
<form  action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" >
<select  name="categoria">
<option value="A" selected="selected">PRIMERA</option>
<option value="B">SEGUNDA</option>
<option value="C">TERCERA</option>
</select>
<input id="enviar" type="submit" name="enviar1" value="Enviar">
</form>



<?php
}
?>
</body>
</html>