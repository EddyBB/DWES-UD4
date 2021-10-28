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
            $sql = "INSERT INTO turista (nombre, apellido1, apellido2, direccion, telefono) VALUES ('Javier', 'Jiménez', 'Castillo', 'Dos Hermanas', '394304940')";
            $numeroClientes = $conexion->exec($sql);
            $last_id = $conexion->lastInsertId();
            echo "Se han añadido $numeroClientes cliente nuevo con el id: $last_id";
        } catch (PDOException $e) {
            echo "Connection fallida: " . $e->getMessage();
        }
        $conexion=null;
    ?>
</body>
</html>