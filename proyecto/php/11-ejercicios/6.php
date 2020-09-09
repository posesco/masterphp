<!-- Todas las tablas de multiplicar de 1 al 10 y mostrarlas en una tabla html -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablas de Multiplicar</title>
</head>
<body>
<?php
// Se crea funcion que recibe el digito a multiplicar
function multiplicar($digito){
    for ($i=1; $i <= 10 ; $i++) {
        echo $digito.' X '.$i.' = '.$i*$digito.'<br>';
    }
}
?>
<h1>Tablas de multiplicar 1 al 10</h1>
    <table border="1"> 
    <tr>
        <th> Tabla del 1 </th>
        <th> Tabla del 2 </th>
        <th> Tabla del 3 </th>
        <th> Tabla del 4 </th>
        <th> Tabla del 5 </th>
    </tr>
    <tr>
        <td>
        <center><?php multiplicar(1); ?></center>
        </td>
        <td>
        <center><?php multiplicar(2); ?></center>
        </td>
        <td>
        <center><?php multiplicar(3); ?></center>
        </td>
        <td>
        <center><?php multiplicar(4); ?></center>
        </td>
        <td>
        <center><?php multiplicar(5); ?></center>
        </td>
    </tr>
    <tr>
        <th> Tabla del 6 </th>
        <th> Tabla del 7 </th>
        <th> Tabla del 8 </th>
        <th> Tabla del 9 </th>
        <th> Tabla del 10 </th>
    </tr>
    <tr>
        <td>
        <center><?php multiplicar(6); ?></center>
        </td>
        <td>
        <center><?php multiplicar(7); ?></center>
        </td>
        <td>
        <center><?php multiplicar(8); ?></center>
        </td>
        <td>
        <center><?php multiplicar(9); ?></center>
        </td>
        <td>
        <center><?php multiplicar(10); ?></center>
        </td>
    </tr>
    </table>
</body>
</html>