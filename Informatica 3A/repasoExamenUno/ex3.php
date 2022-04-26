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

    $cant=$_REQUEST["cant"];
    $y=1;
    $f=12;
    for ($w=1;$w<=$cant;$w++){   
        echo("<p>Tabla del $y </p>");
        echo ("<table border='solid 1px black'>");
        for ($x=$y;$x<=$f;$x=$x+$y){
            echo("<tr><td>$x &divide $y = ".$x/$y."</td></tr>");
        }
        echo ("</table>");
        $f=$f+12;
        $y++;
    }



    ?>
</body>
</html>