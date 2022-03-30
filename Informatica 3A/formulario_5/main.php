<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style type="text/css">
            
        body{
            background-color: hsl(226, 100%, 90%);
            font-family: Arial, Helvetica, sans-serif;
        }

        h1{
        text-align: center;
        }

    </style>

</head>
<body>
    <?php

    echo("<h1>Datos Personales 5 (Formulario)</h1>");

    echo("<p>Sus datos son: </p>");

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
        echo("<p>Su apellido es ".$lastname." </p>");
    }
    
    if(($_REQUEST["edad"]=="empty")){
        echo("<p>No ha registrado su edad</p>");
    }
    else{
        $edad=$_REQUEST["edad"];
        echo("<p>Edad: ".$edad." </p>");
    }

    if(empty($_REQUEST["peso"])){
        echo("<p>No ha registrado su peso</p>");
    }
    else{
        $peso=$_REQUEST["peso"];
        echo("<p>Su peso es ".$peso." kg </p>");
    }

    if(empty($_REQUEST["sexo"])){
        echo("<p>No ha registrado su sexo</p>");
    }
    else{
        $sexo=$_REQUEST["sexo"];
        echo("<p>Su sexo es ".$sexo."  </p>");
    }

    if(empty($_REQUEST["estado"])){
        echo("<p>No ha registrado su estado civil</p>");
    }
    else{
        $estado=$_REQUEST["estado"];
        echo("<p>Su estado civil es ".$estado."  </p>");
    }

    $name = $_GET['aficiones'];

    if (isset($_GET['aficiones'])) {
        echo "Tus aficiones son: <br>";

        foreach ($name as $aficiones){
            echo $aficiones."<br />";
        }
    } else {
        echo "No elegiste tus aficiones.";
    }

    echo("<hr>")

    ?>
</body>
</html>