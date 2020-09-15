<?php
var_dump($_POST);
die();
if (isset($_POST)) {
    // Cargar conexion a DB
    require_once 'includes/conexion.php';
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string ($db, $_POST['nombre']) : false ;

    // Array de errores
    $errores = [];
    // Verificacion de datos antes de enviar a la base de datos
    if (!empty($nombre)){
        $nombre_verificado = true;
    }else{
        $nombre_verificado = false;
        $errores['nombre'] = 'El campo no puede estar vacio';
    }
    // Se verifica si existio alguno error almacenado en el array errores
    $guardar_usuario = false;
    if (count($errores) == 0 ) {
        $guardar_usuario = true;
        // Insertamos datos en base de datos
        $sql = "INSERT INTO categorias(nombre) VALUES ('$nombre')";
        $guardar = mysqli_query($db, $sql);
        if ($guardar) {
            $_SESSION['nueva_categoria'] = 'Felicidades Se creo la nueva categoria!!';
        }else {
            $_SESSION['errores']['general'] = 'Fallo al guardar';
        }
    }else {
        // Devolvemos al formulario para corregir los datos 
        $_SESSION['errores'] = $errores;
    }
?>