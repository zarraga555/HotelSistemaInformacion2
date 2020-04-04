<?php
    session_start();
    require_once "../config/connection/connection.php";
    require_once "../model/Proveedor.php";



    $nit = $_POST['editarCi'];
    $nombres = $_POST['editarNombre'];
    $direccion = $_POST['Editardireccion'];
    $departamento = $_POST['Editardepartamento'];
    $telefono = $_POST['editarTelefono'];
    $correo = $_POST['EditarEmail'];
    $fecha = $_POST['EditarFechaIngreso'];

    $obj = new proveedores();
    $datos = array($nit, $nombres, $direccion , $departamento, $telefono, $correo, $fecha);

    $obj->EditarProveedor($datos);
?>