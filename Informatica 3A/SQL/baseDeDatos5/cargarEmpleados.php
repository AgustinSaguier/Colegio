<?php
include ("includes/conexion.php");
$DNI=$_REQUEST["DNI"];
$Nombre=$_REQUEST["Nombre"];
$Apellido=$_REQUEST["Apellido"];
$Departamento=$_REQUEST["Departamento"];
mysqli_select_db($link,"Departamentos");
$sql="INSERT INTO Empleado (DNI, Nombre, Apellido, Departamento) VALUES ('$DNI','$Nombre','$Apellido','$Departamento')";
mysqli_query ($link,$sql);
mysqli_close ($link);
header("Location: dbEmpleados.php");
?>