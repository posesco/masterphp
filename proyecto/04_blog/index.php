<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Curso PHP :: Video Juegos</title>
</head>
    <body>
        <!-- CABECERA -->
        <header>
            <!-- LOGO -->
            <div id='logo'>
                <a href="index.php">
                    Blog de Video Juegos
                </a>
            </div>
        <!-- MENU -->
        <nav id="nav">
            <ul>
                <li>
                    <a href="index.php">Inicio</a>
                </li>
                <li>
                    <a href="index.php">Categoria 1</a>
                </li>
                <li>
                    <a href="index.php">Categoria 2</a>
                </li>
                <li>
                    <a href="index.php">Categoria 3</a>
                </li>
                <li>
                    <a href="index.php">Categoria 4</a>
                </li>
                <li>
                    <a href="aboutme.php">Sobre mi</a>
                </li>
                <li>
                    <a href="contact.php">Contactos</a>
                </li>
            </ul>
        </nav>
        </header>
        <div id="container">
            <!-- SIDEBAR >> BARRA LATERAL -->
            <aside id="sidebar">
                <div id="login" class="block-aside">
                    <h3>Identificate</h3>
                    <form action="login.php" method="POST">
                        <label for="mail">Email</label>
                        <input type="email" name="mail" id="" >
                        <label for="pass">Contraseña</label>
                        <input type="password" name="pass" id="" >
                        <input type="submit" value="Entrar">
                    </form>
                </div>
                <div id="register" class="block-aside">
                    <h3>Registrate</h3>
                    <form action="register.php" method="POST">
                        <label for="name">Nombre</label>
                        <input type="text" name="name" id="" >
                        <label for="lname">Apellidos</label>
                        <input type="email" name="lname" id="" >
                        <label for="mail">Email</label>
                        <input type="email" name="mail" id="" >
                        <label for="pass">Contraseña</label>
                        <input type="password" name="pass" id="" >
                        <input type="submit" value="Registrar">
                    </form>
                </div>
            </aside>
        </div>
        <!--  CAJA PRINCIPAL -->
        <div id="principal">
            <h1>Ultimas entradas</h1>
            <article class="entrada">
                
            </article>
        </div>
    </body>
</html>