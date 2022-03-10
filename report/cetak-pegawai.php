<?php
	require "../controller/functions.php";
	
	@$id = $_GET['id'];

	$sql_cek = "SELECT * FROM siswa";
	$query_cek = mysqli_query($conn, $sql_cek);
	$data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
	{
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>CETAK DATA Siswa</title>
</head>

<body>
	<center>

			<?php
			}

			$sql_tampil = "SELECT * from siswa where id='$id'";
			$query_tampil = mysqli_query($conn, $sql_tampil);
			$no=1;
			while ($data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)) {
		?>
	</center>

	<center>
		<h4>
			<u>DATA Siswa</u>
		</h4>
	</center>

	<table border="1" cellspacing="0" style="width: 70%; height:50%;"  align="center" >
		<tbody>
		<tr>
							<td>
								Nama Lengkap
							</td>
							<td>:
								<?php echo $data_cek['nama_lengkap']; ?>
							</td>
						</tr>
						<tr>
							<td>
								Nisn
							</td>
							<td>:
								<?php echo $data_cek['nisn']; ?>
							</td>
						</tr>
						<tr>
							<td>
								Nik
							</td>
							<td>:
								<?php echo $data_cek['nik']; ?>
							</td>
						</tr>
						<tr>
							<td>
								Agama
							</td>
							<td>:
								<?php echo $data_cek['agama']; ?>
							</td>
						</tr>
						<tr>
							<td>
								Tanggal Lahir
							</td>
							<td>:
								<?php echo $data_cek['tgl_lahir']; ?>
							</td>
						</tr>
						<tr>
							<td>
								Jenis Kelamin
							</td>
							<td>:
								<?php echo $data_cek['jenis_kelamin']; ?>
							</td>
						</tr>
						<tr>
							<td>
								Alamat
							</td>
							<td>:
								<?php echo $data_cek['alamat']; ?>
							</td>
						</tr>
						<tr>
							<td>
								Telepon
							</td>
							<td>:
								<?php echo $data_cek['telepon']; ?>
							</td>
						</tr>
						<tr>
							<td>
								Alamat orangtua
							</td>
							<td>:
								<?php echo $data_cek['alamat_orangtua']; ?>
							</td>
						</tr>
						<tr>
							<td>
								Nama Ayah
							</td>
							<td>:
								<?php echo $data_cek['nama_ayah']; ?>
							</td>
						</tr>
						<tr>
							<td>
								Nama Ibu
							</td>
							<td>:
								<?php echo $data_cek['nama_ibu']; ?>
							</td>
						</tr>
						<tr>
							<td>
								Pekerjaan ayah
							</td>
							<td>:
								<?php echo $data_cek['pekerjaan_ayah']; ?>
							</td>
						</tr>
						<tr>
							<td>
								Pekerjaan ibu
							</td>
							<td>:
								<?php echo $data_cek['pekerjaan_ibu']; ?>
							</td>
						</tr>
						<tr>
							<td>
								Anak ke
							</td>
							<td>:
								<?php echo $data_cek['anak_ke']; ?>
							</td>
						</tr>
						<tr>
							<td>
								Jumlah saudara
							</td>
							<td>:
								<?php echo $data_cek['jumlah_saudara']; ?>
							</td>
						</tr>
						<tr>
							<td>
								Asal Sekolah
							</td>
							<td>:
								<?php echo $data_cek['asal_sekolah']; ?>
							</td>
						</tr>
			<?php } ?>
		</tbody>
	</table>
</body>

</html>