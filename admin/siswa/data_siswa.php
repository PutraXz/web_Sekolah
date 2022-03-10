<div class="row">
		<!-- Circle Buttons -->
		<div class="card shadow mb-4">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-primary"><center>Data siswa</h6>
			<div class="card-body">	
			<table id="example1" border="1" cellpadding="10" cellspasing="0">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama Lengkap</th>
						<th>Nisn</th>
						<th>Nik</th>
						<th>Agama</th>
						<th>Tanggal Lahir</th>
						<th>Jenis Kelamin</th>
						<th>Alamat</th>
						<th>Telepon</th>
						<th>Alamat orangtua</th>
						<th>Nama Ayah</th>
						<th>Nama Ibu</th>
						<th>Pekerjaan ayah</th>
						<th>Pekerjaan ibu</th>
						<th>Anak ke</th>
						<th>Jumlah saudara</th>
						<th>Asal Sekolah</th>				
						<th>Aksi</th>	
					</tr>
				</thead>
				<tbody>
				<a href="data.php?page=add-siswa" >Tambah data mahasiswa</a>
					<?php
              $no = 1;
			  $sql = $conn->query("SELECT * from siswa");
              while ($data= $sql->fetch_assoc()) {
            ?>

					<tr>
						<td>
							<?php echo $no++; ?>
						</td>
						<td>
							<?php echo $data['nama_lengkap']; ?>
						</td>
						<td>
							<?php echo $data['nisn']; ?>
						</td>
						<td>
							<?php echo $data['nik']; ?>
						</td>
						<td>
							<?php echo $data['agama']; ?>
						</td>
						<td>
							<?php echo $data['tgl_lahir']; ?>
						</td>
						<td>
							<?php echo $data['jenis_kelamin']; ?>
						</td>
						<td>
							<?php echo $data['alamat']; ?>
						</td>
							<td>
								<?php echo $data['telepon']; ?>
							</td>
						<td>
							<?php echo $data['nama_ayah']; ?>
						</td>
						<td>
							<?php echo $data['nama_ibu']; ?>
						</td>
						<td>
							<?php echo $data['alamat_orangtua']; ?>
						</td>
						<td>
							<?php echo $data['pekerjaan_ayah']; ?>
						</td>
						<td>
							<?php echo $data['pekerjaan_ibu']; ?>
						</td>
						<td>
							<?php echo $data['anak_ke']; ?>
						</td>
						<td>
							<?php echo $data['jumlah_saudara']; ?>
						</td>
						<td>
							<?php echo $data['asal_sekolah']; ?>
						</td>
						<td>
							<a href="?page=view-siswa&id=<?php echo $data['id']; ?>" title="Detail"
							 class="btn btn-info btn-sm">
								<i class="fa fa-eye"></i>
							</a>
							</a>
							<a href="?page=edit-siswa&id=<?php echo $data['id']; ?>" title="Ubah" class="btn btn-success btn-sm">
								<i class="fa fa-edit"></i>
							</a>
							<a href="?page=del-siswa&id=<?php echo $data['id']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')"
							 title="Hapus" class="btn btn-danger btn-sm">
								<i class="fa fa-trash"></i>
						</td>
					</tr>

					<?php
              }
            ?>
				</tbody>
				</tfoot>
			</table>
				<!-- Circle Buttons (Small) -->
				<div class="mt-4 mb-2">
				<a href="admin/siswa/data_siswa.php"></a>
			</div>
		</div>
		</div>
			</div>
	<!-- /.card-body -->
	

	