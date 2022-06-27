<?php 

include ('includes/conexion.php');
$Code=$_REQUEST['hidden-code'];
if ($Code==1) {
    $user = $_REQUEST['Username'];
    $pass = $_REQUEST['Password'];
    $mail = $_REQUEST['E-mail'];
    
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
                $fileNameNew = "profile".$user.".".$fileActualExt;
                //$fileDestination = 'uploads/'.$fileNameNew;
                //move_uploaded_file($fileTmpName, $fileDestination);
            } else {
                echo "Your file is too big"; 
            }
        } else {
            echo "There was an error uploading your file";
        }
    } else {
        echo "You cannot upload files of this type";
    }
    
    
    $sql = "INSERT INTO Vendedor (Username, Password, Email, Photo) Values ('$user','$pass','$mail','$fileNameNew')";
    mysqli_query ($link,$sql);

    $sql="SELECT idVendedor FROM Vendedor WHERE Username = '$user' AND Email = '$mail' AND Password = '$pass'";
    $tabla=mysqli_query($link,$sql) or die ("ERROR");
    $fila=mysqli_fetch_array($tabla);
    $id = $fila['idVendedor'];
    echo ($id);
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileNameNew = "profile".$id.".".$fileActualExt;
    $fileDestination = 'uploads/'.$fileNameNew;
    move_uploaded_file($fileTmpName, $fileDestination);
    mysqli_close($link);
    echo(
        "<script>
            alert ('Account created successfully')
            window.location.replace('index.php')
        </script>
        "
    );
}
?>