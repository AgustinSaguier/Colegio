<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table, td {
    border: 1px solid;
    text-align:center;
}
    tr.title {
        background-color: #04AA6D;
    }

</style>
<body>
    <?php
    $code=$_REQUEST["code"];
    if ($code==1){
        $letter=$_REQUEST["letter"];
        include "conexion.php";
        mysqli_select_db ($link, "TiendaInformatica") or die ("No encuentro la base de datos");
        $sql="SELECT * FROM fabricantes WHERE Nombre like '$letter%'";
        $tabla=mysqli_query($link,$sql) or die ("ERROR");
        $cantfilas=mysqli_num_rows($tabla) or die ("ERROR");
        echo("<hr>");
        echo("<table>");
        for ($z=0;$z<=$cantfilas;$z++){ 
            if ($z==0){
                echo("<tr class='title'>
                <td>codigoFab</td>
                <td>Nombre</td>
                </tr>");
            }
            else{
                $fila=mysqli_fetch_array($tabla);
                echo("<tr>
                <td>".$fila["CodigoFab"]."</td>
                <td>".$fila["Nombre"]."</td>
                </tr>");
            }
            }
        echo ("</table>");
        mysqli_close($link);
        echo ("<a href='index.html'>Volver</a>");  
        }
    if ($code==2){
        $num=$_REQUEST["num"];
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
            echo ("<a href='index.html'>Volver</a>");  
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
            echo ("<a href='index.html'>Volver</a>");  
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
            echo ("<a href='index.html'>Volver</a>");  
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
            echo ("<a href='index.html'>Volver</a>");  
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
            echo ("<a href='index.html'>Volver</a>");  
        }
    }
    
    if ($code==3){
        $price1=$_REQUEST["price1"];
        $price2=$_REQUEST["price2"];
        include "conexion.php";
        mysqli_select_db ($link, "TiendaInformatica") or die ("No encuentro la base de datos");
        $sql="SELECT * FROM articulos WHERE Precio BETWEEN $price1 and $price2";
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
        echo ("<a href='index.html'>Volver</a>");  
    }
    if ($code==4){
        include "conexion.php";
        mysqli_select_db ($link, "TiendaInformatica") or die ("No encuentro la base de datos");
        $sql="SELECT Nombre, Precio * 6833.32 AS PrecioG FROM articulos";
        $tabla=mysqli_query($link,$sql) or die ("ERROR");
        $cantfilas=mysqli_num_rows($tabla) or die ("ERROR");
        echo("<hr>");
        echo("<table>");
        for ($z=0;$z<=$cantfilas;$z++){ 
            if ($z==0){
                echo("<tr class='title'>
                <td>Nombre</td>
                <td>Precio</td>
                </tr>");
            }
            else{
                $fila=mysqli_fetch_array($tabla);
                echo("<tr>
                <td>".$fila["Nombre"]."</td>
                <td>".$fila["PrecioG"]."</td>
                </tr>");
            }
            }
            echo("</table>");
            mysqli_close($link);
            echo ("<a href='index.html'>Volver</a>");  
    }
    if ($code==5){
        $codigo=$_REQUEST["codi"];
        include "conexion.php";
        mysqli_select_db ($link, "TiendaInformatica") or die ("No encuentro la base de datos");
        $sql="SELECT AVG (Precio) AS PrecioAVG FROM articulos Where CodigoFab = $codigo";
        $tabla=mysqli_query($link,$sql) or die ("ERROR");
        $fila=mysqli_fetch_array($tabla);
        echo("<hr>");
        echo ($fila["PrecioAVG"]);
        mysqli_close($link);
        echo ("<br>");
        echo ("<a href='index.html'>Volver</a>");  
    }
    if ($code==6){
        $manera=$_REQUEST["manera"];
        if ($manera=="asc"){
            include "conexion.php";
            mysqli_select_db ($link, "TiendaInformatica") or die ("No encuentro la base de datos");
            $sql="SELECT Nombre, Precio FROM articulos ORDER BY Precio ASC, Nombre";
            $tabla=mysqli_query($link,$sql) or die ("ERROR");
        $cantfilas=mysqli_num_rows($tabla) or die ("ERROR");
        echo("<hr>");
        echo("<table>");
        for ($z=0;$z<=$cantfilas;$z++){ 
            if ($z==0){
                echo("<tr class='title'>
                <td>Nombre</td>
                <td>Precio</td>
                </tr>");
            }
            else{
                $fila=mysqli_fetch_array($tabla);
                echo("<tr>
                <td>".$fila["Nombre"]."</td>
                <td>".$fila["Precio"]."</td>
                </tr>");
            }
            }
            echo("</table>");
            mysqli_close($link);
            echo ("<a href='index.html'>Volver</a>");  
        }
        else if ($manera=="des"){
            include "conexion.php";
            mysqli_select_db ($link, "TiendaInformatica") or die ("No encuentro la base de datos");
            $sql="SELECT Nombre, Precio FROM articulos ORDER BY Precio DESC, Nombre";
            $tabla=mysqli_query($link,$sql) or die ("ERROR");
        $cantfilas=mysqli_num_rows($tabla) or die ("ERROR");
        echo("<hr>");
        echo("<table>");
        for ($z=0;$z<=$cantfilas;$z++){ 
            if ($z==0){
                echo("<tr class='title'>
                <td>Nombre</td>
                <td>Precio</td>
                </tr>");
            }
            else{
                $fila=mysqli_fetch_array($tabla);
                echo("<tr>
                <td>".$fila["Nombre"]."</td>
                <td>".$fila["Precio"]."</td>
                </tr>");
            }
            }
            echo("</table>");
            mysqli_close($link);
            echo ("<a href='index.html'>Volver</a>");  
        }
        
    }
    if ($code==7){
        $manera=$_REQUEST["manera"];
        if ($manera=="asc"){
            include "conexion.php";
            mysqli_select_db ($link, "TiendaInformatica") or die ("No encuentro la base de datos");
            $sql="SELECT Nombre, Precio FROM articulos ORDER BY Nombre ASC, Precio";
            $tabla=mysqli_query($link,$sql) or die ("ERROR");
        $cantfilas=mysqli_num_rows($tabla) or die ("ERROR");
        echo("<hr>");
        echo("<table>");
        for ($z=0;$z<=$cantfilas;$z++){ 
            if ($z==0){
                echo("<tr class='title'>
                <td>Nombre</td>
                <td>Precio</td>
                </tr>");
            }
            else{
                $fila=mysqli_fetch_array($tabla);
                echo("<tr>
                <td>".$fila["Nombre"]."</td>
                <td>".$fila["Precio"]."</td>
                </tr>");
            }
            }
            echo("</table>");
            mysqli_close($link);
            echo ("<a href='index.html'>Volver</a>");  
        }
        else if ($manera=="des"){
            include "conexion.php";
            mysqli_select_db ($link, "TiendaInformatica") or die ("No encuentro la base de datos");
            $sql="SELECT Nombre, Precio FROM articulos ORDER BY Nombre DESC, Precio";
            $tabla=mysqli_query($link,$sql) or die ("ERROR");
        $cantfilas=mysqli_num_rows($tabla) or die ("ERROR");
        echo("<hr>");
        echo("<table>");
        for ($z=0;$z<=$cantfilas;$z++){ 
            if ($z==0){
                echo("<tr class='title'>
                <td>Nombre</td>
                <td>Precio</td>
                </tr>");
            }
            else{
                $fila=mysqli_fetch_array($tabla);
                echo("<tr>
                <td>".$fila["Nombre"]."</td>
                <td>".$fila["Precio"]."</td>
                </tr>");
            }
            }
            echo("</table>");
            mysqli_close($link);
            echo ("<a href='index.html'>Volver</a>");  
        }
    }








    ?>
</body>
</html>