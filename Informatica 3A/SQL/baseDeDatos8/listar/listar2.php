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
                <a href="#">
                <i class="bi bi-file-earmark-plus"></i>
                <span class="nav-item">Agregar</span>
                </a>
            </li>
            <li>
                <a href="#">
                <i class="bi bi-card-list"></i>
                <span class="nav-item">Listar</span>
                </a>
            </li>
            <li>
                <a href="#">
                <i class="bi bi-trash"></i>
                <span class="nav-item">Eliminar</span>
                </a>
            </li>
            <li>
                <a href="#">
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
            <li><a href="listar1.php">Tabla1</a></li>
            <li><a href="listar2.php" class="selected">Tabla2</a></li>
        </ul>
        <div class="container">
            <?php 
                $sql="SELECT * FROM Dos";
                $tabla=mysqli_query($link,$sql) or die ("ERROR");
                $cantfilas=mysqli_num_rows($tabla) or die ("ERROR");
                echo("<table>");
                $contador=1;
                for ($z=0;$z<=$cantfilas;$z++){ 
                if ($z==0){
                    echo("<tr class='title'>
                    <th>id</th>
                    <th>Username</th>
                    <th>Password</th>
                    </tr>");
                }
                else{
                    if ($contador % 2 == 0){
                        $fila=mysqli_fetch_array($tabla);
                        echo("<tr class='even'>
                        <td>".$fila["id"]."</td>
                        <td>".$fila["Username"]."</td>
                        <td>".$fila["Password"]."</td>
                        </tr>");
                    } else {
                        $fila=mysqli_fetch_array($tabla);
                        echo("<tr class='uneven'>
                        <td>".$fila["id"]."</td>
                        <td>".$fila["Username"]."</td>
                        <td>".$fila["Password"]."</td> 
                         </tr>"); 
                    }
                $contador=$contador+1;    
                    }
                }
                echo("</table>");
                mysqli_close($link);
                ?>    
        </div>
    </div>
</body>
</html>