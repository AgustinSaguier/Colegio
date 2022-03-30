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

    if(empty($_REQUEST["name"])){
        echo("<p>No ha registrado su nombre</p>");
    }
    else{
        $name=$_REQUEST["name"];
        echo("<p>Su nombre es ".$name." </p>");
    }

    if(empty($_REQUEST["lastname"])){
        echo("<p>No ha registrado su apellido</p>");
    }
    else{
        $lastname=$_REQUEST["lastname"];
        echo("<p>Su nombre es ".$lastname." </p>");
    }


    ?>
</body>
</html>