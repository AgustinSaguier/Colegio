<?php
include ("../includes/conexion.php");
$code = $_REQUEST["code"];
if ($code==1){
    $select = $_REQUEST["select"];
    $nombre = $_REQUEST["nombre"];
    $email = $_REQUEST["email"];
    $celular = $_REQUEST["celular"];
    $sql = "UPDATE `clientes` SET `nombre` = '$nombre', `email` = '$email', `celular` = '$celular' WHERE `clientes`.`codigoClie` = $select;";
    mysqli_query ($link,$sql);
    header("Location:modificarClientes.php");
}
elseif($code==2){
    $select = $_REQUEST["select"];
    $descripcion = $_REQUEST["descripcion"];
    $precio = $_REQUEST["precio"];
    $cantidad = $_REQUEST["cantidad"];
    $sql = "UPDATE `productos` SET `descripcion` = '$descripcion', `precio` = '$precio', `cantidad` = '$cantidad' WHERE `productos`.`codProd` = $select;";
    mysqli_query ($link,$sql);
    header("Location:modificarProductos.php");
}
elseif($code==3){
    $select = $_REQUEST["select"];
    $nombre = $_REQUEST["nombre"];
    $direccion = $_REQUEST["direccion"];
    $telefono = $_REQUEST["telefono"];
    $sql = "UPDATE `proveedores` SET `nombre` = '$nombre', `direccion` = '$direccion', `telefono` = '$telefono' WHERE `proveedores`.`codProv` = $select;";
    mysqli_query ($link,$sql);
    header("Location:modificarProveedores.php");
}
?>