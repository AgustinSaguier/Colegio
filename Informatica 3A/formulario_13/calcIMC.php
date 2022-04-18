
<?php
$peso=$_REQUEST["peso"];
$altura=$_REQUEST["altura"];
$altura=$altura/100;
//La fórmula del imc es: imc = peso / altura2 
//(peso en kilogramos y altura en metros).

$IMC = $peso/($altura*$altura);

echo ("<p>Su Imc es: $IMC</p>")



?>