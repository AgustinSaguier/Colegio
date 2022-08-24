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
    header("Location:cargaPartido.php");
    mysqli_close ($link);  
}
elseif ($code==5){
    include ("includes/conexion.php");
    $AlumnoCI=$_REQUEST["AlumnoCI"];
    $DeporteNombre=$_REQUEST["DeporteNombre"];
    $sql="SELECT AlumnoEntrada AS AlumnoEntrada FROM Alumno WHERE AlumnoCI = '$AlumnoCI'";
    $tabla=mysqli_query($link,$sql) or die ("ERROR");
    $fila=mysqli_fetch_array($tabla);
    $AlumnoEntrada = $fila["AlumnoEntrada"];
    $NewEntrada =  $AlumnoEntrada + 1;
    echo($NewEntrada);
    $sql = "UPDATE `Alumno` SET `AlumnoEntrada` = '$NewEntrada' WHERE `Alumno`.`AlumnoCI` = $AlumnoCI";
    mysqli_query ($link,$sql);
    $sql="INSERT INTO Inscripcion (AlumnoCI, DeporteNombre) VALUES ('$AlumnoCI','$DeporteNombre')";
    mysqli_query ($link,$sql);
    header("Location:cargaInscripcion.php");
    mysqli_close ($link);  
}
?>