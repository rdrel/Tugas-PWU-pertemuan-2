<?php
require_once"../_config/darel_config.php";
require "../_assets/libs/vendor/autoload.php";

mysqli_query($con, "DELETE FROM darel_tb_obat WHERE darel_id_obat = '$_GET[id]'") or die(mysqli_error($con));
echo "<script>alert('Data berhasil dihapus');window.location='darel_data.php';</script>";