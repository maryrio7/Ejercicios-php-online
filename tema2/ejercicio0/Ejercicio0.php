<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Ejercicio 0</title>
</head>
<body>
  <h1>Ejercicio 1</h1>
  <?php
    $nombre='Mario Fernandez Gonzalez';
    $edad=20;
    echo '<p>',$nombre,' y tengo ',$edad,' años</p>';
  ?>
  <h1>Ejercicio 2</h1>
  <?php
   	echo '<p>El porcentaje 30% de 125 es: ',125*0.3,'</p>'
  ?>
  <h1>Ejercicio 3</h1>
  <?php
   	$alto=3; $ancho=5.5; $precio=2.50;
    $superficie=$alto*$ancho; $precio_total=$superficie*$precio;
    echo '<p>El pintor ha de invertir ',$precio_total,' € para pintar una
    pared de ',$alto,' por ',$ancho,' de ancho.</p>';
  ?>
  <h1>Ejercicio 4</h1>
  <?php
    $pantalon=60; $chaq_roja=70; $chaq_azul=90; $jersey=25; $calcetin=6;
    $total=$pantalon*6+$chaq_roja*8+$chaq_azul*4+$jersey*6+$calcetin*9;
    echo '<p>Total ganado en el dia es ',$total,' €</p>';
    echo '<p>El promedio por prenda es ',round($total/33,2),'</p>';
  ?>
  <h1>Ejercicio 5</h1>
  <?php
    $mul3=30/3; $mul5=30/5;
    echo '<p>En los 30 primeros numeros naturales hay ',$mul3,' multiplos
    de 3 y ',$mul5,' multiplos de 5.</p>';
  ?>
  <h1>Ejercicio 6</h1>
  <?=
    'Hoy es ',date('d'),'/',date('m'),'/',date('Y'),' y es ',date('l');
  ?>

</body>
</html>