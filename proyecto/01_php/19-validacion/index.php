<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Validacion de Formularios</title>
    </head>
    <body>
        <h1>Validar Formularios en PHP</h1>
        <?php
            if (isset($_GET['error'])) {
                $error = $_GET['error'];
                if ($error != 'ok') {
                    echo '<strong style="color:red">Algo hiciste mal</strong>'; 
                    
                }
            }
        ?>
        <form action="procesar-formulario.php" method="POST">
            <label for="name">Nombre</label><br>
            <input type="text" name="name" required="required" pattern="[A-Z a-z]+"><br>
            
            <label for="lname">Apellidos</label><br>
            <input type="text" name="lname"required="required" pattern="[A-Z a-z]+"><br>
            
            <label for="age">Edad</label><br>
            <input type="number" name="age" maxlength="3"><br>
            
            <label for="mail">Email</label><br>
            <input type="email" name="mail"><br>
            
            <label for="pass">Contraseña</label><br>
            <input type="password" name="pass" required="required"><br>
            
            <input type="submit" value="Enviar"><br>
                   
        </form>
    
    </body>
</html>