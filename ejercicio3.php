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
        $file = simplexml_load_file("./archivo.xml");
        
        /*printf("title: %s", $file->book[1]->title);
        echo "<br>";
        printf("genre: %s", $file->book[1]->genre);
        echo "<br>";
        printf("price: %s", $file->book[1]->price);
        echo "<br>";
        printf("author: %s", $file->book[1]->author);
        echo "<br>";
        printf("publish_date: %s", $file->book[1]->publish_date);
        echo "<br>";
        printf("decription: %s", $file->book[1]->description);
        echo "<br>";*/
        /*echo "<table border = 1>";
        echo "<th>titulo</th> <th>genero</th> <th>precio</th>";
        foreach ($file as $libro) {
            //echo '<br>author: '.$libro->author.'<br>';
            echo "<tr>";
            echo '<td>'.$libro->title.'</td>';
            echo '<td>'.$libro->genre.'</td>';
            echo '<td>'.$libro->price.'</td>';
            echo "</tr>";
            //echo 'author: '.$libro->author.'<br>';
            //echo 'publish_date: '.$libro->publish_date.'<br>';
            //echo "description: ".$libro->description."<br>\n";
            
        }*/
        
        $milibro=$file->addChild("book");
        $milibro->addAttribute("id","bk113");
        $milibro->addChild("author","Kimia");
        $milibro->addChild("title","Blood");
        $milibro->addChild("genre","Horror");
        $milibro->addChild("price","32.2");
        $milibro->addChild("publish_date","2020-02-02");
        $milibro->addChild("description","Here we have a horror movie.");
        $file->asXML("archivo.xml");

        echo "<table border = 1>";
        echo "<th>titulo</th> <th>genero</th> <th>precio</th>";
        foreach ($file -> book as $lib) {
            echo "<tr>";
            echo '<td>'.$lib->title.'</td>';
            echo '<td>'.$lib->genre.'</td>';
            echo '<td>'.$lib->price.'</td>';
            echo "</tr>"; 
        }

        
    ?>
</body>
</html>