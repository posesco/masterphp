<?php
// Imprimir las potencias de 2 de los 40 primero numeros naturales
$resultado = 0;
// Con Bucle FOR
for ($i=0; $i <= 40 ; $i++) { 
    $resultado = $i*$i;
    echo "<h1>La potencia cuadrada de $i es $resultado</h1>";
}
// Con Bucle While
echo '<hr>';
$resultado = 0;
while ($a <= 40) {
    $resultado = $a*$a;
    echo "<h2>La potencia cuadrada de $a es $resultado</h2>";
    $a++;
}
echo '<hr>';
?>