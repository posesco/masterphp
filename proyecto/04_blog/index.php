<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Curso PHP :: Video Juegos</title>
</head>
    <body>
        <!-- CABECERA -->
        <header id="cabecera">
            <!-- LOGO -->
            <div id='logo'>
                <a href="index.php">
                    Blog de Video Juegos
                </a>
            </div>
        <!-- MENU -->
        <nav id="menu">
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
        <div id="contenedor">
            <!-- SIDEBAR >> BARRA LATERAL -->
            <aside id="sidebar">
                <div id="login" class="bloque">
                    <h3>Identificate</h3>
                    <form action="login.php" method="POST">
                        <label for="mail">Email</label>
                        <input type="email" name="mail" id="" >
                        <label for="pass">Contraseña</label>
                        <input type="password" name="pass" id="" >
                        <input type="submit" value="Entrar">
                    </form>
                </div>
                <div id="register" class="bloque">
                    <h3>Registrate</h3>
                    <form action="register.php" method="POST">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" id="" >
                        <label for="apellidos">Apellidos</label>
                        <input type="email" name="apellidos" id="" >
                        <label for="correo">Email</label>
                        <input type="email" name="correo" id="" >
                        <label for="password">Contraseña</label>
                        <input type="password" name="password" id="" >
                        <input type="submit" value="Registrar">
                    </form>
                </div>
            </aside>
        </div>
        <!--  CAJA PRINCIPAL -->
        <div id="principal">
            <h1>Ultimas entradas</h1>
            <article class="entrada">
                <h2>Titulo de mi entrada</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur 
                maiores, quibusdam error, assumenda id nisi repellat cupiditate ratione modi quo vitae delectus asperiores esse? Iure sunt tempore hic ex necessitatibus.
                </p>
            </article>
            <article class="entrada">
                <h2>Titulo de mi entrada</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur 
                maiores, quibusdam error, assumenda id nisi repellat cupiditate ratione modi quo vitae delectus asperiores esse? Iure sunt tempore hic ex necessitatibus.
                </p>
            </article>
            <article class="entrada">
                <h2>Titulo de mi entrada</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur 
                maiores, quibusdam error, assumenda id nisi repellat cupiditate ratione modi quo vitae delectus asperiores esse? Iure sunt tempore hic ex necessitatibus.
                </p>
            </article>
            <article class="entrada">
                <h2>Titulo de mi entrada</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur 
                maiores, quibusdam error, assumenda id nisi repellat cupiditate ratione modi quo vitae delectus asperiores esse? Iure sunt tempore hic ex necessitatibus.
                </p>
            </article>
        </div>
        <!-- PIE DE PAGINA  -->
        <footer id="pie">
            <p>Desarrollado por Victor Robles &copy; 2020</p>
        </footer>
    </body>
</html>