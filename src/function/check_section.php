<?php
session_start();
require('../../src/config/database.php');

if (!empty($_SESSION['id_member'])) {
    $id = $_GET['id'];

    $section = "SELECT *
FROM login
where id_member=$id";
    $query = $dbuser->prepare($section);
    $query->execute();
    $sections = $query->fetch(PDO::FETCH_ASSOC);
    $id_section = $sections['id_section'];

    $sql = "SELECT name_section
FROM section
where id_section=$id_section";
    $query2 = $dbuser->prepare($sql);
    $query2->execute();
    $value = $query2->fetch(PDO::FETCH_ASSOC);
    $_SESSION['name_section'] = $value['name_section'];

    echo '<script>window.location="../../src/function/check_setting.php?id=' . $id . '"</script>';
} else {
    echo '<script>alert("Gak ada ID Member");window.location="../../index.php"</script>';
}
