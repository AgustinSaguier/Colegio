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

    $number=$_REQUEST["number"];

    if ($number > 0){
        for ($x = 1; $x <=$number; $x++) {
            if ($x==1){
                echo("Preformateado <br>");
                echo("<pre>$x</pre>");
            }
            elseif ($x <=$number){
                echo("<pre>$x</pre>");
            }
            }
        for ($x = 1; $x <=$number; $x++) {
            if ($x==1){
                echo("En parrafo <br>");
                echo("<p>$x</p>");
            }
            elseif ($x <=$number){
                echo("<p>$x</p>");
            }
        }

        for ($x = 1; $x <=$number; $x++) {
            if ($x==1){
                echo("Lista desordenada <br>");
                echo("<ul>$x</ul>");
            }
            elseif ($x <=$number){
                echo("<ul>$x</ul>");
            }
        }

        for ($x = 1; $x <=$number; $x++) {
            if ($x==1){
                echo("Lista ordenada <br>");
                echo("<ol>$x</ol>");
            }
            elseif ($x <=$number){
                echo("<ol>$x</ol>");
            }
        }
         }
    else{
        echo "El numero que ingreso es negativo o igual a cero";
    }
    ?>
</body>
</html>