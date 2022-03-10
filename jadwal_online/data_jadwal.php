<?php
$tgl=$_GET['tgl'];
              $no = 1;
			  $sql = $conn->query("SELECT pegawai.nama_pegawai,jadwal.hari,jadwal.jam,jadwal.mulai,jadwal.berhenti,kelas.nama,mapel.nama_mapel from pegawai inner JOIN jadwal on pegawai.id_jadwal=jadwal.id INNER JOIN kelas on pegawai.id_kelas=kelas.id INNER JOIN mapel ON pegawai.id_mapel=mapel.id WHERE jadwal.hari='$tgl'");
              while ($data= $sql->fetch_assoc()) {
            ?>

					<tr>
						<td>
							<?php echo $no++; ?>
						</td>
						<td>
							<?php echo $data['hari']; ?>
						</td>
						<td>
							<?php echo $data['nama_pegawai']; ?>
						</td>
						<td>
							<?php echo $data['nama_mapel']; ?>
						</td>
						<td>
							<?php echo $data['nama']; ?>
						</td>
						<td>
							<?php echo $data['mulai']; ?>
						</td>
						<td>
							<?php echo $data['berhenti']; ?>
						</td>
					</tr>

					<?php
              }
            ?>