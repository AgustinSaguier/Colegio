<!DOCTYPE html><?php include ("includes/conexion.php") ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <style>
        body {
            background-image: url("img/fondo-login.png");
            background-size: cover;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-form">
            <div class="login-form-title">
                <img src="img/logo-sil.png" alt="" height="50px">
                <img src="img/logo.png" alt="" height="50px">
                <span class="form-title">Bienvenido</span>
            </div>
            <div class="login-form-content">
            <form action="">
                <div class="login-form-content-item">
                    <span class="input-title">USUARIO / ID:</span>
                    <i class="bi bi-file-person-fill" id="push-right" style="padding: 10px; background-color: rgba(238,238,238,255);"></i>
                    <input type="text" name="Usuario" class="login-input" placeholder="Ingrese usuario">
                </div>
                <br>
                <div class="login-form-content-item">
                    <span class="input-title">CONTRASEÑA:</span>
                    <i class="bi bi-key-fill" id="push-right" style="padding: 10px; background-color: rgba(238,238,238,255);"></i>
                    <input type="password" name="Contraseña" class="login-input" placeholder="Contraseña">
                </div>
                <br>
                <div class="login-form-content-item">
                    <input type="submit" value="INGRESAR" name="submit" class="login-submit" id="push-right">
                </div>
            </form>
            </div>
        </div>
        <?php
                if (isset($_GET["submit"])) {
                    $Usuario=$_REQUEST ['Usuario'];
                    $Contraseña=$_REQUEST['Contraseña'];
                    $sql="SELECT * FROM Usuario WHERE Usuario = '$Usuario' AND Contraseña = '$Contraseña'";
                    $resultado=mysqli_query($link,$sql);
                    $nfilas=mysqli_num_rows ($resultado);
                    $fila=mysqli_fetch_array($resultado);
                    if ($nfilas > 0){
                        header ('Location:ingreso.php');
                    }
                    else{
                        echo("
                        <br>
                        <div class='alert-error-2'>
                            <i class='bi bi-exclamation-triangle'></i>
                            <span class='alert-error-title'>Se produjo un problema</span>
                            <br><br>
                            <span class='alert-description'>El usuario o la contraseña no coincide</span>
                        </div>
                        ");
                    }
                } 

        ?>
    </div>
</body>
</html>