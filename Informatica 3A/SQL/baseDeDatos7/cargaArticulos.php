<?php 
include ('includes/conexion.php');
    $Nombre=$_REQUEST['Nombre'];
    $PrecioCompra=$_REQUEST['PrecioCompra'];
    $PrecioPublico=$_REQUEST['PrecioPublico'];
    $Stock=$_REQUEST['Stock'];

    $file=$_FILES['file'];
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];
    
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    
    $allowed = array('jpg', 'jpeg', 'png', 'pdf');
    
    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 500000) {
                $fileNameNew = "item".$user.".".$fileActualExt;
            } else {
                echo "Your file is too big"; 
            }
        } else {
            echo "There was an error uploading your file";
        }
    } else {
        echo "You cannot upload files of this type";
    }

    $sql = "INSERT INTO Articulos (Nombre, PrecioCompra, PrecioPublico, Stock, PhotoArticulo) Values ('$Nombre','$PrecioCompra','$PrecioPublico','$Stock','$fileNameNew')";
    mysqli_query ($link,$sql);
    $sql="SELECT CodigoArticulo FROM Articulos WHERE Nombre = '$Nombre'";
    $tabla=mysqli_query($link,$sql) or die ("ERROR");
    $fila=mysqli_fetch_array($tabla);
    $id = $fila['CodigoArticulo'];
    echo ($id);
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileNameNew = "item".$id.".".$fileActualExt;
    $fileDestination = 'uploads/'.$fileNameNew;
    move_uploaded_file($fileTmpName, $fileDestination);
    mysqli_close($link);
    echo(
        "<script>
            alert ('Articulo Agregado Exitosamente')
            window.location.replace('articulos.html')
        </script>
        "
    );

?>