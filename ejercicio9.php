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
            $sql = "INSERT INTO turista (nombre, apellido1, apellido2, direccion, telefono) VALUES ('Eddy', 'González', 'Chávez', 'Sevilla', '963258741')";
            $numeroClientes = $conexion->exec($sql);
            $last_id = $conexion->lastInsertId();
            echo "Se han añadido $numeroClientes cliente nuevo con el id: $last_id";
            echo "<br>";
        } catch (PDOException $e) {
            echo "Connection fallida: " . $e->getMessage();
        }
        $conexion=null;

        try {
            $conexion = new PDO("mysql:host=$servidor;dbname=$baseDatos", $usuario, $pass);
            echo "Conectado correctamente";
            echo "<br>";
            $sql1 = "DELETE FROM turista WHERE id = 5";
            $numeroClientesBorrados = $conexion->exec($sql1);
            echo "Se han eliminado $numeroClientesBorrados cliente.";
            echo "<br>";
        } catch (PDOException $e) {
            echo "Connection fallida: " . $e->getMessage();
        }
        $conexion=null;

        try {
            $conexion = new PDO("mysql:host=$servidor;dbname=$baseDatos", $usuario, $pass);
            echo "Conectado correctamente";
            echo "<br>";
            $sql2 = "UPDATE turista SET nombre= 'Pepe', apellido1='Quintana', apellido2='Ramirez', direccion='Camas', telefono='632154879' WHERE id = 4";
            $numeroClientesActualizados = $conexion->exec($sql2);
            echo "Se han modificado $numeroClientesActualizados cliente.";
            echo "<br>";
        } catch (PDOException $e) {
            echo "Connection fallida: " . $e->getMessage();
        }
        $conexion=null;
    ?>
</body>
</html>