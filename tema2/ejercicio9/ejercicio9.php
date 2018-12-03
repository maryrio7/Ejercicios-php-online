<html>
<head>
    <meta charset="utf8">
    <link href="../estilos/estilos_9-1.css"
      rel="stylesheet" type="text/css">
</head>
<body>
<h1>AGENDA</h1>
<?php
$agenda = array ("Mercedes" => 98533434, "Pedro" => 676898989,
    "Ramon" => 656232323 );

if(isset($_POST['enviar']) ) {
    if(!empty($_POST['nombre']) ){
        if ( array_key_exists($_POST['nombre'], $agenda)){
            if (!empty($_POST['telefono'])){ // caso2
                foreach($agenda as $nombre => $tfno){
                    if ($nombre==$_POST['nombre']){
                        $agenda[$nombre] = $_POST['telefono'];
                    }
                }
            }
            else{ // caso1
                unset($agenda[$_POST['nombre']]);
            }
        }
        else { //caso3
            if (isset($_POST['telefono'])){
                $agenda[$_POST['nombre']]=$_POST['telefono'];
            }
        }
    }
    else{ //caso4
        echo 'No se ha introducido nombre';
    }
    ksort($agenda);
    echo '<ul>';
    foreach($agenda as $index => $tfno){
        echo '<li>'.$index.': '.$tfno;
    }
    echo '</ul>';
    ?>
    <h2>Editar/Añadir/Eliminar contacto</h2>
    <div id="agenda">
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" >
        <table>
        <tr>
        <td><span>Nombre: </span></td>
        <td><input type="text" name="nombre" value="" ></td></tr>
        <tr><td><span>Teléfono: </span></td>
        <td><input type="number" name="telefono" value=""></td></tr>
        <br><tr><td colspan="2">
        <input id="enviar" type="submit" name="enviar" value="Continuar ..."></td></tr>
        </table>
        </form>
        </div>

<?php
}
else {
ksort($agenda);
echo '<ul>';
foreach($agenda as $index => $tfno){
    echo '<li>'.$index.': '.$tfno;
}
echo '</ul>';

?>
<h2>Editar/Añadir/Eliminar contacto</h2>
<div id="agenda">
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" >
  <table>
    <tr>
    <td><span>Nombre: </span></td>
    <td><input type="text" name="nombre" value="" ></td></tr>
    <tr><td><span>Teléfono: </span></td>
    <td><input type="number" name="telefono" value=""></td></tr>
    <br><tr><td colspan="2">
    <input id="enviar" type="submit" name="enviar" value="Continuar ..."></td></tr>
  </table>
</form>
</div>
<?php } ?>
</body>
</html>