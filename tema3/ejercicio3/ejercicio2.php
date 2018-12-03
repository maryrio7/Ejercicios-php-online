<html>
  <head>
    <meta charset="utf8">
    <link href="../estilos/estilos3_1.css"
      rel="stylesheet" type="text/css">
  </head>
  <body>
  <h1>Consulta de noticias</h1>
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
        $consulta="select * from noticias order by fecha";
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
</body>
</html>