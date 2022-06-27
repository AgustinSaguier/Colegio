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
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>
<body>
    <div class="body">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a9/Amazon_logo.svg/1200px-Amazon_logo.svg.png" width="100px" height="30px">
        <?php
                if (isset($_GET["submit"])) {
                    $user=$_REQUEST ['Username'];
                    $pass=$_REQUEST['Password'];
                    $sql="SELECT * FROM Vendedor WHERE Username = '$user' AND Password = '$pass'";
                    $resultado=mysqli_query($link,$sql);
                    $nfilas=mysqli_num_rows ($resultado);
                    $fila=mysqli_fetch_array($resultado);
                    if ($nfilas > 0){
                        $id=$fila['idVendedor'];
                        $name=$fila['Username'];
                        $_SESSION ['idUser'] = $id;
                        $_SESSION ['name'] = $name;
                        header ('Location:home.php');
                    }
                    else{
                        echo("
                        <div class='alert'>
                            <i class='bi bi-exclamation-triangle'></i>
                            <span class='alert-title'>Se produjo un problema</span>
                            <br><br>
                            <span class='alert-description'>El usuario o la contraseña no coincide</span>
                        </div>
                        ");
                    }
                } 

        ?>
        <form action="" class="form" method="Get">
            <input type="hidden" name="hidden-code" value="2">
            <h2>Iniciar sesion</h2>
            <input type="text" name="Username" id="" class="text" placeholder="Nombre de usuario">
            <br><br>
            <input type="password" name="Password" id="" class="text" placeholder="Contraseña">
            <br><br>
            <input type="submit" value="Continuar" class="submit" name="submit">
        </form>
        <h5>--------- Eres nuevo en amazon? ---------</h5>
        <a href="register.html" class="register">Crea tu cuenta</a>
    </div>
</body>
</html>