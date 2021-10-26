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
        include "ejercicio7.php";
        $origen='Lepe';
        $destino= 'Cuenca';
        $fecha = '2021-10-21 10:25:02';
        $companya= 'LOLO';
        $modeloAvion='A256';

        creaConexion();
        //creaVuelo($origen, $destino, $fecha, $companya, $modeloAvion);
        modificaDestino("Narnia", 1);
        modificaCompanya("2", "ArmarioRoble");
        eliminaVuelo(1);
        $Vuelos = extraeVuelos();
        while($fila = $Vuelos->fetch_assoc()){
            print_r($fila);
            echo "<br>";
        }
    ?>
</body>
</html>