<!-- 1. Crear un array con el contenido de la tabla:
    ACCION AVENTURA   DEPORTES
    GTA     ASSASINS  FIFA19
    COD     CRASH     PES19
    PUGB    POP       MOTO GP19
2. Cada columna en un fichero separado
3. Se debe mostrar en una tabla HTML
  -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Video Juegos</title>
</head>
<body>
    <h1>Esto es una tabla de Video Juegos</h1>
    <h3>Se crea tabla a partir de arrays</h3>
    <table border='1'>
    <?php include 'accion.php'; ?> 
    <?php include 'aventura.php'; ?> 
    <?php include 'deportes.php'; ?>    
    </table>
       
</body>
</html>