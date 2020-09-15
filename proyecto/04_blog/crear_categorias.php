<?php 
require_once 'includes/cabecera.php';
require_once 'includes/lateral.php';
?>
<!--  CAJA PRINCIPAL -->
<div id="principal">
    <h1>Crear Categorias</h1>
    <p>
        Crea nuevas categorias para ampliar tu horizontes
    </p>
    <br>
   <!-- Muestra error de registro -->
    <?php if(isset($_SESSION['nueva_categoria'])):?>
        <div class='alerta alerta-exito'> 
            <?=$_SESSION['nueva_categoria'] ?> 
        </div>
        <?php elseif(isset($_SESSION['errores']['general'])): ?>
            <div class='alerta alerta-error'> 
                <?=$_SESSION['errores']['general'] ?> 
            </div>
    <?php endif; ?>
    <form action="guardar_categorias.php" method="POST">
        <label for="nombre">Nombre de nueva Categoria</label>
        <input type="text" name="nombre">
        <input type="submit" value="Guardar" >
    </form>
</div> <!--  fin principal -->
<?php require_once 'includes/pie.php';?>