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
<a href="ejercicio1.html">Volver al formulario</a>
<?php
}
?>