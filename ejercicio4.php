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
        
        $result = mysqli_query($mysqli,"DELETE FROM `vuelos` WHERE Origen = 'Huelva'");
        if($result == false){
            echo "La consulta no ha funcionado correctamente";
        } else{
            echo "Se han borrado ", mysqli_affected_rows($mysqli), " filas";
        }

        $result = mysqli_query($mysqli, "INSERT INTO `vuelos` (Origen, Destino, Fecha, Companya, ModeloAvion) VALUES('Madrid','Valencia','2021-10-21 09:16:52', 'Iberia', 'A380')");
        if($result == false){
            echo "La consulta no ha funcionado correctamente";
        } else{
            echo "Se han insertado ", mysqli_affected_rows($mysqli), " filas.";
            echo "<br>";
            echo "El id del último elemento añadido es ", mysqli_insert_id($mysqli);
        }

        $result = mysqli_query($mysqli, "UPDATE `vuelos` SET `Origen`= 'Dos Hermanas' WHERE `id` = '6'");
        if($result == false){
            echo "La consulta no ha funcionado correctamente";
        } else {
            echo "Se han actualizado ", mysqli_affected_rows($mysqli), " filas.";
        }
        mysqli_close($mysqli);
        echo "<br>";

        @$mysqli = mysqli_connect("localhost","developer","developer","agenciaviajes");
        $error = mysqli_connect_errno($mysqli);
        if($error != null){

            echo "<p> Error $error conectando a la base de datos:", mysqli_error($mysqli), "</p>";
            exit();

        } else {
            echo "Conectado correctamente";
            echo "<br>";
        }
        $result2 = mysqli_query($mysqli,"SELECT * FROM `vuelos`");
        if($result2 == false){
            echo "La consulta no ha funcionado correctamente";
        } else {
            echo "<table border= '1'>";
                echo "<tr>";
                    echo "<th>id</th>";
                    echo "<th>Origen</th>";
                    echo "<th>Destino</th>";
                    echo "<th>Fecha</th>";
                    echo "<th>Companya</th>";
                    echo "<th>ModeloAvion</th>";
                echo "</tr>";

                while ($file = mysqli_fetch_object($result2)) {
                    echo "<tr>";
                        echo"<td>";
                        printf ("%s", $file->id);
                        echo"</td>";
                        echo"<td>";
                        printf ("%s", $file->Origen);
                        echo"</td>";
                        echo"<td>";
                        printf ("%s", $file->Destino);
                        echo"</td>";
                        echo"<td>";
                        printf ("%s", $file->Fecha);
                        echo"</td>";
                        echo"<td>";
                        printf ("%s", $file->Companya);
                        echo"</td>";
                        echo"<td>";
                        printf ("%s", $file->ModeloAvion);
                        echo"</td>";
                    echo "</tr>";
                }
               // mysqli_free_result($result);

            echo "</table>";
        }
        mysqli_close($mysqli);

        @$mysqli = mysqli_connect("localhost","developer","developer","agenciaviajes");
        $error = mysqli_connect_errno($mysqli);
        if($error != null){

            echo "<p> Error $error conectando a la base de datos:", mysqli_error($mysqli), "</p>";
            exit();

        } else {
            echo "Conectado correctamente";
            echo "<br>";
        }
        $result3 = mysqli_query($mysqli,"SELECT * FROM `vuelos`");
        if($result3 == false){
            echo "La consulta no ha funcionado correctamente";
        } else {
            echo "<table border= '1'>";
                echo "<tr>";
                    echo "<th>id</th>";
                    echo "<th>Origen</th>";
                    echo "<th>Destino</th>";
                    echo "<th>Fecha</th>";
                    echo "<th>Companya</th>";
                    echo "<th>ModeloAvion</th>";
                echo "</tr>";

                while ($file = mysqli_fetch_array($result3, MYSQLI_ASSOC)) {
                    echo "<tr>";
                        echo"<td>";
                        printf ("%s", $file["id"]);
                        echo"</td>";
                        echo"<td>";
                        printf ("%s", $file["Origen"]);
                        echo"</td>";
                        echo"<td>";
                        printf ("%s", $file["Destino"]);
                        echo"</td>";
                        echo"<td>";
                        printf ("%s", $file["Fecha"]);
                        echo"</td>";
                        echo"<td>";
                        printf ("%s", $file["Companya"]);
                        echo"</td>";
                        echo"<td>";
                        printf ("%s", $file["ModeloAvion"]);
                        echo"</td>";
                    echo "</tr>";
                }
               // mysqli_free_result($result);

            echo "</table>";
        }
        mysqli_close($mysqli);

        @$mysqli = mysqli_connect("localhost","developer","developer","agenciaviajes");
        $error = mysqli_connect_errno($mysqli);
        if($error != null){

            echo "<p> Error $error conectando a la base de datos:", mysqli_error($mysqli), "</p>";
            exit();

        } else {
            echo "Conectado correctamente";
            echo "<br>";
        }
        $result4 = mysqli_query($mysqli,"SELECT * FROM `vuelos`");
        if($result4 == false){
            echo "La consulta no ha funcionado correctamente";
        } else {
            echo "<table border= '1'>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>Origen</th>";
                echo "<th>Destino</th>";
                echo "<th>Fecha</th>";
                echo "<th>Companya</th>";
                echo "<th>ModeloAvion</th>";
            echo "</tr>";

            while ($file = $result4->fetch_row()) {
                echo "<tr>";
                    echo"<td>";
                    printf ("%s", $file[0]);
                    echo"</td>";
                    echo"<td>";
                    printf ("%s", $file[1]);
                    echo"</td>";
                    echo"<td>";
                    printf ("%s", $file[2]);
                    echo"</td>";
                    echo"<td>";
                    printf ("%s", $file[3]);
                    echo"</td>";
                    echo"<td>";
                    printf ("%s", $file[4]);
                    echo"</td>";
                    echo"<td>";
                    printf ("%s", $file[5]);
                    echo"</td>";
                echo "</tr>";
            }
           // mysqli_free_result($result);

        echo "</table>";
        }
        mysqli_close($mysqli);
    ?>
</body>
</html>