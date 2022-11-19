<?php
session_start();
require('../../src/config/database.php');

if (empty($_SESSION['token_login'])) {
    session_destroy();
    echo '<script>alert("Token tidak ada");window.location="../../index.php"</script>';
} else {
    if (!empty($_SESSION['id_section'])) {
        $id = $_GET['id'];
        $id_member = $_SESSION['id_member'];

        $token = "SELECT * FROM login WHERE id_member=$id_member";
        $query2 = $dbuser->prepare($token);
        $query2->execute();
        $section2 = $query2->fetch(PDO::FETCH_ASSOC);

        $token2 = $section2['token_login'];

        if ($_SESSION['token_login'] == $token2) {
            $process = "SELECT * FROM login WHERE id_member=$id";
            $query = $dbuser->prepare($process);
            $query->execute();
            $setting = $query->fetch(PDO::FETCH_ASSOC);

            $id_section = $setting['id_section'];
            $_SESSION['id_setting'] = $setting['id_setting'];

            $process2 = "SELECT name_section FROM section WHERE id_section=$id_section";
            $query2 = $dbuser->prepare($process2);
            $query2->execute();
            $section = $query2->fetch(PDO::FETCH_ASSOC);

            echo '<script>window.location="../../' . $section['name_section'] . '/index.php"</script>';
        } else {
            session_destroy();
            echo '<script>alert("Token Berubah");window.location="../../index.php";</script>';
        }
    } else {
        session_destroy();
        echo '<script>alert("Section tidak ada");window.location="../../index.php"</script>';
    }
}
