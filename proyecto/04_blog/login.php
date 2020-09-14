<?php
// Cargar conexion a DB
require_once 'includes/conexion.php';
if (isset($_POST)) {
    // Recoger los datos del formulario
    $correo = trim($_POST['correo']);
    $password = $_POST['password'];
    // Consulta para comprobar credenciales de usuario
    $sql = "SELECT * FROM usuarios WHERE email = '$correo'";
    $login = mysqli_query($db, $sql);
    if ($login) {
        $usuario = mysqli_fetch_assoc($login);
        // Comparacion de password
        $verify = password_verify($password, $usuario['password']);
        if ($verify){
            // Usa una sesion para guardar los datos de usuario
            $_SESSION['usuario'] = $usuario;
            if (isset($_SESSION['error_login'])){
                session_unset($_SESSION['error_login'])
            }
        }else{
            $_SESSION['error_login'] = 'Login incorrecto!!';
        }
    }else{
        $_SESSION['error_login'] = 'Login incorrecto!!';
    }   
}
header('Location:index.php');
?>
