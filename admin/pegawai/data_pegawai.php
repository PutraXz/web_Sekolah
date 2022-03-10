<div class="row">
		<!-- Circle Buttons -->
		<div class="card shadow mb-4">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-primary"><center>Data pegawai</h6>
			<div class="card-body">	
			<table id="example1" border="1" cellpadding="10" cellspasing="0">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama Lengkap</th>
						<th>NRP</th>
						<th>Tanggal Lahir</th>
						<th>Jenis kelamin</th>
						<th>Alamat</th>
						<th>Telepon</th>
						<th>Status</th>
						<th>Penghasilan</th>
						<th>Pendidikan Akhir</th>				
						<th>Aksi</th>	
					</tr>
				</thead>
				<tbody>
				<a href="data.php?page=add-pegawai" >Tambah data pegawai</a>
					<?php
              $no = 1;
			  $sql = $conn->query("SELECT * from pegawai");
              while ($data= $sql->fetch_assoc()) {
            ?>

					<tr>
						<td>
							<?php echo $no++; ?>
						</td>
						<td>
							<?php echo $data['nama_pegawai']; ?>
						</td>
						<td>
							<?php echo $data['nrp']; ?>
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
							<?php echo $data['status']; ?>
						</td>
							<td>
								<?php echo $data['penghasilan']; ?>
							</td>
						<td>
							<?php echo $data['pendidikan_akhir']; ?>
						</td>
						<td>
							<a href="?page=view-pegawai&id=<?php echo $data['id']; ?>" title="Detail"
							 class="btn btn-info btn-sm">
								<i class="fa fa-eye"></i>
							</a>
							</a>
							<a href="?page=edit-pegawai&id=<?php echo $data['id']; ?>" title="Ubah" class="btn btn-success btn-sm">
								<i class="fa fa-edit"></i>
							</a>
							<a href="?page=del-pegawai&id=<?php echo $data['id']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')"
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
				<a href="admin/pegawai/data_pegawai.php"></a>
			</div>
		</div>
		</div>
			</div>
	<!-- /.card-body -->
	

	