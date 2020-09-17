<?php
if (isset($_POST)) {
    // Cargar conexion a DB
    require_once 'includes/conexion.php';
    // Inicio de Sesion
    if (!isset($_SESSION)) {
        session_start();
    }
    //Operador ternario verifica si recibe parametros si no da el valor false
    // la funcion mysqli_real_escape_string hace que tome los caracteres especiales como string para evitar errores en la consula SQL
    // Esto genera un nivel de seguridad ya que evita que se ejecuten consultas no deseadas 
    $nombre     = isset ($_POST['nombre']) ? mysqli_real_escape_string ($db, $_POST['nombre']) : false ;
    $apellidos  = isset ($_POST['apellidos']) ? mysqli_real_escape_string ($db, $_POST['apellidos']) : false ;
    // Funcion trim para no permitir espacios 
    $correo     = isset ($_POST['correo']) ? mysqli_real_escape_string ($db, trim($_POST['correo'])) : false ;
    $password   = isset ($_POST['password']) ? mysqli_real_escape_string ($db, $_POST['password']) : false ;
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
    if (!empty($password)) {
        $password_verificado = true;
    }else {
        $password_verificado = false;
        $errores['password'] = 'Datos no validos para password';
    }
    // Se verifica si existio alguno error almacenado en el array errores
    $guardar_usuario = false;
    if (count($errores) == 0 ) {
        $guardar_usuario = true;
        // Insertamos datos en base de datos
        // Cifrado de password seguro con 4 niveles TENER ENCUENTA EL TAMA;O DEL CAMPO PASSWORD EN LA TABLA
        $password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost'=>4]);
        $sql = "INSERT INTO usuarios(nombre, apellido, email, pass) VALUES ('$nombre','$apellidos','$correo','$password_segura')";
        $guardar = mysqli_query($db, $sql);
        if ($guardar) {
            $_SESSION['completado'] = 'Registro existoso!';
        }else {
            $_SESSION['errores']['general'] = 'Fallo al guardar';
        }
    }else {
        // Devolvemos al formulario para corregir los datos 
        $_SESSION['errores'] = $errores;
    }
}
header('Location:index.php');

?>