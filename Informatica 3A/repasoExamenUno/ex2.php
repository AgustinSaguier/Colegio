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
    $month=$_REQUEST["month"];


    if ($month == 1){
        echo 31;
    }
    elseif ($month == 2){
        echo 28;
    }
    elseif ($month == 3){
        echo 31;
    }
    elseif ($month == 4){
        echo 30;
    }
    elseif ($month == 5){
        echo 31;
    }
    elseif ($month == 6){
        echo 30;
    }
    elseif ($month == 7){
        echo 31;
    }
    elseif ($month == 8){
        echo 31;
    }
    elseif ($month == 9){
        echo 30;
    }
    elseif ($month == 10){
        echo 31;
    }
    elseif ($month == 11){
        echo 30;
    }
    elseif ($month == 12){
        echo 31;
    }
    else {
        echo "ese mes no existe";
    }



    ?>
</body>
</html>