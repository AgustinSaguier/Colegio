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
    $food=$_REQUEST["food"];
    $game=$_REQUEST["game"];
    

    if (($food==1) && ($game==1)){
        echo ("<img src='mclovin.jpg' height='300px' width='300px'>");
        echo ("<h3>"."Sos Mclovin"."</h3>");
    }
    if ($food==1 and $game==2){
        echo ("<img src='jonesy.jpg' height='300px' width='300px'>");
        echo ("<h3>"."Sos Jonesy"."</h3>");
    }
    if ($food==2 and $game==1){
        echo ("<img src='rat.jpg' height='300px' width='300px'>");
        echo ("<h3>"."Sos ratatouille"."</h3>");
    }
    if ($food==2 and $game==2){
        echo ("<img src='walter.jpg' height='300px' width='300px'>");
        echo ("<h3>"."Sos walter white"."</h3>");
    }
    
?>
</body>
</html>