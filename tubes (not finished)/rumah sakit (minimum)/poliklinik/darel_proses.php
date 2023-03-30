<?php
require_once"../_config/darel_config.php";
require "../_assets/libs/vendor/autoload.php";

use Ramsey\Uuid\Uuid;

if(isset($_POST['add'])){
	$total = $_POST['total'];
	for($i=1; $i<=$total; $i++){
		$uuid = Uuid::uuid4()->toString();
		$nama = trim(mysqli_real_escape_string($con, $_POST['nama-'.$i]));
		$lokasi = trim(mysqli_real_escape_string($con, $_POST['lokasi-'.$i]));
		$sql = mysqli_query($con, "INSERT INTO darel_tb_poliklinik VALUES('$uuid', '$nama', '$lokasi')") or die(mysqli_error($con));
	}

	if($sql){
		echo "<script>alert('" . $total . " data berhasil ditambahkan'); window.location='darel_data.php';</script>";
	}
	else{
		echo "<script>alert('Gagal tambah data, coba lagi'); window.location='darel_generate.php';</script>";
	}
} 
else if(isset($_POST['edit'])){
	for($i=0; $i<count($_POST['id']); $i++){
		$id = $_POST['id'][$i];
		$nama = $_POST['nama'][$i];
		$lokasi = $_POST['lokasi'][$i];
		$sql = mysqli_query($con, "UPDATE darel_tb_poliklinik SET darel_nama_poli='$nama', darel_lokasi='$lokasi' WHERE darel_id_poli='$id'") or die(mysqli_error($con));
	}
	echo "<script>alert('Data berhasil di update'); window.location='darel_data.php';</script>";
}