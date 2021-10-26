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
        include "ejercicio6.php";

        creaConexion();

        $origen='Huelva';
        $destino= 'Dos Hermanas';
        $fecha = '2021-10-21 09:16:52';
        $companya= 'Iberia';
        $modeloAvion='A385';
    
        creaVuelo($origen, $destino, $fecha, $companya, $modeloAvion);
        modificaDestino("2", "Narnia");
        modificaCompanya("2", "ArmarioRoble");
        $Vuelos = extraeVuelos();
        while($fila = mysqli_fetch_assoc($Vuelos)){
            print_r($fila);
            echo "<br>";
        }
    ?>
</body>
</html>