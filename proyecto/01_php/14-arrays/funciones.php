<?php

$nombres = ['Juan', 'Jesus', 'Alirio', 'Camilo', 'Elliot', 'Xavier', 'Zoraida'];
$numeros = [1,2,3,4,57,0,64,565];

// Organizar en orden alfabetico ascendente y descendente
asort($nombres);
var_dump($nombres);
echo '<hr>';
arsort($nombres);
var_dump($nombres);
echo '<hr>';
// Ordenar array por orden ascendente o descendente
sort($numeros);
var_dump($numeros);
echo '<hr>';
rsort($numeros);
var_dump($numeros);
echo '<hr>';
// Añadir elementos a un array
$nombres[] = 'Anaximandro'; 
var_dump($nombres);
echo '<hr>';
// Añadir con array_push
array_push($nombres, 'Marlene');
var_dump($nombres);
echo '<hr>';
// Elimincar contenido
array_pop($nombres);
unset($nombres[1]);
var_dump($nombres);
echo '<hr>';
// Elimincar contenido aleatorio
$indice = array_rand($nombres);
echo $nombres[$indice];
echo '<hr>';
var_dump($nombres);
echo '<hr>';
// Dar la vuelta a un array
var_dump(array_reverse($numeros));
echo '<hr>';
// Buscar dentro de una array
$resultado = array_search('Elliot', $nombres);
var_dump($resultado);
echo '<hr>';
// Contar numero de elementos
echo count($nombres);

?>
