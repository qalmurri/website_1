<?php
require '../src/config/database.php';
include $profil;

$id_member = $_SESSION['id_member'];

$user = new view($dbuser);
$member = $user->member($id_member);

if (isset($_POST['update_gambar'])) {
    $allowedImageType = array("image/gif",   "image/JPG",   "image/jpeg",   "image/pjpeg",   "image/png",   "image/x-png");

    if (!in_array($_FILES['foto']["type"], $allowedImageType)) {
        echo '<script>alert("Masukkan file JPG, PNG and GIF file");window.location="?page=profile"</script>';
    } elseif (round($_FILES['foto']["size"] / 1024) > 4096) {
        echo '<script>alert("WARNING !!! Besar Gambar Tidak Boleh Lebih Dari 4 MB");window.location="?page=profile"</script>';
    } else {

        $tmp_name = $_FILES['foto']['tmp_name'];
        $dir = '../image/profil/';
        $name = $id_member . '_' . basename($_FILES['foto']['name']);

        if (move_uploaded_file($tmp_name, $dir . $name)) {
            unlink('../image/profil/' . $member['image_member']);

            $data[] = $name;
            $data[] = $id_member;

            $sql = 'UPDATE member SET image_member=?  WHERE member.id_member=?';
            $row = $dbuser->prepare($sql);
            $row->execute($data);

            $log = "INSERT into com_log.log (id_member, id_crud, id_action)
            VALUES ($id_member, 3, 3)";
            $query_log = $dbuser->prepare($log);
            $query_log->execute();

            echo '<script>alert("Upload Berhasil");window.location="?page=profile"</script>';
        } else {
            echo '<script>alert("Gagal Upload");window.location="?page=profile"</script>';
        }
    }
}
?>
<img src="../image/profil/<?php echo $member['image_member'] ?>" alt="#" style="width:200px;border:4px solid #ddd;" />
<form method="POST" action="" enctype="multipart/form-data">
    <input type="file" accept="image/*" name="foto">
    <input type="submit" name="update_gambar" value="update" />
</form>