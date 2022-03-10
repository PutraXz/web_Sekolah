<?php

    if(isset($_GET['id'])){
        $sql_cek = "SELECT * from siswa WHERE id='".$_GET['id']."'";
        $query_cek = mysqli_query($conn, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>
<div class="row">

	<div class="col-md-8">
		<div class="card card-info">
			<div class="card-header">
				<h3 class="card-title">Detail Siswa</h3>

				<div class="card-tools">
				</div>
			</div>
			<div class="card-body p-0">
				<table class="table">
					<tbody>
						<tr>
							<td style="width: 150px">
								<b>Nama Lengkap</b>
							</td>
							<td>:
								<?php echo $data_cek['nama_lengkap']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Nisn</b>
							</td>
							<td>:
								<?php echo $data_cek['nisn']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Nik</b>
							</td>
							<td>:
								<?php echo $data_cek['nik']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Agama</b>
							</td>
							<td>:
								<?php echo $data_cek['agama']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Tanggal Lahir</b>
							</td>
							<td>:
								<?php echo $data_cek['tgl_lahir']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Jenis Kelamin</b>
							</td>
							<td>:
								<?php echo $data_cek['jenis_kelamin']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Alamat</b>
							</td>
							<td>:
								<?php echo $data_cek['alamat']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Telepon</b>
							</td>
							<td>:
								<?php echo $data_cek['telepon']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Alamat orangtua</b>
							</td>
							<td>:
								<?php echo $data_cek['alamat_orangtua']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Nama Ayah</b>
							</td>
							<td>:
								<?php echo $data_cek['nama_ayah']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Nama Ibu</b>
							</td>
							<td>:
								<?php echo $data_cek['nama_ibu']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Pekerjaan ayah</b>
							</td>
							<td>:
								<?php echo $data_cek['pekerjaan_ayah']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Pekerjaan ibu</b>
							</td>
							<td>:
								<?php echo $data_cek['pekerjaan_ibu']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Anak ke</b>
							</td>
							<td>:
								<?php echo $data_cek['anak_ke']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Jumlah saudara</b>
							</td>
							<td>:
								<?php echo $data_cek['jumlah_saudara']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Asal Sekolah</b>
							</td>
							<td>:
								<?php echo $data_cek['asal_sekolah']; ?>
							</td>
						</tr>
					</tbody>
				</table>
				<div class="card-footer">
					<a href="?page=data-pegawai" class="btn btn-warning">Kembali</a>

					<a href="report/cetak-pegawai.php?id=<?php echo $data_cek['id']; ?>" target=" _blank"
					 title="Cetak Data Pegawai" class="btn btn-primary">Print</a>
				</div>
			</div>
		</div>
	</div>

	<div class="col-md-4">
		<div class="card card-success">
			<div class="card-header">
				<center>
					<h3 class="card-title">
						Foto siswa
					</h3>
				</center>

				<div class="card-tools">
				</div>
			</div>
			<div class="card-body">
				<div class="text-center">
				<img src="img/<?= $data_cek["gambar"]; ?>" width="250px">
				</div>

				<h3 class="profile-username text-center">
					<?php echo $data_cek['nrp']; ?>
					-
					<?php echo $data_cek['nama']; ?>
				</h3>
			</div>
		</div>
	</div>

</div>






