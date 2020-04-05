<?php
    session_start();
    require_once "../config/connection/connection.php";
    require_once "../model/Producto.php";

    $EliminarCi = $_POST['EliminarCi'];

    $obj = new productos();
    $eliminar = array($EliminarCi);

    $obj->RestaurarProducto($eliminar);

?>