<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="../../../image/icon/images.png">
    <title>Com</title>
</head>

<div class="topnav" id="myTopnav">
    <a href="index.php">Home</a>
    <div class="dropdown">
        <button class="dropbtn">Book
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="?page=books">Books</a>
        </div>
    </div>
    <?php if (!empty($_SESSION['id_section'])) {
        echo '<a href="' . $name_section['name_section'] . '/">Sudah Login</a>'; //localhost/index.php
    } else {
        echo '<a href="?page=login">Login</a>';
    } ?>
    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>