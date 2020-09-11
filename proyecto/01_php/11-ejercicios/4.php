<!-- Recoger 2 numeros por GET y hacer todas las operaciones basicas 
de una calculadora + - * /  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Basica HTML-PHP</title>
</head>
<body>
    <!-- Se crea el formulario que recogera los datos -->
    <form method="get">
        <table border="1">
            <tr>
                <th>Numero 1</th>
                <th>Numero 2</th>
                <th>Operación</th>
            </tr>
            <tr>
                <td>
                    <input type="number" name="numero1">
                </td>
                <td>
                    <input type="number" name="numero2">
                </td>
                <td>
                    <select name="operacion">
                        <option value='+'>Suma</option>
                        <option value='-'>Resta</option>
                        <option value='*'>Multiplicacion</option>
                        <option value='/'>Division</option>
                    </select>
                </td>
            </tr>
            <tr>
                <input type="submit" value="Calcular Resultado">
            </tr>
        </table>
    </form>
    <?php
    // Aqui se ejecutaran las operaciones del datos recibidos por GET
    $operacion = $_GET['operacion'];
    $numero1 = (int) $_GET['numero1'];
    $numero2 = (int) $_GET['numero2'];
switch ($operacion) {
    case '+':
        echo 'El resultado de la operacion es:'.($numero1+$numero2);
        break;
    case '-':
        echo 'El resultado de la operacion es:'.($numero1-$numero2);
        break;
    case '*':
        echo 'El resultado de la operacion es:'.($numero1*$numero2);
        break;
    case '/':
        echo 'El resultado de la operacion es:'.($numero1/$numero2);
        break;
    default:
        echo 'Selecciona una operacion valida';
        break;
}

    ?>
</body>
</html>

<?php
?>