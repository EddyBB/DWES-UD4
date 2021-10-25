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

        $user = "developer";
        $password = "developer";
        $bd = "agenciaviajes";
        creaConexion($user,$password,$bd);

        $origen='Huelva';
        $destino= 'Dos Hermanas';
        $fecha = '2021-10-21 09:16:52';
        $companya= 'Iberia';
        $modeloAvion='A385';
    
        $conexion = creaConexion($user,$password,$bd);
        creaVuelo($conexion,$origen, $destino, $fecha, $companya, $modeloAvion);
    ?>
</body>
</html>