<?php
if (isset($_POST)) {
     // Cargar conexion a DB
     require_once 'includes/conexion.php';
     $titulo         = isset($_POST['titulo']) ? mysqli_real_escape_string ($db, $_POST['titulo']) : false ;
     $categoria      = isset($_POST['categoria']) ? mysqli_real_escape_string ($db, $_POST['categoria']) : false ;
     $descripcion    = isset($_POST['descripcion']) ? mysqli_real_escape_string ($db, $_POST['descripcion']) : false ;


     /// Array de errores
    $errores = [];
    // Verificacion de datos antes de enviar a la base de datos
    if (empty($titulo)) {
        $errores['titulo'] = 'Debes poner un titulo';
    }
    if (empty($categoria)) {
        $errores['categoria'] = 'Selecciona una Categoria';
    }
    if (empty($descripcion)) {
        $errores['descripcion'] = 'La entrada no puede estar vacia';
    }
    if (count($errores) == 0 ) {
        $id = $_SESSION['usuario']['id'];
		if(isset($_GET['editar'])){
			$entrada_id = $_GET['editar'];
			$sql = "UPDATE entradas SET titulo='$titulo', descripcion='$descripcion', categoria_id=$categoria
                    WHERE id = $entrada_id AND usuario_id = $id";

		}else{
            // Insertamos datos en base de datos
            $sql = "INSERT INTO entradas (usuario_id, categorias_id, titulo, descripcion) VALUES ('$id', '$categoria', '$titulo', '$descripcion');";
		}
    
        $entrada = mysqli_query($db, $sql);
        if ($entrada) {
            $_SESSION['completado'] = "Se creo la nueva entrada de titulo: $titulo";
        }else {
            $_SESSION['errores']['general'] = 'No fue posible crear la entrada';
        }
    }else {
        // Devolvemos al formulario para corregir los datos 
        $_SESSION['errores'] = $errores;
    }
}
header('Location:crear_entradas.php');
    
?>