<?php


    function crearConexion(){
        $servidor = "localhost";
        $baseDatos = "agenciaviajes";
        $usuario = "developer";
        $pass = "developer";
        try {
            $conexion = new PDO("mysql:host=$servidor;dbname=$baseDatos", $usuario, $pass);
            echo "Conectado correctamente";
            echo "<br>";
        } catch (PDOException $e) {
            echo "Connection fallida: " . $e->getMessage();
        }
        return $conexion;
    }

    function crearTurista($nombre, $apellido1, $apellido2, $direccion, $telefono){

  
        $conexion = crearConexion();
        
        $sql = $conexion->prepare("INSERT INTO turista (nombre, apellido1, apellido2, direccion, telefono) VALUES (:nombre,:apellido1,:apellido2,:direccion,:telefono)");
        
        $sql->bindParam(":nombre", $nombre);
        $sql->bindParam(":apellido1", $apellido1);
        $sql->bindParam(":apellido2", $apellido2);
        $sql->bindParam(":direccion", $direccion);
        $sql->bindParam(":telefono", $telefono);
        $sql->execute();
        $last_id = $conexion->lastInsertId();
        return $last_id;

    }

    function extraeTurista($id){
        $conexion = crearConexion();
        $sql = $conexion->prepare("SELECT * FROM turista WHERE id= ?;");

        $sql->bindParam(1,$id);
        $sql->execute();
        while($fila = $sql->fetch()){
            print_r($fila);
        }
    }

    function extraeTuristas(){
        $conexion = crearConexion();
        $sql = $conexion->prepare("SELECT * FROM turista");
        $sql->execute();
        while($fila = $sql->fetch()){
            print_r($fila);
            echo "<br>";
        }
    }

    function actualizaTurista($id,$direccion,$telefono){
        $conexion = crearConexion();
        $sql = $conexion->prepare("UPDATE turista SET direccion = ?,telefono = ? WHERE id=?");
        
        //el numero se refiere a la posición del query en este caso el 3 para el id
        $sql->bindParam(3,$id);
        $sql->bindParam(1,$direccion);
        $sql->bindParam(2,$telefono);
        $retorno = $sql->execute();
        return $retorno;

    }

    function eliminaTurista($id){
        $conexion = crearConexion();
        $sql = $conexion->prepare("DELETE FROM `turista` WHERE `id` = ?");
        $sql->bindParam(1,$id);
        $retorno = $sql->execute();
        return $retorno;
    }

    //crearTurista("Pepe","LOpez","Marquez","Calle Alpino","965478952");
    //extraeTurista(2);
    //extraeTuristas();
    //actualizaTurista(2,"Calle Perez", 123654789);
    eliminaTurista(2);
?>
