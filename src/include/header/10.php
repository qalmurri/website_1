<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css">
    <title>Com</title>
</head>

<ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="?page=faq">Faq</a></li>
    <li><a href="?page=info">Info</a></li>
    <li><a href="?page=statistics">Statistics</a></li>
    <?php
    if (!empty($_SESSION['id_member'])) {
        echo '<li><a href="' . $_SESSION['name_section'] . '">Sudah Login</a></li>';
    } else {
        echo '<li><a href="?page=login">Login</a></li>';
    }
    ?>
</ul>