<?php
// Ejemplo 1
function muestranombres (){
    echo "Jesus Posada".'<br>';
    echo "Manuel Teodoro".'<br>';
    echo "Care Loco".'<br>';
    echo "Carlos Carreño".'<br>';
    echo "Elliot Posada".'<br>';
}
muestranombres();
// Ejemplo 2
function tabla($numero){
    echo $numero;
}
tabla(22);
// Ejemplo con return

function devuelve ($nombre){
    return 'Hola '.$nombre;
} 
echo devuelve('Jesus');