
<?php
    $sql="CREATE DATABASE libreria";

    $connect=mysqli_connect("localhost","agustin","12345678") or die ("ERROR DE CONEXION AL SERVIDOR!!");
    echo ("Conexion al servidor exitosa");
    mysqli_query($connect,$sql) or die ("<br>ERROR EN EJECUTAR COMANDO SQL");
    echo ("<br>Base de datos creada exitosamente");
    $sql2="CREATE TABLE  libros (
        idLibro int NOT NULL,
        Nacionalidad varchar(255) NOT NULL,
        Año int,
        PRIMARY KEY (idLibro)
    );";
    $sql3="CREATE TABLE  autor (
        idAutor int NOT NULL,
        Nacionalidad varchar(255) NOT NULL,
        Nombre varchar(255) NOT NULL,
        AñoNacimiento int,
        PRIMARY KEY (idAutor)
    );";
    $sql4="CREATE TABLE  editorial (
        idEditorial int NOT NULL,
        Email varchar(255) NOT NULL,
        Nombre varchar(255) NOT NULL,
        Direccion varchar(255) NOT NULL,
        PRIMARY KEY (idEditorial)
    );";
    
   
    $link=mysqli_connect("localhost","agustin","12345678") or die ("ERROR DE CONEXION AL SERVIDOR!!");
    echo ("Conexion al servidor exitosa");
    //ESTA FUNCION SIRVE PARA SELECCIONAR LA BASE DE DATOS
    mysqli_select_db($link,"libreria") or die ("<br>ERROR AL SELECCIONAR LA BASE DE DATOS");
    echo ("<br>Se selecciono la base de datos con exito");
    mysqli_query($link,$sql2) or die ("<br>ERROR AL EJECUTAR COMANDO SQL 1");
    echo("<br>Se ha creado la primera tabla");
    mysqli_query($link,$sql3) or die ("<br>ERROR AL EJECUTAR COMANDO SQL 2");
    echo("<br>Se ha creado la segunda tabla");
    mysqli_query($link,$sql4) or die ("<br>ERROR AL EJECUTAR COMANDO SQL 3");
    echo("<br>Se ha creado la tercer tabla");




    mysqli_close($link) or die ("<br>ERROR Al CERRAR BASE DE DATOS");
    echo("<br>Se cerro el la base de datos con exito");
?>