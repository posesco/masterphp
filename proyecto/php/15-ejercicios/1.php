<?php 
//Array con 8 numeros, recorrer y mostrarlo, ordenar y mostrarlo, mostrar su longitud y ver algun elemento del array
//Creacion del Array y autollenado 
$numeros = [];
$longitud = rand(1,20);
echo '<strong>Este es el array autollenado: </strong>';
for ($i=0; $i <= $longitud; $i++) {
    $numeros [$i] = rand(1,60); 
    echo "<li>$numeros[$i]</li>";
}
// Bucle de ordenamiento
echo '<strong>Este es el array ordenado: </strong>';
sort($numeros);
foreach ($numeros as $key ) {
    echo "<li>$key</li>";
}
echo '<strong>El tamaño del Array es: </strong>'.count($numeros).'<br>';
$aleatorio = array_rand($numeros);
echo "<strong>Uno de los elementos de Array es: $numeros[$aleatorio]</strong>";
?>