<?php 
require_once 'includes/conexion.php';
require_once 'includes/helpers.php';
$categoria_actual = conseguirCategoria($db, $_GET['id']);
if (!isset($categoria_actual['id'])) {
    header('Location:index.php');
}
require_once 'includes/cabecera.php';
require_once 'includes/lateral.php';
?>
</div>
<!--  CAJA PRINCIPAL -->
<div id="principal">
    <h1>Todas las entradas de la Categoria <?=$categoria_actual['nombre']?></h1>
    <?php 
        // el parametro db viene de conexion.php
        $entradas = conseguirEntradas($db,null,$_GET['id']);
        if (!empty($entradas)):
            while($entrada = mysqli_fetch_assoc($entradas)):
        ?>
                <article class="entrada">
                    <a href="entrada.php?id=<?=$entrada['id']?>"><h2><?=$entrada['titulo']?></h2></a>
                        <span class="fecha"><?='Autor: '.$entrada['autor'].' | '.$entrada['fecha']?></span>
                        <p><?=$entrada['descripcion']?></p>
                </article>
    <?php 
            endwhile;
        endif;    
    ?>
    </div> <!--  fin principal -->
<?php require_once 'includes/pie.php';?>