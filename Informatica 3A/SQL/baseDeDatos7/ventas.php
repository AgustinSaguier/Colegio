<?php
session_start();
include ('includes/conexion.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="home.css">
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    function showUser(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  }

  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("txtHint").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","getuser.php?q="+str,true);
  xmlhttp.send();

  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("txtPrice").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","getPrice.php?q="+str,true);
  xmlhttp.send();

  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("txtStock").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","getStock.php?q="+str,true);
  xmlhttp.send();
}
</script>
<body>
    <nav>
        <img src="https://cdn.icon-icons.com/icons2/1195/PNG/512/1490889698-amazon_82521.png" alt="" class="logo">
        <ul>
            <li><a href="#">Inicio</a></li>
            <li><a href="articulos.html">Agregar Articulos</a></li>
            <li><a href="#">Realizar Ventas</a></li>
            <li><a href="#">Mostrar Articulos</a></li>
            <li><a href="#">Mostrar Ventas</a></li>
        </ul>
    </nav>
    <div class="content2">
        <h1 class="title">Realizar Venta</h1>
        <hr>
        <form action="cargaVentas.php">
            <h3 class="subtitle">Codigo Vendedor</h3>
                <?php
                $sql="SELECT * FROM Vendedor";
                $tabla=mysqli_query($link,$sql) or die ("ERROR");
                $cantfilas=mysqli_num_rows($tabla) or die ("ERROR2");
                $contador=1;
                echo("<select name='idVendedor'>");
                echo("<option value=''>Eliga un codigo</option>");
                for ($z=0;$z<$cantfilas;$z++){
                    $fila=mysqli_fetch_array($tabla);
                    echo("<option value=".$contador.">".$fila["idVendedor"]."</option>");
                    $contador=$contador+1;
                }
                echo("</select>");
                ?>
            </select>
            <h3 class="subtitle">Codigo Articulo</h3>
            <?php
                $sql="SELECT * FROM Articulos";
                $tabla=mysqli_query($link,$sql) or die ("ERROR");
                $cantfilas=mysqli_num_rows($tabla) or die ("ERROR");
                $contador=1;
                echo("<select name='CodigoArticulo' onchange='showUser(this.value)'>");
                echo("<option value=''>Eliga un codigo</option>");
                for ($z=0;$z<$cantfilas;$z++){
                    $fila=mysqli_fetch_array($tabla);
                    echo("<option value=".$contador.">".$fila["CodigoArticulo"]."</option>");
                    $contador=$contador+1;
                }
                echo("</select>");
                ?>
            <h3 class="subtitle">Nombre</h3>
            <div id="txtHint"></div>
            <h3 class="subtitle">Precio</h3>
            <div id="txtPrice"></div>
            <h3 class="subtitle">Stock</h3>
            <div id="txtStock"></div>
            <h3 class="subtitle">Cantidad a Vender</h3>
            <input type="number" name="Cantidad" id="">
            <br><br>
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>