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
                    <a href=""><h2><?=$entrada['titulo']?></h2></a>
                        <span class="fecha"><?=$entrada['categoria'].' | '.$entrada['fecha']?></span>
                        <p><?=$entrada['descripcion']?></p>
                </article>
    <?php 
            endwhile;
        endif;    
    ?>
    <div id="ver-todas">
        <a href="">Ver todas las entradas</a>
    </div> <!--  fin principal -->
<?php require_once 'includes/pie.php';?>