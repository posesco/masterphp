<?php 
require_once 'includes/redireccion.php';
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
    <form action="guardar_categorias.php" method="POST">
        <label for="nombre">Nombre de nueva Categoria</label>
        <br>
        <input type="text" name="nombre">
        <input type="submit" value="Guardar" >
    </form>
    <?php if(isset($_SESSION['error'])):?>
        <div class='alerta alerta-error'> 
            <?=$_SESSION['error'] ?> 
        </div>
    <?php endif; ?>
    <?php if(isset($_SESSION['exito'])): ?>
        <div class='alerta alerta-exito'> 
            <?=$_SESSION['exito']; ?> 
        </div>
    <?php endif; ?>
    <?php 
    unset($_SESSION['error']);
    unset($_SESSION['exito']);
    ?>
</div> <!--  fin principal -->
<?php require_once 'includes/pie.php';?>