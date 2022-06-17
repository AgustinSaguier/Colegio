
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
                <h1>Create your account</h1>
            </div>
            <div class="form">
                <form action="registerUser.php" method="post" enctype="multipart/form-data">
                    <input type="text" name="user" id="text" placeholder="Username">
                    <br><br>
                    <input type="password" name="pass" id="text" placeholder="Password">
                    <br><br>
                    <label for="file"><h5>Pick a profile picture</h5><img src="https://media.idownloadblog.com/wp-content/uploads/2017/03/Twitter-new-2017-avatar-001.png" id="small">
                    <input type="file" name="file" id="file">
                    </label>
                    <br><br>
                    <input type="submit" value="Sign Up">
                </form> 
            </div>
            <div class="register">
            </div>
        </div>
    </div>
</body>
</html>