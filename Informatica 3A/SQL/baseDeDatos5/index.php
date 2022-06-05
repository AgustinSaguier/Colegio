<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <style>
        body{
            background-image:url(https://images.unsplash.com/photo-1542601098-8fc114e148e2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80);
            background-repeat: no-repeat;
            background-size: 100%;
        }
        .welcome{
            display: flex;
            height:70vh;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        h1{
            background-color: rgba(255, 255, 255, 0.462);
            padding:10px;
        }
    </style>
</head>
<body>
    <div class="navbar">
    <nav>
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="dbEmpleados.php">TABLA EMPLEADOS</a></li>
            <li><a href="dbDepartamentos.php">TABLA DEPARTAMENTOS</a></li>
            <li><a href="dbConsultas.php">CONSULTAS</a></li>
        </ul>
    </nav>
    </div>
    <div class="welcome">
        <h1>Base de Datos Empresas</h1>
    </div>
</body>
</html>