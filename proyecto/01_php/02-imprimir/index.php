<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprimir por pantalla</title>
</head>
<body>
    <!-- Esto sigue siendo html -->
    <h1>Master en PHP</h1>
    <!-- Aqui comienza php -->
    <?='Esto es una slam de echo php'?>
    <?php
        // Titular de la seccion
        echo '<h3>Listado de videojuegos</h3>';
        /*
        Esta es una 
        lista de videojuegos
        Modernos
        */
        echo '<ul>'
            .'<li>GTA</li>'
            .'<li>FIFA</li>'
            .'<li>Mario Bross</li>'
            .'</ul>';
        echo '<hr/>';
        // Parrafo explicativo
        echo '<p>Esto es '.'una concatenacion ','simple en '.'php</p>';    
        echo '<hr/>';
        ?>
    
</body>
</html>

