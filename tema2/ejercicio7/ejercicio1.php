<html>
<head>
    <meta charset="utf8">
    <link href="../estilos/estilos_7-1.css"
      rel="stylesheet" type="text/css">
</head>
<body>
<h1>RECETAS DE COCINA</h1>
<?php
if (isset($_POST['anadir']) ){
    echo '<span id="v1">Receta incorporada</span><br>';
    echo '<span>Receta de <b>'.$_POST['receta'].'</b></span><br>';
    echo '<ul>';

    if (isset($_POST['ingrediente']) && is_array($_POST['ingrediente'])
    && isset($_POST['cantidad']) && is_array($_POST['cantidad'])
    && isset($_POST['unidades']) && is_array($_POST['unidades'])){
        $num=sizeof($_POST['ingrediente']);
        for ($i=0; $i<$num; $i++){
            ?> <li><?php
            echo $_POST['ingrediente'][$i].': ';
            echo $_POST['cantidad'][$i].' - ';
            echo $_POST['unidades'][$i];
        }
    }
    echo '</ul><b>Realización: </b><br>';
    echo '<p>'.$_POST['comentarios'].'</p>';
}
else if (isset($_POST['enviar']) ) {
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <span>Escriba el nombre de la receta: </span><br>
    <span>Nombre receta:</span>
      <input id="receta" type="text" name="receta" value="" required="required" >
    <br><span>Escriba los ingredientes de la receta y la cantidad de cada uno: </span>
    <div id="ingredientes">
    <?php
    for ($i=0;$i<$_POST['numeroing'];$i++){
        ?>
        <span>Ingrediente: </span>
        <input class="ing" type="text" name="ingrediente[] " value="" required="required">
        <span>Cantidad: </span>
        <input class="cant" type="number" name="cantidad[] " value="" required="required">
        <span>unidades: </span>
        <input class="uds" type="text" name="unidades[] " value="" required="required">
        <br>
        <?php
    }
    ?>
    </div>
    <div id="realizacion">
      <legend>Realización: </legend>
      <textarea name="comentarios" rows="7" cols="70" placeholder="Introduzca la elaboración de la receta"></textarea>
    </div>
    <input id="anadir" type="submit" name="anadir" value="Añadir">
    </form>
<?php
}
else {
    ?>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" >
<span>Indique número de ingredientes:  </span>
<input type="number" name="numeroing" value="" min="1" required="required">
<br>
<input id="enviar" type="submit" name="enviar" value="Enviar">
</form>
<?php
}
?>
</body>
</html>