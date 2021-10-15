<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <?php
        /*$file = fopen("archivo.txt", "r");
        
        do{
            echo fgets($file);
        }while(feof($file) != true);
        fclose($file);*/

        $file = fopen("archivo.txt", "a");
        fwrite($file, "\nEddy,175,1358,NA,green-tan, brown,orange,600,hermaphrodite");
        fclose($file);
        $file = fopen("archivo.txt", "r");
        do{
            echo fgets($file);
            echo"<br>";
        }while(feof($file) != true);
        fclose($file);
    ?>
</body>
</html>