<?php 

    class productos{
        public function AgregarProducto($datos){
            
            $con = new conectar();
            $conexion = $con->conexion();
            
            $sql = "INSERT INTO producto (nombre, proveedor, compra, venta, cantidad, fechaVencimiento, estado) VALUES ('$datos[0]', '$datos[1]', '$datos[2]', '$datos[3]', '$datos[4]', '$datos[5]', '$datos[6]')";

            $result = mysqli_query($conexion, $sql);

            if(mysqli_num_rows($result) > 0){

                return header('location:../views/products.php');

            }else{
                return header('location:../views/products.php');
            }
        }

        public function EditarProducto($datos){
            $con = new conectar();
            $conexion = $con->conexion();

            $sql = "UPDATE producto SET nombre = '$datos[1]', proveedor = '$datos[2]', compra = '$datos[3]', venta = '$datos[4]', cantidad = '$datos[5]', fechaVencimiento = '$datos[6]' WHERE codigo = '$datos[0]'";

            $result = mysqli_query($conexion, $sql);

            if(mysqli_num_rows($result) > 0){

                return header('location:../views/products.php');

            }else{
                return header('location:../views/products.php');
            }
        }

        public function ElimadoLogico($datos){
            $con = new conectar();
            $conexion = $con->conexion();

            $status = 0;

            $sql = "UPDATE producto SET estado = '$status' WHERE codigo = '$datos[0]'";

            $result = mysqli_query($conexion, $sql);

            if(mysqli_num_rows($result) > 0){

                return header('location:../views/products.php');

            }else{
                return header('location:../views/products.php');
            }
        }

        public function RestaurarProducto($datos){
            $con = new conectar();
            $conexion = $con->conexion();

            $status = 1;

            $sql = "UPDATE producto SET estado = '$status' WHERE codigo = '$datos[0]'";

            $result = mysqli_query($conexion, $sql);

            if(mysqli_num_rows($result) > 0){

                return header('location:../views/products.php');

            }else{
                return header('location:../views/products.php');
            }
        }
    }

?>