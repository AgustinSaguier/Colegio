<?php
session_start();
include ('includes/conexion.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <nav>
        <img src="https://cdn.icon-icons.com/icons2/1195/PNG/512/1490889698-amazon_82521.png" alt="" class="logo">
        <ul>
            <li><a href="#">Inicio</a></li>
            <li><a href="articulos.html">Agregar Articulos</a></li>
            <li><a href="ventas.html">Realizar Ventas</a></li>
            <li><a href="#">Mostrar Articulos</a></li>
            <li><a href="#">Mostrar Ventas</a></li>
        </ul>
    </nav>
    <div class="content2">
        <h1 class="title">Ventas Realizadas</h1>
        <hr>
        <?php
        $sql="SELECT * FROM Ventas";
        $tabla=mysqli_query($link,$sql) or die ("ERROR");
        $cantfilas=mysqli_num_rows($tabla) or die ("ERROR");
        echo("<table>");
        $contador=1;
        for ($z=0;$z<=$cantfilas;$z++){ 
        if ($z==0){
            echo("<tr class='title'>
            <th>idVenta</th>
            <th>idVendedor</th>
            <th>CodigoArticulo</th>
            <th>Fecha</th>
            <th>Cantidad</th>
            <th>Ganancia</th>
            </tr>");
        }
        else{
            if ($contador % 2 == 0){
                $fila=mysqli_fetch_array($tabla);
                echo("<tr class='even'>
                <td>".$fila["idVenta"]."</td>
                <td>".$fila["idVendedor"]."</td>
                <td>".$fila["CodigoArticulo"]."</td>
                <td>".$fila["Fecha"]."</td>
                <td>".$fila["Cantidad"]."</td>
                <td>".$fila["Ganancia"]."$</td>
                </tr>");
            } else {
                    $fila=mysqli_fetch_array($tabla);
                    echo("<tr class='uneven'>
                    <td>".$fila["idVenta"]."</td>
                    <td>".$fila["idVendedor"]."</td>
                    <td>".$fila["CodigoArticulo"]."</td>
                    <td>".$fila["Fecha"]."</td>
                    <td>".$fila["Cantidad"]."</td>
                    <td>".$fila["Ganancia"]."$</td>
                    </tr>"); 
            }
            $contador=$contador+1;    
        }
        }
        echo("</table>");
        mysqli_close($link);
        ?>
    </div>
</body>
</html>