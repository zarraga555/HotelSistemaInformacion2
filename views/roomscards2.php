<?php
require_once "../config/connection/connection.php";
$con = new conectar();
$conexion = $con->conexion();
$sqlHabitacionDisponible = "SELECT COUNT(estadohabitacion) total FROM habitacion WHERE estado = 1 AND estadohabitacion = 'Disponible'";
$sqlHabitacionOcupada = "SELECT COUNT(estadohabitacion) total FROM habitacion WHERE estado = 1 AND estadohabitacion = 'Ocupado'";
$sqlHabitacionReservada = "SELECT COUNT(estadohabitacion) total FROM habitacion WHERE estado = 1 AND estadohabitacion = 'Reservado'";

$resultadoDisponible = mysqli_query($conexion, $sqlHabitacionDisponible);
$resultadoOcupada = mysqli_query($conexion, $sqlHabitacionOcupada);
$resultadoReservada = mysqli_query($conexion, $sqlHabitacionReservada);

?>
<div class="col-md-3 cardDas">
    <h2 class="h2title ">Habitaciones Disponibles</h2>
    <!--Aca va consulta sql para la cantidad de datos-->
    <span class="spantitle">
        <?php
        $ver = mysqli_fetch_assoc($resultadoDisponible);
        echo $ver['total'];
        ?>
    </span>
</div>
<div class="col-md-3 cardDas">
    <h2 class="h2title">Habitaciones Ocupadas</h2>
    <!--Aca va consulta sql para la cantidad de datos-->
    <span class="spantitle">
        <?php
        $ver2 = mysqli_fetch_assoc($resultadoOcupada);
        echo $ver2['total'];
        ?>
    </span>
</div>
<div class="col-md-3 cardDas">
    <h2 class="h2title">Habitaciones Reservadas</h2>
    <!--Aca va consulta sql para la cantidad de datos-->
    <span class="spantitle">
        <?php
        $ver3 = mysqli_fetch_assoc($resultadoReservada);
        echo $ver3['total'];
        ?>
    </span>
</div>