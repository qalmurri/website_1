<!DOCTYPE html>
<html>

<?php
$query4 = $user->web();
foreach ($query4 as $meta) { ?>

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="<?php echo $meta['description_meta'] ?>">
        <meta name="keywords" content="<?php echo $meta['keywords_meta'] ?>">
        <meta name="author" content="<?php echo $meta['author_meta'] ?>">
        <meta name="viewport" content="<?php echo $meta['viewport_meta'] ?>">
        <link rel="shortcut icon" href="src/icon/favicon.png">
        <title>Website</title>
    </head>
<?php } ?>

<style>
    <?php $url = "src/css/style.css";
    echo minify(file_get_contents($url)); ?>
</style>

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