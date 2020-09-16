<?php
if (isset($_POST)) {
    // Cargar conexion a DB
    require_once 'includes/conexion.php';
    $nombre     = isset ($_POST['nombre']) ? mysqli_real_escape_string ($db, $_POST['nombre']) : false ;
    $apellidos  = isset ($_POST['apellidos']) ? mysqli_real_escape_string ($db, $_POST['apellidos']) : false ;
    $correo     = isset ($_POST['correo']) ? mysqli_real_escape_string ($db, trim($_POST['correo'])) : false ;
    // Array de errores
    $errores = [];
    // Verificacion de datos antes de enviar a la base de datos
    if (!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/",$nombre)) {
        $nombre_verificado = true;
    }else {
        $nombre_verificado = false;
        $errores['nombre'] = 'Datos no validos para nombre';
    }
    if (!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/",$apellidos)) {
        $apellidos_verificado = true;
    }else {
        $apellidos_verificado = false;
        $errores['apellidos'] = 'Datos no validos para apellidos';
    }
    if (!empty($correo) && filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        $correo_verificado = true;
    }else {
        $correo_verificado = false;
        $errores['correo'] = 'Datos no validos para correo';
    }
    // Se verifica si existio alguno error almacenado en el array errores
    $guardar_usuario = false;
    if (count($errores) == 0 ) {
        $guardar_usuario = true;
        $id = $_SESSION['usuario']['id'];
        // Comprobar que el Email no exita con otro usuario
        $sql= "SELECT *  FROM usuarios WHERE email = 'correo'";
        $consulta = mysqli_query($db, $sql);
        if ($consulta && mysqli_num_rows($consulta) == 0){
            // Actulizamos datos en base de datos
            $sql = "UPDATE usuarios SET nombre = '$nombre', apellido = '$apellidos', email = '$correo' WHERE usuarios.id = '$id'";
            $guardar = mysqli_query($db, $sql);
        }
        if ($guardar) {
            $_SESSION['completado'] = 'Tus datos se actualizaron con Exito!';
            $_SESSION['usuario']['nombre'] = $nombre;
            $_SESSION['usuario']['apellido'] = $apellidos;
        }else {
            $_SESSION['errores']['general'] = 'Ya existe un usuario con el correo '.$correo;
        }
    }else {
        // Devolvemos al formulario para corregir los datos 
        $_SESSION['errores'] = $errores;
    }
}
header('Location:misdatos.php');

?>