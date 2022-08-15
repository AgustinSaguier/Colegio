<?php 
include ("includes/conexion.php");

$q = intval($_GET['q']);

$sql="SELECT * FROM Alumno Where AlumnoNombre = $q";
$result=mysqli_query($link,$sql) or die ("ERROR");
while($row = mysqli_fetch_array($result)) {
    echo "<p>" . $row['AlumnoNombre'] . "</p>";
  }
?>