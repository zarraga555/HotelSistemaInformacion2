<?php
    
    class empleados{

        public function AgregarEmpleado($datos){
            
            $con = new conectar();
            $conexion = $con->conexion();
            
            $sql = "INSERT INTO empleado (ci, nombres, sexo, telefono, email, fechaNacimiento, nacionalidad, salario, estado) VALUES ('$datos[0]', '$datos[1]', '$datos[2]', '$datos[3]', '$datos[4]', '$datos[5]', '$datos[6]', '$datos[7]', '$datos[8]')";

            $result = mysqli_query($conexion, $sql);

            if(mysqli_num_rows($result) > 0){

                return header('location:../views/employees.php');

            }else{
                return header('location:../views/employees.php');
            }
        }

        public function EditarEmpleado($datos){
            $con = new conectar();
            $conexion = $con->conexion();

            $sql = "UPDATE empleado SET nombres = '$datos[1]', sexo = '$datos[2]', telefono = '$datos[3]', email = '$datos[4]', fechaNacimiento = '$datos[5]', nacionalidad = '$datos[6]', salario = '$datos[7]' WHERE ci = '$datos[0]'";

            $result = mysqli_query($conexion, $sql);

            if(mysqli_num_rows($result) > 0){

                return header('location:../views/employees.php');

            }else{
                return header('location:../views/employees.php');
            }
        }

        public function ElimadoLogico($datos){
            $con = new conectar();
            $conexion = $con->conexion();

            $status = 0;

            $sql = "UPDATE empleado SET estado = '$status' WHERE ci = '$datos[0]'";

            $result = mysqli_query($conexion, $sql);

            if(mysqli_num_rows($result) > 0){

                return header('location:../views/employees.php');

            }else{
                return header('location:../views/employees.php');
            }
        }


    }

?>