<style>
table, td{
  border: 1px solid black;
  padding: 5px;
}
</style>
<?php
$cantidad=$_REQUEST["cantidad"];
$number=1;
for ($p=1; $p<=$cantidad; $p++){ 
    echo("<table>");
    echo("<tr>");
    for ($z=0; $z<=$number; $z++){
        if ($z==0){
            echo"<td><b>X</b></td>";
        }
        else{
            echo("<td><b>$z</b></td>");
        }    
    }
    echo("</tr>");
    for ($y=1; $y<=$number; $y++){
        echo("<tr>");
        for ($x=0; $x<=$number; $x++){
            if ($x==0){
                echo"<td><b>$y</b></td>";
            }
            else{
                echo("<td>".$y*$x."</td>");
            }  
        }
        echo("<tr/>");
    }
    echo("</table>");
    $number=$number+1;
    echo"<br>";
     }

    ?>