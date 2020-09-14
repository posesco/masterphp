<?php require_once 'helpers.php';?>
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
                    <form action="registro.php" method="POST">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" id="" >
                        <!-- Se hace una comprobacion ternaria para evitar errores en caso de sesion terminada -->
                        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre'): '';?>
                        
                        <label for="apellidos">Apellidos</label>
                        <input type="text" name="apellidos" id="" >
                        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellidos'): '';?>
                        
                        <label for="correo">Email</label>
                        <input type="email" name="correo" id="" >
                        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'correo'): '';?>
                        
                        <label for="password">Contraseña</label>
                        <input type="password" name="password" id="" >
                        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'password'): '';?>
                        
                        <input type="submit" name="submit" value="Registrar">
                    </form>
                    <?php borrarErrores();?>

                </div>
            </aside>