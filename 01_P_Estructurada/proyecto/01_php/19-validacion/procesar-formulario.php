<?php
$error = 'faltan_datos';
if (!empty($_POST['name']) && !empty($_POST['lname']) && 
    !empty($_POST['age']) && !empty($_POST['mail']) && 
    !empty($_POST['pass'])){
        $error = 'ok';
        $name = $_POST['name'];
        $lname = $_POST['lname'];
        $age = $_POST['age'];
        $mail = $_POST['mail'];
        $pass = $_POST['pass'];
        // Verificar el nombre
        if (!is_string($name) || !preg_match("/[a-zA-z ]+/", $name)) {
            $error= 'name';
        }
        if (!is_string($lname) || !preg_match("/[a-zA-z ]+/", $lname)) {
            $error= 'lname';
        }
        if (!is_int($age) || !filter_var($age, FILTER_VALIDATE_INT)) {
            $error= 'age';
        }
        if (!is_string($mail) || !filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            $error= 'mail';
        }
        if (strlen($pass) < 5){
            $error= 'pass';
            
        }
    }else{
        $error='faltan_datos';
}   
    
if($error != 'ok'){
    header("Location:index.php?error=$error");
}
    ?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tratmiento de datos</title>
    </head>
    <body>
        <h1>Datos verificados </h1>
        <?php if ($error == 'ok'):?>
            <p><?=$name?></p>
            <p><?=$lname?></p>
            <p><?=$age?></p>
            <p><?=$mail?></p>
        <?php endif;?>    
    </body>
</html>