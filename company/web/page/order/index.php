<?php if ($member['id_part'] == "3") {
    include '../src/config/database.php';

    if (isset($_POST['tambah_order'])) {
        $order_books = $_POST['order_books'];
        $title_books = $_POST['title_books'];
        $price_books = $_POST['price_books'];
        $total_books = $_POST['total_books'];
        $amount_books = $_POST['amount_books'];
        $estimation_books = $_POST['estimation_books'];

        $data[] = $order_books;
        $data[] = $title_books;
        $data[] = $price_books;
        $data[] = $total_books;
        $data[] = $amount_books;
        $data[] = $estimation_books;

        $sql9 = 'INSERT INTO completeness (file_completeness, editor_completeness, photo_completeness, foreword_completeness, cvbio_completeness, toc_completeness, synopsis_completeness, bibliografi_completeness)
    VALUES (0, 0, 0, 0, 0, 0, 0, 0);
    SET @id_completeness=LAST_INSERT_ID();

    INSERT INTO cover (front_cover, back_cover)
    VALUES (0, 0);
    SET @id_cover=LAST_INSERT_ID();

    INSERT INTO books (order_books, title_books, price_books, total_books, amount_books, estimation_books, id_completeness, id_cover)
    VALUES (?, ?,?, ?, ?, ?, @id_completeness, @id_cover)';

        $row9 = $dbdata->prepare($sql9);
        $row9->execute($data);

        $id_member = $_SESSION['id_member'];
        $data2[] = $title_books;

        $log = "INSERT INTO com_log.log (id_member, id_crud, id_action, note_log) VALUES ($id_member, 1, 4, ?) ";
        $query = $dbuser->prepare($log);
        $query->execute($data2);
        echo '<script>alert("Berhasil Tambah Data");window.location="?page=order"</script>';
    }

    if (isset($_POST['tambah_penulis'])) {
        $author = $_POST['author'];

        $data3[] = $author;

        $sql9 = 'INSERT INTO member (name_member, id_part)
    VALUES (?, 5)';

        $row9 = $dbuser->prepare($sql9);
        $row9->execute($data3);

        $id_member = $_SESSION['id_member'];
        $data4[] = $author;

        $log2 = "INSERT INTO com_log.log (id_member, id_crud, id_action, note_log) VALUES ($id_member, 1, 5, ?) ";
        $query = $dbuser->prepare($log2);
        $query->execute($data4);
        echo '<script>alert("Berhasil Tambah Penulis");window.location="?page=order"</script>';
    } ?>

    <form method="POST" action="">
        <input type="number" name="order_books" value="" placeholder="Nomer Order"><br>
        <input type="text" name="title_books" value="" placeholder="Judul Buku"><br>
        <input type="number" name="price_books" value="" placeholder="Harga Satuan"><br>
        <input type="number" name="total_books" value="" placeholder="Harga Semua"><br>
        <input type="number" name="amount_books" value="" placeholder="Jumlah Cetak"><br>
        <input type="date" name="estimation_books" value="" placeholder="Perkiraan Jadi"><br>
        <input type="submit" name="tambah_order" value="tambah order" />
    </form>

    <br>

    <form method="POST" action="">
        <input type="text" name="author" value="" placeholder="author"><br>
        <input type="submit" name="tambah_penulis" value="tambah penulis" />
    </form>

<?php } else {
    include '../src/function/notfoundpage.php';
} ?>