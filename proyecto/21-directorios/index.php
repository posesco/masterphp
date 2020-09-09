<?php
//Crear directorio
if (!is_dir('mi carpeta')) {
    mkdir('mi carpeta', 777) or die('No se puede crear directorio');
    echo 'Se creo la carpeta';
}else{
    echo 'Ya existe la carpeta';
}
// Borrar directorios
rmdir('mi carpeta');
?>