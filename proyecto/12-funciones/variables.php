<?php
// Variables locales
// Variables Globales
$frase='Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed debitis hic laudantium quia optio cum ullam rem aliquid';
echo $frase;

function hola(){
    global $frase;
    echo "<h1>$frase</h1>";
    $year = 2020;
    echo "<h2>$year</h2>";
    return $year;
}
echo hola();

function dias(){
    return 'Hola buenos dias';
}

function tardes(){
    return 'Hola buenas tardes';
}

function noches(){
    return 'Hola buenas noches';
}

$horario = dias();
echo $horario;

?>
