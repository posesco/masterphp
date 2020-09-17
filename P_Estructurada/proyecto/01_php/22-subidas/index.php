<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Archivos desde PHP</title>
</head>
    <body>
        <h1>Subir imagenes con PHP</h1>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="archivo"><br>
            <input type="submit" value="Subir Archivo"><br>
        </form>
        <h1>Listado de imagenes</h1>
        <?php
        $gestor = opendir ('./images');
        if ($gestor){
            while (($image = readdir($gestor)) !== false) {
                if ($image != '.' && $image != '..') {
                    echo "<li>$image</li>";
                    echo "<img src='images/$image' width='200px'/>";
                }
            }
        }else{
            
            echo '<h1>Todavia no hay archivos</h1>';
        }
        ?>

    </body>
</html>