<?php
echo '<h2>Menu SQL del Curso Master php</h2>';
$arreglo = [];
// Lista todos los archivos del directorio
if ($gestor = opendir('./')) {
    while (false !== ($entrada = readdir($gestor))) {
        if ($entrada != "." && $entrada != ".." && $entrada != "directorio.php" && $entrada != "index.php") {
          $arreglo [] = $entrada;
        }
    }
    closedir($gestor);
}
// Organiza y crea link a todos los archivos del directorio
sort($arreglo);
for ($i=0; $i < (count($arreglo)) ; $i++) { 
    echo "<li><a href=$arreglo[$i]>$arreglo[$i]</a></li>";
}
echo '<hr>';