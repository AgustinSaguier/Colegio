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
                <br>
            </form>
            <?php
                date_default_timezone_set('America/Asuncion');
                $currentDate = date("Y-m-d");
                if (isset($_GET["submit"])) {
                    $AlumnoCI=$_REQUEST ['AlumnoCI'];
                    $DeporteNombre=$_REQUEST['DeporteNombre'];
                    $sql="SELECT * FROM Inscripcion WHERE AlumnoCI = '$AlumnoCI'";
                    $resultado=mysqli_query($link,$sql);
                    $nfilas=mysqli_num_rows ($resultado);
                    if ($nfilas > 0){
                        $sql="SELECT * FROM Inscripcion WHERE AlumnoCI = '$AlumnoCI' AND DeporteNombre = '$DeporteNombre'";
                        $resultado=mysqli_query($link,$sql);
                        $nfilas=mysqli_num_rows ($resultado);
                        if ($nfilas > 0){
                            $sql="SELECT * FROM Inscripcion WHERE AlumnoCI = '$AlumnoCI' AND DeporteNombre = '$DeporteNombre'";
                            $resultado=mysqli_query($link,$sql);
                            $nfilas=mysqli_num_rows ($resultado);
                            $sql="SELECT AlumnoEntrada AS AlumnoEntrada FROM Alumno WHERE AlumnoCI = '$AlumnoCI'";
                            $tabla=mysqli_query($link,$sql) or die ("ERROR");
                            $fila=mysqli_fetch_array($tabla);
                            $AlumnoEntrada = $fila["AlumnoEntrada"];
                            if ($AlumnoEntrada >= 1){
                                $sql = "SELECT ColegioNombre AS ColegioNombre FROM Alumno WHERE AlumnoCI = $AlumnoCI";
                                $tabla=mysqli_query($link,$sql) or die ("ERROR");
                                $fila=mysqli_fetch_array($tabla);
                                $ColegioNombre = $fila["ColegioNombre"];
                                $sql = "SELECT PartidoFecha AS PartidoFecha FROM Partido WHERE ColegioNombre = '$ColegioNombre' AND DeporteNombre = '$DeporteNombre' AND PartidoFecha = '$currentDate'";
                                $resultado=mysqli_query($link,$sql);
                                $fila=mysqli_fetch_array($resultado);
                                $nfilas=mysqli_num_rows ($resultado);
                                if ($nfilas > 0){
                                    $NewEntrada =  $AlumnoEntrada - 1;
                                    $sql = "UPDATE `Alumno` SET `AlumnoEntrada` = '$NewEntrada' WHERE `Alumno`.`AlumnoCI` = $AlumnoCI";
                                    mysqli_query ($link,$sql);
                                    echo("
                                    <div class='alert-success'>
                                        <i class='bi bi-exclamation-triangle'></i>
                                        <span class='alert-success-title'>Ingreso Exitoso</span>
                                        <br><br>
                                        <span class='alert-description'>Ingreso aprobado para alumno con CI ".$AlumnoCI."</span>
                                        <span class='alert-description'>Entradas restantes: ".$NewEntrada."</span>
                                    </div>
                                    ");
                                    
                                }
                                else{
                                    echo ($errorPartido);
                                }
                            }
                            else{
                                echo ($errorEntradas);
                            }
                        }
                        else{
                            echo ($errorModalidad);
                        }          
                    }
                    else{
                        echo ($errorCI);
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>
