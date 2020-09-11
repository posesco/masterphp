<?php
/* 
// Esta rutina comprueba la existencia de la extension msyqli, con esto puede encontrar la falla en el Dockerfile
if (!function_exists('mysqli_init') && !extension_loaded('mysqli')) {
    echo '¡¡¡No tenemos mysqli !!!';
} else {
    echo 'Uff la tenemos';
}
 */
// Protego datos sensibles
$user = getenv('MYSQL_USER');
$pass = getenv('MYSQL_PASSWORD');
$dbase = getenv('MYSQL_DATABASE');
$enlace = mysqli_connect("db", "$user", "$pass", "$dbase");
if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
?>


