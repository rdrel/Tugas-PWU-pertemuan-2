<?php
require_once"../_config/darel_config.php";
require "../_assets/libs/vendor/autoload.php";

use Ramsey\Uuid\Uuid;

if(isset($_POST['add'])){
	$uuid = Uuid::uuid4()->toString();
	$nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
	$spesialis = trim(mysqli_real_escape_string($con, $_POST['spesialis']));
	$alamat = trim(mysqli_real_escape_string($con, $_POST['alamat']));
	$telp = trim(mysqli_real_escape_string($con, $_POST['telp']));
	mysqli_query($con, "INSERT INTO darel_tb_dokter VALUES('$uuid', '$nama', '$spesialis', '$alamat', '$telp')") or die(mysqli_error($con));
	echo "<script>alert('Data berhasil ditambahkan');window.location='darel_data.php';</script>";
}
else if(isset($_POST['edit'])){
	$id = $_POST['id'];
	$nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
	$spesialis = trim(mysqli_real_escape_string($con, $_POST['spesialis']));
	$alamat = trim(mysqli_real_escape_string($con, $_POST['alamat']));
	$telp = trim(mysqli_real_escape_string($con, $_POST['telp']));
	mysqli_query($con, "UPDATE darel_tb_dokter SET darel_nama_dokter='$nama', darel_spesialis='$spesialis', darel_alamat='$alamat', darel_no_telp='$telp' WHERE darel_id_dokter='$id'") or die(mysqli_error($con));
	echo "<script>alert('Data berhasil diubah');window.location='darel_data.php';</script>";
}