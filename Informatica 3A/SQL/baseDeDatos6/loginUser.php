<?php
include 'includes/conexion.php';
session_start();

$user=$_REQUEST ['user'];
$pass=$_REQUEST['pass'];

$sql="select * from Usuario where username='$user' and password='$pass'";
$resultado=mysqli_query($link,$sql);
$nfilas=mysqli_num_rows ($resultado);
$fila=mysqli_fetch_array($resultado);
$id=$fila['id'];
$name=$fila['Username'];
if ($nfilas > 0){
    $_SESSION ['idUser'] = $id;
    $_SESSION ['name'] = $name;
    header ('Location:homePage.php');
}
else{
    header ('Location:register.php');
}

?>