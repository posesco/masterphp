<?php

if(isset($_COOKIE['micookie'])){
    echo '<h1>'.$_COOKIE['micookie'].'</h1>';
}else{
    echo 'No existe la galleta';
}
if(isset($_COOKIE['unyear'])){
    echo '<h1>'.$_COOKIE['unyear'].'</h1>';
}else{
    echo 'No existe la galleta';
}

?>
<a href='make-cookie.php'>Crear Galletas |<a/>
<a href='del-cookies.php'>Borrar Galletas |<a/>