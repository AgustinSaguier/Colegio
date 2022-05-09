<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
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
        for ($k=0;$k<$cantFilas;$k++){
            //Recupero la fila
            $fila=mysqli_fetch_array($tabla);
            echo ("idLibro: ".$fila["idLibro"]);
            echo ("<br>");
            echo ("Año: ".$fila["Año"]);
            echo ("<br>");
            echo ("Nacionalidad".$fila["Nacionalidad"]);
            echo ("<br>");
            echo ("<hr>");
        }
        mysqli_close($link);
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
        for ($k=0;$k<$cantFilas;$k++){
            //Recupero la fila
            $fila=mysqli_fetch_array($tabla);
            echo ("idAutor: ".$fila["idAutor"]);
            echo ("<br>");
            echo ("Nacionalidad: ".$fila["Nacionalidad"]);
            echo ("<br>");
            echo ("Año de Nacimiento: ".$fila["AñoNacimiento"]);
            echo ("<br>");
            echo ("Nombre: ".$fila["Nombre"]);
            echo ("<br>");
            echo ("<hr>");
        }
        mysqli_close($link);
    }

    ?>
</body>
</html>