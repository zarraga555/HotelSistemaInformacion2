<?php
        session_start();
        require_once "../config/connection/connection.php";
        require_once "../model/Habitacion.php";
    
        $codigo = $_POST['editarCodigo'];
        $piso = $_POST['Editarpiso'];
        $habitacion = $_POST['Editarhabitacion'];
        $tipo = $_POST['Editartipo'];
        $cantidad = $_POST['Editarcama'];
        $precio =$_POST['Editarpresio'];
        $descripcion = $_POST['Editardescripcion'];
    
        $obj = new habitaciones();
        $datos = array($codigo, $piso, $habitacion , $tipo, $cantidad, $precio ,$descripcion);
    
        $obj->EditarHabitacion($datos);
?>