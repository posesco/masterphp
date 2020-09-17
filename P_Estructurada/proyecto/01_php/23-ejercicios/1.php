<?php
session_start();
if (!isset($_SESSION['numero'])) {
    $_SESSION['numero'] = 0;
}else{
    echo 'El valor la sesion es: '.$_SESSION['numero'].'<br>'; 
}
if (isset($_GET['counter']) && $_GET['counter']==1 ){
    $_SESSION['numero']++;
}
if (isset($_GET['counter']) && $_GET['counter']==0 ){
    $_SESSION['numero']--;
}
?>
<!-- Crear una sesion que aumente su valor en 1 o disminuya en 1 en funcion de si el parametro get counter
esta a 1 o a cero -->
<a href="1.php?counter=1">Aumentar el valor</a><br>
<a href="1.php?counter=0">Disminuir el valor</a><br>
