<?php 
require_once 'includes/cabecera.php';
require_once 'includes/lateral.php';
?>
</div>
<!--  CAJA PRINCIPAL -->
<div id="principal">
    <h1>Ultimas entradas</h1>
    <?php 
        // el parametro db viene de conexion.php
        $entradas = conseguirUltimasEntradas($db);
        if (!empty($entradas)):
            while($entrada = mysqli_fetch_assoc($entradas)):
        ?>
                <article class="entrada">
                    <a href="entrada.php?id<?=$entrada['id']?>">
                        <h2><?=$entrada['titulo']?></h2>
                        <p><?=$entrada['descripcion']?></p>
                    </a>
                </article>
    <?php 
            endwhile;
        endif;    
    ?>
    <div id="ver-todas">
        <a href="">Ver todas las entradas</a>
    </div> <!--  fin principal -->
<?php require_once 'includes/pie.php';?>