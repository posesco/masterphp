<?php
// Constante: contenedor de informacion que no puede variar
define ('nombre','Jesus Posada');
define ('web','posesco.com');
echo nombre.'<br>';
echo web.'<br>';
// Variable
$web = 'www.posesco.com.co';
echo $web.'<br>'; 
// Constantes predefinidas PHP
echo PHP_OS.'<br>';
echo PHP_VERSION.'<br>';
echo PHP_EXTENSION_DIR.'<br>';
echo __LINE__.'<br>';
echo __FILE__ .'<br>';
function holamundo(){
    echo __FUNCTION__ .'<br>';
}
holamundo();
echo PHP_ROUND_HALF_DOWN.'<br>';
?>
