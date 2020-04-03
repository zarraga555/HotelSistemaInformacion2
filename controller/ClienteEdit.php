<?php
    session_start();
    require_once "../config/connection/connection.php";
    require_once "../model/Cliente.php";



    $Editarci = $_POST['editarCi'];
    $Editarnombres = $_POST['editarNombre'];
    $Editarsexo = $_POST['Editarsexo'];
    $Editartelefono = $_POST['editarTelefono'];
    $Editarcorreo = $_POST['EditarEmail'];
    $Editarfecha = $_POST['EditarFechaNacimiento'];
    $Editarnacionalidad = $_POST['Editarnacionalidad'];

    $obj = new clientes();
    $editar = array($Editarci, $Editarnombres, $Editarsexo, $Editartelefono, $Editarcorreo, $Editarfecha, $Editarnacionalidad);

    $obj->EditarCliente($editar);
?>