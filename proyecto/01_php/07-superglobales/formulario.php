<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formularion en PHP</h1>
    <!-- <form method="GET" action="recibir.php"> -->
    <form method="POST" action="recibir.php">
        <p>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre">
        </p>
        <p>
            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos">
        </p>
        <p>
            <label for="email">E - Mail </label>
            <input type="text" name="email">
        </p>
        <input type="submit" value="Enviar datos">
    </form>
    <?php
    
    
    ?>

</body>
</html>