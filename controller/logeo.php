<?php
    session_start();
    require_once "../config/connection/connection.php";
    require_once "../model/Usuarios.php";

    $obj = new usuarios();
    $datos = array ($_POST['txtusuario'], $_POST['txtpassword']);

    $obj->loginUser($datos);

    
?>