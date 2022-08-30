<?php include ("includes/conexion.php") ?>
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
                    <li><a href="cargaColegio.html">Carga Colegio</a></li>
                    <li><a href="cargaAlumno.php">Carga Alumno</a></li>
                    <li><a href="cargaDeporte.html">Carga Deporte</a></li>
                    <li><a href="cargaInscripcion.php">Carga Inscripcion</a></li>
                    <li><a href="cargaPartido.php">Carga Partido</a></li>
                    <li id="push-right"><a href="index.php">Salir</a></li>
                </ul>
            </nav>
        </div>
        <div class="container">
            <form action="carga.php">
                <input type="hidden" name="code" value="4">
                <h1>Cargar Tabla Partido</h1>
                <h4>Fecha del Partido:</h4>
                <input type="date" name="PartidoFecha" id="">
                <h4>Primer Colegio:</h4>
                <?php
                $sql="SELECT * FROM Colegio";
                $tabla=mysqli_query($link,$sql) or die ("ERROR");
                $cantfilas=mysqli_num_rows($tabla) or die ("ERROR2");
                echo("<select name='ColegioNombreUno'>");
                for ($z=0;$z<$cantfilas;$z++){
                    $fila=mysqli_fetch_array($tabla);
                    echo '<option value="'.$fila["ColegioNombre"].'">'.$fila["ColegioNombre"].'</option>';
                }
                echo("</select>");
                ?>
                <h4>Segundo Colegio:</h4>
                <?php
                $sql="SELECT * FROM Colegio";
                $tabla=mysqli_query($link,$sql) or die ("ERROR");
                $cantfilas=mysqli_num_rows($tabla) or die ("ERROR2");
                echo("<select name='ColegioNombreDos'>");
                for ($z=0;$z<$cantfilas;$z++){
                    $fila=mysqli_fetch_array($tabla);
                    echo '<option value="'.$fila["ColegioNombre"].'">'.$fila["ColegioNombre"].'</option>';
                }
                echo("</select>");
                ?>
                <h4>Deporte:</h4>
                <?php
                $sql="SELECT * FROM Deporte";
                $tabla=mysqli_query($link,$sql) or die ("ERROR");
                $cantfilas=mysqli_num_rows($tabla) or die ("ERROR2");
                echo("<select name='DeporteNombre'>");
                for ($z=0;$z<$cantfilas;$z++){
                    $fila=mysqli_fetch_array($tabla);
                    echo '<option value="'.$fila["DeporteNombre"].'">'.$fila["DeporteNombre"].'</option>';
                }
                echo("</select>");
                ?>
                <br>
                <input type="submit" value="Cargar">
            </form>
        </div>
    </div>
</body>
</html>