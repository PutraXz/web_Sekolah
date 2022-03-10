<?php
// https://www.malasngoding.com
 
// menghubungkan dengan koneksi database
require 'controller/functions.php';
 
// mengambil data barang
$sql = mysqli_query($conn,"SELECT * FROM siswa");
 
// menghitung data barang
$jumlah_barang = mysqli_num_rows($sql);
?>
 
<p>Jumlah data barang : <b><?php echo $jumlah_barang; ?></b></p>