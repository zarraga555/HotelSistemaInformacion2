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
        <?php
        require_once "../config/connection/connection.php";
        $con = new conectar();
        $prove = "SELECT codigo, nombre FROM tipohabitacion WHERE estado = 1";
        $prove2 = "SELECT codigo, nombre FROM tipohabitacion WHERE estado = 1";
        $habitacion = "SELECT codigo, piso FROM pisohabitacion WHERE estado = 1";
        $habitacion2 = "SELECT codigo, piso FROM pisohabitacion WHERE estado = 1";;
        $conexion = $con->conexion();
        $resultprove = mysqli_query($conexion, $prove);
        $resultprove2 = mysqli_query($conexion, $prove2);
        $resulthabitaion = mysqli_query($conexion, $habitacion);
        $resulthabitaion2 = mysqli_query($conexion, $habitacion2);
        ?>


        <div class="wrapper">
            <div class="slid">
                <img src="img/favicon-96x96.png" alt="">
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
                    <li><span> <i class="fas fa-parachute-box"></i>Otros Servicios</span>
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
                    <div class="title-container">
                        <h1>Habitaciones</h1>
                    </div>
                    <div class="buton-container">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary btn-user " data-toggle="modal" data-target="#exampleModal">
                            Agregar Habitacion
                        </button>

                        <!-- INICIO DE MODAL DE AGREGADO DE DATOS Modal Agregar datos-->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Nueva Habitacion</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="../controller/RoomCreate.php" method="post">
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="pisoSeleccionar">Piso de la Habitacion</label>
                                                <select class="form-control" name="pisoSeleccionar" required>
                                                    <option value="">Seleccionar Opcion</option>
                                                    <?php while ($verprove = mysqli_fetch_row($resulthabitaion)) : ?>
                                                        <option value="<?php echo $verprove[0] ?>"> <?php echo $verprove[1] ?> </option>
                                                    <?php endwhile; ?>
                                                </select>

                                            </div>
                                            <div class="form-group">
                                                <label for="numeroHabitacion">Numero de la Habitacion</label>
                                                <input type="number" class="form-control" name="numeroHabitacion" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="tipoSeleccionar">Tipo de la Habitacion</label>
                                                <select class="form-control" name="tipoSeleccionar" required>
                                                    <option value="">Seleccionar Opcion</option>
                                                    <?php while ($verprove2 = mysqli_fetch_row($resultprove)) : ?>
                                                        <option value="<?php echo $verprove2[0] ?>"> <?php echo $verprove2[1] ?> </option>
                                                    <?php endwhile; ?>
                                                </select>

                                            </div>
                                            <div class="form-group">
                                                <label for="cantidad">Cantidad de Camas</label>
                                                <input type="number" class="form-control" name="cantidad" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="precio">Precio de la Habitacion en Bs</label>
                                                <input type="number" class="form-control" name="precio" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="descripcion">Descripcion de la Habitacion</label>
                                                <textarea class="form-control" name="descripcion" rows="3"></textarea>
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger btn-danger" data-dismiss="modal">Cancelar</button>
                                            <button type="submit" class="btn btn-success btn-success" name="btnGuardar">Guardar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--FINAL DE MODAL DE AGREGADO -->



                    <!-- INICIO DE MODAL DE MOFICACION DE DATOS  Modal Modificar datos-->
                    <div class="modal fade" id="exampleModalM" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Editar Habitacion</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="../controller/RoomEdit.php" method="post">
                                    <div class="modal-body">

                                        <input type="hidden" class="form-control" name="editarCodigo" readonly id="editarCodigo">
                                       
                                        <div class="form-group">
                                                <label for="Editarpiso">Piso de la Habitacion</label>
                                                <select class="form-control" name="Editarpiso" id="Editarpiso" required>
                                                    <option value="">Seleccionar Opcion</option>
                                                    <?php while ($verprove3 = mysqli_fetch_row($resulthabitaion2)) : ?>
                                                        <option value="<?php echo $verprove3[0] ?>"> <?php echo $verprove3[1] ?> </option>
                                                    <?php endwhile; ?>
                                                </select>

                                            </div>
                                        <div class="form-group">
                                            <label for="Editarhabitacion">Numero de la Habitacion</label>
                                            <input type="text" class="form-control" name="Editarhabitacion" id="Editarhabitacion" required>
                                        </div>
                                        <div class="form-group">
                                                <label for="Editartipo">Tipo de la Habitacion en Bs</label>
                                                <select class="form-control" name="Editartipo" id="Editartipo" required>
                                                    <option value="">Seleccionar Opcion</option>
                                                    <?php while ($verprove4 = mysqli_fetch_row($resultprove2)) : ?>
                                                        <option value="<?php echo $verprove4[0] ?>"> <?php echo $verprove4[1] ?> </option>
                                                    <?php endwhile; ?>
                                                </select>

                                            </div>
                                            <div class="form-group">
                                                <label for="Editarcama">Cantidad de Camas</label>
                                                <input type="number" class="form-control" name="Editarcama" id="Editarcama" required>
                                            </div>
                                        <div class="form-group">
                                                <label for="Editarpresio">Precio de la Habitacion</label>
                                                <input type="number" class="form-control" name="Editarpresio" id="Editarpresio" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="Editardescripcion">Descripcion de la Habitacion</label>
                                                <textarea class="form-control" name="Editardescripcion"  id="Editardescripcion" rows="3"></textarea>
                                            </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger btn-danger" data-dismiss="modal">Cancelar</button>
                                        <button type="submit" class="btn btn-success btn-success" name="btnActualizar">Guardar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--FINAL DE MODIFICACION DE  DATOS-->


                    <!-- MODAL DE ELIMINADO LOGICO-->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalCenterTitle">Elimnar Habitacion</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <form action="../controller/RoomLogicalEliminated.php" method="post">
                                    <div class="modal-body">
                                        <input type="hidden" class="form-control" name="EliminarCi" id="EliminarCi" required readonly>
                                        ¿Estas seguro que deseas elimar la Habitacion?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                        <button type="submit" class="btn btn-danger btn-danger">Eliminar</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                    <!-- FINAL DEL MODAL DE ELIMINADO LOGICO-->



                    <!--MODALES DE NOTIFICACIONES-->
                    <div aria-live="polite" aria-atomic="true">
                        <div class="toast" id="toast" data-delay="2000" style="background-color:red; position: absolute; top: 100px; right: 50px; border-radius:10rem; color:white;">
                            <div class="toast-body">
                                Complete los campos vacios.
                            </div>
                        </div>
                    </div>

                    <div aria-live="polite" aria-atomic="true">
                        <div class="toast" id="toastError" data-delay="2000" style="background-color:red; position: absolute; top: 100px; right: 50px; border-radius:10rem; color:white;">
                            <div class="toast-body">
                                Datos ya ingresados.
                            </div>
                        </div>
                    </div>

                    <div aria-live="polite" aria-atomic="true">
                        <div class="toast" id="toastCorrecto" data-delay="2000" style="background-color:green; position: absolute; top: 100px; right: 50px; border-radius:10rem; color:white;">
                            <div class="toast-body">
                                Datos ingresados correctamente.
                            </div>
                        </div>
                    </div>

                    <div aria-live="polite" aria-atomic="true">
                        <div class="toast" id="toastEliminar" data-delay="2000" style="background-color:green; position: absolute; top: 100px; right: 50px; border-radius:10rem; color:white;">
                            <div class="toast-body">
                                Datos Eliminados correctamente.
                            </div>
                        </div>
                    </div>
                    <!--FIN DE LOS MODALES DE NOTIFICACIONES-->



                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <?php

                            $sql = "SELECT habitacion.codigo, pisohabitacion.piso, habitacion.numerohabitacion, tipohabitacion.nombre, habitacion.cama, habitacion.precio, habitacion.descripcion, habitacion.pisohabitacion, habitacion.tipohabitacion, habitacion.estadohabitacion FROM habitacion, pisohabitacion, tipohabitacion WHERE (habitacion.pisohabitacion = pisohabitacion.codigo AND habitacion.tipohabitacion = tipohabitacion.codigo) AND habitacion.estado = 1";
                            $result = mysqli_query($conexion, $sql);

                            ?>
                            <table id="tabla" class="table  table-condensed">
                                <tr>
                                    <td>Codigo</td>
                                    <td>Piso</td>
                                    <td>N° Habitacion</td>
                                    <td>Tipo</td>
                                    <td>N° Camas</td>
                                    <td>Precio</td>
                                    <td>Descripcion</td>
                                    <td>Estado</td>
                                    <td>Acciones</td>
                                </tr>
                                <tr>
                                    <?php
                                    while ($ver = mysqli_fetch_row($result)) :
                                    ?>
                                        <td><?php echo $ver[0] ?></td>
                                        <td><?php echo $ver[1] ?></td>
                                        <td><?php echo $ver[2] ?></td>
                                        <td><?php echo $ver[3] ?></td>
                                        <td><?php echo $ver[4] ?></td>
                                        <td><?php echo $ver[5] ?></td>
                                        <td><?php echo $ver[6] ?></td>
                                        <td><?php echo $ver[9] ?></td>
                                        <td>

                                            <button type="button" class="btn btn-success btn-success btn-success2 fas fa-pen" data-toggle="modal" data-target="#exampleModalM" onclick="ActualizarDatos('<?php echo $ver[0] ?>', '<?php echo $ver[7] ?>' , '<?php echo $ver[2] ?>' , '<?php echo $ver[8] ?>', '<?php echo $ver[4] ?>', '<?php echo $ver[5] ?>', '<?php echo $ver[6] ?>')"></button>
                                            <button type="button" class="btn btn-danger btn-danger btn-danger2 fas fa-trash-alt" data-toggle="modal" data-target="#exampleModalCenter" onclick="EliminadoLogico('<?php echo $ver[0] ?>')"></button>

                                        </td>
                                </tr>
                            <?php endwhile; ?>
                            </table>
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
        <script type="text/javascript">
            function ActualizarDatos(idempleado, piso, habitacion, tipo,cama , precio, descripcion) {
                $('#editarCodigo').val(idempleado);
                $('#Editarpiso').val(piso);
                $('#Editarhabitacion').val(habitacion);
                $('#Editartipo').val(tipo);
                $('#Editarcama').val(cama)
                $('#Editarpresio').val(precio);
                $('#Editardescripcion').val(descripcion);
                
                
            }

            function EliminadoLogico(idempleado) {
                $('#EliminarCi').val(idempleado)
            }
        </script>
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