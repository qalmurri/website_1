<?php if ($member['id_part'] == "3") {

    if (isset($_POST['tambah'])) {
        $order_books = $_POST['title_books'];
        $title_books = $_POST['judul'];

        $data[] = $order_books;
        $data[] = $title_books;

        $sql =
            'INSERT INTO kelengkapan (kelengkapan_file,
        kelengkapan_editor,
        kelengkapan_foto,
        kelengkapan_kata_pengantar,
        kelengkapan_cv_bio,
        kelengkapan_daftar_isi,
        kelengkapan_sinopsis,
        kelengkapan_daftar_pustaka)
        VALUES (0,0,0,0,0,0,0,0);
        SET @last_id_kelengkapan=LAST_INSERT_ID();
INSERT INTO kk (id_kelengkapan,
kk_no_order,
kk_judul,
VALUES(@last_id_kelengkapan,?,?);
SET @last_id_kk=LAST_INSERT_ID()';

        $sql_log =
            'INSERT INTO log (id_member, id_action, log_judul, log_tanggal)
VALUE (?, 1, ?, ?);';

        $row = $dbdata->prepare($sql);
        $row->execute($data);
        $log = $dbinfo->prepare($sql_log);
        $log->execute($data_log);
        echo '<script>window.location="../' . $_SESSION['section'] . '/index.php?page=data"</script>';
    } ?>



    <form method="POST" action="">
        <input type="text" name="order_books" value="" placeholder="Nomer Order"><br>
        <input type="number" name="title_books" value="" placeholder="Judul Buku">
        <input type="submit" name="tambah" value="Tambah" />
    </form>

<?php } else {
    include '../src/function/notfoundpage.php';
} ?>