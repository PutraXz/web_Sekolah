
<?php

if(isset($_GET['id'])){
	$username = $_SESSION['username'];
	$password = $_SESSION['password'];
	$sql33 = "SELECT * FROM siswa inner join user on siswa.id_user=user.id";
		$query2 = mysqli_query($conn, $sql33)or die(mysqli_error($conn));
		$row  = mysqli_fetch_array($query2);
		if(mysqli_num_rows($query2) > 0);
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
			<label class="col-sm-2 col-form-label">Username</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="username" name="username" value="<?php echo $_SESSION['username']; ?>"
				 />
			</div>
		</div>


		<div class="form-group row">
			<label class="col-sm-2 col-form-label">email</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="email" name="email" value="<?php echo $row['email']; ?>"
				 />
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Nama Siswa</label>
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
			<label class="col-sm-2 col-form-label">Nik</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="nik" name="nik" value="<?php echo $row['nik']; ?>"
				/>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Agama</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="agama" name="agama" value="<?php echo $row['agama']; ?>"
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
			<label class="col-sm-2 col-form-label">Jenis Kelamin</label>
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
			<label class="col-sm-2 col-form-label">Nama ayah</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="nama_ayah" name="nama_ayah" value="<?php echo $row['nama_ayah']; ?>"
				 />
			</div>
		</div>


		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Nama ibu</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="nama_ibu" name="nama_ibu" value="<?php echo $row['nama_ibu']; ?>"
				 />
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Alamat Orangtua</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="alamat_orangtua" name="alamat_orangtua" value="<?php echo $row['alamat_orangtua']; ?>"
				/>
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Pekerjaan ayah</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pekerjaan_ayah" name="pekerjaan_ayah" value="<?php echo $row['pekerjaan_ayah']; ?>"
				/>
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Pekerjaan ibu</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pekerjaan_ibu" name="pekerjaan_ibu" value="<?php echo $row['pekerjaan_ibu']; ?>"
				/>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Anak ke</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="anak_ke" name="anak_ke" value="<?php echo $row['anak_ke']; ?>"
				/>
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Jumlah saudara</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="jumlah_saudara" name="jumlah_saudara" value="<?php echo $row['jumlah_saudara']; ?>"
				/>
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Asal sekolah</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah" value="<?php echo $row['asal_sekolah']; ?>"
				/>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">gambar Pegawai</label>
			<div class="col-sm-6">
			<img src="img/<?= $row["gambar"]; ?>" width="250">
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
		nik='".$_POST['nik']."',
		agama='".$_POST['agama']."',
		tgl_lahir='".$_POST['tgl_lahir']."',
		jenis_kelamin='".$_POST['jenis_kelamin']."',
		alamat='".$_POST['alamat']."',
		telepon='".$_POST['telepon']."',
		nama_ayah='".$_POST['nama_ayah']."',
		nama_ibu='".$_POST['nama_ibu']."',
		alamat_orangtua='".$_POST['alamat_orangtua']."',
		pekerjaan_ayah='".$_POST['pekerjaan_ayah']."',
		pekerjaan_ibu='".$_POST['pekerjaan_ibu']."',
		anak_ke='".$_POST['anak_ke']."',
		jumlah_saudara='".$_POST['jumlah_saudara']."',
		asal_sekolah='".$_POST['asal_sekolah']."',
		gambar='".$nama_file."'		
		WHERE nik='".$_POST['nik']."'";

	$query_ubah = mysqli_query($conn, $sql_ubah)or die(mysqli_error($conn));
	

}elseif(empty($sumber)){
	$sql_ubah = "UPDATE siswa inner join user on siswa.id_user=user.id SET
	username='".$_POST['username']."',
	email='".$_POST['email']."',
	nama_lengkap='".$_POST['nama_lengkap']."',
	nisn='".$_POST['nisn']."',
	nik='".$_POST['nik']."',
	agama='".$_POST['agama']."',
	tgl_lahir='".$_POST['tgl_lahir']."',
	jenis_kelamin='".$_POST['jenis_kelamin']."',
	alamat='".$_POST['alamat']."',
	telepon='".$_POST['telepon']."',
	nama_ayah='".$_POST['nama_ayah']."',
	nama_ibu='".$_POST['nama_ibu']."',
	alamat_orangtua='".$_POST['alamat_orangtua']."',
	pekerjaan_ayah='".$_POST['pekerjaan_ayah']."',
	pekerjaan_ibu='".$_POST['pekerjaan_ibu']."',
	anak_ke='".$_POST['anak_ke']."',
	jumlah_saudara='".$_POST['jumlah_saudara']."',
	asal_sekolah='".$_POST['asal_sekolah']."'
	WHERE nik='".$_POST['nik']."'";
	$query_ubah = mysqli_query($conn, $sql_ubah)or die(mysqli_error($conn));

}
	

if ($query_ubah) {
	echo "<script>
	Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
	}).then((result) => {
		if (result.value) {
			window.location = 'profil.php?page=data-diri';
		}
	})</script>";
	}else{
	echo "<script>
	Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
	}).then((result) => {
		if (result.value) {
			window.location = 'profil.php?page=data-diri';
		}
	})</script>";
}
}

