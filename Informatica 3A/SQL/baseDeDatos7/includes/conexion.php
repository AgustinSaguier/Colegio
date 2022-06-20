<?php
$user='agustin';
$pass='12345678';
$db='mundoSA';
$servidor='localhost';
$link=mysqli_connect($servidor,$user,$pass)
or die ("ERROR DE CONEXION AL SERVIDOR!!");
mysqli_select_db($link,$db);
?>