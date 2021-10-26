<?php

function creaConexion(){
    $mysqli = new mysqli("localhost", "developer", "developer", "agenciaviajes");
    $error = $mysqli -> connect_errno;
    if($error != null){
        echo "Conexión fallida: ". $mysqli -> connect_error;
        exit();
    } else {
        echo "Conexión exitosa";
        echo "<br>";
    }
    return $mysqli;
}

function creaVuelo($origen, $destino, $fecha, $companya, $modeloAvion){
    $mysqli = creaConexion();
    $sql = "INSERT INTO `vuelos` (Origen, Destino, Fecha, Companya, ModeloAvion) VALUES(?,?,?,?,?)";
    $consulta = $mysqli -> stmt_init();
    if($stmt = $mysqli->prepare($sql)){
        $stmt->bind_param("sssss", $origen, $destino, $fecha, $companya, $modeloAvion);
        $stmt->execute();
        $stmt->close();
    }
    $mysqli -> close();
}

function modificaDestino($destino,$id){
    $mysqli = creaConexion();
    $sql = "UPDATE  vuelos SET Destino = ? WHERE id=? ";
    $mysqli -> stmt_init();
    $retorno=false;
    if ($stmt = $mysqli->prepare($sql)) {
        $stmt->bind_param("si", $destino, $id);
        $retorno = $stmt->execute();
        $stmt->close();

    }
    $mysqli->close();
    return $retorno;
}

function modificaCompanya($id, $companya){
    $mysqli = creaConexion();
    $sql = "UPDATE  vuelos SET Companya = ? WHERE id=? ";
    $mysqli -> stmt_init();
    $retorno=false;
    if ($stmt = $mysqli->prepare($sql)) {
        $stmt->bind_param("si", $companya, $id);
        $retorno = $stmt->execute();
        $stmt->close();

    }
    $mysqli->close();
    return $retorno;
}

function eliminaVuelo($id){
    $mysqli = creaConexion();
    $sql = "DELETE FROM `vuelos` WHERE `id` = ?";
    $mysqli -> stmt_init();
    $retorno=false;
    if ($stmt = $mysqli->prepare($sql)) {
        $stmt->bind_param("i", $id);
        $retorno = $stmt->execute();
        $stmt->close();

    }
    $mysqli->close();
    return $retorno;
}

function extraeVuelos(){
    $mysqli = creaConexion();
    $sql = "SELECT * FROM vuelos";
    $result = $mysqli->query($sql);
    return $result;
}
?>