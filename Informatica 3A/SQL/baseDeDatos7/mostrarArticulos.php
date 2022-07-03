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
        <h1 class="title">Lista de articulos</h1>
        <hr>
        <div class="container">
            <?php 
            $sql="SELECT * FROM Articulos";
            $tabla=mysqli_query($link,$sql) or die ("ERROR");
            $cantfilas=mysqli_num_rows($tabla) or die ("ERROR");
            for ($z=0;$z<$cantfilas;$z++){ 
            $fila=mysqli_fetch_array($tabla);
            echo ("<div class = 'articulo'>
                    <img src='uploads/item".$fila['CodigoArticulo'].".jpg' class='table-image'>
                    <div class='table-text'>
                        <h4>Nombre: ".$fila['Nombre']."</h4>
                        <p>Precio: ".$fila['PrecioPublico']."$</p>
                        <p>Stock: ".$fila['Stock']."</p>
                    </div>
                </div>
            ");
            }
            mysqli_close($link);
            ?>
        </div>
    </div>
</body>
</html>