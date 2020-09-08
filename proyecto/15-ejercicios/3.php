<?php
// - Comprobar si una variable esta vacia.
// - Si esta vacia rellenarla con texto en minuscula
// - Mostrar su contenido en Mayusculas y negrita

function texto ($variable=''){
    if ($variable == '' ) {
        $caracteres = 'qwertyuiopasdfghjklñzxcvbnm';
        $longitud = rand(1,15);
        for ($i=0; $i < $longitud ; $i++) { 
            $variable .= $caracteres[rand(0,$longitud)];
        }
        $salida = strtoupper($variable);
        return "<strong>$salida</strong>";
    }else{
        $salida = strtoupper($variable);
        return "<strong>$salida</strong>";
    }
}


echo texto($_GET['dato']);
?>