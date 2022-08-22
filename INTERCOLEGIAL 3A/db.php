<?php
    $sql="CREATE DATABASE Intercolegial";

    $connect=mysqli_connect("localhost","agustin","12345678") or die ("ERROR DE CONEXION AL SERVIDOR!!");
    echo ("Conexion al servidor exitosa");
    mysqli_query($connect,$sql) or die ("<br>ERROR EN EJECUTAR COMANDO SQL");
    echo ("<br>Base de datos creada exitosamente");
    $tablaColegio="CREATE TABLE  Colegio (
        ColegioID int AUTO_INCREMENT,
        ColegioNombre varchar(255) NOT NULL UNIQUE,
        PRIMARY KEY (ColegioID)
    );";
    $tablaAlumno="CREATE TABLE  Alumno (
        AlumnoCI int NOT NULL UNIQUE,
        AlumnoNombre varchar(255) NOT NULL,
        AlumnoApellido varchar(255) NOT NULL,
        ColegioNombre varchar(255) NOT NULL,
        PRIMARY KEY (AlumnoCI),
        FOREIGN KEY (ColegioNombre) REFERENCES Colegio(ColegioNombre)
    );";
    $tablaDeporte="CREATE TABLE  Deporte (
        DeporteID int AUTO_INCREMENT,
        DeporteNombre varchar(255) NOT NULL UNIQUE,
        PRIMARY KEY (DeporteID)
    );";
    $tablaInscripcion="CREATE TABLE  Inscripcion (
        InscripcionID int AUTO_INCREMENT,
        InscripcionFecha DATE,
        AlumnoCI int NOT NULL,
        DeporteNombre varchar(255) NOT NULL,
        PRIMARY KEY (InscripcionID),
        FOREIGN KEY (AlumnoCI) REFERENCES Alumno(AlumnoCi),
        FOREIGN KEY (DeporteNombre) REFERENCES Deporte(DeporteNombre)
    );";
        $tablaUsuario="CREATE TABLE  Usuario (
        Usuario varchar(255) NOT NULL,
        Contraseña varchar(255) NOT NULL
    );";

    
    $link=mysqli_connect("localhost","agustin","12345678") or die ("ERROR DE CONEXION AL SERVIDOR!!");
    echo ("Conexion al servidor exitosa");
    //ESTA FUNCION SIRVE PARA SELECCIONAR LA BASE DE DATOS
    mysqli_select_db($link,"Intercolegial") or die ("<br>ERROR AL SELECCIONAR LA BASE DE DATOS");
    echo ("<br>Se selecciono la base de datos con exito");
    mysqli_query($link,$tablaColegio) or die ("<br>ERROR AL EJECUTAR COMANDO SQL 1");
    echo("<br>Se ha creado la primera tabla");
    mysqli_query($link,$tablaAlumno) or die ("<br>ERROR AL EJECUTAR COMANDO SQL 2");
    echo("<br>Se ha creado la segunda tabla");
    mysqli_query($link,$tablaDeporte) or die ("<br>ERROR AL EJECUTAR COMANDO SQL 3");
    echo("<br>Se ha creado la tercera tabla");
    mysqli_query($link,$tablaInscripcion) or die ("<br>ERROR AL EJECUTAR COMANDO SQL 4");
    echo("<br>Se ha creado la cuarta tabla");
    mysqli_query($link,$tablaUsuario) or die ("<br>ERROR AL EJECUTAR COMANDO SQL 4");
    echo("<br>Se ha creado la quinta tabla");

    mysqli_close($link) or die ("<br>ERROR Al CERRAR BASE DE DATOS");
    echo("<br>Se cerro el la base de datos con exito");
    ?>