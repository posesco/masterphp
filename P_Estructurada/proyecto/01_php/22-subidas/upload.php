<?php
$archivo = $_FILES['archivo'];
$nombre = $archivo['name'];
$tipo = $archivo['type'];
// Confirma que el archivo tenga la extencion deseada
if ($tipo == "image/jpg" || $tipo == "image/jpeg" || $tipo == "image/png" || $tipo == "image/gif") {
    // Crea carpeta si no existe
    if (!is_dir('images')) {
        mkdir('images', 0777);
    }
    header("Refresh: 3; URL=index.php");
    move_uploaded_file($archivo['tmp_name'], 'images/'.$nombre);
    echo '<strong>Su imagen se subio correctamente :) </strong>';

}else{
    // Redireccion automatica luego de 3 segundos
    header("Refresh: 3; URL=index.php");
    echo '<h1>Solo se permiten imagenes de extensiones jpg, jpeg, png o gif</h1>';
}
?>