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
						<th>Hari</th>
						<th>Guru</th>
						<th>Mapel</th>
						<th>Kelas</th>
						<th>mulai</th>
						<th>berhenti</th>
					</tr>
				</thead>
				<tbody>
<?php
$no = 1;
$sql = "SELECT pegawai.nama_pegawai,jadwal.hari,jadwal.jam,jadwal.mulai,jadwal.berhenti,kelas.nama_kelas,mapel.nama_mapel from pegawai inner JOIN jadwal on pegawai.id_jadwal=jadwal.id  INNER JOIN kelas on pegawai.id_kelas=kelas.id INNER JOIN mapel ON pegawai.id_mapel=mapel.id WHERE 1 ";
if(isset($_GET['hari']))
$sql .= "AND jadwal.hari = '". $_GET['hari'] . "'";
$query = mysqli_query($conn, $sql);
while($data = mysqli_fetch_array($query)) {
    
    ?>
<tr>
    <td>
        <?php echo $no++; ?>
    </td>
    <td>
        <?php echo $data['hari']; ?>
    </td>
    <td>
        <?php echo $data['nama_pegawai']; ?>
    </td>
    <td>
        <?php echo $data['nama_mapel']; ?>
    </td>
    <td>
        <?php echo $data['nama_kelas']; ?>
    </td>
    <td>
        <?php echo $data['mulai']; ?>
    </td>
    <td>
        <?php echo $data['berhenti']; ?>
    </td>
</tr>
<?php } ?> 

