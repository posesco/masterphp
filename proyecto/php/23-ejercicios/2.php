
<?php
/*
* Una Funcion
* Validar un email con filter_var
* Recoger la variable por get y validarla
* Mostrar el resultado
*/

function email($mail){
    if (!is_string($mail) || !filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        $error = 'Debe ser un correo con @ .com y todas esas cosas';
    }else {
        $error = 'ok';
    }
    return $error;
}
if (isset($_GET['mail'])) {
    $mail = $_GET['mail'];
    if (email($mail) == 'ok') {
        echo 'Los haz hecho bien pez '.$mail.' si es un correo';
    }else{
        echo email($mail);
    }
    ;
}else{
    echo 'No enviaste ningun parametro, Estas pendejo!!!';
}
?>
