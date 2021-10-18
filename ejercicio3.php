<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 3</title>
</head>
<body>
    <?php
        $informacion = simplexml_load_file("./archivo.xml");
        
        /*printf("title: %s", $informacion->book[1]->title);
        echo "<br>";
        printf("genre: %s", $informacion->book[1]->genre);
        echo "<br>";
        printf("price: %s", $informacion->book[1]->price);
        echo "<br>";
        printf("author: %s", $informacion->book[1]->author);
        echo "<br>";
        printf("publish_date: %s", $informacion->book[1]->publish_date);
        echo "<br>";
        printf("decription: %s", $informacion->book[1]->description);
        echo "<br>";*/
        echo "<table border = 1>";
        echo "<th>titulo</th> <th>genero</th> <th>precio</th>";
        foreach ($informacion as $libro) {
            //echo '<br>author: '.$libro->author.'<br>';
            echo "<tr>";
            echo '<td>'.$libro->title.'</td>';
            echo '<td>'.$libro->genre.'</td>';
            echo '<td>'.$libro->price.'</td>';
            echo "</tr>";
            //echo 'author: '.$libro->author.'<br>';
            //echo 'publish_date: '.$libro->publish_date.'<br>';
            //echo "description: ".$libro->description."<br>\n";
            
        }
    ?>
</body>
</html>