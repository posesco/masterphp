<?php
/*- Añadir valores a un array mientras que su longitud sea menor a 120
- Mostrar Array
*/
$numeros = [];
echo '<strong>Este es el array autollenado: </strong>';
for ($i=0; $i < 120; $i++) {
    $numeros [$i] = rand(1,60); 
    echo "<li>$numeros[$i]</li>";
}
?>