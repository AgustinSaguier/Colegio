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
        include "../conexion.php";
        mysqli_select_db ($link, "libreria") or die ("No encuentro la base de datos");
        //comando SQL
        $sql="SELECT * FROM libros";
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
            <td>idLibro</td>
            <td>Año</td>
            <td>Nacionalidad</td>
            </tr>");
        }
        else{
            $fila=mysqli_fetch_array($tabla);
            echo("<tr>
            <td>".$fila["idLibro"]."</td>
            <td>".$fila["Año"]."</td>
            <td>".$fila["Nacionalidad"]."</td>
            </tr>");
        }
        }
        echo("</table>");
        mysqli_close($link);
        echo ("<a href='consultaLibros.html'>Volver</a>");  
    }
    else if ($code==2){
        include "../conexion.php";
        mysqli_select_db ($link, "libreria") or die ("No encuentro la base de datos");
        //comando SQL
        $sql="SELECT * FROM autor";
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
            <td>idAutor</td>
            <td>Nombre</td>
            <td>Nacionalidad</td>
            <td>AñoNacimiento</td>
            </tr>");
        }
        else{
            $fila=mysqli_fetch_array($tabla);
            echo("<tr>
            <td>".$fila["idAutor"]."</td>
            <td>".$fila["Nombre"]."</td>
            <td>".$fila["Nacionalidad"]."</td>
            <td>".$fila["AñoNacimiento"]."</td>
            </tr>");
        }
        }
        echo("</table>");
        mysqli_close($link);
        echo ("<a href='consultaAutores.html'>Volver</a>");  

    }
    else if ($code==3){
        include "../conexion.php";
        mysqli_select_db ($link, "libreria") or die ("No encuentro la base de datos");
        //comando SQL
        $sql="SELECT * FROM editorial";
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
            <td>idEditorial</td>
            <td>Nombre</td>
            <td>Email</td>
            <td>Direccion</td>
            </tr>");
        }
        else{
            $fila=mysqli_fetch_array($tabla);
            echo("<tr>
            <td>".$fila["idEditorial"]."</td>
            <td>".$fila["Nombre"]."</td>
            <td>".$fila["Email"]."</td>
            <td>".$fila["Direccion"]."</td>
            </tr>");
        }
        }
        echo("</table>");
        mysqli_close($link);
        echo ("<a href='consultaEditorial.html'>Volver</a>");  
    }

    ?>
</body>
</html>