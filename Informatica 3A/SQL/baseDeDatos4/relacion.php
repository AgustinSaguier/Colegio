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
$code=$_REQUEST["code"];

if ($code==1){
    $codigo=$_REQUEST["codFab"];
    include "conexion.php";
    mysqli_select_db ($link, "TiendaInformatica") or die ("No encuentro la base de datos");
    $sql="SELECT * FROM articulos Where CodigoFab = $codigo";
    $tabla=mysqli_query($link,$sql) or die ("ERROR");
    $cantfilas=mysqli_num_rows($tabla) or die ("ERROR");
    echo("<hr>");
    echo("<table>");
    for ($z=0;$z<=$cantfilas;$z++){ 
    if ($z==0){
        echo("<tr class='title'>
        <td>codigoArt</td>
        <td>Nombre</td>
        <td>Precio</td>
        <td>codigoFab</td>
        </tr>");
    }
    else{
        $fila=mysqli_fetch_array($tabla);
        echo("<tr>
        <td>".$fila["CodigoArt"]."</td>
        <td>".$fila["Nombre"]."</td>
        <td>".$fila["Precio"]."</td>
        <td>".$fila["CodigoFab"]."</td>
        </tr>");
    }
    }
    echo("</table>");
    mysqli_close($link);
}
elseif ($code==2) {
    include "conexion.php";
    mysqli_select_db ($link, "TiendaInformatica") or die ("No encuentro la base de datos");
    $sql="SELECT articulos.Nombre as NombreArt, fabricantes.Nombre as NombreFab
    FROM articulos,fabricantes WHERE articulos.codigoFab=fabricantes.codigoFab";
    $tabla=mysqli_query($link,$sql) or die ("ERROR");
    $cantfilas=mysqli_num_rows($tabla) or die ("ERROR");
    echo("<hr>");
    echo("<table>");
        for ($z=0;$z<=$cantfilas;$z++){ 
        if ($z==0){
            echo("<tr class='title'>
            <td>Articulo</td>
            <td>Fabricante</td>
            </tr>");
        }
        else{
            $fila=mysqli_fetch_array($tabla);
            echo("<tr>
            <td>".$fila["NombreArt"]."</td>
            <td>".$fila["NombreFab"]."</td>
            </tr>");
        }
        }
        echo("</table>");
        mysqli_close($link);
}

?>