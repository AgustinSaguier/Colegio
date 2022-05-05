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
    include 'conexion.php';
    /*recuperar los datos que vamos a incluir
    en la base de datos*/
    $idLibro=$_REQUEST["idLibro"];
    $nacionalidad=$_REQUEST["nacionalidad"];
    $año=$_REQUEST["año"];
    //seleccionar la base de datos
    mysqli_select_db($link,"libreria") or die ("<br>ERROR AL SELECCIONAR LA BASE DE DATOS");
    echo ("<br>Se selecciono la base de datos con exito");
    //el sql que permitira introducir los datos
    $sql="insert into libros (idLibro,Nacionalidad,Año) values ($idLibro,$nacionalidad,$año)";
    
    
    
    ?>
</body>
</html>