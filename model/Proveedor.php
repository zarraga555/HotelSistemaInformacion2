<?php 

    class proveedores{
        public function AgregarProveedor($datos){
            
            $con = new conectar();
            $conexion = $con->conexion();
            
            $sql = "INSERT INTO proveedores (nit, nombres, direccion, departamento, telefono, correo, fechaIngreso, estado) VALUES ('$datos[0]', '$datos[1]', '$datos[2]', '$datos[3]', '$datos[4]', '$datos[5]', '$datos[6]', '$datos[7]')";

            $result = mysqli_query($conexion, $sql);

            if(mysqli_num_rows($result) > 0){

                return header('location:../views/suppliers.php');

            }else{
                return header('location:../views/suppliers.php');
            }
        }

        public function EditarProveedor($datos){
            $con = new conectar();
            $conexion = $con->conexion();

            $sql = "UPDATE proveedores SET nombres = '$datos[1]', direccion = '$datos[2]', departamento = '$datos[3]', telefono = '$datos[4]', correo = '$datos[5]', fechaIngreso = '$datos[6]' WHERE nit = '$datos[0]'";

            $result = mysqli_query($conexion, $sql);

            if(mysqli_num_rows($result) > 0){

                return header('location:../views/suppliers.php');

            }else{
                return header('location:../views/suppliers.php');
            }
        }

        public function ElimadoLogico($datos){
            $con = new conectar();
            $conexion = $con->conexion();

            $status = 0;

            $sql = "UPDATE proveedores SET estado = '$status' WHERE nit = '$datos[0]'";

            $result = mysqli_query($conexion, $sql);

            if(mysqli_num_rows($result) > 0){

                return header('location:../views/suppliers.php');

            }else{
                return header('location:../views/suppliers.php');
            }
        }

        public function RestaurarProveedor($datos){
            $con = new conectar();
            $conexion = $con->conexion();

            $status = 1;

            $sql = "UPDATE proveedores SET estado = '$status' WHERE nit = '$datos[0]'";

            $result = mysqli_query($conexion, $sql);

            if(mysqli_num_rows($result) > 0){

                return header('location:../views/suppliers.php');

            }else{
                return header('location:../views/suppliers.php');
            }
        }
    }

?>