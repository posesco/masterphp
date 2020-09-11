<?php
/*
// Condicionales
if (condicio){
    instrucciones
}else{
    otras instruccion
}
// Operadores de Comparacion
== Igual 
=== Identico (incluye el mismo tipo de dato)
!= Distinto
<> Distinto
!== No identico
< Menor que
> Mayo que
<= Menor o igual que
>= Mayor o igual que
// Operadore Logicos
&& and = AND Y
|| or = OR O
! = NOT NO

*/
$color= 'rojo';

if($color=='rojo'){
    echo 'El color es rojo';
}else{
    echo 'El color no es rojo';  
}
echo '<hr>';
// SWITCH
$dia = 5;
switch ($dia) {
    case 1:
        echo 'Lunes';
        break;
    case 2:
        echo 'Martes';
        break;
    case 3:
        echo 'Miercoles';
        break;
    case 4:
        echo 'Jueves';
        break;
    case 5:
        echo 'Viernes';
        break;
    default:
        echo 'No es un dia';
        break;
}

echo '<hr>';
// GOTO Salta lineas de codigo
goto marca;
echo '<h3>Instruccion 1</h3>';
echo '<h3>Instruccion 2</h3>';
echo '<h3>Instruccion 3</h3>';
echo '<h3>Instruccion 4</h3>';
echo '<h3>Instruccion 5</h3>';
marca:
echo '<h3>Me salte 5 echos</h3>';

echo '<hr>';


?>