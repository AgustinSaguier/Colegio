<?php include ("../includes/conexion.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../home.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>
<body>
    <div class="navbar">
        <ul class="navbar">
            <li>
                <a href="../agregar/agregarClientes.html">
                <i class="bi bi-file-earmark-plus"></i>
                <span class="nav-item">Agregar</span>
                </a>
            </li>
            <li>
                <a href="../listar/listarClientes.php">
                <i class="bi bi-card-list"></i>
                <span class="nav-item">Listar</span>
                </a>
            </li>
            <li>
                <a href="../eliminar/eliminarClientes.php">
                <i class="bi bi-trash"></i>
                <span class="nav-item">Eliminar</span>
                </a>
            </li>
            <li>
                <a href="../modificar/modificarClientes.php">
                <i class="bi bi-pencil-square"></i>
                <span class="nav-item">Modificar</span>
                </a>
            </li>
            <li>
                <a href="../home.html">
                <i class="bi bi-arrow-bar-left"></i>
                <span class="nav-item">Volver</span>
                </a>
            </li>
    </div>
    <div class="content">
        <ul class="content">
            <li><a href="modificarClientes.php">Clientes</a></li>
            <li><a href="modificarProductos.php">Productos</a></li>
            <li><a href="modificarProveedores.php" class="selected">Proveedores</a></li>
        </ul>
        <div class="container">
            <form action="modificar.php" method="post">
            <h3>Ingrese el codigo del proveedor a eliminar</h3>
                <input type="hidden" name="code" value="3">
                <?php
                $sql="SELECT * FROM Proveedores";
                $tabla=mysqli_query($link,$sql) or die ("ERROR");
                $cantfilas=mysqli_num_rows($tabla) or die ("ERROR2");
                echo("<select name='select'>");
                for ($z=0;$z<$cantfilas;$z++){
                    $fila=mysqli_fetch_array($tabla);
                    echo("<option value=".$fila["codProv"].">".$fila["codProv"]."</option>");
                }
                echo("</select>");
                ?>
            <h4>Nuevo nombre</h4>
            <input type="text" name="nombre" id="">
            <h4>Nueva direccion</h4>
            <input type="text" name="direccion" id="">
            <h4>Nuevo telefono</h4>
            <input type="text" name="telefono" id="">
            <br><br><br>
            <input type="submit" value="modificar">
            </form>
        </div>
    </div>
</body>