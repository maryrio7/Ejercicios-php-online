
<?php
include '../ejercicio2/cabecera.php';
include '../ejercicio2/pie.php';
cabecera('ejercicio8');

$frutas = array('guayaba','melocoton','fresa',
    'pera', 'manzana','naranja',
    'grosella','kiwi');
echo '<meta http-equiv="refresh" content="5" />';
shuffle($frutas);

echo '<table style="border: 5px solid purple; margin: 0 auto;">
<caption style="border: 5px solid blue; color: blue; margin-left: 32px;
font-size:25px; font-weight: bold; margin-right: 32px;
margin-bottom: 6px;">Refresca frutas cada 5 segundos</caption>';
$cont=0;
echo '<tr>';
foreach ($frutas as  $rec){
    if ($cont==4) echo '</tr><tr>';
    echo '<td style="width:115px; height: 115px;">';
    if ($rec=='guayaba') echo '<img src="frutas/1.png">';
    else if ($rec=='melocoton') echo '<img src="frutas/2.png">';
    else if ($rec=='fresa') echo '<img src="frutas/3.png">';
    else if ($rec=='pera') echo '<img src="frutas/4.png">';
    else if ($rec=='manzana') echo '<img src="frutas/5.png">';
    else if ($rec=='naranja') echo '<img src="frutas/6.png">';
    else if ($rec=='grosella') echo '<img src="frutas/7.png">';
    else if ($rec=='kiwi') echo '<img src="frutas/8.png">';
    $cont++;
    echo '</td>';
}
echo '</tr></table>';

pie();
?>