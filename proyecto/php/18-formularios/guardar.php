<?php

if (isset($_POST['titulo']) && isset($_POST['descripcion']) ) {
    echo '<h1>'.$_POST['titulo'].'</h1>';
    echo '<h2>'.$_POST['descripcion'].'</h2>';
}else{
    echo 'Formulario vacio che';
}


?>