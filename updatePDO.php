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
            $sql = "UPDATE turista SET nombre= 'Carmen', apellido1='Rufo', apellido2='Palomo', direccion='Sevilla', telefono='698456321' WHERE id = 3 OR id = 5";
            $numeroClientesActualizados = $conexion->exec($sql);
            echo "Se han modificado $numeroClientesActualizados cliente.";
        } catch (PDOException $e) {
            echo "Connection fallida: " . $e->getMessage();
        }
        $conexion=null;
    ?>
</body>
</html>