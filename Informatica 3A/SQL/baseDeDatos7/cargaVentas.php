<?php 
include ('includes/conexion.php');

$idVendedor = $_REQUEST['idVendedor'];
$CodigoArticulo = $_REQUEST['CodigoArticulo'];
$Cantidad = $_REQUEST['Cantidad'];

$sql="SELECT PrecioCompra AS PrecioCompra FROM Articulos Where CodigoArticulo = $CodigoArticulo";
$tabla=mysqli_query($link,$sql) or die ("ERROR");
$fila=mysqli_fetch_array($tabla);
$PrecioCompra=$fila["PrecioCompra"];

$sql="SELECT PrecioPublico AS PrecioPublico FROM Articulos Where CodigoArticulo = $CodigoArticulo";
$tabla=mysqli_query($link,$sql) or die ("ERROR");
$fila=mysqli_fetch_array($tabla);
$PrecioPublico=$fila["PrecioPublico"];

$Ganancia = $PrecioPublico - $PrecioCompra;

$sql="SELECT Stock AS Stock FROM Articulos Where CodigoArticulo = $CodigoArticulo";
$tabla=mysqli_query($link,$sql) or die ("ERROR");
$fila=mysqli_fetch_array($tabla);
$Stock=$fila["Stock"];

if ($Stock>=$Cantidad){
    $NewStock =  $Stock - $Cantidad;
    $sql = "UPDATE `articulos` SET `Stock` = '$NewStock' WHERE `articulos`.`CodigoArticulo` = $CodigoArticulo";
    mysqli_query ($link,$sql);
    $sql = "INSERT INTO Ventas (idVendedor, CodigoArticulo, Cantidad, Ganancia) Values ('$idVendedor','$CodigoArticulo','$Cantidad','$Ganancia')";
    mysqli_query ($link,$sql);
} else {
    echo ("Error");
}

?>