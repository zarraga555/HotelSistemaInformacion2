<?php 

    class clientes{
        public function AgregarCliente($datos){
            
            $con = new conectar();
            $conexion = $con->conexion();
            
            $sql = "INSERT INTO cliente (pasaporte, nombre, sexo, telefono, email, fechaNacimiento, nacionalidad, estado) VALUES ('$datos[0]', '$datos[1]', '$datos[2]', '$datos[3]', '$datos[4]', '$datos[5]', '$datos[6]', '$datos[7]')";

            $result = mysqli_query($conexion, $sql);

            if(mysqli_num_rows($result) > 0){

                return header('location:../views/clients.php');

            }else{
                return header('location:../views/clients.php');
            }
        }

        public function EditarCliente($datos){
            $con = new conectar();
            $conexion = $con->conexion();

            $sql = "UPDATE cliente SET nombre = '$datos[1]', sexo = '$datos[2]', telefono = '$datos[3]', email = '$datos[4]', fechaNacimiento = '$datos[5]', nacionalidad = '$datos[6]' WHERE pasaporte = '$datos[0]'";

            $result = mysqli_query($conexion, $sql);

            if(mysqli_num_rows($result) > 0){

                return header('location:../views/clients.php');

            }else{
                return header('location:../views/clients.php');
            }
        }

        public function ElimadoLogico($datos){
            $con = new conectar();
            $conexion = $con->conexion();

            $status = 0;

            $sql = "UPDATE cliente SET estado = '$status' WHERE pasaporte = '$datos[0]'";

            $result = mysqli_query($conexion, $sql);

            if(mysqli_num_rows($result) > 0){

                return header('location:../views/clients.php');

            }else{
                return header('location:../views/clients.php');
            }
        }

        public function RestaurarCliente($datos){
            $con = new conectar();
            $conexion = $con->conexion();

            $status = 1;

            $sql = "UPDATE cliente SET estado = '$status' WHERE pasaporte = '$datos[0]'";

            $result = mysqli_query($conexion, $sql);

            if(mysqli_num_rows($result) > 0){

                return header('location:../views/clients.php');

            }else{
                return header('location:../views/clients.php');
            }
        }
    }

?>