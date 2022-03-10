<?php

    if(isset($_GET['id'])){
        $sql_cek = "SELECT * from pegawai WHERE id='".$_GET['id']."'";
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
								<b>Nama pegawai</b>
							</td>
							<td>:
								<?php echo $data_cek['nama_pegawai']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Nrp</b>
							</td>
							<td>:
								<?php echo $data_cek['nrp']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Tangggal Lahir</b>
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
								<b>Status</b>
							</td>
							<td>:
								<?php echo $data_cek['status']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Penghasilan</b>
							</td>
							<td>:
								<?php echo $data_cek['penghasilan']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Pendidikan Akhir</b>
							</td>
							<td>:
								<?php echo $data_cek['pendidikan_akhir']; ?>
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






