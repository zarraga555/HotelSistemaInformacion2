<?php
    session_start();
    require_once "../config/connection/connection.php";
    require_once "../model/Habitacion.php";

    $EliminarCi = $_POST['EliminarCi'];

    $obj = new habitaciones();
    $eliminar = array($EliminarCi);

    $obj->ElimadoLogico($eliminar);

?>