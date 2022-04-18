<?php
$dividendo=$_REQUEST["dividendo"];
$divisor=$_REQUEST["divisor"];

$cociente=$dividendo/$divisor;
$resto=$dividendo%$divisor;

if (is_float($cociente)){
    echo "<p>La division no es exacta<br>
    Cociente: $cociente<br>
    Resto: $resto</p>";
}
else {
    echo "<p>La division es exacta<br>
    Cociente: $cociente<br>
    Resto: $resto</p>";
}
?>