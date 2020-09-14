<?php
session_start();
if (isset($_POST)) {
    //Operador ternario verifica si recibe parametros si no da el valor false
    $nombre     = isset ($_POST['nombre']) ? $_POST['nombre'] : false ;
    $apellidos  = isset ($_POST['apellidos']) ? $_POST['apellidos'] : false ;
    $correo     = isset ($_POST['correo']) ? $_POST['correo'] : false ;
    $password   = isset ($_POST['password']) ? $_POST['password'] : false ;
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
        // Insertamos datos en base de datos
        $guardar_usuario = true;
        // $sql = "INSERT INTO usuarios(nombre, apellido, email, pass)
        //         VALUES ($nombre,$apellidos,$correo,SHA($password))";
        // $query = mysqli_query($db, $sql);
    }else {
        // Devolvemos al formulario para corregir los datos 
        $_SESSION['errores'] = $errores;
        header('Location:index.php');
    }
}

?>