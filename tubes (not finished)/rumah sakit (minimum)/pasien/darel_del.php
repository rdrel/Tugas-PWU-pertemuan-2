<?php
require_once"../_config/darel_config.php";

mysqli_query($con, "DELETE FROM darel_tb_pasien WHERE darel_id_pasien = '$_GET[id]'") or die(mysqli_error($con));
echo "<script>alert('Data berhasil dihapus'); window.location='darel_data.php';</script>";