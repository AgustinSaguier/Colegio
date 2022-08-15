<?php include ("includes/conexion.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
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
            <form action="" method="get">
                <h1>Sistema de Ingreso</h1>
                <h4>CI del Alumno:</h4>
                <input type="text" name="AlumnoCI" id="">
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
                <input type="submit" value="submit" name="submit">
            </form>
            <?php
                if (isset($_GET["submit"])) {
                    $AlumnoCI=$_REQUEST ['AlumnoCI'];
                    $DeporteNombre=$_REQUEST['DeporteNombre'];
                    $sql="SELECT * FROM Inscripcion WHERE AlumnoCI = '$AlumnoCI' AND DeporteNombre = '$DeporteNombre'";
                    $resultado=mysqli_query($link,$sql);
                    $nfilas=mysqli_num_rows ($resultado);
                    $fila=mysqli_fetch_array($resultado);
                    if ($nfilas > 0){
                      echo("
                        <div class='alert'>
                            <i class='bi bi-exclamation-triangle'></i>
                            <span class='alert-title'>Ingreso Exitoso</span>
                            <br><br>
                            <span class='alert-description'>Entrada para ".$AlumnoCI."</span>
                        </div>
                        ");
                    }
                    else{
                        echo("
                        <div class='alert'>
                            <i class='bi bi-exclamation-triangle'></i>
                            <span class='alert-title'>Se produjo un problema</span>
                            <br><br>
                            <span class='alert-description'>El usuario o la contraseña no coincide</span>
                        </div>
                        ");
                    }
                  } 

            ?>
        </div>
    </div>
</body>
</html>
