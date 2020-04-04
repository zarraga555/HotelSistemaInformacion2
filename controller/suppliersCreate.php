<?php
        session_start();
        require_once "../config/connection/connection.php";
        require_once "../model/Proveedor.php";
    
        $nit = $_POST['nit'];
        $nombres = $_POST['nombre'];
        $direccion = $_POST['direccion'];
        $departamento = $_POST['departamentoSelecionar'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['email'];
        $fecha = $_POST['fechaIngreso'];
        $status = 1;
    
        $obj = new proveedores();
        $datos = array($nit, $nombres, $direccion , $departamento, $telefono, $correo, $fecha, $status);
    
        $obj->AgregarProveedor($datos);
?>