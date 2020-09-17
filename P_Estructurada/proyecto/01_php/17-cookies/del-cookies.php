<?php

if(isset($_COOKIE['micookie'])){
    setcookie('micookie','',time()-100);
}
header('Location:see-cookies.php');
?>
