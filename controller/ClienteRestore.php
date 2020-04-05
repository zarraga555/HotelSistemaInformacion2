<?php
    session_start();
    require_once "../config/connection/connection.php";
    require_once "../model/Cliente.php";

    $EliminarCi = $_POST['RestaurarCi'];

    $obj = new clientes();
    $eliminar = array($EliminarCi);

    $obj->RestaurarCliente($eliminar);

?>