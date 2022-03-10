<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Tambah Data</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">NRP</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nrp" name="nrp" placeholder="nrp" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Pegawai</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Siswa" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">email</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="email" name="email" placeholder="email" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jurusan</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Jurusan" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">gambar Pegawai</label>
				<div class="col-sm-6">
					<input type="file" id="gambar" name="gambar">
					<p class="help-block">
						<font color="red">"Format file Jpg/Png"</font>
					</p>
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
	$sumber = @$_FILES['gambar']['tmp_name'];
	$target = 'gambar/';
	$nama_file = @$_FILES['gambar']['name'];
	$pindah = move_uploaded_file($sumber, $target.$nama_file);

    if (isset ($_POST['Simpan'])){

		if(!empty($sumber)){
        $sql_simpan = "INSERT INTO mahasiswa (nrp, nama, email, jurusan, gambar) VALUES (
            '".$_POST['nrp']."',
			'".$_POST['nama']."',
			'".$_POST['email']."',
			'".$_POST['jurusan']."',
            '".$nama_file."')";
        $query_simpan = mysqli_query($conn, $sql_simpan);
        mysqli_close($conn);

    if ($query_simpan) {
      echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'buttons.php?page=data-pegawai';
          }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'buttons.php?page=add-pegawai';
          }
      })</script>";
	}
	}elseif(empty($sumber)){
		echo "<script>
		Swal.fire({title: 'Gagal, gambar Wajib Diisi',text: '',icon: 'error',confirmButtonText: 'OK'
		}).then((result) => {
			if (result.value) {
				window.location = 'buttons.php?page=add-pegawai';
			}
		})</script>";
	}
	}
     //selesai proses simpan data
