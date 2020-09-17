<?php
/*
TIPOS DE DATOS:
int
float / double
string
bool = true o false
null
array
objetos
*/
// Las variables no deben iniciar con un numero, tampoco tener simbolos especiales

$numero = 100;
echo gettype($numero).'<br>';
$decimal = 11.2;
echo gettype($decimal).'<br>';
$texto = 'Hola a todos'.$numero;
echo gettype($texto).'<br>';
echo $texto.'<br>';
$bool = false;
echo gettype($bool).'<br>';
$nulo;
echo gettype($nulo).'<br>';
// Debugear
$nombre = 'Jesus_Posada';
var_dump($nombre);
echo '<br>';
$arreglo[] = 'Jesus_Posada';
$arreglo[] = 'Carlos Perez';
$arreglo[] = 'Dante Gebel';
var_dump($arreglo);
echo '<br>';

?>

