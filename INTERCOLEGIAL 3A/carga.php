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
    $sql="INSERT INTO Alumno (AlumnoCI, AlumnoNombre, AlumnoApellido, ColegioNombre) VALUES ('$AlumnoCI','$AlumnoNombre','$AlumnoApellido','$ColegioNombre')";
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
    $InscripcionFecha=$_REQUEST["InscripcionFecha"];
    $AlumnoCI=$_REQUEST["AlumnoCI"];
    $DeporteNombre=$_REQUEST["DeporteNombre"];
    $sql="INSERT INTO Inscripcion (InscripcionFecha, AlumnoCI, DeporteNombre) VALUES ('$InscripcionFecha','$AlumnoCI','$DeporteNombre')";
    mysqli_query ($link,$sql);
    header("Location:cargaInscripcion.php");
    mysqli_close ($link);  
}
?>