<?php
$code=$_REQUEST["code"];
if ($code==1){
    include ("../includes/conexion.php");
    $nombre=$_REQUEST["nombre"];
    $email=$_REQUEST["email"];
    $celular=$_REQUEST["celular"];
    $sql="INSERT INTO clientes (nombre, email, celular) VALUES ('$nombre','$email','$celular')";
    mysqli_query ($link,$sql);
    header("Location:agregarClientes.html");
    mysqli_close ($link);
}
elseif ($code==2){
    include ("../includes/conexion.php");
    $descripcion=$_REQUEST["descripcion"];
    $precio=$_REQUEST["precio"];
    $cantidad=$_REQUEST["cantidad"];
    $sql="INSERT INTO productos (descripcion, precio, cantidad) VALUES ('$descripcion','$precio','$cantidad')";
    mysqli_query ($link,$sql);
    header("Location:agregarProductos.html");
    mysqli_close ($link);  
}
elseif ($code==3){
    include ("../includes/conexion.php");
    $nombre=$_REQUEST["nombre"];
    $direccion=$_REQUEST["direccion"];
    $telefono=$_REQUEST["telefono"];
    $sql="INSERT INTO proveedores (nombre, direccion, telefono) VALUES ('$nombre','$direccion','$telefono')";
    mysqli_query ($link,$sql);
    header("Location:agregarProveedores.html");
    mysqli_close ($link);  
}
?>