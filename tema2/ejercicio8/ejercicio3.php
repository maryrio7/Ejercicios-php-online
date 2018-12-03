<html>
<head>
    <meta charset="utf8">
    <link href="../estilos/estilos_9-1.css"
      rel="stylesheet" type="text/css">
</head>
<body>
<h1>EJERCICIO SOBRE ARRAYS</h1>
<?php
    $ciudades=array("Alava","Bilbao","Madrid","Valencia","Zaragoza");
?>
  <table>
    <tr>
      <td><form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
      <input type="submit" name="extrae_prin" value="Extrae del principio <-">
      </form></td>
      <td rowspan="3">
        <?php
        echo "<table><tr><th>Posición</th><th>Valor</th></tr>";
        foreach ($ciudades as $index => $ciudad){
            echo "<tr><td>".$index."</td><td>".$ciudad."</td></tr>";
        }
        echo "</table>";
        ?>
      </td>
      <td><form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
      <input type="submit" name="inserta_prin" value="<- Inserta al principio">
      </form></td>
    </tr>
    <tr>

    </tr>
    <tr>

    </tr>
  </table>

</body>
</html>