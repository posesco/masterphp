<?php

// Crear cookie
// setcookie('nombre','valor que solo sera texto', caducidad, ruta, dominio);
// Cookie basica
setcookie('micookie', 'valor de mi galleta');
// Cookie con expiracion 
setcookie('unyear', 'valor de mi cookie 365 dias', time()+(60*60*24*365));

header('Location:see-cookies.php');
?>