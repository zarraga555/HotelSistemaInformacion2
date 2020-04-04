<?php 

    class habitaciones{
        public function AgregarHabitacion($datos){
            
            $con = new conectar();
            $conexion = $con->conexion();
            
            $sql = "INSERT INTO habitacion (pisohabitacion, numerohabitacion, tipohabitacion, cama, precio, descripcion, estado) VALUES ('$datos[0]', '$datos[1]', '$datos[2]', '$datos[3]', '$datos[4]', '$datos[5]', '$datos[6]')";

            $result = mysqli_query($conexion, $sql);

            if(mysqli_num_rows($result) > 0){

                return header('location:../views/rooms.php');

            }else{
                return header('location:../views/rooms.php');
            }
        }

        public function EditarHabitacion($datos){
            $con = new conectar();
            $conexion = $con->conexion();

            $sql = "UPDATE habitacion SET pisohabitacion = '$datos[1]', numerohabitacion = '$datos[2]', tipohabitacion = '$datos[3]', cama = '$datos[4]', precio = '$datos[5]', descripcion = '$datos[6]' WHERE codigo = '$datos[0]'";

            $result = mysqli_query($conexion, $sql);

            if(mysqli_num_rows($result) > 0){

                return header('location:../views/rooms.php');

            }else{
                return header('location:../views/rooms.php');
            }
        }

        public function ElimadoLogico($datos){
            $con = new conectar();
            $conexion = $con->conexion();

            $status = 0;

            $sql = "UPDATE habitacion SET estado = '$status' WHERE codigo = '$datos[0]'";

            $result = mysqli_query($conexion, $sql);

            if(mysqli_num_rows($result) > 0){

                return header('location:../views/rooms.php');

            }else{
                return header('location:../views/rooms.php');
            }
        }
    }

?>