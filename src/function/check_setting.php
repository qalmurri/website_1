<?php
session_start();
require('../../src/config/database.php');

if (!empty($_SESSION['id_section'])) {
    $id = $_GET['id'];
    $id2 = $_SESSION['id_member'];

    $token = "SELECT *
    FROM login
    where id_member=$id2";
    $query2 = $dbuser->prepare($token);
    $query2->execute();
    $section2 = $query2->fetch(PDO::FETCH_ASSOC);
    $token2 = $section2['token_login'];

    if ($_SESSION['token_login'] == $token2) {
        $process = "SELECT *
FROM login
where id_member=$id";
        $query = $dbuser->prepare($process);
        $query->execute();
        $setting = $query->fetch(PDO::FETCH_ASSOC);
        $_SESSION['id_setting'] = $setting['id_setting'];

        $id_section = $setting['id_section'];

        $process2 = "SELECT name_section
FROM section
where id_section=$id_section";
        $query2 = $dbuser->prepare($process2);
        $query2->execute();
        $section = $query2->fetch(PDO::FETCH_ASSOC);

        echo '<script>alert("Login Sukses");window.location="../../' . $section['name_section'] . '/index.php"</script>';
    } else {
        echo '<script>alert("Gak ada Token");window.location="../../logout.php";</script>';
    }
} else {
    echo '<script>alert("Gak ada ID Section");window.location="../../index.php"</script>';
}
