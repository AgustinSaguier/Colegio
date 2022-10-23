<?php
    include ("includes/conexion.php");
    $sql="BULK
    INSERT Alumno
    FROM 'Trinity.txt'
    WITH
    (
    FIELDTERMINATOR = '\t',
    ROWTERMINATOR = '\n'
    )
    GO";
    mysqli_query ($link,$sql);
    mysqli_close ($link);
?>