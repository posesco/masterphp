<?php
include 'conexion.php';

// Consulta para configurar la codicficacion de caracteres
mysqli_query($enlace, "SET NAMES 'utf8'");

// Insertar datos con PHP 
$sql = "INSERT INTO notas(titulo, descripcion, color)
        VALUES ('Notas desde PHP','Esto es una nota escrita desde PHP', 'green')";
$query = mysqli_query($enlace, $sql);

// Consultar SELECT en PHP
$query = mysqli_query($enlace, "SELECT * FROM notas");
while ($nota = mysqli_fetch_assoc($query)){
    echo '<h2>'.$nota['titulo'].'</h2>';
    echo $nota['descripcion'].'<br>';
}

?>
