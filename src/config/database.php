<?php
date_default_timezone_set("Asia/Jakarta");
error_reporting(0);

$host     = 'localhost';
$user     = 'root';
$pass     = '';

$db_category = 'com_category';
$db_data = 'com_data';
$db_info = 'com_info';
$db_log = 'com_log';
$db_user = 'com_user';

try {
	$dbcategory = new PDO("mysql:host=$host;dbname=$db_category", $user, $pass);
} catch (PDOException $e) {
	echo 'Kategori Gagal ' . $e->getMessage();
}

try {
	$dbdata = new PDO("mysql:host=$host;dbname=$db_data;", $user, $pass);
} catch (PDOException $e) {
	echo 'Data Gagal ' . $e->getMessage();
}

try {
	$dbinfo = new PDO("mysql:host=$host;dbname=$db_info", $user, $pass);
} catch (PDOException $e) {
	echo 'Info Gagal ' . $e->getMessage();
}

try {
	$dblog = new PDO("mysql:host=$host;dbname=$db_log", $user, $pass);
} catch (PDOException $e) {
	echo 'Log Gagal ' . $e->getMessage();
}

try {
	$dbuser = new PDO("mysql:host=$host;dbname=$db_user", $user, $pass);
} catch (PDOException $e) {
	echo 'User Gagal ' . $e->getMessage();
}

$view = '../src/function/view.php';
$web = 'src/function/view.php';
