<?php 
session_start();
if (!(isset ($_SESSION["idUser"])))
    header ("Location:index.php")

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
            <li><a href="home.php">Inicio</a></li>
            <li><a href="articulos.html">Agregar Articulos</a></li>
            <li><a href="ventas.php">Realizar Ventas</a></li>
            <li><a href="mostrarVentas.php">Mostrar Articulos</a></li>
            <li><a href="mostrarArticulos.php">Mostrar Ventas</a></li>
        </ul>
    </nav>
    <div class="welcome">
        <h1>Bienvenido, <?php echo($_SESSION['name']);?></h1>
    </div>
    <div class="content">
        <h2>explorar oportunidades</h2>
        <div class="tables">
            <div class="table">
                <img src="https://static.amazon.jobs/global_images/36/images/Teams_3_copy.jpg?1540850190" alt="" class="table-image">
                <div class="table-text">
                    <h4>Equipos</h4>
                    <p>Conozca los equipos de Amazon, <br>desde Amazon Web Services hasta empresas subsidarias.</p>
                    <span class="link">Ver todos los equipos</span>
                </div>
            </div>
            <div class="table">
                <img src="https://static.amazon.jobs/global_images/32/images/Location_copy.jpg?1540849565" alt="" class="table-image">
                <div class="table-text">
                    <h4>Ubicaciones</h4>
                    <p>Ver las oficinas de Amazon en todo el mundo</p>
                    <span class="link"> <br> Ver todas las ubicaciones</span>
                </div>
            </div>
        </div>
    </div>
</body>
</html>