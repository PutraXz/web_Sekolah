<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Tambah Data</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Pegawai</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai" placeholder="nama_pegawai" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nrp</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nrp" name="nrp" placeholder="nrp" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tgl lahir</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="tgl_lahir" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jenis kelamin</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" placeholder="jenis_kelamin" required>
				</div>
			</div>
            <div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Alamat</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="alamat" name="alamat" placeholder="alamat" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Telepon</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="telepon" name="telepon" placeholder="telepon" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Status</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="status" name="status" placeholder="status" required>
				</div>
			</div>
            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Penghasilan</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="penghasilan" name="penghasilan" placeholder="penghasilan" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Pendidikan akhir</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="pendidikan_akhir" name="pendidikan_akhir" placeholder="pendidikan_akhir" required>
				</div>
			</div>
		</div>
		<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
			<a href="?page=data-pegawai" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php
    require 'controller/functions.php';
    if (isset ($_POST['Simpan'])){

		if(!empty($sumber)){
        $sql_simpan = "INSERT INTO pegawai (nama_pegawai, nrp, tgl_lahir, jenis_kelamin, alamat, telepon, status, penghasilan, pendidikan_akhir) VALUES (
            '".$_POST['nama_pegawai']."',
			'".$_POST['nrp']."',
			'".$_POST['tgl_lahir']."',
			'".$_POST['jenis_kelamin']."',
            '".$_POST['alamat']."',
			'".$_POST['telepon']."',
			'".$_POST['status']."',
			'".$_POST['penghasilan']."',
            '".$_POST['pendidikan_akhir']."')";
        $query_simpan = mysqli_query($conn, $sql_simpan)or die(mysqli_error($conn));
        mysqli_close($conn);

    if ($query_simpan) {
      echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = '22';
          }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = '22';
          }
      })</script>";
	}
	}
	}
     //selesai proses simpan data
