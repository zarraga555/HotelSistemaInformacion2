<?php
    session_start();
    require_once "../config/connection/connection.php";
    require_once "../model/Empleados.php";

    $EliminarCi = $_POST['EliminarCi'];

    $obj = new empleados();
    $eliminar = array($EliminarCi);

    $obj->ElimadoLogico($eliminar);

?>