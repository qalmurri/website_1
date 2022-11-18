<?php
session_start();
require('../../src/config/database.php');

if (empty($_SESSION['token_login'])) {
    echo '<script>alert("Gak ada Token");window.location="../../index.php"</script>';
} else {
    if (!empty($_SESSION['id_member'])) {
        $id = $_GET['id'];

        $token = "SELECT *
    FROM login
    where id_member=$id";
        $query2 = $dbuser->prepare($token);
        $query2->execute();
        $section2 = $query2->fetch(PDO::FETCH_ASSOC);
        $token2 = $section2['token_login'];

        if ($_SESSION['token_login'] == $token2) {
            $last_login = $_GET['date'];

            $update = "UPDATE login SET last_login=$last_login WHERE login.id_member=$id;";
            $query2 = $dbuser->prepare($update);
            $query2->execute();

            $process = "SELECT *
FROM login
where id_member=$id";
            $query = $dbuser->prepare($process);
            $query->execute();
            $section = $query->fetch(PDO::FETCH_ASSOC);
            $_SESSION['id_section'] = $section['id_section'];

            echo '<script>window.location="../../src/function/check_setting.php?id=' . $id . '"</script>';
        } else {
            echo '<script>alert("Gak ada Token");window.location="../../logout.php";</script>';
        }
    } else {
        echo '<script>alert("Gak ada ID Member");window.location="../../index.php"</script>';
    }
}
