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
    if ($login && mysqli_num_rows($login) == 1) {
        $usuario = mysqli_fetch_assoc($login);
        // Comparacion de password
        $verify = password_verify($password, $usuario['pass']);
        if ($verify){
            // Usa una sesion para guardar los datos de usuario
            $_SESSION['usuario'] = $usuario;
            if (isset($_SESSION['errores'])){
                session_unset($_SESSION['errores']);
            }
        }else{
            $_SESSION['errores'] = 'Password incorrecto!!';
        }
    }else{
        $_SESSION['errores'] = 'Usuario no exite!!';
    }   
}
header('Location:index.php');
?>
