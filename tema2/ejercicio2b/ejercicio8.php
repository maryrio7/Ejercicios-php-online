<?php
include '../ejercicio2/cabecera.php';
include '../ejercicio2/pie.php';
cabecera('ejercicio8');

$matriz1= array("cougar","ford",null,"2.500","V6",172);
$matriz2= array(2=>"cougar","ford",1=>null,0=>"2.500","V6",172);

for ($i=0; $i<count($matriz1);$i++){
    echo $matriz1[$i].' - ';
}
echo '<br><br>';
foreach($matriz1 as $index=>$rec) {
    echo $index.': '.$rec.'<br>';
}
echo '<br><br>';
for ($i=0; $i<count($matriz2);$i++){
    echo $matriz2[$i].' - ';
}
echo '<br><br>';
foreach($matriz2 as $index=>$rec) {
    echo $index.': '.$rec.'<br>';
}
echo '<br><br>';
echo var_dump($matriz1);echo '<br><br>';
echo var_dump($matriz2);echo '<br><br>';

print_r($matriz1); echo '<br><br>';
print_r($matriz2);echo '<br><br>';

pie();
?>