<!-- Array es una coleccion de datos -->
<?php
$pelicula = "Batman";
// Array simple
$peliculas = array('Batman', 'Superman', 'Flash','Cantinflas');
$conteo = ['Primero', 'Segundo','Tercero'];

// Array asociativo, GET es un array asociativo
$personas = array (
    'nombre' => 'Jesus',
    'apellidos' => 'Posada',
    'web' => 'posesco.com',
);
// Array multidimensional
$contactos = array(
    array(
        'nombre' => 'Elliot Posada',
        'email' => 'elliot@yopmail.com'
    ),
    array(
        'nombre' => 'Jesus Posada',
        'email' => 'posesco@yopmail.com'
        
    ),
    array(
        'nombre' => 'Matilde Escobar',
        'email' => 'materita@yopmail.com'

    ),
);
// Impresion sencilla de array
echo $peliculas[0].'<br>';
echo $conteo[2].'<br>';
echo $personas['web'].'<br>';
echo $contactos[0]['email'].'<br>';
// Calcular tamaño de array
$largo = sizeof($peliculas);
count($peliculas);
//Recorres arreglos con for y foreach
echo '<hr>';
for ($i=0; $i < $largo ; $i++) {
    echo "Pelicula #$i = $peliculas[$i]".'<br>';
}
// Especial para recorrer array
echo '<hr>';
foreach ($conteo as $value) {
    echo "La posicion es # $value".'<br>';
}
echo '<hr>';
foreach ($contactos as $llave => $contacto) {
    echo $contacto['nombre'].'<br>';
    echo $contacto['email'].'<br>';
}
?>
