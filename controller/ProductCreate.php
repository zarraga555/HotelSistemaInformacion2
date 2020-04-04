<?php
        session_start();
        require_once "../config/connection/connection.php";
        require_once "../model/Producto.php";
    
        // $nit = $_POST['nit'];
        $nombres = $_POST['nombre'];
        $proveedor = $_POST['proveedorSeleccionar'];
        $compra = $_POST['compra'];
        $venta = $_POST['venta'];
        $cantidad = $_POST['cantidad'];
        $fecha = $_POST['fechaVencimiento'];
        $status = 1;
    
        $obj = new productos();
        $datos = array($nombres, $proveedor , $compra, $venta, $cantidad, $fecha, $status);
    
        $obj->AgregarProducto($datos);
?>