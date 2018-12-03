<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Ejercicio 1</title>
</head>
<body>
  <h1>Ejercicio 1</h1>
  <?php
    $texto='Hola mundo!';
    echo $texto,'<br><b>',$texto,'</b><br><u>',$texto,'</u><br><i>',$texto,'</i>';
  ?>
  <h1>Ejercicio 2</h1>
  <?php
    $num1=18; $num2=6; $cadena1='buenos dias'; $cadena2='tenga usted';
    echo 'Suma: ',$num1+$num2,'<br>División: ',$num1/$num2,
    '<br>Concatenación: ',$cadena1,' ',$cadena2;
  ?>
  <h1>Ejercicio 3</h1>
  <?php
  for($num=1; $num<11; $num++){
      echo $num,' ';
  }
  ?>
  <h1>Ejercicio 4</h1>
  <?php
    $num=1; $sum=1;
    while($sum<80){
        echo $num,' ';
        $num++;
        $sum+=$num;
    }
  ?>
  <h1>Ejercicio 5</h1>
  <?php
    for($num=1; $num<11; $num++){
      if ($num%2==0)
          echo '<span style=" color: blue">',$num,'</span> ';
      else
          echo '<span style=" color: red">',$num,'</span> ';
  }
  ?>
  <h1>Ejercicio 6</h1>
  <?php
    for($cont=0; $cont<10; $cont++){
      echo chr(97+$cont),' ';
    }
  ?>
  <h1>Ejercicio 7</h1>
  <?php
    echo '<table border="1">';
    for($cont=0; $cont<10; $cont++){
      echo '<tr><td>',chr(97+$cont),'</td><td>',$cont+1,'</td></tr>';
    }
    echo '</table>';
  ?>
  <h1>Ejercicio 8</h1>
  <table style="text-align: center; margin:0 auto" border="1">
  <tr><td colspan="2">Tabla del 8</td></tr>
  <?php
    for ($cont=1; $cont<11; $cont++){
      echo '<tr><td>8 x ',$cont,'=</td><td>',8*$cont,'</td></tr>';
    }
  ?>
  </table>
  <h1>Ejercicio 9</h1>
  <?php
      setlocale(LC_ALL,"es_ES","esp");
      date_default_timezone_set('Europe/Madrid');
      echo 'Cuando se cargó esta página eran las ',strftime('%H'),':',strftime('%M')
      ,':',strftime('%S'),' del día '.strftime('%d'),' de ',strftime('%B'),' del año '
      ,strftime('%Y'),'.<br>Es el día ',strftime('%j'),' del año.';
  ?>
  <h1>Ejercicio 10</h1>
  <?php
    if (8<=date('H') and date('H')<13)
        echo 'Buenos días';
    elseif (13<=date('H') and date('H')<15)
        echo 'Que aproveche la comida';
    elseif (15<=date('H') and date('H')<18)
        echo 'Es la hora del café';
    else
        echo 'Buenas noches';
  ?>
  <h1>Ejercicio 11</h1>
  <?php
    $sum=0;
    for($num=1;$num<1001;$num++){
        if ($num%2==0)
            $sum+=$num;
    }
    echo 'Bucle for: suma de pares entre el 1 y el 1000 es ',$sum;
  ?>
  <br>
  <?php
    $sum=0; $num=1;
    while ($num<=1000){
        if ($num%2==0)
            $sum+=$num;
        $num++;
    }
    echo 'Bucle while: suma de pares entre el 1 y el 1000 es ',$sum;
  ?>
</body>
</html>