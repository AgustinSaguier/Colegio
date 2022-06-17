<?php 
session_start();
$user = $_SESSION['name'];
if (!(isset ($_SESSION["idUser"])))
    header ("Location:login.php")

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>
<body>
    <div class="container">
        <div class="title">
            <h1>HOME</h1>
        </div>
        <div class="content">

        </div>
        <div class="navbar">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4f/Twitter-logo.svg/2491px-Twitter-logo.svg.png" class="small">
            <ul>
                <li>
                    <a href="#">
                    <i class="bi bi-house-door"></i>
                    <span class="nav-item">Home</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bi bi-hash"></i>
                        <span class="nav-item">Explore</span>    
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bi bi-bell"></i>
                        <span class="nav-item">Notifications</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bi bi-envelope"></i>
                        <span class="nav-item">Messages</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bi bi-card-list"></i>
                        <span class="nav-item">Lists</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bi bi-bookmark"></i>
                        <span class="nav-item">Bookmarks</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bi bi-three-dots"></i>
                        <span class="nav-item">More</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="profile">
            <?php
                echo("<img src='uploads/profile$user.jpg' class='profile'</img>");
                echo("<span class='profile'>".$_SESSION['name']."</span>");
            ?>
                <p class='number-tweets'>Tweets <br><span class='blue'>0</span></p>
        </div>
        <div class="extra">

        </div>
    </div>
</body>
</html>