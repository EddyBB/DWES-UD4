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
        @$mysqli = mysqli_connect("localhost","developer","developer","agenciaviajes");
        $error = mysqli_connect_errno($mysqli);
        if($error != null){

            echo "<p> Error $error conectando a la base de datos:", mysqli_error($mysqli), "</p>";
            exit();

        } else {
            echo "Conectado correctamente";
            echo "<br>";
        }
        $result = mysqli_query($mysqli,"SELECT * FROM `vuelos`");
        if($result == false){
            echo "La consulta no ha funcionado correctamente";
        } else {
            echo "<table border = '1'>";
                echo "<tr>";
                echo "<th>id</th>";
                echo "<th>Origen</th>";
                echo "<th>Destino</th>";
                echo "<th>Fecha</th>";
                echo "<th>Companya</th>";
                echo "<th>ModeloAvion</th>";
                echo "</tr>";
                while($fila=mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td>$fila[id]</td>";
                    echo "<td>$fila[Origen]</td>";
                    echo "<td>$fila[Destino]</td>";
                    echo "<td>$fila[Fecha]</td>";
                    echo "<td>$fila[Companya]</td>";
                    echo "<td>$fila[ModeloAvion]</td>";
                    echo "</tr>";
                }
            echo "</table>";
            echo "<br>";
        }
        //var_dump($result);
        
        $result = mysqli_query($mysqli,"DELETE FROM `vuelos` WHERE Origen = 'Valencia'");
        if($result == false){
            echo "La consulta no ha funcionado correctamente";
        } else{
            echo "Se han borrado ", mysqli_affected_rows($mysqli), " filas";
            echo "<br>";
        }

        $result = mysqli_query($mysqli, "INSERT INTO `vuelos` (Origen, Destino, Fecha, Companya, ModeloAvion) VALUES('Huelva','Dos Hermanas','2021-10-21 09:16:52', 'Iberia', 'A385')");
        if($result == false){
            echo "La consulta no ha funcionado correctamente";
        } else{
            echo "Se han insertado ", mysqli_affected_rows($mysqli), " filas.";
            echo "<br>";
            echo "El id del último elemento añadido es ", mysqli_insert_id($mysqli);
            echo "<br>";
        }

        $result = mysqli_query($mysqli, "UPDATE `vuelos` SET `Origen`= 'Madrid' WHERE `id` = '1'");
        if($result == false){
            echo "La consulta no ha funcionado correctamente";
        } else {
            echo "Se han actualizado ", mysqli_affected_rows($mysqli), " filas.";
            echo "<br>";
        }
        mysqli_close($mysqli);
    ?>
</body>
</html>