
<?php

if(isset($_GET['id'])){
	$sql_cek = "SELECT * FROM siswa WHERE id='".$_GET['id']."'";
	$query_cek = mysqli_query($conn, $sql_cek);
	$data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
}
?>
<div class="card card-success">
<div class="card-header">
	<h3 class="card-title">
		<i class="fa fa-edit"></i> Data Diri</h3>
</div>
<form action="" method="post" enctype="multipart/form-data">
	<div class="card-body">
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Nama lengkap</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="<?php echo $data_cek['nama_lengkap']; ?>"
			/>
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Nisn</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="nisn" name="nisn" value="<?php echo $data_cek['nisn']; ?>"
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
			<label class="col-sm-2 col-form-label">Jenis kelamin</label>
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
			<label class="col-sm-2 col-form-label">Nama Ayah</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="nama_ayah" name="nama_ayah" value="<?php echo $data_cek['nama_ayah']; ?>"
			/>
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Nama ibu</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="nama_ibu" name="nama_ibu" value="<?php echo $data_cek['nama_ibu']; ?>"
				/>
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Alamat orangtua</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="alamat_orangtua" name="alamat_orangtua" value="<?php echo $data_cek['alamat_orangtua']; ?>"
				/>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Pekerjaan ayah</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pekerjaan_ayah" name="pekerjaan_ayah" value="<?php echo $data_cek['pekerjaan_ayah']; ?>"
				/>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Pekerjaan ibu</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pekerjaan_ibu" name="pekerjaan_ibu" value="<?php echo $data_cek['pekerjaan_ibu']; ?>"
			/>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Anak ke</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="anak_ke" name="anak_ke" value="<?php echo $data_cek['anak_ke']; ?>"
				/>
			</div>
		</div>	
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Jumlah saudara</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="jumlah_saudara" name="jumlah_saudara" value="<?php echo $data_cek['jumlah_saudara']; ?>"
			/>
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Asal Sekolah</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah" value="<?php echo $data_cek['asal_sekolah']; ?>"
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
	$gambar= $data_cek['gambar'];
		if (file_exists("gambar/$gambar")){
		unlink("gambar/$gambar");}

	$sql_ubah = "UPDATE siswa inner join user on siswa.id_user=user.id SET
		nama_lengkap='".$_POST['nama_lengkap']."',
		nisn='".$_POST['nisn']."',
		tgl_lahir='".$_POST['tgl_lahir']."',
		jenis_kelamin='".$_POST['jenis_kelamin']."',
		alamat='".$_POST['alamat']."',
		telepon='".$_POST['telepon']."',
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
		WHERE nisn='".$_POST['nisn']."'";

	$query_ubah = mysqli_query($conn, $sql_ubah);
	

}elseif(empty($sumber)){
	$sql_ubah = "UPDATE siswa inner join user on siswa.id_user=user.id SET
		nama_lengkap='".$_POST['nama_lengkap']."',
		nisn='".$_POST['nisn']."',
		tgl_lahir='".$_POST['tgl_lahir']."',
		jenis_kelamin='".$_POST['jenis_kelamin']."',
		alamat='".$_POST['alamat']."',
		telepon='".$_POST['telepon']."',
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
	WHERE nisn='".$_POST['nisn']."'";
	$query_ubah = mysqli_query($conn, $sql_ubah);

}
	

if ($query_ubah) {
	echo "<script>
	Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
	}).then((result) => {
		if (result.value) {
			window.location = 'data?page=data-siswa';
		}
	})</script>";
	}else{
	echo "<script>
	Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
	}).then((result) => {
		if (result.value) {
			window.location = 'data?page=data-siswa';
		}
	})</script>";
}
}
