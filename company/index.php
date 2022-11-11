<?php
session_start();

require '../src/config/database.php';
include $view;

$id_member = $_SESSION['id_member'];
$id_setting = $_SESSION['id_setting'];

$user = new view($dbuser);
$member = $user->member($id_member);
$setting = $user->setting($id_setting);

if ($_SESSION['id_section'] == "1") {
    $header = $setting['header'];
    include "../src/include/header/$header.php";
    if (!empty($_GET['page'])) {
        include 'web/page/' . $_GET['page'] . '/index.php';
    } else {
        $home = $setting['home'];
        include "../src/include/home/$home.php";
    }
    $footer = $setting['footer'];
    include "src/include/footer/$footer.php";

    echo "Nama Member: " . $member['name_member'];
} else {
    echo '<script>window.location="../index.php";</script>';
}
