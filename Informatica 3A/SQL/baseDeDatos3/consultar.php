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
        include "conexion.php";
        mysqli_select_db ($link, "TiendaInformatica") or die ("No encuentro la base de datos");
        //comando SQL
        $sql="SELECT * FROM fabricantes";
        //ejecutar el comando SQL
        //OBS: como este ees comando trae info necesitamos 
        //igualar a una variable
        $tabla=mysqli_query($link,$sql) or die ("Error en la consulta");
        //logica de negocios
        //ver si recupero alguna informacion
        //cuento la cantidad de filas
        $cantFilas=mysqli_num_rows($tabla);
        echo("<hr>");
        echo("<table>");
        for ($z=0;$z<=$cantFilas;$z++){ 
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
        echo("</table>");
        mysqli_close($link);
        echo ("<a href='index.html'>Volver</a>");  
    }
    else if ($code==2){
        include "conexion.php";
        mysqli_select_db ($link, "TiendaInformatica") or die ("No encuentro la base de datos");
        //comando SQL
        $sql="SELECT * FROM articulos";
        //ejecutar el comando SQL
        //OBS: como este ees comando trae info necesitamos 
        //igualar a una variable
        $tabla=mysqli_query($link,$sql) or die ("Error en la consulta");
        //logica de negocios
        //ver si recupero alguna informacion
        //cuento la cantidad de filas
        $cantFilas=mysqli_num_rows($tabla);
        echo("<hr>");
        echo("<table>");
        for ($z=0;$z<=$cantFilas;$z++){ 
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
    else if ($code==3){
        include "conexion.php";
        mysqli_select_db ($link, "TiendaInformatica") or die ("No encuentro la base de datos");
        $sql="SELECT Nombre FROM fabricantes";
        $tabla=mysqli_query($link,$sql);
        $nfilas=mysqli_num_rows($tabla);
        echo("<hr>");
        echo("<table>");
        for ($i=0;$i<$nfilas;$i++)
        {
            if ($i==0){
                echo("<tr class='title'>
                <td>Nombre</td>
                </tr>");
            }
            $fila=mysqli_fetch_array ($tabla);
            echo ("<tr><td>".$fila['Nombre']."</td></tr>");
        }
        echo ("</table>");
        mysqli_close($link);
        echo ("<a href='index.html'>Volver</a>");  
    }
    else if ($code==4){
        include "conexion.php";
        mysqli_select_db ($link, "TiendaInformatica") or die ("No encuentro la base de datos");
        $sql="SELECT Nombre FROM articulos";
        $tabla=mysqli_query($link,$sql);
        $nfilas=mysqli_num_rows($tabla);
        echo("<hr>");
        echo("<table>");
        for ($i=0;$i<$nfilas;$i++)
        {
            if ($i==0){
                echo("<tr class='title'>
                <td>Nombre</td>
                </tr>");
            }
            $fila=mysqli_fetch_array ($tabla);
            echo ("<tr><td>".$fila['Nombre']."</td></tr>");
        }
        echo ("</table>");
        mysqli_close($link);
        echo ("<a href='index.html'>Volver</a>");  
    } 
    