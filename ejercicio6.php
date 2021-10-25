<?php
    function creaConexion($user,$password,$db){
        @$mysqli = mysqli_connect("localhost",$user,$password,$db);
        $error = mysqli_connect_errno($mysqli);
            if($error != null){

                echo "<p> Error $error conectando a la base de datos:", mysqli_error($mysqli), "</p>";
                exit();

            } else {
                echo "Conectado correctamente";
                echo "<br>";
            }
    }

    function creaVuelo($conexion,$origen, $destino, $fecha, $companya, $modeloAvion){
        $slq = "INSERT INTO `vuelos` (Origen, Destino, Fecha, Companya, ModeloAvion) VALUES(?,?,?,?,?)";
        $consulta = mysqli_stmt_init($conexion);
        if($stmt = mysqli_prepare($conexion , $slq)){
            mysqli_stmt_bind_param($stmt, "sssss", $origen, $destino, $fecha, $companya, $modeloAvion);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
        }

        if($stmt == false){
            echo "La consulta no ha funcionado correctamente";
        } else{
            echo "Se han insertado ", mysqli_affected_rows($conexion), " filas.";
            echo "<br>";
            echo "El id del último elemento añadido es ", mysqli_insert_id($conexion);
            echo "<br>";
        }
    }   
?>