<?php

 
require 'functions.php';

$username = $_POST['username'];
$password = $_POST['password'];
$passwordmd5 = md5($password);

$login = mysqli_query($conn,"SELECT * FROM user WHERE username='$username' and password='$passwordmd5'");
$cek = mysqli_num_rows($login);
session_start();
if($cek > 0){

 $data = mysqli_fetch_assoc($login);

 if($data['role']=="admin"){
  
  $_SESSION['username'] = $username;
  $_SESSION['role'] = "admin";
  header("location:../admin.php");

 }else if($data['role']=="guru"){
   
  $_SESSION['username'] = $username;
  $_SESSION['role'] = "guru";
  header("location:../guru");

}else if($data['role']=="siswa"){
   
    $_SESSION['username'] = $username;
    $_SESSION['role'] = "siswa";
  header("location:../siswa.php");

 }else{

  header("location:../login.php?pesan=gagal1");
 } 
}else{
 header("location:../login.php?pesan=gagal2");
}

?>