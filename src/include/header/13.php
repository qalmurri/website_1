    <!DOCTYPE html>
    <html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="../src/icon/favicon.png">
        <title>Company</title>
    </head>

    <style>
        <?php $style = "../src/css/style.css";
        echo minify(file_get_contents($style)); ?>
    </style>

    <div class="topnav" id="myTopnav">
        <a href="index.php">Home</a>
        <a href="?page=books">Books</a>
        <div class="dropdown">
            <button class="dropbtn">Tambah
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="?page=order">Order</a>
                <a href="?page=update">??</a>
            </div>
        </div>
        <a href="?page=profile">Profile</a>
        <a href="logout/">Logout</a>
        <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
    </div>