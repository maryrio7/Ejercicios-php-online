<html>
  <head>
    <meta charset="utf8">
    <link href="../estilos/estilos3_1.css"
      rel="stylesheet" type="text/css">
  </head>
  <body>


  <?php
  if (isset($_POST['enviar'])){

      $conexion = new mysqli('localhost', 'mario', 'mario', 'tienda');
      $error = $conexion->connect_errno;
      if ($error == null) {
          $consulta="insert into productos (codigo_producto,descripcion,
precio,stock,codigo_categoria) values (?,?,?,?,?)";
          if($resultado = $conexion->prepare($consulta)){

          $resultado->bind_param('ssdds',$_POST['codigo'],$_POST['descripcion'],
              $_POST['precio'],$_POST['stock'],$_POST['categoria']);
          $resultado->execute();
          $resultado->close();
          echo 'Datos añadidos correctamente';
          }

      }
      else{
          echo "<p>Error $error conectando a la BD: $conexion->connect_error</p>";
      }
  }
  else {
      ?>
      <h1>Insertar un producto</h1><br>
      <form  action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" >
  <table>
  <tr><td>Codigo</td><td><input  type="text" name="codigo" value="" ></tr>
    <tr><td>Descripcion</td><td><input  type="text" name="descripcion" value="" ></tr>
    <tr><td>Precio</td><td><input  type="text" name="precio" value="" ></tr>
    <tr><td>Stock</td><td><input  type="text" name="stock" value="" ></tr>
    <tr><td>Categoría</td><td><select  name="categoria">
       <option value="A" selected="selected">PRIMERA</option>
       <option value="B">SEGUNDA</option>
       <option value="C">TERCERA</option>
    </select></tr>
    </table>
    <input id="enviar" type="submit" name="enviar" value="Insertar">
  </form>
      <?php
  }
  ?>

  </body>
</html>





