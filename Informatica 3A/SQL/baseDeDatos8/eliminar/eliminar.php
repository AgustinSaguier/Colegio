<?php
include ("../includes/conexion.php");
$code = $_REQUEST["code"];
if ($code==1){
    $select = $_REQUEST["select"];
    $sql = "DELETE FROM `clientes` WHERE `clientes`.`codigoClie` = $select";
    mysqli_query ($link,$sql);
    header("Location:eliminarClientes.php");
}
elseif($code==2){
    $select = $_REQUEST["select"];
    $sql = "DELETE FROM `productos` WHERE `productos`.`codProd` = $select";
    mysqli_query ($link,$sql);
    header("Location:eliminarProductos.php");
}
elseif($code==3){
    $select = $_REQUEST["select"];
    $sql = "DELETE FROM `proveedores` WHERE `proveedores`.`codProv` = $select";
    mysqli_query ($link,$sql);
    header("Location:eliminarProveedores.php");
}
?>