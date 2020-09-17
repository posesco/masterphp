<?php

// Iniciar sesion 
session_start();
// Variable local
$var_normal = 'Soy una cadena de texto';
// Variables de Sesion
$_SESSION['var_persistente'] =  'HOLA SOY UNA SESION ACTIVA';

echo $var_normal.'<br/>';
echo $_SESSION['var_persistente'].'<br/>';
?>