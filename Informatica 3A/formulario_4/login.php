<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      $user=$_REQUEST["name"];
      $pass=$_REQUEST["pass"];

      if (($user=="admin") && ($pass=="123")){
        header('Location: preguntados.html');
        exit;
    }
    else{
        header('Location: incorrecto.html');
        exit;
    }
    ?>
</body>
</html>