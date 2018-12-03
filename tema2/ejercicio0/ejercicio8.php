<?php
$cadena1='abcdefghi'; $cadena2='123';
echo '<table border="1"><tr><td>Cadena 1</td><td>'.$cadena1.'</td></tr>
<tr><td>Cadena 2</td><td>'.$cadena2.'</td></tr><tr><td>
substr_replace(cadena1,cadena2,2)</td><td>'
.substr_replace($cadena1,$cadena2,2).'</td></tr><tr><td>
substr_replace(cadena1,cadena2,2,3)</td><td>'
.substr_replace($cadena1,$cadena2,2,3).'</td></tr><tr><td>
substr_replace(cadena1,cadena2,-2)</td><td>'
.substr_replace($cadena1,$cadena2,-2).'</td></tr><tr><td>
substr_replace(cadena1,cadena2,2,-3)</td><td>'
.substr_replace($cadena1,$cadena2,2,-3).'</td></tr></table>';

?>