<?php
        session_start();
        require_once "../config/connection/connection.php";
        require_once "../model/Producto.php";
    
        $codigo = $_POST['editarCodigo'];
        $nombres = $_POST['editarNombre'];
        $proveedor = $_POST['Editarproveedor'];
        $compra = $_POST['Editarcompra'];
        $venta = $_POST['editarventa'];
        $cantidad = $_POST['Editarcantidad'];
        $fecha = $_POST['EditarFechaVencimineto'];
    
        $obj = new productos();
        $datos = array($codigo, $nombres, $proveedor , $compra, $venta, $cantidad, $fecha);
    
        $obj->EditarProducto($datos);
?>