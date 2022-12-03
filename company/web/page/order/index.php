<?php if ($member['id_part'] == "3") {

    if (isset($_POST['tambah_order'])) {
        $order_books = $_POST['order_books'];

        $process = "SELECT * FROM books WHERE order_books=$order_books";
        $stmt = $dbdata->prepare($process);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            echo 'No Order Sudah Ada';
        } else {
            $order_books = $_POST['order_books'];
            $title_books = $_POST['title_books'];
            $price_books = $_POST['price_books'];
            $total_books = $_POST['total_books'];
            $amount_books = $_POST['amount_books'];
            $estimation_books = $_POST['estimation_books'];
            $show_books = $_POST['show_books'];

            $create_books[] = $order_books;
            $create_books[] = $title_books;
            $create_books[] = $price_books;
            $create_books[] = $total_books;
            $create_books[] = $amount_books;
            $create_books[] = $estimation_books;
            $create_books[] = $show_books;

            $books_sql = 'INSERT INTO completeness (file_completeness, editor_completeness, photo_completeness, foreword_completeness, cvbio_completeness, toc_completeness, synopsis_completeness, text_synopsis_completeness, bibliografi_completeness)
VALUES (0, 0, 0, 0, 0, 0, 0, 0, 0);
SET @id_completeness=LAST_INSERT_ID();

INSERT INTO cover (front_cover, back_cover)
VALUES (0, 0);
SET @id_cover=LAST_INSERT_ID();

INSERT INTO specification (pages_specification, isbn_specification, eisbn_specification, size_specification, paper_specification)
VALUES (0, 0, 0, 0, 0);
SET @id_specification=LAST_INSERT_ID();

INSERT INTO production (description_production)
VALUES (0);
SET @id_production=LAST_INSERT_ID();

INSERT INTO books (order_books, title_books, price_books, total_books, amount_books, estimation_books, id_completeness, id_cover, id_specification, id_production, show_books)
VALUES (?, ?, ?, ?, ?, ?, @id_completeness, @id_cover, @id_specification, @id_production, ?)';

            $row = $dbdata->prepare($books_sql);
            $row->execute($create_books);

            $id_target = $dbdata->lastInsertId();
            $title_log[] = $title_books;
            $log = "INSERT INTO com_log.log (id_member, id_crud, id_action, id_target, note_log) VALUES ($id_member, 1, 4, $id_target, ?) ";
            $query = $dblog->prepare($log);
            $query->execute($title_log);
            echo '<script>alert("Berhasil Tambah Data");window.location="?page=order"</script>';
        }
    }

?>

    <form method="POST" action="">
        <input type="number" name="order_books" placeholder="Nomer Order" required><br>
        <input type="text" name="title_books" placeholder="Judul Buku" required><br>
        <input type="number" name="price_books" placeholder="Harga Satuan"><br>
        <input type="number" name="total_books" placeholder="Harga Semua"><br>
        <input type="number" name="amount_books" placeholder="Jumlah Cetak"><br>
        <input type="date" name="estimation_books" placeholder="Perkiraan Jadi"><br>
        Tampilkan di web atau tidak?<input name="show_books" value="0" hidden><input type="checkbox" name="show_books" value="1"><br>
        <input type="submit" name="tambah_order" value="tambah order" />
    </form><br>



<?php } else {
    include '../src/function/notfoundpage.php';
} ?>