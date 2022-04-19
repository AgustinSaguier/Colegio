<?php



$dadoUno=rand(1,6);
$dadoDos=rand(1,6);
$dadoTres=rand(1,6);
$dadoSuma=$dadoUno+$dadoDos+$dadoTres;

echo "<h1>DADO MAXIMO</h1>";

echo "<img src='img/dado$dadoUno.png' width='100px' height='100px'>";
echo "<img src='img/dado$dadoDos.png' width='100px' height='100px'>";
echo "<img src='img/dado$dadoTres.png' width='100px' height='100px'>";

echo "<p>Su suma es de: $dadoSuma</p>";

if ($dadoUno>=$dadoDos and $dadoUno>=$dadoTres){
    echo "<p>Su dado mas alto es: $dadoUno</p>";
}
elseif ($dadoDos>=$dadoUno and $dadoDos>=$dadoTres){
    echo "<p>Su dado mas alto es: $dadoDos</p>";
}
elseif ($dadoTres>=$dadoDos and $dadoTres>=$dadoUno){
    echo "<p>Su dado mas alto es: $dadoTres</p>";
}

echo "<a href='http://localhost/Agustin%20Saguier%203A/Colegio/Informatica%203A/formulario_15/dados.php'>Jugar otravez</a>";
?>