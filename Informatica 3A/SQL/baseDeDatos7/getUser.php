<?php 
include ("includes/conexion.php");

$q = intval($_GET['q']);

$sql="SELECT * FROM Articulos Where CodigoArticulo = $q";
$result=mysqli_query($link,$sql) or die ("ERROR");
while($row = mysqli_fetch_array($result)) {
    echo "<p>" . $row['Nombre'] . "</p>";
  }
?>