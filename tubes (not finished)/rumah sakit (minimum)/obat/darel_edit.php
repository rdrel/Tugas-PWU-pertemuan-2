<?php
include_once('../darel_header.php');
?>

<div class="box">
	<h1>Obat</h1>
	<h4>
		<small>Edit Data Obat</small>
		<div class="pull-right">
			<a href="darel_data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i> Kembali</a>
		</div>
	</h4>
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
			<?php
				$id = @$_GET['id'];
				$sql_obat = mysqli_query($con, "SELECT * FROM darel_tb_obat WHERE darel_id_obat = '$id'") or die(mysqli_error($con));
				$data = mysqli_fetch_array($sql_obat);
			?>
			<form action="darel_proses.php" method="post">
				<div class="form-group">
					<label for="nama">Nama Obat</label>
					<input type="hidden" name="id" value="<?= $data['darel_id_obat'] ?>">
					<input type="text" name="nama" value="<?= $data['darel_nama_obat'] ?>" class="form-control" required="" autofocus="">
				</div>
				<div class="form-group">
					<label for="ket">Keterangan</label>
					<textarea name="ket" id="ket" class="form-control" required=""><?= $data['darel_ket_obat'] ?></textarea>
				</div>
				<div class="form-group">
					<input type="submit" name="edit" value="Simpan" class="btn btn-success">
				</div>
			</form>
		</div>
	</div>
</div>

<?php include_once('../darel_footer.php'); ?>
