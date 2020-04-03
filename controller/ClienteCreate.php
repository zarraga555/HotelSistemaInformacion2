<?php
        session_start();
        require_once "../config/connection/connection.php";
        require_once "../model/Cliente.php";
    
        $pasaporte = $_POST['pasaporte'];
        $nombres = $_POST['nombre'];
        $sexo = $_POST['sexoSelecionar'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['email'];
        $fecha = $_POST['fechaNacimiento'];
        $nacionalidad = $_POST['nacionalidadSelect'];
        $status = 1;
    
        $obj = new clientes();
        $datos = array($pasaporte, $nombres, $sexo, $telefono, $correo, $fecha, $nacionalidad, $status);
    
        $obj->AgregarCliente($datos);
?>