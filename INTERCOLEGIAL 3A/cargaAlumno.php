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
                    <li><a href="">Ingreso</a></li>
                    <li><a href="">Carga Colegio</a></li>
                    <li><a href="">Carga Alumno</a></li>
                    <li><a href="">Carga Deporte</a></li>
                    <li><a href="">Carga Inscripcion</a></li>
                    <li class="push-right"><a href="">Salir</a></li>
                </ul>
            </nav>
        </div>
        <div class="container">
            <form action="carga.php">
                <input type="hidden" name="code" value="2">
                <h1>Cargar Tabla Aluumno</h1>
                <h4>CI del Alumno:</h4>
                <input type="text" name="AlumnoCI" id="">
                <h4>Nombre del Alumno:</h4>
                <input type="text" name="AlumnoNombre" id="">
                <h4>Apellido del Alumno:</h4>
                <input type="text" name="AlumnoApellido" id="">
                <h4>Nombre del Colegio:</h4>
                <?php
                $sql="SELECT * FROM Colegio";
                $tabla=mysqli_query($link,$sql) or die ("ERROR");
                $cantfilas=mysqli_num_rows($tabla) or die ("ERROR2");
                echo("<select name='ColegioNombre'>");
                for ($z=0;$z<$cantfilas;$z++){
                    $fila=mysqli_fetch_array($tabla);
                    echo '<option value="'.$fila["ColegioNombre"].'">'.$fila["ColegioNombre"].'</option>';
                }
                echo("</select>");
                ?>
                <br>
                <input type="submit" value="Verificar">
            </form>
        </div>
    </div>
</body>
</html>