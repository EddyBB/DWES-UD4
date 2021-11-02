<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
            $servidor = "localhost";
            $baseDatos = "agenciaviajes";
            $usuario = "developer";
            $pass = "developer";
    
            try {
                $conexion = new PDO("mysql:host=$servidor;dbname=$baseDatos", $usuario, $pass);
                echo "Conectado correctamente";
                echo "<br>";
                // Se empieza la transacción
                $conexion->beginTransaction();

                $falloConsultas = false;
                // La consulta 1
                $sql = "INSERT INTO turista (nombre, apellido1, apellido2, direccion, telefono) VALUES ('Pepe', 'González', 'Ramirez', '', '963258741')";
                $numeroClientes = $conexion->exec($sql);
                $last_id = $conexion->lastInsertId();
                echo "Se han añadido $numeroClientes cliente nuevo con el id: $last_id";
                echo "<br>";
                if($last_id < 1){
                    $falloConsultas = true;
                    
                }

                // La consulta 2
                $sql = "INSERT INTO turista (nombre, apellido1, apellido2, direccion, telefono) VALUES ('Lurdes', 'Jiménez', 'Palacios', '', '654123963')";
                $numeroClientes = $conexion->exec($sql);
                $last_id2 = $conexion->lastInsertId();
                echo "Se han añadido $numeroClientes cliente nuevo con el id: $last_id2";
                echo "<br>";
                if($last_id2 < 1 || $last_id2 == $last_id){
                    $falloConsultas = true;
                    
                }

                // La consulta 3
                $sql = "INSERT INTO turista (nombre, apellido1, apellido2, direccion, telefono) VALUES ('Paco', 'Palomo', 'Ramirez', '', '213654789')";
                $numeroClientes = $conexion->exec($sql);
                $last_id3 = $conexion->lastInsertId();
                echo "Se han añadido $numeroClientes cliente nuevo con el id: $last_id3";
                echo "<br>";

                if($last_id3 < 1 || $last_id3==$last_id2){
                    $falloConsultas = true;
                    
                }

                if($falloConsultas){
                    $conexion -> rollBack();
                    echo "No hay cambios";
                } else {
                    $conexion->commit();
                    echo "Hay cambios";
                }
                


            } catch (PDOException $e) {
                echo "Connection fallida: " . $e->getMessage();
                $conexion->rollBack();
            }
            $conexion=null;
    ?>
</body>
</html>