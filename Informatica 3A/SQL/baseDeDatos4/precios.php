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
    $precio1=$_REQUEST["precio1"];
    $precio2=$_REQUEST["precio2"];
    include "conexion.php";
    mysqli_select_db ($link, "TiendaInformatica") or die ("No encuentro la base de datos");
    $sql="SELECT * FROM articulos WHERE Precio BETWEEN $precio1 and $precio2";
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
if ($code==2){
    $num=$_REQUEST["precio"];
    $operador=$_REQUEST["operador"];
    if ($operador=="eq"){
        include "conexion.php";
        mysqli_select_db ($link, "TiendaInformatica") or die ("No encuentro la base de datos");
        $sql="SELECT * FROM articulos WHERE Precio = $num";
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
    else if ($operador=="gt"){
        include "conexion.php";
        mysqli_select_db ($link, "TiendaInformatica") or die ("No encuentro la base de datos");
        $sql="SELECT * FROM articulos WHERE Precio > $num";
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
    else if ($operador=="ge"){
        include "conexion.php";
        mysqli_select_db ($link, "TiendaInformatica") or die ("No encuentro la base de datos");
        $sql="SELECT * FROM articulos WHERE Precio >= $num";
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
    else if ($operador=="lt"){
        include "conexion.php";
        mysqli_select_db ($link, "TiendaInformatica") or die ("No encuentro la base de datos");
        $sql="SELECT * FROM articulos WHERE Precio < $num";
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
    else if ($operador=="le"){
        include "conexion.php";
        mysqli_select_db ($link, "TiendaInformatica") or die ("No encuentro la base de datos");
        $sql="SELECT * FROM articulos WHERE Precio <= $num";
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
}
elseif ($code==3){
    include "conexion.php";
    mysqli_select_db ($link, "TiendaInformatica") or die ("No encuentro la base de datos");
    $sql="SELECT AVG (Precio) AS PrecioAVG FROM articulos";
    $tabla=mysqli_query($link,$sql) or die ("ERROR");
    $fila=mysqli_fetch_array($tabla);
    echo("<hr>");
    echo ("El precio medio de todos los articulos es ");
    echo ($fila["PrecioAVG"]);
    mysqli_close($link);
    echo ("<br>");
}
elseif ($code==4){
    $codigo=$_REQUEST["codFab"];
    include "conexion.php";
    mysqli_select_db ($link, "TiendaInformatica") or die ("No encuentro la base de datos");
    $sql="SELECT AVG (Precio) AS PrecioAVG FROM articulos Where CodigoFab = $codigo";
    $tabla=mysqli_query($link,$sql) or die ("ERROR");
    $fila=mysqli_fetch_array($tabla);
    echo("<hr>");
    echo ("El precio medio de los articulos con codigo de fabricante ".$codigo." es ");
    echo ($fila["PrecioAVG"]);
    mysqli_close($link);
    echo ("<br>");
}

?>