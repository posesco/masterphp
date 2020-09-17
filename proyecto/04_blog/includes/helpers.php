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
        $borrado = true; 
    }
    if(isset($_SESSION['completado'])){
        $_SESSION['completado'] = null;
        $borrado = true;; 
    }
    return $borrado;
}

// Listar categorias
function conseguirCategorias($conexion){
    $sql = "SELECT * FROM categorias ORDER BY nombre ASC";
    $categorias = mysqli_query($conexion, $sql); 
    $result= array();
    if ($categorias && mysqli_num_rows($categorias) >=1 ) {
        $result = $categorias;
    }
    return $result;
}
// Encontrar una categoria
function conseguirCategoria($conexion, $id){
    $sql = "SELECT * FROM categorias WHERE id = $id";
    $categoria = mysqli_query($conexion, $sql); 
    $result= array();
    if ($categoria && mysqli_num_rows($categoria) >=1 ) {
        $result = mysqli_fetch_assoc($categoria);
    }
    return $result;
}
// Listar entradas
function conseguirEntradas($conexion, $limit = null, $categoria = null){
    $sql = "SELECT e.*, c.nombre AS 'categoria', CONCAT(u.nombre,' ',u.apellido) AS 'autor' 
            FROM entradas e 
            INNER JOIN categorias c ON e.categorias_id = c.id 
            INNER JOIN usuarios u ON e.usuario_id = u.id";
    
    if(!empty($categoria)){
        $sql .= " WHERE e.categorias_id = $categoria ";
	}
    
    $sql .= " ORDER BY e.id DESC";
    
    if($limit){
        // Concatenamiento para un limite de 4 entradas
        $sql .= " LIMIT 4";
    }
    $entradas = mysqli_query($conexion, $sql); 
    $resultado= array();
    if ($entradas && mysqli_num_rows($entradas) >=1 ) {
        $resultado = $entradas;
    }
    return $resultado;
}

function conseguirEntrada($conexion, $id){
	$sql = "SELECT e.*, c.nombre AS 'categoria', CONCAT(u.nombre, ' ', u.apellido) AS usuario 
            FROM entradas e 
		    INNER JOIN categorias c ON e.categorias_id = c.id
		    INNER JOIN usuarios u ON e.usuario_id = u.id
            WHERE e.id = $id";   
	$entrada = mysqli_query($conexion, $sql);
	
	$resultado = array();
	if($entrada && mysqli_num_rows($entrada) >= 1){
		$resultado = mysqli_fetch_assoc($entrada);
	}
	
	return $resultado;
}
?>