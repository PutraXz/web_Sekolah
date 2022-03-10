<?php
$conn2 = mysqli_connect("localhost","root","","phpdasar");
            $username = $_SESSION['username'];

            $sqlku = "SELECT * FROM user WHERE username='$username'";
            $queryku = mysqli_query($conn2, $sqlku);
            $rowku    = mysqli_fetch_array($queryku);
            if(mysqli_num_rows($queryku) > 0)
            {
            if($rowku['level']=="siswa"){
            @$_SESSION['username'] = $rowku['username'];
               echo "<marquee><font color: red size: 300px>Anda tidak memiliki hak akses ASU</font></marquee>";
      }}?>