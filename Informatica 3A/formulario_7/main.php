<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $nombre=$_REQUEST ["nombre"];
        $apellido=$_REQUEST ["apellido"];
        $monto=$_REQUEST["monto"];
        $horas=$_REQUEST["horas"];
        $pIPS=$_REQUEST["pIPS"];
        $pASO=$_REQUEST["pASO"];
        $hijos=$_REQUEST["hijos"];

        echo ("$nombre $apellido");

        echo ("<p>Salario:</p>");

        $salario_base=$monto*$horas;
        $salario_ips=($salario_base*$pIPS)/100;
        $salario_aso=($salario_base*$pASO)/100;
        $salario_hijos=($salario_base*($hijos*3))/100;
        $salario_final=($salario_base-$salario_ips-$salario_aso+$salario_hijos);
        echo("$salario_final")
    ?>
</body>
</html>


