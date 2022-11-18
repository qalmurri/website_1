<?php
require('src/config/database.php'); //require

if (!empty($_SESSION['token_login'])) {
    echo '<script>window.location="index.php"</script>';
} else {
    if (isset($_POST['login'])) {
        $username = $_POST['u'];
        $password = $_POST['p'];
        if (empty($username) && empty($password)) {
            $error = 'Isi data dulu bro';
        } else {
            $process = "SELECT *
            FROM `login`
            WHERE `username_login`=:username AND `password_login`=:password";
            $query = $dbuser->prepare($process);
            $query->bindParam(':username', $username, PDO::PARAM_STR);
            $query->bindParam(':password', $password, PDO::PARAM_STR);
            $query->execute();
            $session = $query->fetch(PDO::FETCH_ASSOC);
            if ($query->rowCount() > 0) {
                $_SESSION['id_member'] = $session['id_member'];
                $id_login = $session['id_login'];
                $token_login = time();

                $update = "UPDATE login SET token_login=$token_login WHERE login.id_login=$id_login;";
                $query2 = $dbuser->prepare($update);
                $query2->execute();
                $_SESSION['token_login'] = $token_login;

                echo '<script>window.location="src/function/check_section.php?id=' . $_SESSION['id_member'] . '"</script>';
            } else {
                $error = "User dan Pass gak ada";
            }
        }
    }
?>
    <form method="POST">
        <table>
            <input type="text" name="u" placeholder="Username" />
            <input type="password" name="p" placeholder="Password" />
            <input type="submit" name="login" />
        </table>
    </form>
    <?php if (isset($error)) {
        echo $error;
    } ?>
<?php } ?>