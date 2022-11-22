<?php function sanitize_output($buffer)
{
    $search = array('/\>[^\S ]+/s', '/[^\S ]+\</s', '/(\s)+/s', '/<!--(.|\s)*?-->/');
    $replace = array('>', '<', '\\1', '');
    $buffer = preg_replace($search, $replace, $buffer);
    return $buffer;
}
ob_start("sanitize_output");

session_start();
include 'src/function/minify.php';
require 'src/config/database.php';
include $web;

$id_section = $_SESSION['id_section'];

$user = new view($dbuser);
$name_section = $user->section($id_section);

include 'src/include/header/index.php';
if (!empty($_GET['page'])) {
    include 'web/page/' . $_GET['page'] . '/index.php';
} else {
    include 'src/include/home/index.php';
}
include 'src/include/footer/index.php';
