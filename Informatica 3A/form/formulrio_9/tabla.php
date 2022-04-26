
<style>
table, td{
  border: 1px solid black;
}
</style>
<?php
$number=$_REQUEST["number"];
echo("<table>");
echo("<tr>");
    for ($x=1; $x<=$number; $x++){
        echo("<td>$x</td>");
    }
echo("<tr/>");
echo("</table>");

?>
