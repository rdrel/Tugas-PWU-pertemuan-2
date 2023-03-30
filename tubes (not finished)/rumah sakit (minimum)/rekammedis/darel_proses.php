<?php
require_once"../_config/darel_config.php";
require "../_assets/libs/vendor/autoload.php";

use Ramsey\Uuid\Uuid;

if(isset($_POST['add'])){
	$uuid = Uuid::uuid4()->toString();
	$tgl = trim(mysqli_real_escape_string($con, $_POST['tgl']));
	$poli = trim(mysqli_real_escape_string($con, $_POST['poli']));
	$pasien = trim(mysqli_real_escape_string($con, $_POST['pasien']));
	$keluhan = trim(mysqli_real_escape_string($con, $_POST['keluhan']));
	$dokter = trim(mysqli_real_escape_string($con, $_POST['dokter']));
	$diagnosa = trim(mysqli_real_escape_string($con, $_POST['diagnosa']));

	// insert ke darel_tb_rekammedis
	mysqli_query($con, "INSERT INTO darel_tb_rekammedis VALUES('$uuid', '$tgl', '$poli', '$pasien', '$keluhan', '$dokter', '$diagnosa')") or die(mysqli_error($con));

	// mendeklarasikan obat
	$obat = $_POST['obat'];
	foreach($obat as $obat){
		mysqli_query($con, "INSERT INTO darel_tb_rm_obat VALUES('', '$uuid', '$obat')") or die(mysqli_error($con));
	}

	echo "<script>alert('Data berhasil ditambahkan'); window.location='darel_data.php';</script>";
}
else if(isset($_POST['edit'])){

	$id = $_POST['id'];
	$tgl = trim(mysqli_real_escape_string($con, $_POST['tgl']));
	$poli = trim(mysqli_real_escape_string($con, $_POST['poli']));
	$pasien = trim(mysqli_real_escape_string($con, $_POST['pasien']));
	$keluhan = trim(mysqli_real_escape_string($con, $_POST['keluhan']));
	$dokter = trim(mysqli_real_escape_string($con, $_POST['dokter']));
	$diagnosa = trim(mysqli_real_escape_string($con, $_POST['diagnosa']));

	//update ke tabel rekammedis
	mysqli_query($con, "UPDATE darel_tb_rekammedis SET darel_tgl_periksa = '$tgl', darel_id_poli = '$poli', darel_id_pasien = '$pasien', darel_keluhan = '$keluhan', darel_id_dokter = '$dokter',darel_diagnosa = '$diagnosa' WHERE darel_id_rm = '$id'") or die(mysqli_error($con));

	// mendeklarasikan obat
	$obat = $_POST['obat'];
	mysqli_query($con, "DELETE FROM darel_tb_rm_obat WHERE darel_id_rm = '$id'") or die(mysqli_error($con));
	foreach($obat as $obat){
		mysqli_query($con, "INSERT INTO darel_tb_rm_obat VALUES('', '$id', '$obat')") or die(mysqli_error($con));
	}
	echo "<script>alert('Data berhasil diubah'); window.location='darel_data.php';</script>";
}