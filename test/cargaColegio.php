<?php
include ("includes/conexion.php"); 
session_start();
if (!(isset ($_SESSION["Usuario"])))
    header ("Location:index.php")   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="content">
        <div class="primary-header">
            <img src="img/logo.png" alt="" style="height: 4.5rem;">
            
            <nav class="nav">
                <ul>
                    <li><a href="ingreso.php">Ingreso</a></li>
                    <li><a href="cargaColegio.php">Carga Colegio</a></li>
                    <li><a href="cargaAlumno.php">Carga Alumno</a></li>
                    <li><a href="cargaDeporte.php">Carga Deporte</a></li>
                    <li><a href="cargaInscripcion.php">Carga Inscripcion</a></li>
                    <li><a href="cargaPartido.php">Carga Partido</a></li>
                    <li id="push-right"><a href="index.php">Salir</a></li>
                </ul>
        </div>
        <div class="container">
            <form action="carga.php">
                <input type="hidden" name="code" value="1">
                <h1>Cargar Tabla Colegio</h1>
                <h4>Nombre del Colegio:</h4>
                <input type="text" name="ColegioNombre" id="">
                <br>
                <input type="submit" value="Cargar">
            </form>
        </div>
    </div>
</body>
</html>