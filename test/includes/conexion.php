<?php
$user='root';
$pass='';
$db='intercolegialTest';
$servidor='localhost';
$link=mysqli_connect($servidor,$user,$pass)
or die ("ERROR DE CONEXION AL SERVIDOR!!");
mysqli_select_db($link,$db);

$errorCI = "<div class='alert-error'>
<i class='bi bi-exclamation-triangle'></i>
<span class='alert-error-title'>Se produjo un problema</span>
<br><br>
<span class='alert-description'>No existe un alumno inscripto con el CI ingresado </span>
</div>";

$errorModalidad = "<div class='alert-error'>
<i class='bi bi-exclamation-triangle'></i>
<span class='alert-error-title'>Se produjo un problema</span>
<br><br>
<span class='alert-description'>El alumno no esta inscripto a la modalidad ingresada</span>
</div>";

$errorPartido = "<div class='alert-error'>
<i class='bi bi-exclamation-triangle'></i>
<span class='alert-error-title'>Se produjo un problema</span>
<br><br>
<span class='alert-description'>El alumno no tiene un partido el dia de hoy</span>
</div>";

$errorEntradas = "<div class='alert-error'>
<i class='bi bi-exclamation-triangle'></i>
<span class='alert-error-title'>Se produjo un problema</span>
<br><br>
<span class='alert-description'>El alumno ya ha jugado el partido</span>
</div>";

?>