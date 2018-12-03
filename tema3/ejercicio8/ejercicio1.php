<html>
<head>
  <meta charset="utf8">
  <link href="../estilos/estilos8.css"
      rel="stylesheet" type="text/css">
</head>
<body>

<h1>Listado de productos por familia</h1>
<form  action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" >
    <span>Familia: </span>
    <select name="elegir">
      <?php
      $conexion = new mysqli('localhost', 'mario', 'mario', 'almacen');
      $conexion ->query("SET NAMES utf8");
      $consulta = "SELECT * FROM familia";
      $resultado = $conexion->query($consulta);
      while ($reg = $resultado->fetch_array()){
          echo "<option value='".$reg['cod']."'>".$reg['nombre']."</option>";
      }
      ?>
    </select>
    <input id="enviar" type="submit" name="enviar" value="Mostrar productos">
</form>

<?php
if (isset($_POST['enviar'])){
    echo '<h2>Productos disponibles:</h2>';
    $conexion = new mysqli('localhost', 'mario', 'mario', 'almacen');
    $conexion ->query("SET NAMES utf8");
    $consulta = "SELECT nombre_corto,pvp FROM producto where familia=?";
    if ($resultado = $conexion->prepare($consulta)){
        $resultado->bind_param("s", $_POST['elegir']);
        $resultado->execute();
        $resultado->bind_result($nombre,$precio);
        echo '<table><tr><th>PRODUCTO</th><th>PRECIO</th></tr>';
        while ($resultado->fetch()){
            echo '<tr>';
            echo "<td>Producto: ".$nombre."</td><td>Precio: ".$precio."</td>";
            echo '<td>'.''.'</td>';
            echo '</tr>';
        }
        echo '</table>';

    }
}



?>


</body>
</html>