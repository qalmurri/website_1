<?php
require('src/config/database.php'); //require

if (!empty($_SESSION['id_member'])) {
    echo '<script>window.location="' . $_SESSION['name_section'] . '/"</script>';
} else {
    if (isset($_POST['login'])) {
        $username = $_POST['user'];
        $password = $_POST['pass'];
        if (empty($username) && empty($password)) {
            $error = 'Isi data dulu bro';
        } else {
            $process = "SELECT *
            FROM `login`
            WHERE `username`=:username AND `password`=:password";
            $query = $dbuser->prepare($process);
            $query->bindParam(':username', $username, PDO::PARAM_STR);
            $query->bindParam(':password', $password, PDO::PARAM_STR);
            $query->execute();
            $session = $query->fetch(PDO::FETCH_ASSOC);
            if ($query->rowCount() > 0) {
                $_SESSION['id_member'] = $session['id_member'];

                echo '<script>window.location="src/function/check_section.php?id=' . $_SESSION['id_member'] . '"</script>';
            } else {
                $error = "User dan Pass gak ada";
            }
        }
    }
?>
    <form method="POST">
        <table>
            <input type="text" name="user" placeholder="Username" />
            <input type="password" name="pass" placeholder="Password" />
            <input type="submit" name="login" />
        </table>
    </form>
    <?php if (isset($error)) {
        echo $error;
    } ?>
<?php } ?>