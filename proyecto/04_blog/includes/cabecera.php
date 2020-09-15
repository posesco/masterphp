<?php 
require_once 'conexion.php';
require_once 'helpers.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Curso PHP :: Video Juegos</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
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
                <?php 
                    // el parametro db viene de conexion.php
                    $categorias = conseguirCategorias($db);
                    while($categoria = mysqli_fetch_assoc($categorias)):
                ?>
                <li>
                    <a href="categoria.php?id<?=$categoria['id']?>"><?=$categoria['nombre']?></a>
                </li>
                <?php endwhile; ?>
                <li>
                    <a href="aboutme.php">Sobre mi</a>
                </li>
                <li>
                    <a href="contact.php">Contactos</a>
                </li>
            </ul>
        </nav>
        <div class="clearfix"></div>
        </header>
        <div id="contenedor">