<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Archivos desde PHP</title>
</head>
    <body>
        <h1>Subir archivos con PHP</h1>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="archivo"><br>
            <input type="submit" value="Subir Archivo"><br>
        </form>
    </body>
</html>