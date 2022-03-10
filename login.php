<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <?php
            if(isset($_GET['pesan'])){
            if($_GET['pesan']=="gagal"){
            echo "<div class='alert'>Username & Password Salah !</div>";
            }
                                     }
                                     ?>
        <form action="controller/proses_login.php" method="post">
            <div class="login-box">
                <h1>Login</h1>
                <div class="textbox">
                    <i class="fas fa-user"></i>
                    <label for="username"></label>
                    <input type="text" name="username" placeholder="Username">
                </div>

                <div class="textbox">
                    <i class="fas fa-lock"></i>
                    <label for="password"></label>
                    <input type="password" name="password"" placeholder="Password">
                </div>

                <button type="submit" class="btn">Login</button>
                <a href="lupa_password.php">forgot your password</a>
            </div>
        </form>
</body>

</html>