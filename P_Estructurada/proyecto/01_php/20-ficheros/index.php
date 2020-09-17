<?php
//Abrir archivo
$file = fopen("texto.txt","a+");
// Leer archivo
while (!feof($file)) {
    $contenido = fgets($file);
    echo $contenido.'<br>';
}
// Escribir
fwrite($file, "**** Soy una linea metida desde PHP ******");
// Cerrar archivo
fclose($file);
// Copiar
$copiado = 'texto'.$_SERVER['REQUEST_TIME_FLOAT'].'txt';
copy('texto.txt',$copiado) or die("Error al copiar");
// Renombrar
$renombrado = 'Nuevo'.rand(1,200).'txt';
rename($copiado, $renombrado) or die("Error al renombrar");
// Eliminar
unlink($renombrado)or die("Error al borrar");

if (file_exists("texto.txt")) {
    echo '<h1>El Fichero existe</h1>';
}else{
    echo '<h1>El Fichero NO :( existe</h1>';
    
}
?>