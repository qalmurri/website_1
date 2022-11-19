<?php
session_start();
require('../../src/config/database.php');
include '../../src/function/log/logout.php';
session_destroy();
echo '<script>alert("Anda Telah Logout");window.location="../../index.php"</script>';
