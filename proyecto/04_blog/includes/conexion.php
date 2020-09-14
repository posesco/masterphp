<?php
$servidor = 'db';
$usuario = 'root';
$password = 'kv5OmlgW7@J4';
$basededatos = 'blog_master';
$db = mysqli_connect($servidor, $usuario, $password, $basededatos);
if (!$db) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
?>