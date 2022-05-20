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
        echo ("</table>");
        mysqli_close($link);
        echo ("<a href='index.html'>Volver</a>");  
        }
    









    ?>
</body>
</html>