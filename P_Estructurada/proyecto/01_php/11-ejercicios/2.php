<?php
//Sacar todo los numero pares del 1 al 10
$resultado = 0;
for ($i=0; $i <= 100 ; $i++) { 
    $resultado = $i % 2;
    if ($resultado == 0) {
        echo "<h1>El numero $i es par si que si <br></h1>";
    }else{
        echo "El numero $i no es par :( <br>";
    }
}
?>