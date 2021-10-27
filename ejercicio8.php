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
            $conn = new PDO("mysql:host=$servidor;dbname=$baseDatos", $usuario, $pass);
            echo "Conectado correctamente";
            echo "<br>";
            $sql = "SELECT * FROM turista";
            $turistas = $conn -> query($sql);
            echo "<table border = '1'>";
                echo "<tr>";
                echo "<th>id</th>";
                echo "<th>nombre</th>";
                echo "<th>apellido1</th>";
                echo "<th>direccion</th>";
                echo "</tr>";
            while($turista = $turistas -> fetch(PDO::FETCH_ASSOC)){
                
                echo "<tr>";
                echo "<td>$turista[id]</td>";
                echo "<td>$turista[nombre]</td>";
                echo "<td>$turista[apellido1]</td>";
                echo "<td>$turista[direccion]</td>";
                echo "</tr>";
            }
            echo "</table>";
            echo "<br>";

            $sql = "SELECT * FROM turista";
            $turistas = $conn -> query($sql);
            echo "<table border = '1'>";
                echo "<tr>";
                echo "<th>id</th>";
                echo "<th>nombre</th>";
                echo "<th>apellido1</th>";
                echo "<th>direccion</th>";
                echo "</tr>";
            while($turista = $turistas -> fetch(PDO::FETCH_NUM)){
                
                echo "<tr>";
                echo "<td>$turista[0]</td>";
                echo "<td>$turista[1]</td>";
                echo "<td>$turista[2]</td>";
                echo "<td>$turista[4]</td>";
                echo "</tr>";
            }
            echo "</table>";
            echo "<br>";

            $sql = "SELECT * FROM turista";
            $turistas = $conn -> query($sql);
            echo "<table border = '1'>";
                echo "<tr>";
                echo "<th>id</th>";
                echo "<th>nombre</th>";
                echo "<th>apellido1</th>";
                echo "<th>direccion</th>";
                echo "</tr>";
            while($turista = $turistas -> fetch(PDO::FETCH_BOTH)){
                
                echo "<tr>";
                echo "<td>$turista[id]</td>";
                echo "<td>$turista[1]</td>";
                echo "<td>$turista[apellido1]</td>";
                echo "<td>$turista[4]</td>";
                echo "</tr>";
            }
            echo "</table>";
            echo "<br>";

            $sql = "SELECT * FROM turista";
            $turistas = $conn -> query($sql);
            echo "<table border = '1'>";
                echo "<tr>";
                echo "<th>id</th>";
                echo "<th>nombre</th>";
                echo "<th>apellido1</th>";
                echo "<th>direccion</th>";
                echo "</tr>";
            while($turista = $turistas -> fetch(PDO::FETCH_OBJ)){
                
                echo "<tr>";
                echo "<td>".$turista->id."</td>";
                echo "<td>".$turista->nombre."</td>";
                echo "<td>".$turista->apellido1."</td>";
                echo "<td>".$turista->direccion."</td>";
                echo "</tr>";
            }
            echo "</table>";
            echo "<br>";

            $sql = "SELECT * FROM turista";
            $turistas = $conn -> query($sql);
            echo "<table border = '1'>";
                echo "<tr>";
                echo "<th>id</th>";
                echo "<th>nombre</th>";
                echo "<th>apellido1</th>";
                echo "<th>direccion</th>";
                echo "</tr>";
            while($turista = $turistas -> fetch(PDO::FETCH_LAZY)){
                
                echo "<tr>";
                echo "<td>".$turista->id."</td>";
                echo "<td>$turista[1]</td>";
                echo "<td>".$turista->apellido1."</td>";
                echo "<td>$turista[direccion]</td>";
                echo "</tr>";
            }
            echo "</table>";
            echo "<br>";

            $sql = "SELECT * FROM turista";
            $turistas = $conn -> query($sql);
            $turistas -> execute();
            $turistas -> bindColumn(2,$nombre);
            $turistas -> bindColumn(3,$apellido1);
            $turistas -> bindColumn('direccion',$direccion);

            echo "<table border = '1'>";
                echo "<tr>";
                echo "<th>nombre</th>";
                echo "<th>apellido1</th>";
                echo "<th>direccion</th>";
                echo "</tr>";
            while($turista = $turistas -> fetch(PDO::FETCH_BOUND)){
                
                echo "<tr>";
                echo "<td>".$nombre."</td>";
                echo "<td>".$apellido1."</td>";
                echo "<td>". $direccion."</td>";
                echo "</tr>";
            }
            echo "</table>";
            echo "<br>";
        } catch (PDOException $e) {
            echo "Connection fallida: " . $e -> getMessage();
        }
        $conn=null;
    ?>
</body>
</html>