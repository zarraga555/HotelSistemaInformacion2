<?php

session_start();
if (isset($_SESSION['usuario'])) {

?>

    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Hotel - Dashboard</title>
        <link rel="icon" href="../img/favicon.ico" type="image/png">

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-xVVam1KS4+Qt2OrFa+VdRUoXygyKIuNWUUUBZYv+n27STsJ7oDOHJgfF0bNKLMJF" crossorigin="anonymous">
        <link href="../css/estilos.css" rel="stylesheet">

    </head>

    <body>



        <div class="wrapper">
            <div class="slid">
                <img src="img/favicon-96x96.png" alt="">
                <nav class="navegacion">
                    <ul class="sidebar">

                        <li><a href="dashboard.php"><i class="fas fa-home"></i>Dashboard</a></li>
                        <li><a href="checkin.php"><i class="fas fa-user"></i>Check-in</a></li>
                        <li><a href="checkout.php"><i class="fas fa-walking"></i>Check-Out</a></li>
                        <li><a href="employees.php"><i class="fas fa-address-card"></i>Empleados</a></li>
                        <li><a href="clients.php"><i class="fas fa-restroom"></i>Clientes</a></li>
                        <li><a href="rooms.php"><i class="fas fa-hotel"></i>Habitaciones</a></li>
                        <li><a href="products.php"><i class="fas fa-boxes"></i>Productos</a></li>
                        <li><a href="suppliers.php"><i class="fas fa-pallet"></i>Proveedores</a></li>
                        <li><a href="reports.php"><i class="fas fa-file-chart-pie"></i>Reportes</a></li>
                        <li><a href=""><i class="fas fa-parachute-box"></i>Otros Servicios</a>
                            <ul class="submenu">
                                <li><a href=""><i class="fas fa-address-card"></i>Empleados Eliminados</a></li>
                                <li><a href=""><i class="fas fa-restroom"></i>Clientes Eliminados</a></li>
                                <li><a href=""><i class="fas fa-hotel"></i>Habitaciones Eliminados</a></li>
                                <li><a href=""><i class="fas fa-hotel"></i>Agregar Pisos y Tipos </a></li>
                                <li><a href=""><i class="fas fa-boxes"></i>Productos Eliminados</a></li>
                                <li><a href=""><i class="fas fa-pallet"></i>Proveedores Eliminados</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>

            </div>
            <div class="main_content">
                <nav class="header">
                    <ul class="navTop">
                        <li><span><?php
                                    echo " $_SESSION[usuario]";
                                    ?></span></li>
                        <div class="separador"></div>
                        <li>
                            <form method="post" action="../controller/exit.php">
                                <button name="txtSalir" class="btn btn-primary btn-user btn-block">Cerrar Sesion</button>
                            </form>
                        </li>
                    </ul>
                </nav>
                <!--Esta etiqueta es posible que me la lleve a otro lado-->
                <div class="info cointainer justify-content-center">
                    <div class="row justify-content-center">
                        <div class="col-md-3 cardDas">
                            <h2 class="h2title ">Habitaciones Disponibles</h2>
                            <!--Aca va consulta sql para la cantidad de datos-->
                            <span class="spantitle">0</span>
                        </div>
                        <div class="col-md-3 cardDas">
                            <h2 class="h2title">Habitaciones Ocupadas</h2>
                            <!--Aca va consulta sql para la cantidad de datos-->
                            <span class="spantitle">0</span>
                        </div>
                        <div class="col-md-3 cardDas">
                            <h2 class="h2title">Habitaciones Reservadas</h2>
                            <!--Aca va consulta sql para la cantidad de datos-->
                            <span class="spantitle">0</span>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-3 cardDas">
                            <h2 class="h2title">Clientes</h2>
                            <!--Aca va consulta sql para la cantidad de datos-->
                            <span class="spantitle">0</span>
                        </div>
                        <div class="col-md-3 cardDas">
                            <h2 class="h2title">Empleados</h2>
                            <!--Aca va consulta sql para la cantidad de datos-->
                            <span class="spantitle">0</span>
                        </div>
                        <div class="col-md-3 cardDas">
                            <h2 class="h2title">Productos</h2>
                            <!--Aca va consulta sql para la cantidad de datos-->
                            <span class="spantitle">0</span>
                        </div>
                    </div>

                </div>
                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Hotel San Marino 2020</span>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>

    </html>

<?php
} else {
    header('location:../index.php');
}
?>