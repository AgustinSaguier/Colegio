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
    $code=$_REQUEST["hidden"];
    if ($code==1){
        include '../conexion.php';
        //recuperar los datos que vamos a incluir
        //en la base de datos
        $idLibro=$_REQUEST["idLibro"];
        $nacionalidad=$_REQUEST["nacionalidad"];
        $año=$_REQUEST["año"];
        //seleccionar la base de datos
        mysqli_select_db($link,"libreria") or die ("<br>ERROR AL SELECCIONAR LA BASE DE DATOS");
        echo ("<br>Se selecciono la base de datos con exito");
        //el sql que permitira introducir los datos
        $sql="INSERT INTO libros (idLibro, Nacionalidad, Año) VALUES ('$idLibro','$nacionalidad','$año')";
        //ejecutar el comando sql
        mysqli_query ($link,$sql) or die ("<br>ERROR AL INSERTAR DATOS");
        echo ("<h3>Se cargaron los datos a la tabla LIBROS</h3>");
        mysqli_close ($link);
        echo ("<a href='cargaLibros.html'>Cargar Otro</a>");  
    }
    elseif ($code==2){
        include '../conexion.php';
        //recuperar los datos que vamos a incluir
        //en la base de datos
        $idAutor=$_REQUEST["idAutor"];
        $nacionalidad=$_REQUEST["nacionalidad"];
        $añoNacimiento=$_REQUEST["añoNacimiento"];
        $nombre=$_REQUEST["nombre"];
        //seleccionar la base de datos
        mysqli_select_db($link,"libreria") or die ("<br>ERROR AL SELECCIONAR LA BASE DE DATOS");
        echo ("<br>Se selecciono la base de datos con exito");
        //el sql que permitira introducir los datos
        $sql="INSERT INTO autor (idAutor, Nacionalidad, Nombre, AñoNacimiento) VALUES ('$idAutor','$nacionalidad','$nombre','$añoNacimiento')";
        //ejecutar el comando sql
        mysqli_query ($link,$sql) or die ("<br>ERROR AL INSERTAR DATOS");
        echo ("<h3>Se cargaron los datos a la tabla AUTORES</h3>");
        mysqli_close ($link);
        echo ("<a href='cargaAutores.html'>Cargar Otro</a>");
    }
    elseif ($code==3){
        include '../conexion.php';
        //recuperar los datos que vamos a incluir
        //en la base de datos
        $idEditorial=$_REQUEST["idEditorial"];
        $email=$_REQUEST["email"];
        $direccion=$_REQUEST["direccion"];
        $nombre=$_REQUEST["nombre"];
        //seleccionar la base de datos
        mysqli_select_db($link,"libreria") or die ("<br>ERROR AL SELECCIONAR LA BASE DE DATOS");
        echo ("<br>Se selecciono la base de datos con exito");
        //el sql que permitira introducir los datos
        $sql="INSERT INTO editorial (idEditorial, Email, Nombre, Direccion) VALUES ('$idEditorial','$email','$nombre','$direccion')";
        //ejecutar el comando sql
        mysqli_query ($link,$sql) or die ("<br>ERROR AL INSERTAR DATOS");
        echo ("<h3>Se cargaron los datos a la tabla EDITORIAL</h3>");
        mysqli_close ($link);
        echo ("<a href='cargaEditorial.html'>Cargar Otro</a>");
    }
    ?>
</body>
</html>