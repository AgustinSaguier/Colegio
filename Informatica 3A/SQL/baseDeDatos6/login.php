<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="box">
        <div class="container">
            <div class="header">
                <img src="https://pnggrid.com/wp-content/uploads/2021/04/twiiter-3-1024x845.png" class="twtLogo">
            </div>
            <div class="title">
                <h1>Sign in to Twitter</h1>
            </div>
            <div class="form">
                <form action="loginUser.php" enctype="multipart/form-data">
                    <input type="text" name="user" id="input" placeholder="Username">
                    <br><br>
                    <input type="password" name="pass" id="input" placeholder="Password">
                    <br><br>
                    <input type="submit" id="submit" value="Log in">
                    <br>   
                </form>    
            </div>
            <div class="register">
                Don't have an account? <a href="register.php">Sign Up</a>
            </div>
        </div>
    </div>
</body>
</html>