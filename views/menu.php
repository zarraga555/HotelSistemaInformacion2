<div class="slid">
    <img src="img/favicon-96x96.png" alt="">
    <nav class="navegacion">
        <ul class="sidebar">


            <?php
            if ($_SESSION['usuario'] == "Administrador") {
            ?>


                <li><a href="dashboard.php"><i class="fas fa-home"></i>Dashboard</a></li>
                <li><a href="checkin.php"><i class="fas fa-user"></i>Check-in</a></li>
                <li><a href="checkout.php"><i class="fas fa-walking"></i>Check-Out</a></li>
                <li><a href="employees.php"><i class="fas fa-address-card"></i>Empleados</a></li>
                <li><a href="clients.php"><i class="fas fa-restroom"></i>Clientes</a></li>
                <li><a href="rooms.php"><i class="fas fa-hotel"></i>Habitaciones</a></li>
                <li><a href="products.php"><i class="fas fa-boxes"></i>Productos</a></li>
                <li><a href="suppliers.php"><i class="fas fa-pallet"></i>Proveedores</a></li>
                <li><a href="reports.php"><i class="fas fa-file-chart-pie"></i>Reportes</a></li>
                <li><span> <i class="fas fa-parachute-box"></i>Otros Servicios</span>
                    <ul class="submenu">
                        <li><a href="employeesDelete.php"><i class="fas fa-address-card"></i>Empleados Eliminados</a></li>
                        <li><a href="clientsDelete.php"><i class="fas fa-restroom"></i>Clientes Eliminados</a></li>
                        <li><a href="roomsDelete.php"><i class="fas fa-hotel"></i>Habitaciones Eliminados</a></li>
                        <li><a href="roomsPisoyTipo.php"><i class="fas fa-hotel"></i>Agregar Pisos y Tipos </a></li>
                        <li><a href="productsDelete.php"><i class="fas fa-boxes"></i>Productos Eliminados</a></li>
                        <li><a href="suppliersDelete.php"><i class="fas fa-pallet"></i>Proveedores Eliminados</a></li>
                    </ul>
                </li>
                <?php } else {
                if ($_SESSION['usuario'] == "Recepcionista") {
                ?>
                    <li><a href="dashboard.php"><i class="fas fa-home"></i>Dashboard</a></li>
                    <li><a href="checkin.php"><i class="fas fa-user"></i>Check-in</a></li>
                    <li><a href="checkout.php"><i class="fas fa-walking"></i>Check-Out</a></li>
                    <li><a href="roomReceptionist.php"><i class="fas fa-hotel"></i>Habitaciones</a></li>
                <?php } else 
                    if($_SESSION['usuario'] == "Gerente Recepcion"){ 
                    ?>
                    <li><a href="dashboard.php"><i class="fas fa-home"></i>Dashboard</a></li>
                    <li><a href="checkin.php"><i class="fas fa-user"></i>Check-in</a></li>
                    <li><a href="checkout.php"><i class="fas fa-walking"></i>Check-Out</a></li>
                    <li><a href="employees.php"><i class="fas fa-address-card"></i>Empleados</a></li>
                    <li><a href="clients.php"><i class="fas fa-restroom"></i>Clientes</a></li>
                    <li><a href="rooms.php"><i class="fas fa-hotel"></i>Habitaciones</a></li>
                    <li><a href="reports.php"><i class="fas fa-file-chart-pie"></i>Reportes</a></li>
                    <?php }?>
            <?php } ?>
        </ul>
    </nav>

</div>
<div class="main_content">
    <nav class="header">
        <ul class="navTop">
            <li><span><?php
                        echo " $_SESSION[rol]";
                        ?></span></li>
            <div class="separador"></div>
            <li>
                <form method="post" action="../controller/exit.php">
                    <button name="txtSalir" class="btn btn-primary btn-user btn-block">Cerrar Sesion</button>
                </form>
            </li>
        </ul>
    </nav>