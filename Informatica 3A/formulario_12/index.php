<?php
$num=1;
$tema=$_REQUEST["tema"];
$cant=$_REQUEST["cantidad"];


if ($tema=="Autos"){ 
    for ($x=1; $x<=$cant; $x++){
        echo "<img src='img/car$num.jpg' width='100px' height='100px'>";
        echo"<br>";
        $num=$num+1;

    }
}
elseif($tema=="Frutas"){
    for ($x=1; $x<=$cant; $x++){
        echo "<img src='img/fruta$num.jpg' width='100px' height='100px'>";
        echo"<br>";
        $num=$num+1;

    } 
}
?>