<?php
session_start();
require '../src/config/database.php';

if (!empty($_SESSION['token_login'])) {
    $id_member = $_SESSION['id_member'];
    $id_setting = $_SESSION['id_setting'];

    $token = "SELECT * FROM login WHERE id_member=$id_member";
    $query2 = $dbuser->prepare($token);
    $query2->execute();
    $section2 = $query2->fetch(PDO::FETCH_ASSOC);

    $token2 = $section2['token_login'];

    if ($_SESSION['token_login'] == $token2) {
        include $dashboad;
        $user = new view($dbuser);

        $member = $user->member($id_member);
        $setting = $user->setting($id_setting);

        $header = $setting['header'];
        $home = $setting['home'];
        $footer = $setting['footer'];

        if ($_SESSION['id_section'] == "1") {
            if ($member['id_part'] == "1") {
                include "../src/include/header/$header.php";

                if (!empty($_GET['page'])) {
                    include 'web/page/' . $_GET['page'] . '/index.php';
                } else {
                    include "../src/include/home/$home.php";
                }
                include "../src/include/footer/$footer.php";
            } else if ($member['id_part'] == "2") {
                include "../src/include/header/$header.php";

                if (!empty($_GET['page'])) {
                    include 'web/page/' . $_GET['page'] . '/index.php';
                } else {
                    include "../src/include/home/$home.php";
                }
                include "../src/include/footer/$footer.php";
            } else if ($member['id_part'] == "3") {
                include "../src/include/header/$header.php";

                if (!empty($_GET['page'])) {
                    include 'web/page/' . $_GET['page'] . '/index.php';
                } else {
                    include "../src/include/home/$home.php";
                }
                include "../src/include/footer/$footer.php";
            } else if ($member['id_part'] == "4") {
                include "../src/include/header/$header.php";

                if (!empty($_GET['page'])) {
                    include 'web/page/' . $_GET['page'] . '/index.php';
                } else {
                    include "../src/include/home/$home.php";
                }
                include "../src/include/footer/$footer.php";
            } else if ($member['id_part'] == "6") {
                include "../src/include/header/$header.php";

                if (!empty($_GET['page'])) {
                    include 'web/page/' . $_GET['page'] . '/index.php';
                } else {
                    include "../src/include/home/$home.php";
                }
                include "../src/include/footer/$footer.php";
            } else {
                echo '<script>window.location="../index.php";</script>';
            }
        } else {
            session_destroy();
            echo '<script>alert("Section Salah");window.location="../index.php";</script>';
        }
    } else {
        session_destroy();
        echo '<script>alert("Token Berubah");window.location="../index.php";</script>'; //localhost/index.php
    }
} else {
    echo '<script>alert("Token Tidak Ada");window.location="../index.php";</script>';
}
