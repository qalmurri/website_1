    <!DOCTYPE html>
    <html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="../src/icon/favicon.png">
        <title>Company's Admin</title>
    </head>

    <style>
        <?php $url = "../src/css/style.css";
        echo minify(file_get_contents($url)); ?>
    </style>

    <div class="topnav" id="myTopnav">
        <a href="index.php">Home</a>
        <a href="?page=member">Member</a>
        <div class="dropdown">
            <button class="dropbtn">CRUD
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="?page=create">Create</a>
                <a href="?page=read">Read</a>
                <a href="?page=update">Update</a>
                <a href="?page=delete">Delete</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Setting
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="?page=web">Web</a>
                <a href="?page=profile">Profile</a>
            </div>
        </div>
        <a href="logout/">Logout</a>
        <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
    </div>