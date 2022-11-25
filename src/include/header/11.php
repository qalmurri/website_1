    <!DOCTYPE html>
    <html lang="en">

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

        <div class="dropdown">
            <button class="dropbtn">Member
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="?page=member">All</a>
                <a href="?page=member/author">author</a>
            </div>
        </div>

        <div class="dropdown">
            <button class="dropbtn">CRUD
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="?page=crud">All</a>
                <a href="?page=crud/create">Create</a>
                <a href="?page=crud/read">Read</a>
                <a href="?page=crud/update">Update</a>
                <a href="?page=crud/delete">Delete</a>
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
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
    </div>