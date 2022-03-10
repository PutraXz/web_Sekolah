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

$no = 1;
$username = $_SESSION['username'];
$sql = "SELECT * FROM `siswa` inner JOIN mapel INNER JOIN user INNER join kelas WHERE user.username='$username' and mapel.nama_mapel='pbo' ";
$query = mysqli_query($conn, $sql);
while($data = mysqli_fetch_array($query)) {
    ?>
	
<tr>
    <td>
        <?php echo $no++; ?>
    </td>
    <td>
        <?php echo $data['nama_mapel']; ?>
    </td>
    <td>
        <?php echo $data['nama_kelas']; ?>
    </td>
</tr>
<?php } ?> 
