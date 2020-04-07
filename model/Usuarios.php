<?php

    class usuarios{
        //LOGEO DE USUARIO DE SISTEMA DEL HOTEL 
        public function loginUser($datos){
            $con = new conectar();
            $conexion = $con->conexion();

            $sql = "SELECT * FROM usuarios WHERE usuario = '$datos[0]' AND  pass = '$datos[1]'";

            $result = mysqli_query($conexion, $sql);

            $_SESSION['usuario'] = $_SESSION['rol'] = self::traeID($datos);


            if(mysqli_num_rows($result) > 0){
                return header('location:../views/dashboard.php');

            }else{
                return header('location:../index.php');
            }
        }
        //OBTENSION DEL ID DEL USAURIO
        public function traeID($datos){
            $con = new conectar();
            $conexion = $con->conexion();

            $sql = "SELECT rol FROM usuarios WHERE usuario = '$datos[0]' AND  pass = '$datos[1]'";

            $result = mysqli_query($conexion, $sql);
            
            return mysqli_fetch_row($result)[0];
        }
    }

?>