<?php
    session_start();
    $salir=$_POST['txtSalir'];
    if(isset($salir)){
        session_destroy();
        header('location:../index.php');
    }
?>