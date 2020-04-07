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
        <?php require_once "menu.php" ?>
                <!--Esta etiqueta es posible que me la lleve a otro lado-->
                <div class="info cointainer justify-content-center">
                    <div class="title-container">
                        <h1>Proveedores Eliminados</h1>
                    </div>


                    <!-- MODAL DE RESTAURADO LOGICO-->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalCenterTitle">Restaurar Proveedor</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <form action="../controller/suppliersRestore.php" method="post">
                                    <div class="modal-body">
                                        <input type="hidden" class="form-control" name="EliminarCi" id="EliminarCi" required readonly>
                                        ¿Estas seguro que deseas restaurar el Proveedor?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                        <button type="submit" class="btn btn-success btn-success">Eliminar</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                    <!-- FINAL DEL MODAL DE RESTAURADO LOGICO-->



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
                            require_once "../config/connection/connection.php";
                            $con = new conectar();
                            $conexion = $con->conexion();

                            $sql = "SELECT * FROM proveedores WHERE estado = 0";
                            $result = mysqli_query($conexion, $sql);

                            ?>
                            <table id="tabla" class="table  table-condensed">
                                <tr>
                                    <td>NIT</td>
                                    <td>Nombre</td>
                                    <td>Direccion</td>
                                    <td>Localidad</td>
                                    <td>Telefono</td>
                                    <td>Correo</td>
                                    <td>Fecha Ingreso</td>
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
                                        <td>

                                            <button type="button" class="btn btn-success btn-success btn-success2 fas fa-pen" data-toggle="modal" data-target="#exampleModalCenter" onclick="RestaurarDatos('<?php echo $ver[0] ?>')"></button>
                                            <!-- <button type="button" class="btn btn-danger btn-danger btn-danger2 fas fa-trash-alt" data-toggle="modal" data-target="#exampleModalCenter" onclick="EliminadoLogico('<?php //echo $ver[0] ?>')"></button> -->

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
            function RestaurarDatos(idempleado) {
                $('#EliminarCi').val(idempleado);
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