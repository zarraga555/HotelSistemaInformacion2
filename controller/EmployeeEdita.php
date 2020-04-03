<?php
    session_start();
    require_once "../config/connection/connection.php";
    require_once "../model/Empleados.php";



    $Editarci = $_POST['editarCi'];
    $Editarnombres = $_POST['editarNombre'];
    $Editarsexo = $_POST['EditarsexoSelecionar'];
    $Editartelefono = $_POST['editarTelefono'];
    $Editarcorreo = $_POST['EditarEmail'];
    $Editarfecha = $_POST['EditarFechaNacimiento'];
    $Editarnacionalidad = $_POST['Editarnacionalidad'];
    $Editarsalario = $_POST['EditarSalario'];

    $obj = new empleados();
    $editar = array($Editarci, $Editarnombres, $Editarsexo, $Editartelefono, $Editarcorreo, $Editarfecha, $Editarnacionalidad, $Editarsalario);

    $obj->EditarEmpleado($editar);
?>