<?php
include ("includes/conexion.php");
$Codigo=$_REQUEST["Codigo"];
$Nombre=$_REQUEST["Nombre"];
$Presupuesto=$_REQUEST["Presupuesto"];
mysqli_select_db($link,"Departamentos");
$sql="INSERT INTO Departamento (Codigo, Nombre, Presupuesto) VALUES ('$Codigo','$Nombre','$Presupuesto')";
mysqli_query ($link,$sql);
mysqli_close ($link);
header("Location: dbDepartamentos.php");
?>