<?php
$dividendo=$_REQUEST["dividendo"];
$divisor=$_REQUEST["divisor"];

if ($divisor==0){
    echo "ERROR: Divison por cero";
}
else {
    $cociente=$dividendo/$divisor;
    $realCociente=number_format($cociente);
    $resto=$dividendo%$divisor;

    if (is_float($cociente)){
        echo "<p>La division no es exacta<br>
        Cociente: $realCociente<br>
        Resto: $resto</p>";
    }
    else {
        echo "<p>La division es exacta<br>
        Cociente: $realCociente<br>
        Resto: $resto</p>";
    }
 }
    ?>