<?php
session_start();
include('src/config/database.php');

if (!empty($_SESSION['section'])) {
    echo '<script>window.location="' . $_SESSION['section'] . '/index.php"</script>';
} else {
    if (isset($_POST['login'])) {
        $username = $_POST['user'];
        $password = $_POST['pass'];
        if (empty($username) && empty($password)) {
            $error = 'Isi data dulu bro';
        } else {
            $sql = "SELECT *
            FROM `login`
            WHERE `username`=:username AND `password`=:password";
            $query = $dbuser->prepare($sql);
            $query->bindParam(':username', $username, PDO::PARAM_STR);
            $query->bindParam(':password', $password, PDO::PARAM_STR);
            $query->execute();
            $results = $query->fetch(PDO::FETCH_ASSOC);
            if ($query->rowCount() > 0) {
                $_SESSION['member'] = $results['id_member'];
                $_SESSION['setting'] = $results['id_setting'];
                $_SESSION['section'] = $results['section'];
                echo '<script>alert("Login Sukses");window.location="' . $results['id_section'] . '/index.php"</script>';
            } else {
                $error = "User dan Pass gak ada";
            }
        }
    }
?>
    <form method="POST">
        <table>
            <input type="text" name="user" placeholder="username" />
            <input type="password" name="pass" placeholder="password" />
            <input type="submit" name="login" />
        </table>
    </form>
    <?php if (isset($error)) {
        echo $error;
    } ?>
<?php } ?>