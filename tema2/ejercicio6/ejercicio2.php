<html>
<head>
    <meta charset="utf8">
    <link href="../estilos/estilos_6-1.css"
      rel="stylesheet" type="text/css">
</head>
<body>
<?php
if (isset($_POST['enviar']) ) {

    if (empty($_POST['num'])){
        echo '<span style="color:red">Faltan datos</span>';
    }
    else if (!is_numeric($_POST['num']) || $_POST['num']<0){
        echo '<span style="color:red">Cantidad errónea</span>';
    }
    else {
        $cantidad=$_POST['num'];
        if ($cantidad<10) $precio=2;
        else if ($cantidad<30) $precio=1.5;
        else $precio=1;
    echo 'El precio del pedido asciende a <b>'.($cantidad*$precio).' €</b>';
    }
}
else {
    ?>
    <h1>LISTA DE PRECIOS</h1>
<table>
    <tr><th>Cantidad</th><th>Precio Unidad</th></tr>
    <tr><td>menos de 10</td><td class="c2">2€</td></tr>
    <tr><td>entre 10 y 30</td><td class="c2">1.5€</td></tr>
    <tr><td>más de 30</td><td class="c2">1€</td></tr>
</table>
<p>Seleccione la cantidad a pedir según nuestras tarifas. </p>
<div >
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" >
    <legend>Datos pedido</legend>
    <br>
       <span>Número de cuadernos: </span>
       <input type="number" name="num" value="">
    <br>
    <span style="float:right; margin-right: 5px;">
        <input type="submit" name="enviar" value="Enviar">
    </span>
</form>
</div>
<?php
}
?>
</body>
</html>