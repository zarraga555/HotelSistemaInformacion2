<?php
        require_once "../config/connection/connection.php";
        $con = new conectar();
        $conexion = $con->conexion();
        $habitacionesDisponibles = "SELECT pisohabitacion, precio, numerohabitacion FROM habitacion WHERE estadohabitacion = 'Disponible' AND estado = 1";
        $habitacionesReservados = "SELECT pisohabitacion, precio, numerohabitacion FROM habitacion WHERE estadohabitacion = 'Reservado' AND estado = 1";
        $habitacionesOcupados = "SELECT pisohabitacion, precio, numerohabitacion FROM habitacion WHERE estadohabitacion = 'Ocupado' AND estado = 1";
        $resultHbaitacionDisponible = mysqli_query($conexion, $habitacionesDisponibles);
        $resultHbaitacionReservado = mysqli_query($conexion, $habitacionesReservados);
        $resultHbaitacionOcupado = mysqli_query($conexion, $habitacionesOcupados);

        ?>

<?php
                        while ($verDisponible = mysqli_fetch_row($resultHbaitacionDisponible)) :


                            echo "<a type='button' class='col-md-3 cardDas cardDas2 disponible' data-toggle='modal' data-target='#exampleModal' ><div class='cardDas2'>
                                    
                                    <span class='spantitle3'><i class='fas fa-bed'></i></span>
                                    <div class='spantitle2'>
                                    <span class=''>Piso: $verDisponible[0] </span>
                                    <span class=''>Bs: $verDisponible[1] </span>
                                    <span class=''>Habitacion: $verDisponible[2] </span>
                                    </div>
                                    </div></a>";

                        endwhile; ?>

                        <?php
                        while ($verReservado = mysqli_fetch_row($resultHbaitacionReservado)) :


                            echo "<a type='button' class='col-md-3 cardDas cardDas2 reservado' ><div class='cardDas2'>
                                    
                                    <span class='spantitle3reservado'><i class='fas fa-bed'></i></span>
                                    <div class='spantitle2reservado'>
                                    <span class=''>Piso: $verReservado[0] </span>
                                    <span class=''>Bs: $verReservado[1] </span>
                                    <span class=''>Habitacion: $verReservado[2] </span>
                                    </div>
                                    </div></a>";

                        endwhile; ?>

                        <?php
                        while ($verOcupado = mysqli_fetch_row($resultHbaitacionOcupado)) :


                            echo "<a type='button' class='col-md-3 cardDas cardDas2 ocupado' ><div class='cardDas2'>
                                    
                                    <span class='spantitle3ocupado'><i class='fas fa-bed'></i></span>
                                    <div class='spantitle2ocupado'>
                                    <span class=''>Piso: $verOcupado[0] </span>
                                    <span class=''>Bs: $verOcupado[1] </span>
                                    <span class=''>Habitacion: $verOcupado[2] </span>
                                    </div>
                                    </div></a>";

                        endwhile; ?>