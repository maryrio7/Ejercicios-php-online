<html>
<head>
    <meta charset="utf8">
    <link href="../estilos/estilos3_1.css"
      rel="stylesheet" type="text/css">
</head>
<body>
<h1>AGENDA</h1>
<?php

if(isset($_POST['enviar']) ) {
    $conexion = new mysqli('localhost', 'mario', 'mario', 'agenda');
    $error = $conexion->connect_errno;
    if(!empty($_POST['nombre']) ){
        $consulta="select * from contactos where nombre ='".$_POST['nombre']."'";
        $resultado = $conexion->query($consulta);
        $reg = mysqli_fetch_array($resultado);
        if ( $_POST['nombre'] == $reg['nombre']){
            if (!empty($_POST['telefono'])){ // caso2
                $consulta ="update contactos set telefono=? where nombre=?";
                $resultado=$conexion->prepare($consulta);
                $resultado->bind_param("is",$_POST['telefono'], $_POST['nombre']);
                $resultado->execute();
            }
            else{ // caso1
                $consulta="delete from contactos where nombre= '".$_POST['nombre']."'";
                $resultado = $conexion->query($consulta);
                if ($resultado){
                    $conexion->commit();
                }
                else
                    $conexion->rollback();
            }
        }
        else { //caso3
            if (isset($_POST['telefono'])){
                $consulta="insert into contactos (nombre,telefono) values (?,?)";
                $resultado=$conexion->prepare($consulta);
                $resultado->bind_param("si",$_POST['nombre'], $_POST['telefono']);
                $resultado->execute();
            }
        }
    }
    else{ //caso4
        echo 'No se ha introducido nombre';
    }
   //agenda visualizada otra vez
    $consulta="select * from contactos";
    $resultado = $conexion->query($consulta);
    if ($resultado){
        echo '<ul>';
        while ($reg = mysqli_fetch_array($resultado)){
            $nombre=$reg['nombre'];
            $tfno=$reg['telefono'];
            echo '<li>'.$nombre.': '.$tfno.'</li>';
        }
        echo '</ul>';
    }
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
    $conexion = new mysqli('localhost', 'mario', 'mario', 'agenda');
    $error = $conexion->connect_errno;
    if ($error == null) {
        $consulta="select * from contactos";
        $resultado = $conexion->query($consulta);
        if ($resultado){
            echo '<ul>';
            while ($reg = mysqli_fetch_array($resultado)){
                $nombre=$reg['nombre'];
                $tfno=$reg['telefono'];
                echo '<li>'.$nombre.': '.$tfno.'</li>';
            }
            echo '</ul>';
        }
        }
    else{
        echo "<p>Error $error conectando a la BD: $conexion->connect_error</p>";
    }

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