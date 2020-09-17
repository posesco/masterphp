<?php 
require_once 'includes/redireccion.php';
require_once 'includes/cabecera.php';
require_once 'includes/lateral.php';
?>
<!--  CAJA PRINCIPAL -->
<div id="principal">
    <h1>Mis datos</h1>
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
        <form action="actulizar_usuario.php" method="POST">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="" value="<?=$_SESSION['usuario']['nombre']?>">
            <!-- Se hace una comprobacion ternaria para evitar errores en caso de sesion terminada -->
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre'): '';?>
            
            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos" id="" value="<?=$_SESSION['usuario']['apellido']?>">
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellidos'): '';?>
            
            <label for="correo">Email</label>
            <input type="email" name="correo" id="" value="<?=$_SESSION['usuario']['email']?>">
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'correo'): '';?>
            
            <input type="submit" name="submit" value="Actualizar Datos">
        </form>
        <?php borrarErrores();?>
</div> <!--  fin principal -->
<?php require_once 'includes/pie.php';?>