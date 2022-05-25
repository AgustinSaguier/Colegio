<?php
$code=$_REQUEST["code"];
if ($code==1){
    include 'conexion.php';
    $codigoFab=$_REQUEST["codigoFab"];
    $nombreFab=$_REQUEST["nombreFab"];
    mysqli_select_db($link,"TiendaInformatica") or die ("<br>ERROR AL SELECCIONAR LA BASE DE DATOS");
    echo ("<br>Se selecciono la base de datos con exito");
    $sql="INSERT INTO fabricantes (CodigoFab, Nombre) VALUES ('$codigoFab','$nombreFab')";
    mysqli_query ($link,$sql) or die ("<br>ERROR AL INSERTAR DATOS");
    echo ("<h3>Se cargaron los datos a la tabla FABRICANTES</h3>");
    mysqli_close ($link);
    echo ("<a href='cargarTablas.html'>Cargar Otro</a>");  
}
elseif ($code==2){
    include 'conexion.php';
    $codigoArt=$_REQUEST["codigoArt"];
    $nombreArt=$_REQUEST["nombreArt"];
    $precioArt=$_REQUEST["precioArt"];
    $codigoFab=$_REQUEST["codigoFab"];
    mysqli_select_db($link,"TiendaInformatica") or die ("<br>ERROR AL SELECCIONAR LA BASE DE DATOS");
    echo ("<br>Se selecciono la base de datos con exito");
    $sql="INSERT INTO articulos (CodigoArt, Nombre, Precio, CodigoFab) VALUES ('$codigoArt','$nombreArt','$precioArt','$codigoFab')";
    mysqli_query ($link,$sql) or die ("<br>ERROR AL INSERTAR DATOS");
    echo ("<h3>Se cargaron los datos a la tabla ARTICULOS</h3>");
    mysqli_close ($link);
    echo ("<a href='cargarTablas.html'>Cargar Otro</a>");  
}
?>