<!-- SIDEBAR >> BARRA LATERAL -->
<aside id="sidebar">
                <!-- Comprobacion de sesion abierta -->
                <?php if(isset($_SESSION['usuario'])): ?>
                    <div class="bloque">
                        <h3><?='Hola! '.$_SESSION['usuario']['nombre'].' '.$_SESSION['usuario']['apellido']; ?></h3>
                        <a href='crear_entradas.php'class='boton boton-verde'>Crear Entradas</a>
                        <a href='crear_categorias.php'class='boton boton'>Crear Categoria</a>
                        <a href='misdatos.php'class='boton boton-naranja'>Mis Datos</a>
                        <a href='cerrar.php'class='boton boton-rojo'>Logout</a>
                    </div>
                <?php endif; ?>
                <!-- Esto oculta los formularios si es que exite un sesion abierta         -->
                <?php if(!isset($_SESSION['usuario'])): ?>
                    <!-- INICIO - LOGIN -->
                    <div id="login" class="bloque">
                        <h3>Identificate</h3>
                        <?php if(isset($_SESSION['errores'])): ?>
                                <div class='alerta alerta-error'> 
                                    <?=$_SESSION['errores'] ?> 
                                </div>
                        <?php endif; ?>
                        <form action="login.php" method="POST">
                            <label for="correo">Email</label>
                            <input type="email" name="correo" id="" >
                            <label for="password">Contraseña</label>
                            <input type="password" name="password" id="" >
                            <input type="submit" value="Entrar">
                        </form>
                    </div>
                    <!-- FIN - LOGIN -->
                    <!-- INICIO - REGISTRO DE USUARIOS -->
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
                    <!-- FIN - REGISTRO DE USUARIOS -->
                <?php endif; ?>


            </aside>