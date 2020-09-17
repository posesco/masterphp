<?php 
require_once 'includes/redireccion.php';
require_once 'includes/cabecera.php';
require_once 'includes/lateral.php';
?>
<!--  CAJA PRINCIPAL -->
<div id="principal">
    <!-- Muestra error de registro -->
    <?php if(isset($_SESSION['completado'])):?>
    <div class='alerta alerta-exito'> 
        <?=$_SESSION['completado'] ?> 
    </div>
    <?php elseif(isset($_SESSION['errores']['general'])): ?>
        <div class='alerta alerta-error'> 
            <?=$_SESSION['errores']['general'] ?> 
        </div>
    <?php endif; ?>
    <h1>Crear Entradas</h1>
    <p>
        Crea tus entradas para el blog
    </p>
    <br>
   <!-- Muestra error de registro -->
    <form action="guardar_entradas.php" method="POST">
        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'titulo'): '';?>
        <label for="titulo">Titulo de la Entrada</label>
        <input type="text" name="titulo">
        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'categoria'): '';?>
        <label for="categoria">Escoge tu categoria</label>
        <select name="categoria">
            <option value=""></option>
            <?php 
        // el parametro db viene de conexion.php
        $categorias = conseguirCategorias($db);
        while($categoria = mysqli_fetch_assoc($categorias)):
            ?>
            <option value="<?=$categoria['id']?>"><?=$categoria['nombre']?></option>
            <?php endwhile; ?>
        </select>
        <br>
        <br>
        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'descripcion'): '';?>
        <label for="descripcion">Cuerpo de la entrada</label>
        <textarea name="descripcion" placeholder="Escribe tu entrada" cols="30" rows="5"></textarea>
        <input type="submit" value="Crear entrada" >
    </form>
    <?php borrarErrores();?>
</div> <!--  fin principal -->
<?php require_once 'includes/pie.php';?>