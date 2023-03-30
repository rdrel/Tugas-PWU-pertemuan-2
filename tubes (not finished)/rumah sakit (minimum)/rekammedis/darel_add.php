<?php
include_once('../darel_header.php');
?>

<div class="box">
	<h1>Rekam Medis</h1>
	<a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
	<h4>
		<small>Tambah Data Rekam Medis</small>
		<div class="pull-right">
			<a href="darel_data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i> Kembali</a>
		</div>
	</h4>
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
			<form action="darel_proses.php" method="post">
				<div class="form-group">
					<label for="tgl">Tanggal Periksa</label>
					<input type="date" name="tgl" id="tgl" class="form-control" value="<?= date('Y-m-d') ?>" required="" autofocus="">
				</div>
				<div class="form-group">
					<label for="poli">Poli</label>
					<select name="poli" id="poli" class="form-control" required="">
						<option value="">- Pilih -</option>
						<?php
						$sql_poli = mysqli_query($con, "SELECT * FROM darel_tb_poliklinik ORDER BY darel_nama_poli ASC") or die(mysqli_error($con));
						while($darel_data_poli = mysqli_fetch_array($sql_poli)){
							echo '<option value="'.$darel_data_poli['darel_id_poli'].'">'.$data_poli['darel_nama_poli'].'</option>';
						} ?>
					</select>
				</div>
				<div class="form-group">
					<label for="pasien">Nama Pasien</label>
					<select name="pasien" id="pasien" class="form-control" required="">
						<option value="">- Pilih -</option>
						<?php
						$sql_pasien = mysqli_query($con, "SELECT * FROM darel_tb_pasien") or die(mysqli_error($con));
						while($darel_data_pasien = mysqli_fetch_array($sql_pasien)){
							echo '<option value="'.$data_pasien['darel_id_pasien'].'">'.$darel_data_pasien['darel_nama_pasien'].'</option>';
						} ?>
					</select>
				</div>
				<div class="form-group">
					<label for="keluhan">Keluhan</label>
					<textarea name="keluhan" id="keluhan" class="form-control" required=""></textarea>
				</div>
				<div class="form-group">
					<label for="dokter">Nama Dokter</label>
					<select name="dokter" id="dokter" class="form-control" required="">
						<option value="">- Pilih -</option>
						<?php
						$sql_dokter = mysqli_query($con, "SELECT * FROM darel_tb_dokter") or die(mysqli_error($con));
						while($data_dokter = mysqli_fetch_array($sql_dokter)){
							echo '<option value="'.$data_dokter['darel_id_dokter'].'">'.$data_dokter['darel_nama_dokter'].'</option>';
						} ?>
					</select>
				</div>
				<div class="form-group">
					<label for="diagnosa">Diagnosa</label>
					<textarea name="diagnosa" id="diagnosa" class="form-control" required="" rows="4"></textarea>
				</div>
				<div class="form-group">
					<label for="obat">Obat</label>
					<select multiple="" size="7" name="obat[]" id="obat" class="form-control" required="">
						<?php
						$sql_obat = mysqli_query($con, "SELECT * FROM darel_tb_obat") or die(mysqli_error($con));
						while($darel_data_obat = mysqli_fetch_array($sql_obat)){
							echo '<option value="'.$darel_data_obat['darel_id_obat'].'">'.$darel_data_obat['darel_nama_obat'].'</option>';
						} ?>
					</select>
				</div>
				<div class="form-group">
					<input type="reset" name="reset" value="Reset" class="btn btn-default">
					<input type="submit" name="add" value="Simpan" class="btn btn-success">
				</div>
			</form>
			<script>
				CKEDITOR.replace( 'keluhan' );
			</script>
		</div>
	</div>
</div>




<?php include_once('../darel_footer.php'); ?>
