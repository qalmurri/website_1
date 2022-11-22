<?php
require('src/config/database.php'); //require

if (!empty($_SESSION['id_setting'])) {
    echo '<script>window.location="' . $name_section['name_section'] . '"</script>'; //localhost/index.php
} else {
    if (isset($_POST['login'])) {
        $username = $_POST['u'];
        $password = $_POST['p'];

        if (empty($username) && empty($password)) {
            $error = 'Isi data dulu bro';
        } else {
            $process = "SELECT * FROM `login` WHERE `username_login`=:username AND `password_login`=:password";
            $query = $dbuser->prepare($process);
            $query->bindParam(':username', $username, PDO::PARAM_STR);
            $query->bindParam(':password', $password, PDO::PARAM_STR);
            $query->execute();
            $session = $query->fetch(PDO::FETCH_ASSOC);

            if ($query->rowCount() > 0) {
                $_SESSION['id_member'] = $session['id_member'];
                $id_member = $session['id_member'];
                $id_login = $session['id_login'];

                $token_login = time();
                $_SESSION['token_login'] = $token_login;

                $update = "UPDATE login SET token_login=$token_login WHERE login.id_login=$id_login;";
                $query2 = $dbuser->prepare($update);
                $query2->execute();

                $log = "INSERT INTO com_log.log (id_member, id_crud, id_action, note_log) VALUES ($id_member, 1, 2, $token_login) ";
                $query = $dbuser->prepare($log);
                $query->execute();

                echo '<script>window.location="src/function/check_section.php?id=' . $_SESSION['id_member'] . '"</script>';
            } else {
                $error = "User dan Pass gak ada";
            }
        }
    }

    if (isset($error)) {
        echo $error;
    }
?>

    <form method="POST">
        <table>
            <input type="text" name="u" placeholder="Username" />
            <input type="password" name="p" placeholder="Password" />
            <input type="submit" name="login" />
        </table>
    </form>

<?php } ?>