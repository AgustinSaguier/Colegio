<?php include("includes/header.php")?>
<?php include("includes/conexion.php")?>
<div class="container">
    <div class="form">
        <form action="" method="POST">
            <p>Realizar Consultas</p>
            <br>
            <select name="consulta" id="consulta">
            <option value="0">...</option>
            <option value="1">Obtener todos los datos de los Empleados con Apellido 'Lopez'</option>
            <option value="2">Obtener todos los datos de los Empleados que trabajan para el Departamento '14'</option>
            <option value="3">Obtener todos los datos de los Empleados que trabajan para el Departamento '37' y '77'</option>
            <option value="4">Obtener el presupuesto total de todos los Departamentos</option>
            </select>
            <br><br>
            <input type="submit" value="Consultar">
        </form>
    </div>
<?php
if (isset($_POST["consulta"])){
    $consulta=$_REQUEST["consulta"];
    if ($consulta==0){
        echo("Porfavor eliga una consulta para realizar");
    }
    if ($consulta==1){
        ?>
        <table>
            <thead>
                <tr>
                    <th>DNI</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Departamento</th>
                </tr>
            </thead>
            <tbody>
        <?php
        mysqli_select_db($link,"Departamentos");
        $sql = "SELECT * FROM Empleado WHERE Apellido='Lopez'";
        $tabla = mysqli_query($link,$sql); 
        while($row = mysqli_fetch_array($tabla)) {?>
            <tr>
                <td><?php echo $row['DNI']?></td>
                <td><?php echo $row['Nombre']?></td>
                <td><?php echo $row['Apellido']?></td>
                <td><?php echo $row['Departamento']?></td>
            </tr>

        <?php } ?>
<?php   }
    if ($consulta==2){
        ?>
        <table>
            <thead>
                <tr>
                    <th>DNI</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Departamento</th>
                </tr>
            </thead>
            <tbody>
        <?php
        mysqli_select_db($link,"Departamentos");
        $sql = "SELECT * FROM Empleado WHERE Departamento='14'";
        $tabla = mysqli_query($link,$sql); 
        while($row = mysqli_fetch_array($tabla)) {?>
            <tr>
                <td><?php echo $row['DNI']?></td>
                <td><?php echo $row['Nombre']?></td>
                <td><?php echo $row['Apellido']?></td>
                <td><?php echo $row['Departamento']?></td>
            </tr>

        <?php } ?>
<?php   }
    if ($consulta==3){
        ?>
        <table>
            <thead>
                <tr>
                    <th>DNI</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Departamento</th>
                </tr>
            </thead>
            <tbody>
        <?php
        mysqli_select_db($link,"Departamentos");
        $sql = "SELECT * FROM Empleado WHERE Departamento='37' OR Departamento='77'";
        $tabla = mysqli_query($link,$sql); 
        while($row = mysqli_fetch_array($tabla)) {?>
            <tr>
                <td><?php echo $row['DNI']?></td>
                <td><?php echo $row['Nombre']?></td>
                <td><?php echo $row['Apellido']?></td>
                <td><?php echo $row['Departamento']?></td>
            </tr>

        <?php } ?>
<?php   }
    if ($consulta==4){
        ?>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Presupuesto</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            mysqli_select_db($link,"Departamentos");
            $sql = "SELECT * FROM Departamento";
            $tabla = mysqli_query($link,$sql); 
            while($row = mysqli_fetch_array($tabla)) {?>
                <tr>
                    <td><?php echo $row['Nombre']?></td>
                    <td><?php echo $row['Presupuesto']?></td>
                </tr>
            <?php }?>
            <th>Presupuesto Total</th>
            <?php 
            mysqli_select_db($link,"Departamentos");
            $sql = "SELECT SUM(Presupuesto) AS SumPresupuesto FROM Departamento";
            $tabla = mysqli_query($link,$sql); 
            while($row = mysqli_fetch_array($tabla)) {?>
                <td><?php echo $row['SumPresupuesto']?></td>
            <?php }?>
<?php   }
}
?>  
</div>
</body>
</html>