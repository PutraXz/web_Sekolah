
<?php

$username = $_SESSION['username'];
$sql33 = "SELECT * from siswa inner join user on siswa.id_user = user.id where user.username = '$username'";
		$query2 = mysqli_query($conn, $sql33)or die(mysqli_error($conn));
		$row  = mysqli_fetch_array($query2);
		if(mysqli_num_rows($query2) > 0);

?>
<div class="card card-success">
<div class="card-header">
	<h3 class="card-title">
		<i class="fa fa-edit"></i> Data Diri</h3>
</div>
<form action="" method="post" enctype="multipart/form-data">
	<div class="card-body">
	<div class="form-group row">
			<label class="col-sm-2 col-form-label">Username</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="username" name="username" value="<?php echo $_SESSION['username']; ?>"
				 readonly/>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Email</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="email" name="email" value="<?php echo $row['email']; ?>"
				/>
			</div>
		</div>
		
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Nama lengkap</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="<?php echo $row['nama_lengkap']; ?>"
			/>
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Nisn</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="nisn" name="nisn" value="<?php echo $row['nisn']; ?>"
				/>
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Tanggal Lahir</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?php echo $row['tgl_lahir']; ?>"
				/>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Jenis kelamin</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="<?php echo $row['jenis_kelamin']; ?>"
				/>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Alamat</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $row['alamat']; ?>"
			/>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Telepon</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="telepon" name="telepon" value="<?php echo $row['telepon']; ?>"
				/>
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
		<a href="?page=data-diri" title="Kembali" class="btn btn-secondary">Batal</a>
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
	$gambar= $row['gambar'];
		if (file_exists("gambar/$gambar")){
		unlink("gambar/$gambar");}

	$sql_ubah = "UPDATE siswa inner join user on siswa.id_user=user.id SET
		username='".$_POST['username']."',
		email='".$_POST['email']."',
		nama_lengkap='".$_POST['nama_lengkap']."',
		nisn='".$_POST['nisn']."',
		tgl_lahir='".$_POST['tgl_lahir']."',
		jenis_kelamin='".$_POST['jenis_kelamin']."',
		alamat='".$_POST['alamat']."',
		telepon='".$_POST['telepon']."',
		gambar='".$nama_file."'		
		WHERE nisn='".$_POST['nisn']."'";

	$query_ubah = mysqli_query($conn, $sql_ubah);
	

}elseif(empty($sumber)){
	$sql_ubah = "UPDATE siswa inner join user on siswa.id_user=user.id SET
		username='".$_POST['username']."',
		email='".$_POST['email']."',
		nama_lengkap='".$_POST['nama_lengkap']."',
		nisn='".$_POST['nisn']."',
		tgl_lahir='".$_POST['tgl_lahir']."',
		jenis_kelamin='".$_POST['jenis_kelamin']."',
		alamat='".$_POST['alamat']."',
		telepon='".$_POST['telepon']."'
	WHERE nisn='".$_POST['nisn']."'";
	$query_ubah = mysqli_query($conn, $sql_ubah);

}
	

if ($query_ubah) {
	echo "<script>
	Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
	}).then((result) => {
		if (result.value) {
			window.location = 'profil?page=data-diri';
		}
	})</script>";
	}else{
	echo "<script>
	Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
	}).then((result) => {
		if (result.value) {
			window.location = 'profil?page=data-diri';
		}
	})</script>";
}
}

