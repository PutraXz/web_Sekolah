<div class="row">
		<!-- Circle Buttons -->
		<div class="card shadow mb-4">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-primary"><center>Data MAPEL</h6>
			<div class="card-body">	
			<table id="example1" border="1" cellpadding="10" cellspasing="0" width="100%">
				<thead>
					<tr>
						<th>No</th>
						<th>Mapel</th>
						<th>GURU</th>
						
					</tr>
				</thead>
				<tbody>
				<a href="data.php?page=add-pegawai" >Tambah data mapel</a>
					<?php
              $no = 1;
			  $sql = $conn->query("SELECT pegawai.nama_pegawai,mapel.nama_mapel from pegawai INNER JOIN mapel ON pegawai.id_mapel=mapel.id");
              while ($data= $sql->fetch_assoc()) {
            ?>

					<tr>
						<td>
							<?php echo $no++; ?>
						</td>
                        <td>
							<?php echo $data['nama_mapel']; ?>
						</td>
						<td>
							<?php echo $data['nama_pegawai']; ?>
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
	

	