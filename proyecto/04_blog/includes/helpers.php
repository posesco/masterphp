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
    $borrado = false;
    if(isset($_SESSION['errores'])){
        $_SESSION['errores'] = null;
        $borrado = session_unset($_SESSION['errores']); 
    }
    if(isset($_SESSION['completado'])){
        $_SESSION['completado'] = null;
        $borrado = session_unset($_SESSION['completado']); 
    }
    return $borrado;
}

?>