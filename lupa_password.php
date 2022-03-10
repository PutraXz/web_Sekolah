<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>Lupa Passoword</title> 
</head>
<body>
<?php
require 'controller/functions.php';
if(isset($_SESSION['level']) != ''){
    header("location:index.php");
    exit();
}

$err    = "";
$sukses = "";
$email  = "";

if(isset($_POST['submit'])){
    $email  = $_POST['email'];
    if($email   == ''){
        $err = "silahkan masukkan email";

    }else{
        $sql1 = "select * from user where email = '$email'";
        $q1 = mysqli_query($conn,$sql1);
        $n1  = mysqli_num_rows($q1);

        if($n1 < 1){
            $err = "email: <b>$email</b> tidak ditemukan";
        }
    }

    if(empty($err)){
        $token_ganti_password   = md5(rand(0,1000));
        $judul_email            = "ganti password";
        $isi_email              = "seseorang meminta untuk melakukan perubah password. silahkan klik link dibawah ini : <br>";
        $isi_email             .= url_dasar()."/ganti_password.php?email=$email&token=$token_ganti_password";
        kirim_email($email,$email,$judul_email,$isi_email);

        $sql1   = "UPDATE user set token_ganti_password = '$token_ganti_password' where email='$email'";
        mysqli_query($conn,$sql1);
        $sukses = "link ganti password sukses terkirim";
    }
}

?>
<?php if($err){ echo "<div class='error'>$err</div>";}?>
<?php if($sukses){ echo "<div class='sukses'>$sukses</div>";}?>
<form action="" method="POST">
<table>
    <tr>
    
        <td><i class='bx bxl-gmail'></i>email</td>
        <td><input type="text" name="email" value="<?php echo $email?>"></td>
    </tr>
    <tr>
        <td></td>
        <td>
            <input type="submit" name="submit" value="lupa password">
        </td>
    </tr>
</table>



</form>
</body>
</html>
<h1>lupa password</h1>
