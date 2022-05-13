<?php
$code=$_REQUEST["code"];
$idRecuperado=$_REQUEST["id"];
if ($code==1){
    include "../conexion.php";
    mysqli_select_db ($link, "libreria") or die ("No encuentro la base de datos");
    $sql="SELECT * from libros where idLibro=$idRecuperado";
    $fila=mysqli_query ($link,$sql) or die ("Error SQL");
    echo ($fila["idLibro"]);
    echo ($fila["Año"]);
    echo ($fila["Nacionalidad"]);
    mysqli_close(); 
}

?>