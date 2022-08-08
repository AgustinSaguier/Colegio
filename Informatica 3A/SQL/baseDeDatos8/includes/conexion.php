<?php
$user='root';
$pass='';
$db='compuparBD';
$servidor='localhost';
$link=mysqli_connect($servidor,$user,$pass)
or die ("ERROR DE CONEXION AL SERVIDOR!!");
mysqli_select_db($link,$db);
?>