<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table{
        text-align:center;
    }
</style>
<body>
    
</body>
</html>
<?php
include "conexion.php";
    mysqli_select_db ($link, "TiendaInformatica") or die ("No encuentro la base de datos");
    $sql="SELECT *, Precio * 6833.32 AS PrecioG FROM articulos";
    $tabla=mysqli_query($link,$sql) or die ("ERROR");
    $cantfilas=mysqli_num_rows($tabla) or die ("ERROR");
    echo("<hr>");
    echo("<table>");
    for ($z=0;$z<=$cantfilas;$z++){ 
    if ($z==0){
        echo("<tr class='title'>
        <td><b>codigoArt</b></td>
        <td><b>Nombre</b></td>
        <td><b>Precio</b></td>
        <td><b>codigoFab</b></td>
        </tr>");
    }
    else{
        $fila=mysqli_fetch_array($tabla);
        echo("<tr>
        <td>".$fila["CodigoArt"]."</td>
        <td>".$fila["Nombre"]."</td>
        <td>".$fila["PrecioG"]."</td>
        <td>".$fila["CodigoFab"]."</td>
        </tr>");
    }
    }
    echo("</table>");
    mysqli_close($link);
?>