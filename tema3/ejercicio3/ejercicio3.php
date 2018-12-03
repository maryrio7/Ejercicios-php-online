<html>
<head>
<meta charset="utf8">
<link href="../estilos/estilos3_1.css"
  rel="stylesheet" type="text/css">
</head>
<body>
<h1>Consulta de noticias</h1>
<?php
  if (isset($_POST['enviar'])){
?>
  <table>
  <tr>
  <th>Titulo</th>
  <th>Texto</th>
  <th>Categoría</th>
  <th>Fecha</th>
  <th>Imagen</th>
  </tr>
<?php
  $conexion = new mysqli('localhost', 'mario', 'mario', 'inmobiliaria');
  $conexion ->query("SET NAMES utf8");
  $error = $conexion->connect_errno;
  if ($error == null) {
      if ($_POST['categoria']=="todas") $consulta="select * from noticias order by fecha";
      else{
          $consulta="select * from noticias where categoria='".$_POST['categoria']."' order by fecha";}
      $resultado = $conexion->query($consulta);
      if ($resultado){
          while ($reg = mysqli_fetch_array($resultado)){
              echo "<tr>";
              echo "<td>".$reg['titulo']."</td>";
              echo "<td>".$reg['texto']."</td>";
              echo "<td>".$reg['categoria']."</td>";
              echo "<td>".date("d/m/Y",strtotime($reg['fecha']))."</td>";
              if ($reg['imagen']!=null){
                  echo "<td><a href='imagenes/".$reg['imagen']."'><img src='imagenes/ico-fichero.gif'></a></td>";
              }
              else echo "<td></td>";
              echo "</tr>";
          }
      }
      $conexion->close();
  }
  else{
      echo "<p>Error $error conectando a la BD: $conexion->connect_error</p>";
  }
?>
  </table>
<?php
  }
  else
  {
?>
  <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" >
      <span>Mostrar noticias de la categoría</span>
      <select name="categoria">
      <option value="todas">Todas</option>
      <?php
      $conexion = new mysqli('localhost', 'mario', 'mario', 'inmobiliaria');
      $conexion ->query("SET NAMES utf8");
      $consulta = "SELECT distinct(categoria) FROM noticias order by -categoria";
      $resultado = $conexion->query($consulta);
      while ($reg = mysqli_fetch_array($resultado)){
          $coleccion = $reg['categoria'];
          echo "<option value='".$coleccion."'>".$coleccion."</option>";
      }
      ?>
      </select>
      <br><br><br>
      <input type="submit" name="enviar" value="Enviar">
</form>
<?php
}
?>
</body>
</html>