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
    $sql="CREATE TABLE  Profesores (
        CI int NOT NULL,
        FirstName varchar(255) NOT NULL,
        LastName varchar(255),
        Age int,
        PRIMARY KEY (CI)
    );";
   
    $link=mysqli_connect("localhost","agustin","12345678") or die ("ERROR DE CONEXION AL SERVIDOR!!");
    echo ("Conexion al servidor exitosa");
    //ESTA FUNCION SIRVE PARA SELECCIONAR LA BASE DE DATOS
    mysqli_select_db($link,"colegio") or die ("<br>ERROR AL SELECCIONAR LA BASE DE DATOS");
    echo ("<br>Se selecciono la base de datos con exito");
    mysqli_query($link,$sql) or die ("<br>ERROR AL EJECUTAR COMANDO SQL");
    echo("<br>Se ejecuto el comando sql con exito");
    mysqli_close($link) or die ("<br>ERROR Al CERRAR BASE DE DATOS");
    echo("<br>Se cerro el la base de datos con exito");

    ?>
</body>
</html>