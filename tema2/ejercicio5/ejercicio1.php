<html>
<body>
  <h1>Calcular letra DNI - Resultado</h1>
<?php

$letra_dni = array (
    0=>'T', 1=>'R', 2=>'W', 3=>'A', 4=>'G', 5=>'M', 6=>'Y',
    7=>'F', 8=>'P', 9=>'D', 10=>'X',
    11=>'B', 12=>'N', 13=>'J', 14=>'Z', 15=>'S', 16=>'Q', 17=>'V',
    18=>'H', 19=>'L', 20=>'C', 21=>'K', 22=>'E');
$dni=$_POST['dni'];
echo 'DNI: '.$dni.'<br>';
echo '<p>Tu letra del NIF es '.$letra_dni[$dni%23].'</p>';
?>

<a href="ejercicio1.html">Volver al principio</a>


</body>
</html>