<?php include("includes/header.php")?>
<?php include("includes/conexion.php")?>
<div class="container">
    <div class="form">
        <form action="cargarDepartamentos.php">
            <input type="number" name="Codigo" id="input" placeholder="Codigo">
            <br><br>
            <input type="text" name="Nombre" id="input" placeholder="Nombre">
            <br><br>
            <input type="number" name="Presupuesto" id="input" placeholder="Presupuesto">
            <br><br>
            <input type="submit" value="Cargar">
        </form>
    </div>
    <div class="table">
        <table>
            <thead>
                <tr>
                    <th>Codigo</th>
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
                        <td><?php echo $row['Codigo']?></td>
                        <td><?php echo $row['Nombre']?></td>
                        <td><?php echo $row['Presupuesto']?></td>
                    </tr>
                <?php }?>
            </tbody>
        </table>
    </div>  
</div>
</body>
</html>