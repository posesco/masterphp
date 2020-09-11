<?php
echo '<br>'.'Esto es GET'.'<br>';
// Recibiendo variables por GET
echo $_GET['nombre'].'<br>';
echo $_GET['apellidos'].'<br>';
echo $_GET['email'].'<br>';
var_dump($_GET);
echo '<hr>';
// Recibiendo variables por GET
echo '<br>'.'Esto es POST'.'<br>';
echo $_POST['nombre'].'<br>';
echo $_POST['apellidos'].'<br>';
echo $_POST['email'].'<br>';
var_dump($_POST);
echo '<hr>';
?>