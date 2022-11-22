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
            <button class="dropbtn">CRUD
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="?page=create">Create</a>
                <a href="?page=update">Update</a>
            </div>
        </div>
        <a href="?page=profile">Profile</a>
        <a href="logout/">Logout</a>
        <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
    </div>