<?php
    session_start();
    require_once "../config/connection/connection.php";
    require_once "../model/Proveedor.php";

    $EliminarCi = $_POST['EliminarCi'];

    $obj = new proveedores();
    $eliminar = array($EliminarCi);

    $obj->RestaurarProveedor($eliminar);

?>