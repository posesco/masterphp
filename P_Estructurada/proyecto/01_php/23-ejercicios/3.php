<!-- Calculador con una interfaz de usuario(formulario) -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP Chimbita</title>
</head>
    <body>
        <h1>Calculadora PHP Chimbita</h1>
        <form action="" method="POST">
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
                        <input type="submit" value="+" name="operador">
                        <input type="submit" value="-" name="operador">
                        <input type="submit" value="*" name="operador">
                        <input type="submit" value="/" name="operador">
                        </td>
                </tr>
                <tr>
                    <td>
                        <strong>El Resultado es:</strong>
                    </td>
                    <td COLSPAN="2">
                        <?php
                        // Aqui se ejecutaran las operaciones del datos recibidos por POST
                        $operacion = $_POST['operador'];
                        $numero1 = (int) $_POST['numero1'];
                        $numero2 = (int) $_POST['numero2'];
                        switch ($operacion) {
                            case '+':
                            echo ($numero1+$numero2);
                            break;
                            case '-':
                            echo ($numero1-$numero2);
                            break;
                            case '*':
                            echo ($numero1*$numero2);
                            break;
                            case '/':
                            echo ($numero1/$numero2);
                            break;
                            default:
                            echo 'Selecciona una operacion valida';
                            break;
                        }
                        ?>   
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>