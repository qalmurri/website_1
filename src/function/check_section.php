<?php
session_start();
require('../../src/config/database.php');

if (!empty($_SESSION['id_member'])) {
    $id = $_GET['id'];

    $process = "SELECT *
FROM login
where id_member=$id";
    $query = $dbuser->prepare($process);
    $query->execute();
    $section = $query->fetch(PDO::FETCH_ASSOC);
    $_SESSION['id_section'] = $section['id_section'];

    echo '<script>window.location="../../src/function/check_setting.php?id=' . $id . '"</script>';
} else {
    echo '<script>alert("Gak ada ID Member");window.location="../../index.php"</script>';
}
