<?php
@ob_start();
session_start();

require '../src/config/database.php';
include $view;

$id = $_SESSION['id_setting'];
$see = new view($dbuser);
$setting = $see->setting($id);

if ($_SESSION['name_section'] == "company") {
    $header = $setting['header'];
    include "../src/include/header/$header.php";

    echo $_SESSION['id_member'];
    echo $_SESSION['id_section'];
    echo $_SESSION['name_section'];
    echo $_SESSION['id_setting'];
} else {
    echo '<script>window.location="../index.php";</script>';
}
