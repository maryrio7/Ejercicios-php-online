<html>
<head>
  <meta charset="utf8">
  <link href="../estilos/estilos3_1.css"
      rel="stylesheet" type="text/css">
</head>
<body>

<?php
$conexion = new mysqli('localhost', 'mario', 'mario', 'tienda');
$error = $conexion->connect_errno;
if ($error == null) {
    $consulta="select * from categorias ";
    $resultado = $conexion->query($consulta);
    if($resultado){
        echo '<table><tr><th>Codigo</th><th>Descripcion</th></tr>';
        while ($reg = $resultado->fetch_array()){
            echo '<tr>';
            $codigo=$reg['codigo_categoria'];
            $des=$reg['descripcion_categoria'];
            echo '<td>'.$codigo.'</td>';
            echo '<td>'.$des.'</td>';
            echo '</tr>';
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