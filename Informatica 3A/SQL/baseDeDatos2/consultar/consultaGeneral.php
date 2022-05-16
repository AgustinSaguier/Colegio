<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
<style>
    table, td {
    border: 1px solid;
    text-align:center;
}
    tr.title {
        background-color: #04AA6D;
    }

</style>
</html>
<?php
$code=$_REQUEST["code"];
$idRecuperado=$_REQUEST["id"];
if ($code==1){
    include "../conexion.php";
    mysqli_select_db ($link, "libreria") or die ("No encuentro la base de datos");
    $sql="SELECT * from libros where idLibro=$idRecuperado";
    $tabla=mysqli_query ($link,$sql) or die ("Error SQL");
    $fila=mysqli_fetch_array ($tabla) or die ("No existe el id");
    echo("<hr>");
    echo("<table>");
    echo("<tr class='title'>
            <td>idLibro</td>
            <td>Año</td>
            <td>Nacionalidad</td>
            </tr>");
    echo("<tr>
            <td>".$fila["idLibro"]."</td>
            <td>".$fila["Año"]."</td>
            <td>".$fila["Nacionalidad"]."</td>
            </tr>");
    echo("</table>");        
    mysqli_close($link);
    echo ("<a href='consultaLibros.html'>Volver</a>");   
}
else if ($code==2){
    include "../conexion.php";
    mysqli_select_db ($link, "libreria") or die ("No encuentro la base de datos");
    $sql="SELECT * from autor where idAutor=$idRecuperado";
    $tabla=mysqli_query ($link,$sql) or die ("Error SQL");
    $fila=mysqli_fetch_array ($tabla) or die ("No existe el id");
    echo("<hr>");
    echo("<table>");
    echo("<tr class='title'>
            <td>idAutor</td>
            <td>Nombre</td>
            <td>Nacionalidad</td>
            <td>AñoNacimiento</td>
            </tr>");
    echo("<tr>
            <td>".$fila["idAutor"]."</td>
            <td>".$fila["Nombre"]."</td>
            <td>".$fila["Nacionalidad"]."</td>
            <td>".$fila["AñoNacimiento"]."</td>
            </tr>");
    echo("</table>");
    mysqli_close($link);
    echo ("<a href='consultaAutores.html'>Volver</a>");  
}
else if ($code==3){
    include "../conexion.php";
    mysqli_select_db ($link, "libreria") or die ("No encuentro la base de datos");
    $sql="SELECT * from editorial where idEditorial=$idRecuperado";
    $tabla=mysqli_query ($link,$sql) or die ("Error SQL");
    $fila=mysqli_fetch_array ($tabla) or die ("No existe el id");
    echo("<hr>");
    echo("<table>");
    echo("<tr class='title'>
            <td>idEditorial</td>
            <td>Nombre</td>
            <td>Email</td>
            <td>Direccion</td>
            </tr>");
    echo("<tr>
            <td>".$fila["idEditorial"]."</td>
            <td>".$fila["Nombre"]."</td>
            <td>".$fila["Email"]."</td>
            <td>".$fila["Direccion"]."</td>
            </tr>");
    echo("</table>");
    mysqli_close($link);
    echo ("<a href='consultaEditorial.html'>Volver</a>");  
}

?>