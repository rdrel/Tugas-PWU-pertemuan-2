<?php

require_once"../_config/darel_config.php";

unset($_SESSION['user']);
echo "<script>window.location='".base_url('auth/darel_login.php')."'</script>";