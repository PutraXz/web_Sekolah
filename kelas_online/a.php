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
						<th>Nama siswa</th>
						<th>ruang</th>
						<th>nama kelas</th>
					</tr>
				</thead>
				<tbody>
<?php
require 'controller/functions.php';
$no = 1;
$sql = "SELECT siswa.nama_lengkap,siswa.nisn,kelas.nama_kelas,ruang.nama FROM siswa INNER JOIN kelas on siswa.id_kelas=kelas.id INNER JOIN ruang ON siswa.id_ruang-ruang.id WHERE  ";
if(isset($_GET['kelas'])==($_GET['ruang']))
$sql .= " kelas.nama_kelas = '". $_GET['kelas'] . "'";
$sql .= "AND ruang.nama = '". $_GET['ruang'] . "'";
$query = mysqli_query($conn, $sql);
while($data = mysqli_fetch_array($query)) {
    
    ?>
<tr>
    <td>
        <?php echo $no++; ?>
    </td>
    <td>
        <?php echo $data['nama_lengkap']; ?>
    </td>
    <td>
        <?php echo $data['nama']; ?>
    </td>
    <td>
        <?php echo $data['nama_kelas']; ?>
    </td>
</tr>
<?php } ?> 

