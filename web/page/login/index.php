<?php
session_start();
include('src/config/database.php'); //require

if (!empty($_SESSION['section'])) {
    echo '<script>window.location="' . $_SESSION['name_section'] . '/index.php"</script>';
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
                $_SESSION['id_setting'] = $session['id_setting'];

                $id = $session['id_section'];
                $section = "SELECT name_section
                FROM section
                where id_section=$id";
                $query2 = $dbuser->prepare($section);
                $query2->execute();
                $sections = $query2->fetch(PDO::FETCH_ASSOC);
                $_SESSION['name_section'] = $sections['name_section'];

                echo '<script>alert("Login Sukses");window.location="' . $_SESSION['name_section'] . '/index.php"</script>';
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



<?php
$sql = 'DELETE kk, kelengkapan
    FROM kk
    INNER JOIN kelengkapan
    WHERE kk.id_kelengkapan=kelengkapan.id_kelengkapan
    AND kk.id_kk=?';

$sql_log =
    'INSERT INTO log (id_member, id_action, log_judul, log_tanggal)
VALUE (?, 2, ?, ?);';

$row = $dbdata->prepare($sql);
$row->execute($data);
