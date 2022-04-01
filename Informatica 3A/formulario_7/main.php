<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
            
            body{
                background-color: #3aafa9;
                color: #def2f1;
            }
    
            h1{
            background-color:white ;
            color: #17252A;
            width: 600px;
            }

            h3{
            background-color: #def2f1;
            color: #2b7a78;
            width: 100px;
            }

            h4{
                background-color: #2b7a78;
                color: white;
                width: 100px;
            }
    
        </style>
</head>
<body>
    <?php

        echo("<h1>SISTEMA CALCULO DEL SALARIO</h1>");    

        $nombre=$_REQUEST ["nombre"];
        $apellido=$_REQUEST ["apellido"];
        $monto=$_REQUEST["monto"];
        $horas=$_REQUEST["horas"];
        $pIPS=$_REQUEST["pIPS"];
        $pASO=$_REQUEST["pASO"];
        $hijos=$_REQUEST["hijos"];
            
           
        if (strpos($nombre, " ")!== FALSE or strpos($apellido," ")!== FALSE){
            echo("<p>Los datos de su nombre estan incompletos</p>");
             }
        else{  
            if(empty($_REQUEST["nombre"] and $_REQUEST["apellido"])){
                echo("<p>Los datos de su nombre estan incompletos</p>");
            }
            else{

                echo ("<h2>$nombre $apellido<h2>");

                echo ("<h3>Salario:</h3>");

                $salario_base=$monto*$horas;
                $salario_ips=($salario_base*$pIPS)/100;
                $salario_aso=($salario_base*$pASO)/100;
                $salario_hijos=($salario_base*($hijos*3))/100;
                $salario_final=($salario_base-$salario_ips-$salario_aso+$salario_hijos);
                $salario_final_final=number_format($salario_final);
                echo("<h4>$salario_final_final <h4>"); 
            }
             }
           
             
         
        
    ?>
</body>
</html>


