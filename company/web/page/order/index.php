<?php if ($member['id_part'] == "3") {

    include '../src/config/database.php';
    if (isset($_POST['tambah'])) {
        $order_books = $_POST['order_books'];
        $title_books = $_POST['title_books'];

        $data[] = $order_books;
        $data[] = $title_books;

        $sql9 = 'INSERT INTO completeness (file_completeness, editor_completeness, photo_completeness, foreword_completeness, cvbio_completeness, toc_completeness, synopsis_completeness, bibliografi_completeness)
    VALUES (0, 0, 0, 0, 0, 0, 0, 0);
    SET @last_id=LAST_INSERT_ID();
    
INSERT INTO books (order_books, title_books, id_completeness)
VALUES (?, ?, @last_id)';
        $row9 = $dbdata->prepare($sql9);
        $row9->execute($data);

        $id_member = $_SESSION['id_member'];
        $data2[] = $title_books;

        $log = "INSERT INTO com_log.log (id_member, id_crud, id_action, note_log) VALUES ($id_member, 1, 4, ?) ";
        $query = $dbuser->prepare($log);
        $query->execute($data2);
        echo '<script>alert("Berhasil Tambah Data");window.location="?page=order"</script>';
    } ?>

    <form method="POST" action="">
        <input type="number" name="order_books" value="" placeholder="Nomer Order"><br>
        <input type="text" name="title_books" value="" placeholder="Judul Buku">
        <input type="submit" name="tambah" value="Tambah" />
    </form>

<?php } else {
    include '../src/function/notfoundpage.php';
} ?>