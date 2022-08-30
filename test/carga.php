<?php
$code=$_REQUEST["code"];
if ($code==1){
    include ("includes/conexion.php");
    $ColegioNombre=$_REQUEST["ColegioNombre"];
    $sql="INSERT INTO Colegio (ColegioNombre) VALUES ('$ColegioNombre')";
    mysqli_query ($link,$sql);
    header("Location:cargaColegio.html");
    mysqli_close ($link);
}

elseif ($code==2){
    include ("includes/conexion.php");
    $AlumnoCI=$_REQUEST["AlumnoCI"];
    $AlumnoNombre=$_REQUEST["AlumnoNombre"];
    $AlumnoApellido=$_REQUEST["AlumnoApellido"];
    $ColegioNombre=$_REQUEST["ColegioNombre"];
    echo($ColegioNombre);
    $sql="INSERT INTO Alumno (AlumnoCI, AlumnoNombre, AlumnoApellido, ColegioNombre, AlumnoEntrada) VALUES ('$AlumnoCI','$AlumnoNombre','$AlumnoApellido','$ColegioNombre',0)";
    mysqli_query ($link,$sql);
    header("Location:cargaAlumno.php");
    mysqli_close ($link);  
}

elseif ($code==3){
    include ("includes/conexion.php");
    $DeporteNombre=$_REQUEST["DeporteNombre"];
    $sql="INSERT INTO Deporte (DeporteNombre) VALUES ('$DeporteNombre')";
    mysqli_query ($link,$sql);
    header("Location:cargaDeporte.html");
    mysqli_close ($link);  
}

elseif ($code==4){
    include ("includes/conexion.php");
    $PartidoFecha=$_REQUEST["PartidoFecha"];
    $ColegioNombreUno=$_REQUEST["ColegioNombreUno"];
    $ColegioNombreDos=$_REQUEST["ColegioNombreDos"];
    $DeporteNombre=$_REQUEST["DeporteNombre"];
    $sql="INSERT INTO Partido (PartidoFecha, ColegioNombre, DeporteNombre) VALUES ('$PartidoFecha','$ColegioNombreUno','$DeporteNombre')";
    mysqli_query ($link,$sql);
    $sql="INSERT INTO Partido (PartidoFecha, ColegioNombre, DeporteNombre) VALUES ('$PartidoFecha','$ColegioNombreDos','$DeporteNombre')";
    mysqli_query ($link,$sql);
    $sql="SELECT AlumnoCI FROM Alumno WHERE ColegioNombre = '$ColegioNombreUno'";
    $tabla=mysqli_query($link,$sql) or die ("ERROR");
    $cantfilas=mysqli_num_rows($tabla) or die ("ERROR");
    for ($z=0;$z<$cantfilas;$z++){
        $fila=mysqli_fetch_array($tabla);
        $ColegioCI = $fila['AlumnoCI'];
        $sqlDos = "SELECT * FROM inscripcion WHERE AlumnoCI = $ColegioCI AND DeporteNombre = '$DeporteNombre'" ;
        $tablaDos=mysqli_query($link,$sqlDos) or die ("ERROR");
        while ($row = mysqli_fetch_array($tablaDos)) {
            $FinalCI = $row['AlumnoCI'];
            $sqlTres = "SELECT AlumnoEntrada FROM Alumno WHERE AlumnoCI = $FinalCI";
            $tablaTres = mysqli_query($link,$sqlTres);
            while ($rowDos = mysqli_fetch_array($tablaTres)){
                $AlumnoEntrada = $rowDos['AlumnoEntrada'];
                $NewEntrada =  $AlumnoEntrada + 1;
                $sqlCuatro = "UPDATE `Alumno` SET `AlumnoEntrada` = '$NewEntrada' WHERE `Alumno`.`AlumnoCI` = $FinalCI";   
                mysqli_query ($link,$sqlCuatro);    
            }
        }
    } 

    $sql="SELECT AlumnoCI FROM Alumno WHERE ColegioNombre = '$ColegioNombreDos'";
    $tabla=mysqli_query($link,$sql) or die ("ERROR");
    $cantfilas=mysqli_num_rows($tabla) or die ("ERROR");
    for ($z=0;$z<$cantfilas;$z++){
        $fila=mysqli_fetch_array($tabla);
        $ColegioCI = $fila['AlumnoCI'];
        $sqlDos = "SELECT * FROM inscripcion WHERE AlumnoCI = $ColegioCI AND DeporteNombre = '$DeporteNombre'" ;
        $tablaDos=mysqli_query($link,$sqlDos) or die ("ERROR");
        while ($row = mysqli_fetch_array($tablaDos)) {
            $FinalCI = $row['AlumnoCI'];
            $sqlTres = "SELECT AlumnoEntrada FROM Alumno WHERE AlumnoCI = $FinalCI";
            $tablaTres = mysqli_query($link,$sqlTres);
            while ($rowDos = mysqli_fetch_array($tablaTres)){
                $AlumnoEntrada = $rowDos['AlumnoEntrada'];
                $NewEntrada =  $AlumnoEntrada + 1;
                $sqlCuatro = "UPDATE `Alumno` SET `AlumnoEntrada` = '$NewEntrada' WHERE `Alumno`.`AlumnoCI` = $FinalCI";   
                mysqli_query ($link,$sqlCuatro);    
            }
        }
    }
    header("Location:cargaPartido.php");
    mysqli_close ($link);  
}

elseif ($code==5){
    include ("includes/conexion.php");
    $AlumnoCI=$_REQUEST["AlumnoCI"];
    $DeporteNombre=$_REQUEST["DeporteNombre"];
    $sql="INSERT INTO Inscripcion (AlumnoCI, DeporteNombre) VALUES ('$AlumnoCI','$DeporteNombre')";
    mysqli_query ($link,$sql);
    header("Location:cargaInscripcion.php");
    mysqli_close ($link);  
}
?>