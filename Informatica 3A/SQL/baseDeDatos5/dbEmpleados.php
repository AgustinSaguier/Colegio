<?php include("includes/header.php")?>
<?php include("includes/conexion.php")?>
<div class="container">
    <div class="form">
        <form action="cargarEmpleados.php">
            <input type="text" name="DNI" id="input" placeholder="DNI">
            <br><br>
            <input type="text" name="Nombre" id="input" placeholder="Nombre">
            <br><br>
            <input type="text" name="Apellido" id="input" placeholder="Apellido">
            <br><br>
            <input type="number" name="Departamento" id="input" placeholder="Departamento">
            <br><br>
            <input type="submit" value="Cargar">
        </form>
    </div>
    <div class="table">
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
                $sql = "SELECT * FROM Empleado";
                $tabla = mysqli_query($link,$sql); 
                while($row = mysqli_fetch_array($tabla)) {?>
                    <tr>
                        <td><?php echo $row['DNI']?></td>
                        <td><?php echo $row['Nombre']?></td>
                        <td><?php echo $row['Apellido']?></td>
                        <td><?php echo $row['Departamento']?></td>
                    </tr>
                <?php }?>
            </tbody>
        </table>
    </div>  
</div>
</body>
</html>