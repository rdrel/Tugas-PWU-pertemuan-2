<?php include_once('../darel_header.php'); ?>

	<div class="box">
		<h1>Rekam Medis</h1>
		<a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
		<h4>
			<small>Data Rekam Medis</small>
			<div class="pull-right">
				<a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
				<a href="darel_add.php" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i> Tambah Rekam Medis</a>
			</div>
		</h4>
		<form method="post" name="proses">
			<div class="table-responsive">
				<table class="table table-bordered table-striped table-hover" id="darel_rekammedis">
					<thead>
						<tr>
							<th>No.</th>
							<th>Tanggal Periksa</th>
							<th>Poli</th>
							<th>Nama Pasien</th>
							<th>Keluhan</th>
							<th>Nama Dokter</th>
							<th>Diagnosa</th>
							<th>Obat</th>
							<th><i class="glyphicon glyphicon-cog"></i></th>
						</tr>
					</thead>
					<tbody>
						<?php
						$no = 1;
						$query = "SELECT * FROM darel_tb_rekammedis
							INNER JOIN darel_tb_poliklinik ON darel_tb_rekammedis.darel_id_poli = darel_tb_poliklinik.darel_id_poli
							INNER JOIN darel_tb_pasien ON darel_tb_rekammedis.darel_id_pasien = darel_tb_pasien.darel_id_pasien
							INNER JOIN darel_tb_dokter ON darel_tb_rekammedis.darel_id_dokter = darel_tb_dokter.darel_id_dokter
							ORDER BY darel_tgl_periksa DESC
						";
						$sql_rm = mysqli_query($con, $query) or die(mysqli_error($con));
						while($data = mysqli_fetch_array($sql_rm)){ ?>
							<tr>
								<td><?= $no++; ?></td>
								<td><?= tgl_indo($data['darel_tgl_periksa']); ?></td>
								<td><?= $data['darel_nama_poli'] ?></td>
								<td><?= $data['darel_nama_pasien'] ?></td>
								<td><?= $data['darel_keluhan'] ?></td>
								<td><?= $data['darel_nama_dokter'] ?></td>
								<td><?= $data['darel_diagnosa'] ?></td>
								<td>
									<?php
									$sql_obat = mysqli_query($con, "SELECT * FROM darel_tb_rm_obat JOIN darel_tb_obat ON darel_tb_rm_obat.darel_id_obat = darel_tb_obat.darel_id_obat WHERE darel_id_rm = '$data[darel_id_rm]'") or die(mysqli_error($con));
									while($darel_data_obat = mysqli_fetch_array($sql_obat)){
										echo $darel_data_obat['darel_nama_obat']. "<br>";
									}
									?>
								</td>
								<td align="center">
									<a href="darel_edit.php?id=<?= $data['darel_id_rm'] ?>" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
									<a href="darel_del.php?id=<?= $data['darel_id_rm']; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin menghapus data?')"><i class="glyphicon glyphicon-trash"></i></a>
								</td>
							</tr>
						<?php
						} ?>
					</tbody>
				</table>
			</div>
		</form>
	</div>

	<script>
		$(document).ready(function(){
			$('#rekammedis').DataTable({
				columnDefs: [{
					"searchable": false,
					"orderable": false,
					"targets": 8
				}],
				"order": [0, "asc"]
			})
		});
	</script>

<?php include_once('../darel_footer.php'); ?>                                                       