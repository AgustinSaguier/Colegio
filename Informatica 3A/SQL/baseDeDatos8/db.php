<?php
    $sql="CREATE DATABASE compuparBD";

    $connect=mysqli_connect("localhost","agustin","12345678") or die ("ERROR DE CONEXION AL SERVIDOR!!");
    echo ("Conexion al servidor exitosa");
    mysqli_query($connect,$sql) or die ("<br>ERROR EN EJECUTAR COMANDO SQL");
    echo ("<br>Base de datos creada exitosamente");
    $tablaClientes="CREATE TABLE clientes (
        codigoClie int AUTO_INCREMENT,
        nombre varchar(20) NOT NULL,
        email varchar(20) NOT NULL,
        celular varchar(20) NOT NULL,
        PRIMARY KEY (codigoClie)
    );";
    $tablaProductos="CREATE TABLE productos (
        codProd int AUTO_INCREMENT,
        descripcion varchar(20) NOT NULL,
        precio varchar(20) NOT NULL,
        cantidad varchar(20) NOT NULL,
        PRIMARY KEY (codProd)
    );";
    $tablaProveedores="CREATE TABLE proveedores (
        codProv int AUTO_INCREMENT,
        nombre varchar(20) NOT NULL,
        direccion varchar(20) NOT NULL,
        telefono varchar(20) NOT NULL,
        PRIMARY KEY (codProv)
    );";


    $link=mysqli_connect("localhost","agustin","12345678") or die ("ERROR DE CONEXION AL SERVIDOR!!");
    echo ("Conexion al servidor exitosa");
    //ESTA FUNCION SIRVE PARA SELECCIONAR LA BASE DE DATOS
    mysqli_select_db($link,"compuparBD") or die ("<br>ERROR AL SELECCIONAR LA BASE DE DATOS");
    echo ("<br>Se selecciono la base de datos con exito");
    mysqli_query($link,$tablaClientes) or die ("<br>ERROR AL EJECUTAR COMANDO SQL 1");
    echo("<br>Se ha creado la tabla");
    mysqli_query($link,$tablaProductos) or die ("<br>ERROR AL EJECUTAR COMANDO SQL 1");
    echo("<br>Se ha creado la tabla");
    mysqli_query($link,$tablaProveedores) or die ("<br>ERROR AL EJECUTAR COMANDO SQL 1");
    echo("<br>Se ha creado la tabla");
    mysqli_close($link) or die ("<br>ERROR Al CERRAR BASE DE DATOS");
    echo("<br>Se cerro el la base de datos con exito");
?>