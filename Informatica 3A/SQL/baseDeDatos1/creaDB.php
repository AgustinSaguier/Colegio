
<?php
/*
Crear un archivo creaDB.php que tenga el
comando como texto sql para crear
una base de datos que se llame colegio
*/

    $sql="CREATE DATABASE colegio";
    //Primer Paso: Conectar al servidor
    $connect=mysqli_connect("localhost","agustin","12345678") or die ("ERROR DE CONEXION AL SERVIDOR!!");
    echo ("Conexion al servidor exitosa");
    mysqli_query($connect,$sql) or die ("<br>ERROR EN EJECUTAR COMANDO SQL");
    echo ("<br>Base de datos creada exitosamente");
?>
