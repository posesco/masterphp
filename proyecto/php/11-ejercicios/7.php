<!-- Mostrar todos los numeros impares contenidos en un rango de numeros dados por GET -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rangoschimbitas.com</title>
</head>
<body>
    <h1>Descubre rangos</h1>
    <form action="" method="get">
        <label for="">Ingrese el primer numero</label>
        <input type="number" name="first"><br>
        <label for="">Ingrese el segundo numero</label>
        <input type="number" name="last"><br>
        <input type="submit" value="Mostrar rango...">
    </form>
    <hr>
    <strong>Los numeros impares del rango dado es: </strong><br>
    <?php
    $first = (int) $_GET['first'];
    $last = (int) $_GET['last'];
    $resultado = 0;
    if ($first>$last) {
        echo "Sea serio .|. estoy arrancando por ahora solo hacia adelante";
    }else{
        for ($i=$first; $i <=$last; $i++) {
            $resultado = $i % 2;
            if ($last>=1000) {
                echo 'Manda Guevo que numero tan grande yo no hago eso';
            break;
            }elseif ($resultado <> 0) {
                echo $i.'-';
            }
        }
    }
    ?>
</body>
</html> 