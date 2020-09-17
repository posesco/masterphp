<?php 
require_once 'includes/redireccion.php';
require_once 'includes/cabecera.php';
require_once 'includes/lateral.php'; 
?>
		
<!-- CAJA PRINCIPAL -->
<div id="principal">
        <ul> 
            <h1>Esto me esta tomando mucho tiempo paso a otra cosa</h1>
                <?php 
                // el parametro db viene de conexion.php
                $mis_entradas = conseguirEntrada($db, null, $_SESSION['usuario']['id']);
                $entrada = mysqli_fetch_assoc($mis_entradas);
                var_dump($entrada);
                die();
                if (!empty($mis_entradas)):
                    while($entrada = mysqli_fetch_assoc($mis_entradas)):
                ?>
                    <li>
                        <a href="entrada.php?id=<?=$mi_entrada['id']?>">
                            <h2><?=$mi_entrada['titulo']?></h2>
                        </a>
                    </li>
                <?php 
                endwhile;
                endif;    
                ?>
                    
            
        </ul>
</div> <!--fin principal-->
			
<?php require_once 'includes/pie.php'; ?>