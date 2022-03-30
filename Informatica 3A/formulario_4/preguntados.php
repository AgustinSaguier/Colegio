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
      $contador=0;
      $cUno=$_REQUEST["c_py"];
      $cDos=$_REQUEST["c_arg"];
      $cTres=$_REQUEST["c_br"];
      $cCuatro=$_REQUEST["c_chi"];
      $cCinco=$_REQUEST["c_us"];
      $img1=$_REQUEST["img1"];
      $img2=$_REQUEST["img2"];
      $img3=$_REQUEST["img3"];
      $check=$_REQUEST["guess"];
      $select=$_REQUEST["plataforma"];  

        if ($cUno=="Asuncion"){
            $contador=$contador+1;
        }
        if ($cDos=="Buenos"){
            $contador=$contador+1;
        }
        if ($cTres=="Brasilia"){
            $contador=$contador+1;
        }
        if ($cCuatro=="Santiago"){
            $contador=$contador+1;
        }
        if ($cCinco=="Washington"){
            $contador=$contador+1;
        }
        if ($img1=="Estados Unidos"){
            $contador=$contador+1;
        }
        if ($img2=="Taiwan"){
            $contador=$contador+1;
        }
        if ($img3=="Indonesia"){
            $contador=$contador+1;
        }
        if ($check=="Francia"){
            $contador=$contador+1;
        }
        if ($select=="Si"){
            $contador=$contador+1;
        }
    

    echo ("<h3>Obtuvo ".$contador." respuestas correctas de 10</h3>");
    echo ("<h5>Pregunta uno: Su respuesta es ".$cUno.", la correcta es Asuncion</h5>");
    echo ("<h5>Pregunta dos: Su respuesta es ".$cDos.", la correcta es Buenos Aires</h5>");
    echo ("<h5>Pregunta tres: Su respuesta es ".$cTres.", la correcta es Brasilia</h5>");
    echo ("<h5>Pregunta cuatro: Su respuesta es ".$cCuatro.", la correcta es Santiago</h5>");
    echo ("<h5>Pregunta cinco: Su respuesta es ".$cCinco.", la correcta es Washington</h5>");
    echo ("<h5>Pregunta seis: Su respuesta es ".$img1.", la correcta es Estados Unidos</h5>");
    echo ("<h5>Pregunta siete: Su respuesta es ".$img2.", la correcta es Taiwan</h5>");
    echo ("<h5>Pregunta ocho: Su respuesta es ".$img3.", la correcta es Indonesia</h5>");
    echo ("<h5>Pregunta nueve: Su respuesta es ".$check.", la correcta es Francia</h5>");
    echo ("<h5>Pregunta diez: Su respuesta es ".$select.", la correcta es Si</h5>");
    ?>
</body>
</html>