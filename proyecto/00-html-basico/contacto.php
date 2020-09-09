<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi segunda Web</title>
</head>
<body>
    <!-- Encabezado -->
    <h1>Mi segunda web</h1>
    <!-- Menu -->
    <ul>
        <li><a href="index.php" title="Inicio">Inicio</a></li>
        <li><a href="contenidos.php" title="Contenidos">Contenido</a></li>
        <li><a href="contacto.php" title="Contacto">Contacto</a> </li>
    </ul>
    <hr/>
    <!-- Contenido de contactos.html -->
    <h2>Formulario de Contacto</h2>
    <form>
        <p>
            <label for="nombre">Nombre</label><br>
            <input type="text" name="nombre" placeholder="Cual es tu nombre"/>
        </p>
        <p>
            <label for="biografia">Biografia</label><br>
            <textarea name="biografia" placeholder="Escribe tu biografia"></textarea>
        </p>
        <p>
            <label for="edad">Edad</label><br>
            <select name="edad">
                <option value="mayor">Mayor de Edad</option>
                <option value="adulto">Adulto</option>
                <option value="65">Mayor de 65 años</option>
            </select>
        </p>
        <p>
            <button type="submit" class="btn btn-primary">Enviar formulario</button>
        </p>
    </form>
    <p>
     
    </p>
</body>
</html>