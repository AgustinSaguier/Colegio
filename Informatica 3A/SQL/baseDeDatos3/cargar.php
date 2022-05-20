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
    $code=$_REQUEST["code"];
    if ($code==1){
        include 'conexion.php';
        //recuperar los datos que vamos a incluir
        //en la base de datos
        $codigoFab=$_REQUEST["codigoFab"];
        $nombreFab=$_REQUEST["nombreFab"];
        //seleccionar la base de datos
        mysqli_select_db($link,"TiendaInformatica") or die ("<br>ERROR AL SELECCIONAR LA BASE DE DATOS");
        echo ("<br>Se selecciono la base de datos con exito");
        //el sql que permitira introducir los datos
        $sql="INSERT INTO fabricantes (CodigoFab, Nombre) VALUES ('$codigoFab','$nombreFab')";
        //ejecutar el comando sql
        mysqli_query ($link,$sql) or die ("<br>ERROR AL INSERTAR DATOS");
        echo ("<h3>Se cargaron los datos a la tabla FABRICANTES</h3>");
        mysqli_close ($link);
        echo ("<a href='index.html'>Cargar Otro</a>");  
    }
    elseif ($code==2){
        include 'conexion.php';
        //recuperar los datos que vamos a incluir
        //en la base de datos
        $codigoArt=$_REQUEST["codigoArt"];
        $nombreArt=$_REQUEST["nombreArt"];
        $precioArt=$_REQUEST["precioArt"];
        $codigoFab=$_REQUEST["codigoFab"];
        //seleccionar la base de datos
        mysqli_select_db($link,"TiendaInformatica") or die ("<br>ERROR AL SELECCIONAR LA BASE DE DATOS");
        echo ("<br>Se selecciono la base de datos con exito");
        //el sql que permitira introducir los datos
        $sql="INSERT INTO articulos (CodigoArt, Nombre, Precio, CodigoFab) VALUES ('$codigoArt','$nombreArt','$precioArt','$codigoFab')";
        //ejecutar el comando sql
        mysqli_query ($link,$sql) or die ("<br>ERROR AL INSERTAR DATOS");
        echo ("<h3>Se cargaron los datos a la tabla ARTICULOS</h3>");
        mysqli_close ($link);
        echo ("<a href='index.html'>Cargar Otro</a>");  
    }
?>
</body>
</html>