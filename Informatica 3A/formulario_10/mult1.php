<?php
$contador=0;
echo("<table>");
echo("<tr>");
echo("<td>X</td>");
for ($z=1; $z<=7, $z++){
    echo("<td>$z</td>");
}
echo("</tr>");
for ($y=1; $y<=7; $y++){
    echo("<tr>");
    for ($x=1; $x<=7; $x++){
        echo("<td>".$y*$x."</td>");
    }
    echo("<tr/>");
}
echo("</table>");

?>