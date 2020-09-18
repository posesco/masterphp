<?php
// Script con 4 variables:  1 array, 1 String, 1 int, 1 boolena.
// Imprimir un mensaje segun el tipo de variable.
$arreglo = ['Ojo',2,'casa',45.5,'etc'];
$cadena = "Jesus Davd";
$entero = 45;
$booleano = true;
$id = gettype($id);

switch ($id) {
    case 'array':
        echo 'Se trata de un arreglo:';
        foreach ($arreglo as $key ) {
            echo "<li>$key</li>";
        }
        break;
    case 'string':
        echo 'Se trata de una cadena y su valor es: '.$cadena;
        break;
    case 'integer':
        echo 'Se trata de un entero y su valor es: '.$entero;
        break;
    case 'boolean':
        echo 'Se trata de un boleano y su valor es: '.$booleano;
        break;
    
    default:
        echo 'Escoge un dato Pez';
        break;
}

?>