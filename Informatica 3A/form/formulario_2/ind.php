<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <style type="text/css">

        h3{
            text-decoration: underline;
            color: red;
        }

        h5{
            font-style: italic;
        }
        

    </style>
</head>
<body>
    <?php
        // Titulo //
        echo ("<h3>"."Los datos ingresados son:"."</h3>");
        // Datos //
        $name=$_REQUEST ["name"];
        echo ("<h5> Nombre: ".$name."</h5>");
        
        $mail=$_REQUEST ["mail"];
        echo ("<h5> E-Mail: ".$mail."</h5>");

        $phone=$_REQUEST ["phone"];
        echo ("<h5> Numero de telefono: ".$phone."</h5>");

        $address=$_REQUEST ["address"];
        echo ("<h5> Dirreccion: ".$address."</h5>");

        $post=$_REQUEST ["post"];
        echo ("<h5> Codigo postal: ".$post."</h5>");

        $country=$_REQUEST ["country"];
        echo ("<h5> Pais: ".$country."</h5>");

        $card=$_REQUEST ["card"];
        echo ("<h5> Tarjeta: ".$card."</h5>");

        $cNumber=$_REQUEST ["cNumber"];
        echo ("<h5> Numero de tarjeta: ".$cNumber."</h5>");

        $sCode=$_REQUEST ["sCode"];
        echo ("<h5> Codigo de seguridad: ".$sCode."</h5>");

        $nCard=$_REQUEST ["nCard"];
        echo ("<h5> Nombre de tarjeta: ".$nCard."</h5>");
       
    ?>
</body>
</html>