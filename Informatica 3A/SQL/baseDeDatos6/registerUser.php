<?php 
include ('includes/conexion.php');

$user = $_REQUEST['user'];
$pass = $_REQUEST['pass'];

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
            $fileDestination = 'uploads/'.$fileNameNew;
            move_uploaded_file($fileTmpName, $fileDestination);
        } else {
            echo "Your file is too big"; 
        }
    } else {
        echo "There was an error uploading your file";
    }
} else {
    echo "You cannot upload files of this type";
}


$sql = "INSERT INTO Usuario (Username, Password, ProfilePicture) Values ('$user','$pass','$fileNameNew')";
mysqli_query ($link,$sql);
echo(
    "<script>
        alert ('Account created successfully')
        window.location.replace('login.php')
    </script>
    "
);

?>