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
            while($fila=mysqli_fetch_assoc($result)){
                print_r($fila);
                echo "<br>";
                echo $fila["Fecha"];
                echo "<br>";
            }
        }
        //var_dump($result);
        mysqli_close($mysqli);
    ?>
</body>
</html>