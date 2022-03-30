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
    $ancho=$_REQUEST ["width"];
    echo ("<h5> Ancho: ".$ancho."</h5>");
    $altura=$_REQUEST ["height"];
    echo ("<h5> Altura: ".$altura."</h5>");
    $grosor=$_REQUEST ["Grosor"];
    echo ("<h5> Grosor: ".$grosor."</h5>");
    $color=$_REQUEST ["color"];
    echo ("<h5> Color: ".$color."</h5>");
    

    echo("<svg width='1000px' height='1000px'>
    <rect width='$ancho' height='$altura' style= ' fill:$color; stroke-width:$grosor;stroke:rgb(255,0,0)'/>
    </svg>")

    ?>
</body>
</html>