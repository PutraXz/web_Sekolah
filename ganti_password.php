<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/ganti.css">
    <title>Ganti PASSWORD</title>
</head>
<body>
<h1 class="h1">Ganti  Password</h1>
<?php
require 'controller/functions.php';
if(isset($_SESSION['level']) != ''){
    header("location:index.php");
    exit();
}

$err    = "";
$sukses = "";
$email  = @$_GET['email'];
$token  = @$_GET['token'];

if($token == '' or $email == '') {
    $err .= "<center>Link tidak valid. email dan token tidak tersedia</center>";
}else{
    $sql1 = "SELECT * from user where email = '$email' and token_ganti_password = '$token'";
    $q1   = mysqli_query($conn, $sql1);
    $n1   = mysqli_num_rows($q1);
    if ($n1 < 1) {      
        $err .= "link tidak valid. email dan token tidak sesuai";
    }
}

if(isset($_POST['submit'])){
    $password   = $_POST['password'];
    $konfirmasi_password = $_POST['konfirmasi_password']; 

    if($password == '' or $konfirmasi_password == ''){
        $err .= "<center>silakan masukkan sertakan password</center>";
    }elseif($konfirmasi_password != $password){
        $err .= "konfirmasi password tidak sesuai dengan password";
    }elseif(strlen($password)<3){
        $err .= "jumlah karakter minimal sampai 3 karakter";
    }

    if(empty($err)){
        $sql1 = "update user set token_ganti_password = '',password=md5('$password') where email='$email'";
        mysqli_query($conn,$sql1);
        $sukses = "password berhasil diganti. silahkan <a href='".url_dasar()."/login.php'>login</a>";
    }
}

?>
<?php if($err){ echo "<div class='error'>$err</div>";}?>
<?php if($sukses){ echo "<div class='sukses'>$sukses</div>";}?>
<form action="" method="POST">
<div class="login-box">
    <tr>
    <div class="textbox">
        <i class="fas fa-lock"></i>
        <label for="password"></label>
        <td>password</td>
        <td><input type="password" name="password"></td>
    </div>
    </tr>
    
    <tr>
    <div class="textbox">
        <i class="fas fa-lock"></i>
        <label for="konfirmasi_password"></label>
        <td>konfirmasi password</td>
        <td><input type="password" name="konfirmasi_password"></td>
</div>
    </tr>
    <tr>
        <td></td>
        <td>
            <input type="submit" name="submit" value="ganti password" class="btn">
        </td>
    </tr>
</div>



</form>
</body>
</html>
