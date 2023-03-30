<?php
require_once"../_config/darel_config.php";
require "../_assets/libs/vendor/autoload.php";

use Ramsey\Uuid\Uuid;

if(isset($_POST['add'])){
	$uuid = Uuid::uuid4()->toString();
	$nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
	$ket = trim(mysqli_real_escape_string($con, $_POST['ket']));
	mysqli_query($con, "INSERT INTO darel_tb_obat VALUES('$uuid', '$nama', '$ket')") or die(mysqli_error($con));
	echo "<script>window.location='darel_data.php';</script>";
}
else if(isset($_POST['edit'])){
	$id = $_POST['id'];
	$nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
	$ket = trim(mysqli_real_escape_string($con, $_POST['ket']));
	mysqli_query($con, "UPDATE darel_tb_obat SET darel_nama_obat = '$nama', darel_ket_obat = '$ket' WHERE darel_id_obat = '$id'") or die(mysqli_error($con));
	echo "<script>window.location='darel_data.php';</script>";
}