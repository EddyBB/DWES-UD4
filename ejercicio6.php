<?php
    function creaConexion(){
        @$mysqli = mysqli_connect("localhost","developer","developer", "agenciaviajes");
        $error = mysqli_connect_errno($mysqli);
            if($error != null){

                echo "<p> Error $error conectando a la base de datos:", mysqli_error($mysqli), "</p>";
                exit();

            } else {
                echo "Conectado correctamente";
                echo "<br>";
            }
        return $mysqli;
    }

    function creaVuelo($origen, $destino, $fecha, $companya, $modeloAvion){
        $mysqli = creaConexion();
        $slq = "INSERT INTO `vuelos` (Origen, Destino, Fecha, Companya, ModeloAvion) VALUES(?,?,?,?,?)";
        $consulta = mysqli_stmt_init($mysqli);
        if($stmt = mysqli_prepare($mysqli , $slq)){
            mysqli_stmt_bind_param($stmt, "sssss", $origen, $destino, $fecha, $companya, $modeloAvion);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
        }
        mysqli_close($mysqli);
    }
    
    function modificaDestino($id, $destino){
        $mysqli = creaConexion();
        $retorno = false;
        $sql = "UPDATE `vuelo` SET `Destino` = ? WHERE `id` = ?";
        $consulta = mysqli_stmt_init($mysqli);
        if($stmt = mysqli_prepare($mysqli, $sql)){
            mysqli_stmt_bind_param($stmt, "si", $destino, $id);
            $retorno = mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
        }
        mysqli_close($mysqli);
        return $retorno;
    }

    function modificaCompanya($id, $companya){
        $mysqli = creaConexion();
        $retorno = false;
        $sql = "UPDATE `vuelo` SET `Companya` = ? WHERE `id` = ?";
        $consulta = mysqli_stmt_init($mysqli);
        if($stmt = mysqli_prepare($mysqli, $sql)){
            mysqli_stmt_bind_param($stmt, "si", $companya, $id);
            $retorno = mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
        }
        mysqli_close($mysqli);
        return $retorno;
    }

    function eliminaVuelo(){
        $mysqli = creaConexion();
        $retorno = false;
        $sql = "DELETE FROM `vuelos` WHERE `id` = ?";
        $consulta = mysqli_stmt_init($mysqli);
        if($stmt = mysqli_prepare($mysqli, $sql)){
            mysqli_stmt_bind_param($stmt, "i", $id);
            $retorno = mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
        }
        mysqli_close($mysqli);
        return $retorno;
    }

    function extraeVuelos(){
        $mysqli = creaConexion();
        $sql = "SELECT * FROM vuelos";
        $result = mysqli_query($mysqli,$sql);
        return $result;
    }
?>