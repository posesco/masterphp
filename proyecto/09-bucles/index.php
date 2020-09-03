<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Estructura de control que itera la ejecucion de una serie de instrucciones
    // tantas veces como se cumpla una condicion 
    $numero=0;
    while ($numero <= 5) {
        echo 'Estamos en el numero: '.$numero.'<br>';
        $numero++;
    }
    ?>
<hr>
    <form method="GET">
        <label for="numero">Ingrese el numero a Multiplicar</label>
        <input type="int" name="numero" >
        <input type="submit"value="Multiplicar!!">
    </form>
<hr>
    <?php
    // Ejemplo de multplicacion por GET
    if (isset($_GET['numero'])) {
        // Casteo de datos (int)
        $numero = (int) $_GET['numero'];
    }else{
        $numero = 1;
    }
    echo "<h1>Tabla de Multiplicar del Numero $numero </h1>";
    $count=0;
    while ($count <= 10) {
        echo "$numero X $count = ".($numero*$count).'<br>';
        $count++;
    }
    ?>
<hr>
<form method="GET">
    <label for="edad">Ingrese su edad</label>
    <input type="int" name="edad" >
    <input type="submit"value="Deja ver...">
</form>
<hr>
<?php
    if (isset($_GET['edad'])) {
        // Casteo de datos (int)
        $edad = (int) $_GET['edad'];
    }else{
        $edad = 0;
    }
    // Do While
    $count = 1;
    do {
        echo "Tienes acceso al bar # $count <br>";
        $count++;
    } while ($edad >= 18 && $count <= 10);
    ?>
    
</body>
</html>
