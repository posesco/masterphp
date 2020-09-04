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
    'email' => 'posesco@gmail.com',
);
// Array multidimensional
$contactos = array(
    array(
        'nombre' => 'Elliot Posada',
        'email' => 'elliot@yopmail.com'
    ),
    array(
        'nombre' => 'Elliot Posada',
        'email' => 'elliot@yopmail.com'
        
    ),
    array(
        'nombre' => 'Elliot Posada',
        'email' => 'elliot@yopmail.com'

    ),
);

echo $personas['email'].'<br>';
echo $peliculas[0].'<br>';
echo $conteo[2].'<br>';
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
?>
