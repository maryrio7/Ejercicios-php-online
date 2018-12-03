<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Ejercicio 2</title>
</head>
<body>
  <h1>Ejercicio 1</h1>
  <?php
  function texto(){
      $cadena='Texto de ejemplo';
      return $cadena;
  }
  echo texto();
  ?>
  <h1>Ejercicio 2</h1>
  <?php
  function texto2($var1,$var2){
      $cadena=$var1.' '.$var2;
      return $cadena;
  }
  echo texto2('Hola','Adios');
  ?>
  <h1>Ejercicio 3</h1>
  <?php
  function mayor($num1,$num2){
      if ($num1>$num2)
          return $num1;
      else
          return $num2;
  }
  echo mayor(10,25);
  ?>
  <h1>Ejercicio 4</h1>
  <?php
  function temperatura1($temp){
    $far=$temp*1.8+32;
    return $far;
  }
  echo temperatura1(15);
  ?>
  <h1>Ejercicio 5</h1>
  <?php
  function temperatura2($temp){
    $cen=($temp-32)/1.8;
    return $cen;
  }
  echo temperatura2(59);
  ?>
  <h1>Ejercicio 6</h1>
  <?php
  function tabla4($ca1,$ca2,$ca3,$ca4){
      $ca5='<table border="1"><tr><td>'.$ca1.'</td></tr><tr><td>'.$ca2.
      '</td></tr><tr><td>'.$ca3.'</td></tr><tr><td>'.$ca4.'</td>
      </tr></table>';
      return $ca5;
  }
  echo tabla4('Hola','Buenos dias','Hasta luego','Adios');
  ?>
  <h1>Ejercicio 7</h1>
  <?php
    include('imc.inc.php');
    echo imc(68,1.80);
  ?>
  <h1>Ejercicio 8</h1>
  <?php
  function mayorRandom(){
      $ran1=rand(1,100);
      $ran2=rand(1,100);
      return mayor($ran1,$ran2);
  }
  echo mayorRandom();
  ?>
  <h1>Ejercicio 9</h1>
  <?php
  function bisiesto($anio){
      if ($anio%4==0) {
          if ($anio%100==0 and $anio%400!=0)
              return 'No es bisiesto';
          else
              return 'Es bisiesto';
      }
      else
          return 'No es bisiesto';
  }
  echo bisiesto(2012);
  ?>
  <h1>Ejercicio 10</h1>
  <?php
    echo 'F1: '.checkdate(12, 30, 2010).'<br>';
    echo 'F2: '.checkdate(02, 29, 2016).'<br>';
    echo 'F3: '.checkdate(2, 29, 2017);
  ?>
</body>
</html>