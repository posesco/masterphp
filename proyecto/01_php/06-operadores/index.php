<?php
//Operadores aritmeticos
$n1= 14123;
$n2= 3233;

echo 'Suma: '.($n1+$n2).'<br>';
echo 'Resta: '.($n1-$n2).'<br>';
echo 'Multiplicacion: '.($n1*$n2).'<br>';
echo 'Division: '.($n1/$n2).'<br>';
echo 'Modulo: '.($n1%$n2).'<br>';
echo 'Exponente: '.($n1**$n2).'<br>';

// Operadores incremento y decremento
$year = 2020;
// Incremento
$year++;
echo '<h1>'.$year.'</h1>';
// Decremento
$year--;
echo '<h1>'.$year.'</h1>';

// Operadores de asignacion
$edad = 55;
echo $edad.'<br>';
echo ($edad+=5).'<br>';
echo ($edad-=5).'<br>';
echo ($edad*=5).'<br>';
echo ($edad/=5).'<br>';
echo ($edad**=5).'<br>';
echo ($edad%=5).'<br>';

?>
