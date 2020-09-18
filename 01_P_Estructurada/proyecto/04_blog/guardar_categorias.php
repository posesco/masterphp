<?php
if (isset($_POST)) {
     // Cargar conexion a DB
     require_once 'includes/conexion.php';
     $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string ($db, $_POST['nombre']) : false ;
     // Array de errores
     unset($errores);
     // Verificacion de datos antes de enviar a la base de datos
     if (empty($nombre)){
         $errores = 'El campo no puede estar vacio';
        }
     // Se verifica si existio alguno error almacenado en el array errores
      if (empty($errores)) {
          // Insertamos datos en base de datos
          $sql = "INSERT INTO categorias(nombre) VALUES ('$nombre');";
          $guardar = mysqli_query($db, $sql);
          $_SESSION['exito'] = 'Se creo nueva categoria';
        }else{
            $_SESSION['error'] = $errores;
        }
    }
    // Devolvemos al formulario para corregir los datos 
    header('Location:crear_categorias.php');
    
?>