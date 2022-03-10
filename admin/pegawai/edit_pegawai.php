
<?php

    if(isset($_GET['id'])){
        $sql_cek = "SELECT * FROM pegawai WHERE id='".$_GET['id']."'";
        $query_cek = mysqli_query($conn, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>

<div class="card card-success">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Ubah Data</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">
		<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Pegawai</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai" value="<?php echo $data_cek['nama_pegawai']; ?>"
					/>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">nrp</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nrp" name="nrp" value="<?php echo $data_cek['nrp']; ?>"
					 />
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tanggal Lahir</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?php echo $data_cek['tgl_lahir']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jenis Kelamin</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="<?php echo $data_cek['jenis_kelamin']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Alamat</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $data_cek['alamat']; ?>"
					/>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Telepon</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="telepon" name="telepon" value="<?php echo $data_cek['telepon']; ?>"
					/>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Status</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="status" name="status" value="<?php echo $data_cek['status']; ?>"
					/>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Penghasilan</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="penghasilan" name="penghasilan" value="<?php echo $data_cek['penghasilan']; ?>"
					/>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Pendidikan Akhir</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="pendidikan_akhir" name="pendidikan_akhir" value="<?php echo $data_cek['pendidikan_akhir']; ?>"
					/>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">gambar Pegawai</label>
				<div class="col-sm-6">
				<img src="img/<?= $data_cek["gambar"]; ?>" width="250">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Ubah gambar</label>
				<div class="col-sm-6">
					<input type="file" id="gambar" name="gambar">
					<p class="help-block">
						<font color="red">"Format file Jpg/Png"</font>
					</p>
				</div>
			</div>
		</div>

		<div class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
			<a href="?page=data-pegawai" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php
	$sumber = @$_FILES['gambar']['tmp_name'];
	$target = 'gambar/';
	$nama_file = @$_FILES['gambar']['name'];
	$pindah = move_uploaded_file($sumber, $target.$nama_file);

	
if (isset ($_POST['Ubah'])){

    if(!empty($sumber)){
        $gambar= $data_cek['gambar'];
            if (file_exists("gambar/$gambar")){
            unlink("gambar/$gambar");}

        $sql_ubah = "UPDATE pegawai SET
		nama_pegawai='".$_POST['nama_pegawai']."',
		nrp='".$_POST['nrp']."',
		tgl_lahir='".$_POST['tgl_lahir']."',
		jenis_kelamin='".$_POST['jenis_kelamin']."',
		alamat='".$_POST['alamat']."',
		telepon='".$_POST['telepon']."',
		status='".$_POST['status']."',
		penghasilan='".$_POST['penghasilan']."',
		pendidikan_akhir='".$_POST['pendidikan_akhir']."',
		gambar='".$nama_file."'		
        WHERE nrp='".$_POST['nrp']."'";

        $query_ubah = mysqli_query($conn, $sql_ubah);
		

    }elseif(empty($sumber)){
		$sql_ubah = "UPDATE pegawai SET
		nama_pegawai='".$_POST['nama_pegawai']."',
		nrp='".$_POST['nrp']."',
		tgl_lahir='".$_POST['tgl_lahir']."',
		jenis_kelamin='".$_POST['jenis_kelamin']."',
		alamat='".$_POST['alamat']."',
		telepon='".$_POST['telepon']."',
		status='".$_POST['status']."',
		penghasilan='".$_POST['penghasilan']."',
		pendidikan_akhir='".$_POST['pendidikan_akhir']."'
		WHERE nrp='".$_POST['nrp']."'";
		$query_ubah = mysqli_query($conn, $sql_ubah);

	}
		

    if ($query_ubah) {
        echo "<script>
        Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'data.php?page=data-pegawai';
            }
        })</script>";
        }else{
        echo "<script>
        Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'data.php?page=data-pegawai';
            }
        })</script>";
    }
}

