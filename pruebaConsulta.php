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
        
                }
                $origen = "Huelva";
                $id = 10;
                // update
                //$slq = "UPDATE vuelos SET Origen = ? WHERE id = ?";
                $slq = "SELECT * FROM vuelos WHERE Origen =? AND id =?";
                $consulta = mysqli_stmt_init($mysqli);
                if($stmt = mysqli_prepare($mysqli , $slq)){
                    mysqli_stmt_bind_param($stmt, "si", $origen, $id);
                    mysqli_stmt_execute($stmt);
                    // Fetch data here
                    .
                    
                    mysqli_stmt_bind_result($stmt, $id, $origen, $destino, $fecha, $companya, $modeloAvion);
                        while(mysqli_stmt_fetch($stmt)){
                            print "El vuelo con origen $origen y destino $destino tiene fecha prevista $fecha y es operado por la compañía $companya con el modelo de avión $modeloAvion";

                        }
                    mysqli_stmt_close($stmt);
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
        
                mysqli_close($mysqli);
    ?>
</body>
</html>