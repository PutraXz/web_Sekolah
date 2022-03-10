<div class="row">
	   <!-- Circle Buttons -->
	   <div class="card shadow mb-4">
	   <div class="card-header py-3">
	   <h6 class="m-0 font-weight-bold text-primary"><center>Data Kelas</h6>
                        <div class="card-body">
                        <table id="example1" border="1" cellpadding="10" cellspasing="0" width="100%">
                                <thead>
                                        <tr>
                                                <th>No</th>
                                                <th>Mata pelajaran</th>
                                                <th>nama kelas</th>
                                        </tr>
                                </thead>
								<tbody>
<?php
require 'controller/functions.php';
if (x=='x' ){
 $pbo= 'pbo';
$no = 1;
$username = $_SESSION['username'];
$sql = "SELECT * FROM siswa INNER JOIN user INNER join kelas WHERE user.username='$username' and kelas.nama_kelas='x'";
$database = mysqli_query($conn,"SELECT * FROM mapel WHERE id='7'");
$pbo = mysqli_query($conn,"SELECT * FROM mapel WHERE id='10'");
$bindo = mysqli_query($conn,"SELECT * FROM mapel WHERE id='11'");
$query = mysqli_query($conn, $sql);
$mapelx = mysqli_fetch_assoc($database);
$mapelx1 = mysqli_fetch_assoc($pbo);
$mapelx2 = mysqli_fetch_assoc($bindo);
while($data = mysqli_fetch_array($query)) {
    ?>
<tr>
    <td>
        <?php echo $no++; ?>
    </td>
    <td>
        <?php echo "$mapelx[nama_mapel]&nbsp"; echo "$mapelx1[nama_mapel]&nbsp"; echo "$mapelx2[nama_mapel]&nbsp"; ?>
    </td>
    <td>
        <?php echo $data['nama_kelas']; ?>
    </td>
</tr>
<?php }}?>               