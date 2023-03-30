<?php
require_once"../_config/darel_config.php";

$chk = $_POST['checked'];
if(!isset($chk)){
	echo "<script>alert('Tidak ada data yang dipilih'); window.location='darel_data.php';</script>";
}
else{
	foreach($chk as $id){
		$sql = mysqli_query($con, "DELETE FROM darel_tb_poliklinik WHERE darel_id_poli='$id'") or die(mysqli_error($con));
	}
	if($sql){
		echo "<script>alert('" . count($chk) . " data berhasil dihapus'); window.location='darel_data.php';</script>";
	}
	else{
		echo "<script>alert('Gagal hapus data, coba lagi');</script>";
	}
}