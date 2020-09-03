<?php
// Estructura de control que itera la ejecucion de una serie de instrucciones
// tantas veces como se cumpla una condicion 
$numero=0;
while ($numero <= 5) {
    echo 'Estamos en el numero: '.$numero.'<br>';
    $numero++;
}
// Ejemplo de multplicacion por GET
echo '<hr>'; 

if (isset($_GET['numero'])) {
    // Casteo de datos (int)
    $numero = (int) $_GET['numero'];
}else{
    $numero = 1;
}
echo "<h1>Tabla de Multiplicar del Numero $numero </h1>";
$count=0;
while ($count <= 10) {
    echo "$numero X $count = ".($numero*$count).'<br>';
    $count++;
}
?>