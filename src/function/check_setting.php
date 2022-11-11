<?php
session_start();
require('../../src/config/database.php');

if (!empty($_SESSION['id_section'] && $_SESSION['name_section'])) {
    $id = $_GET['id'];

    $section = "SELECT *
FROM login
where id_member=$id";
    $query = $dbuser->prepare($section);
    $query->execute();
    $setting = $query->fetch(PDO::FETCH_ASSOC);
    $_SESSION['id_setting'] = $setting['id_setting'];

    echo '<script>alert("Login Sukses");window.location="../../' . $_SESSION['name_section'] . '/index.php"</script>';
} else {
    echo '<script>alert("Gak ada ID Section");window.location="../../index.php"</script>';
}
