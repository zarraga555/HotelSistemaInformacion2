<?php 
        session_start();
        require_once "../config/connection/connection.php";
        require_once "../model/Cliente.php";

        $obj = new clientes();

        $idcliente = $_POST['idusuario'];

        echo json_encode($obj->ObtenerDatosCliente($idcliente));
?>