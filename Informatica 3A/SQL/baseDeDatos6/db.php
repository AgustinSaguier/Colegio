<?php
    $sql="CREATE DATABASE Login";

    $connect=mysqli_connect("localhost","agustin","12345678") or die ("ERROR DE CONEXION AL SERVIDOR!!");
    echo ("Conexion al servidor exitosa");
    mysqli_query($connect,$sql) or die ("<br>ERROR EN EJECUTAR COMANDO SQL");
    echo ("<br>Base de datos creada exitosamente");
    $tablaUsuario="CREATE TABLE Usuario (
        id int AUTO_INCREMENT,
        Username varchar(20) NOT NULL,
        Password int NOT NULL,
        PRIMARY KEY (id)
    );";


    $link=mysqli_connect("localhost","agustin","12345678") or die ("ERROR DE CONEXION AL SERVIDOR!!");
    echo ("Conexion al servidor exitosa");
    //ESTA FUNCION SIRVE PARA SELECCIONAR LA BASE DE DATOS
    mysqli_select_db($link,"Login") or die ("<br>ERROR AL SELECCIONAR LA BASE DE DATOS");
    echo ("<br>Se selecciono la base de datos con exito");
    mysqli_query($link,$tablaUsuario) or die ("<br>ERROR AL EJECUTAR COMANDO SQL 1");
    echo("<br>Se ha creado la tabla");

    mysqli_close($link) or die ("<br>ERROR Al CERRAR BASE DE DATOS");
    echo("<br>Se cerro el la base de datos con exito");
    ?>