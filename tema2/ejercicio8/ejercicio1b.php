<html>
<head>
    <meta charset="utf-8">
    <link href="../estilos/estilos_9-1.css"
          rel="stylesheet" type="text/css">
</head>
<body>
<br><br><br>
<form action="ejercicio1c.php" method="post">
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
</body>
</html>