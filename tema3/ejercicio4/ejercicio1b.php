<html>
<head>
  <meta charset="utf8">
  <link href="../estilos/estilos3_1.css"
      rel="stylesheet" type="text/css">
</head>
<body>
<h1>Encuesta. Resultados de la votación</h1>

<?php
$conexion = new mysqli('localhost', 'mario', 'mario', 'inmobiliaria');
$error = $conexion->connect_errno;
if ($error == null) {
        $consulta='select * from votos';
        $resultado = $conexion->query($consulta);
        if($resultado){
            $reg = $resultado->fetch_array();
            $si=$reg['votos1'];
            $no=$reg['votos2'];
            $total=$si+$no;
            echo '<table><tr><th>Respuesta</th><th>Votos</th>
            <th>Porcentaje</th><th>Representación gráfica</th></tr>';

            echo '<tr><td>Sí</td><td>'.$si.'</td><td>'.round(($si/$total*100),2).'%</td>';
            echo '<td><img src="../ejercicio3/imagenes/puntoamarillo.gif" style="height:10px; width:'.round(($si*400/$total),2).'"></td></tr>';
            echo '<tr><td>No</td><td>'.$no.'</td><td>'.round(($no/$total*100),2).'%</td>';
            echo '<td><img src="../ejercicio3/imagenes/puntoamarillo.gif" style="height:10px; width:'.round(($no*400/$total),2).'"></td></tr>';
            echo '</table>';
            echo 'Número total de votos emitidos: '.$total;
        }
        $conexion->close();
}
else{
    echo "<p>Error $error conectando a la BD: $conexion->connect_error</p>";
}


?>

</body>
</html>