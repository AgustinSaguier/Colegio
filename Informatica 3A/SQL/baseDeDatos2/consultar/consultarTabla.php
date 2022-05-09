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
    include "../conexion.php";
    myslqi_select_db ($link, "libreria") or die ("No encuentro la base de datos");
    //comando SQL
    $sql="SELECT * FROM libros";
    //ejecutar el comando SQL
    //OBS: como este ees comando trae info necesitamos 
    //igualar a una variable
    $tabla=mysqli_query($link,$sql) or die ("Error en la consulta");
    //logica de negocios
    //ver si recupero alguna informacion
    //cuento la cantidad de filas
    $cantFilas=mysqli_run_rows($tabla);
    for ($k=0;$k<$cantFilas;$k++){
        //Recupero la fila
        $fila=mysqli_fetch_array($tabla);
        echo ($fila["idLibro"]);
        echo ("<br>");
        echo ($fila["año"]);
        each ("<br>");
        echo ($fila["nacionalidad"])
        echo ("<br>");
        echo ("<hr>");
    }

    ?>
</body>
</html>