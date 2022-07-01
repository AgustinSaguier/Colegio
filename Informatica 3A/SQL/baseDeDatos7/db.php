<?php
    $sql="CREATE DATABASE mundoSA";

    $connect=mysqli_connect("localhost","agustin","12345678") or die ("ERROR DE CONEXION AL SERVIDOR!!");
    echo ("Conexion al servidor exitosa");
    mysqli_query($connect,$sql) or die ("<br>ERROR EN EJECUTAR COMANDO SQL");
    echo ("<br>Base de datos creada exitosamente");
    $tablaVendedor="CREATE TABLE Vendedor (
        idVendedor int NOT NULL AUTO_INCREMENT,
        Username varchar(255) NOT NULL,
        Password varchar (255) NOT NULL,
        Email varchar (255) NOT NULL,
        Photo LONGBLOB NOT NULL,
        PRIMARY KEY (idVendedor)
    );";
    $tablaArticulos="CREATE TABLE  Articulos (
        CodigoArticulo int NOT NULL AUTO_INCREMENT,
        Nombre varchar(255) NOT NULL,
        PrecioCompra int NOT NULL,
        PrecioPublico int NOT NULL,
        Stock int NOT NULL,
        PhotoArticulo LONGBLOB NOT NULL,
        PRIMARY KEY (CodigoArticulo)
    );";
    $tablaVentas="CREATE TABLE  Ventas (
        idVenta int NOT NULL AUTO_INCREMENT,
        idVendedor int NOT NULL,
        Fecha DATE DEFAULT CURRENT_TIMESTAMP,
        CodigoArticulo int NOT NULL,
        Cantidad int NOT NULL,
        Ganancia int NOT NULL,
        PRIMARY KEY (idVenta),
        FOREIGN KEY (idVendedor) REFERENCES Vendedor(idVendedor),
        FOREIGN KEY (CodigoArticulo) REFERENCES Articulos(CodigoArticulo)
    );";

    $link=mysqli_connect("localhost","agustin","12345678") or die ("ERROR DE CONEXION AL SERVIDOR!!");
    echo ("Conexion al servidor exitosa");
    //ESTA FUNCION SIRVE PARA SELECCIONAR LA BASE DE DATOS
    mysqli_select_db($link,"mundoSA") or die ("<br>ERROR AL SELECCIONAR LA BASE DE DATOS");
    echo ("<br>Se selecciono la base de datos con exito");
    mysqli_query($link,$tablaVendedor) or die ("<br>ERROR AL EJECUTAR COMANDO SQL 1");
    echo("<br>Se ha creado la primera tabla");
    mysqli_query($link,$tablaArticulos) or die ("<br>ERROR AL EJECUTAR COMANDO SQL 2");
    echo("<br>Se ha creado la segunda tabla");
    mysqli_query($link,$tablaVentas) or die ("<br>ERROR AL EJECUTAR COMANDO SQL 3");
    echo("<br>Se ha creado la tercera tabla");

    mysqli_close($link) or die ("<br>ERROR Al CERRAR BASE DE DATOS");
    echo("<br>Se cerro el la base de datos con exito");
    ?>