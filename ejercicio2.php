<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <?php

        /*$file = fopen("./locations.csv", "a");
        $array = ["\neddy","279.13123123-40.123123131"];
        fputcsv($file, $array, "\t");
        fclose($file);

        $file = fopen("./locations.csv", "r");
        while(($data = fgetcsv($file,1000, ",")) !== false){
            foreach($data as $value){
                echo $value . "<br />\n";

            }
        }
        fclose($file);*/



        /*$file = fopen("./locations.csv", "a");
        $array = ['eddy','279','Sevilla'];
        $fwrite($file, $array);
        fputcsv($file, $array, "\t");
        fclose($fp);*/
        
        $datos=[];
        $datos[0] = "Eddy";
        $datos[1] = "20.123123-40.123123";
        $file = fopen("./locations.csv", "a+");
        fputcsv($file,$datos);
        fclose($file);

        $file = fopen("./locations.csv", "r+");
        echo "<table border = 2>";
        echo "<th> Location </th> <th>Latitude</th>";

        while(fgetcsv($file) == true){
            $array = (fgetcsv($file));
            echo "<tr>";
            echo "<td>", "$array[0]", "</td>";
            echo "<td>", "$array[1]", "</td>";
            echo "</tr>";
        }
        echo "</table>";
        fclose($file);



    ?>
</body>
</html>