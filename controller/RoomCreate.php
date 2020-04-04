<?php
        session_start();
        require_once "../config/connection/connection.php";
        require_once "../model/Habitacion.php";
    
        // $nit = $_POST['nit'];
        $piso = $_POST['pisoSeleccionar'];
        $habitacion = $_POST['numeroHabitacion'];
        $tipo = $_POST['tipoSeleccionar'];
        $cantidad = $_POST['cantidad'];
        $precio =$_POST['precio'];
        $descripcion = $_POST['descripcion'];
        $status = 1;
    
        $obj = new habitaciones();
        $datos = array($piso, $habitacion , $tipo, $cantidad, $precio ,$descripcion, $status);
    
        $obj->AgregarHabitacion($datos);
?>