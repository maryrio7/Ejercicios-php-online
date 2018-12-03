<html>
<head>
    <meta charset="utf8">
    <link href="../estilos/estilos_9-1.css"
      rel="stylesheet" type="text/css">
</head>
<body>
<h1>TABLA CON CASILLAS DE VERIFICACIÓN</h1>
<?php
if (isset($_POST['Contar']) ){
    foreach($_POST["numeros"] as $indice => $valor){
        if(empty($valor))
            unset($_POST["numeros"][$indice]);
    }


    echo "Has marcado " .count($_POST['numeros']). " casillas de un total de " .$_POST['total']. ": ";
    foreach($_POST["numeros"] as $indice => $valor){
        echo "<b>".$valor."</b> ";
    }
}
else if (isset($_POST['dibujar_tabla']) ) {
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
<?php
    $total= $_POST["numero"] * $_POST["numero"];
    $tam=$_POST["numero"];
    echo "<table>";
    $n=1;
    for ($n1=1; $n1<=$tam; $n1++) {
        for ($n2=1; $n2<=$tam; $n2++) {
            ?>
            <td> <input type="checkbox" name="numeros[]" value="<?php echo $n;?>">  <?php echo $n;?> </td>
            <?php
            $n=$n+1;
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
    <input type="reset" name="borrar" value="Borrar" />
    <input type="submit" value="Contar" name="Contar">
    <input type="hidden" name= "total" value= "<?php echo $total; ?>">
    </form>
<?php
}
else {
    ?>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

    <span>Tamaño:</span> <input type="number" name="numero"><br>
    <br>
    <input type="submit" name="dibujar_tabla" value="Dibujar">
</form>
<?php
}
?>
</body>
</html>