<?php
require_once "../config/connection/connection.php";
$con = new conectar();
$conexion = $con->conexion();
$sqlHabitacionDisponible = "SELECT COUNT(pasaporte) total FROM cliente WHERE estado = 1 ";
$sqlHabitacionOcupada = "SELECT COUNT(ci) total FROM empleado WHERE estado = 1 ";
$sqlHabitacionReservada = "SELECT COUNT(codigo) total FROM producto WHERE estado = 1 ";

$resultadoDisponible = mysqli_query($conexion, $sqlHabitacionDisponible);
$resultadoOcupada = mysqli_query($conexion, $sqlHabitacionOcupada);
$resultadoReservada = mysqli_query($conexion, $sqlHabitacionReservada);

?>
<div class="col-md-3 cardDas">
    <h2 class="h2title ">Clientes</h2>
    <!--Aca va consulta sql para la cantidad de datos-->
    <span class="spantitle">
        <?php
        $ver = mysqli_fetch_assoc($resultadoDisponible);
        echo $ver['total'];
        ?>
    </span>
</div>
<div class="col-md-3 cardDas">
    <h2 class="h2title">Empleados</h2>
    <!--Aca va consulta sql para la cantidad de datos-->
    <span class="spantitle">
        <?php
        $ver2 = mysqli_fetch_assoc($resultadoOcupada);
        echo $ver2['total'];
        ?>
    </span>
</div>
<div class="col-md-3 cardDas">
    <h2 class="h2title">Productos</h2>
    <!--Aca va consulta sql para la cantidad de datos-->
    <span class="spantitle">
        <?php
        $ver3 = mysqli_fetch_assoc($resultadoReservada);
        echo $ver3['total'];
        ?>
    </span>
</div>