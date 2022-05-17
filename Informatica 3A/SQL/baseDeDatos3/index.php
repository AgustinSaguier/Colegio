
<?php
    $sql="CREATE DATABASE TiendaInformatica";

    $connect=mysqli_connect("localhost","agustin","12345678") or die ("ERROR DE CONEXION AL SERVIDOR!!");
    echo ("Conexion al servidor exitosa");
    mysqli_query($connect,$sql) or die ("<br>ERROR EN EJECUTAR COMANDO SQL");
    echo ("<br>Base de datos creada exitosamente");
    $tablaFabricantes="CREATE TABLE  Fabricantes (
        CodigoFab int NOT NULL,
        Nombre varchar(255) NOT NULL,
        PRIMARY KEY (CodigoFab)
    );";
    $tablaArticulos="CREATE TABLE  Articulos (
        CodigoArt int NOT NULL,
        Nombre varchar(255) NOT NULL,
        Precio int NOT NULL,
        CodigoFab int NOT NULL,
        PRIMARY KEY (CodigoArt)
    );";

    
    $link=mysqli_connect("localhost","agustin","12345678") or die ("ERROR DE CONEXION AL SERVIDOR!!");
    echo ("Conexion al servidor exitosa");
    //ESTA FUNCION SIRVE PARA SELECCIONAR LA BASE DE DATOS
    mysqli_select_db($link,"TiendaInformatica") or die ("<br>ERROR AL SELECCIONAR LA BASE DE DATOS");
    echo ("<br>Se selecciono la base de datos con exito");
    mysqli_query($link,$tablaFabricantes) or die ("<br>ERROR AL EJECUTAR COMANDO SQL 1");
    echo("<br>Se ha creado la primera tabla");
    mysqli_query($link,$tablaArticulos) or die ("<br>ERROR AL EJECUTAR COMANDO SQL 2");
    echo("<br>Se ha creado la segunda tabla");

    mysqli_close($link) or die ("<br>ERROR Al CERRAR BASE DE DATOS");
    echo("<br>Se cerro el la base de datos con exito");
?>