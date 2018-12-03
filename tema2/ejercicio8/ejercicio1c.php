<html>
<head>
  <meta charset="utf-8">
  <link href="../estilos/estilos_9-1.css"
      rel="stylesheet" type="text/css">
</head>
<body>
<?php

foreach($_POST["numeros"] as $indice => $valor){
    if(empty($valor))
        unset($_POST["numeros"][$indice]);
}


echo "Has marcado " .count($_POST['numeros']). " casillas de un total de " .$_POST['total']. ": ";
foreach($_POST["numeros"] as $indice => $valor){
    echo "<b>".$valor."</b> ";
}

?>
</body>
</html>