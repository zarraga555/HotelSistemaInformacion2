<?php
    session_start();
    require_once "../config/connection/connection.php";
    require_once "../model/Empleados.php";

    $ci = $_POST['ci'];
    $nombres = $_POST['nombre'];
    $sexo = $_POST['sexoSelecionar'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['email'];
    $fecha = $_POST['fechaNacimiento'];
    $nacionalidad = $_POST['nacionalidadSelect'];
    $salario = $_POST['salario'];
    $status = 1;

    $obj = new empleados();
    $datos = array($ci, $nombres, $sexo, $telefono, $correo, $fecha, $nacionalidad, $salario, $status);

    $obj->AgregarEmpleado($datos);

?>