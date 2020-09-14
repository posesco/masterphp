<?php

// Mostrar errores en formulario de registro
function mostrarError($errores, $campo){
    $alerta = '';
    if (isset($errores[$campo]) && !empty($campo)) {
        $alerta = "<div class='alerta alerta-error'>".$errores[$campo]."</div>";
    }
    return $alerta;
}
// Limpia la variable errores para permitir el ingreso de nuevos datos
function borrarErrores(){
    $_SESSION['errores'] = null;
    $borrado = session_unset($_SESSION['errores']); 
    return $borrado;
}

?>