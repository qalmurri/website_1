<?php

$id_books = $_GET['book'];
$books_dashboard = new view($dbdata);
$book = $books_dashboard->books_dashboard($id_books);

if (isset($_POST['edit_author'])) {
    $id_books = $_GET['book'];
    $id_author = $_POST['author'];

    foreach ($id_author as $author) {
        $sql = "INSERT INTO com_category.author (id_books, id_member) VALUES ($id_books, $author)";
        $row = $dbcategory->prepare($sql);
        $row->execute();
    }

    echo '<script>alert("Berhasil Tambah Penulis");window.location="?page=books/detail&book=' . $id_books . '"</script>';
}

if (isset($_POST['tambah_penulis'])) {

    $author = $_POST['author'];

    $create_author[] = $author;
    $author_sql = 'INSERT INTO member (name_member, id_part) VALUES (?, 5)';
    $row = $dbuser->prepare($author_sql);
    $row->execute($create_author);

    $id_author = $dbuser->lastInsertId();
    $author_log[] = $author;
    $log = "INSERT INTO com_log.log (id_member, id_crud, id_action, id_target, note_log) VALUES ($id_member, 1, 5, $id_author, ?) ";
    $query = $dblog->prepare($log);
    $query->execute($author_log);
    echo '<script>alert("Berhasil Tambah Penulis");window.location="?page=books/detail&book=' . $id_books . '"</script>';
} ?>


<form method="POST">
    <input value="<?php echo $book['order_books'] ?>" disabled>
    <input type="number" name="order_books" value="<?php echo $book['order_books'] ?>" placeholder="order_books">
    <input type="submit" name="#" value="Edit" />
</form>
<form method="POST">
    <input value="<?php echo $book['title_books'] ?>" disabled>
    <input type="text" name="title_books" value="<?php echo $book['title_books'] ?>" placeholder="title_books">
    <input type="submit" name="#" value="Edit" />
</form>
<form method="POST">
    <input value="<?php echo $book['price_books'] ?>" disabled>
    <input type="number" name="price_books" value="<?php echo $book['price_books'] ?>" placeholder="price_books">
    <input type="submit" name="#" value="Edit" />
</form>
<form method="POST">
    <input value="<?php echo $book['total_books'] ?>" disabled>
    <input type="number" name="price_books" value="<?php echo $book['total_books'] ?>" placeholder="total_books">
    <input type="submit" name="#" value="Edit" />
</form>
<form method="POST">
    <input value="<?php echo $book['amount_books'] ?>" disabled>
    <input type="number" name="amount_books" value="<?php echo $book['amount_books'] ?>" placeholder="amount_books">
    <input type="submit" name="#" value="Edit" />
</form>
<form method="POST">
    <input value="<?php echo $book['estimation_books'] ?>" disabled>
    <input type="text" name="estimation_books" value="<?php echo $book['estimation_books'] ?>" placeholder="estimation_books">
    <input type="submit" name="#" value="Edit" />
</form>

<?php echo $book['file_completeness'] ?><br>
<?php echo $book['editor_completeness'] ?><br>
<?php echo $book['photo_completeness'] ?><br>
<?php echo $book['foreword_completeness'] ?><br>
<?php echo $book['cvbio_completeness'] ?><br>
<?php echo $book['toc_completeness'] ?><br>
<?php echo $book['synopsis_completeness'] ?><br>
<?php echo $book['bibliografi_completeness'] ?><br>

<?php echo $book['front_cover'] ?><br>
<?php echo $book['back_cover'] ?><br>

<?php
$category = new view($dbcategory);
$hasil = $category->author_book($id_books);
foreach ($hasil as $author) { ?>
    <a href="<?php echo $author['id_member'] ?>"><?php echo $author['name_member'] ?></a><br>
<?php } ?>
<!-- -->

<form method="POST">
    <select name="author[]" multiple>
        <optgroup label="Author">
            <?php
            $query = $user->author($id_books);
            foreach ($query as $author) {
                $count2 = $books_dashboard->author_count($author['id_member']);
                foreach ($count2 as $author2)  ?>
                <option value="<?php echo $author['id_member']; ?>"><?php echo $author['name_member']; ?> (<?php echo $author2 ?>)</option>
            <?php } ?>
        </optgroup>
    </select>
    <input type="submit" name="edit_author" value="edit_author" />
</form>
<br>
<form method="POST" action="">
    <input type="text" name="author" value="" placeholder="author"><br>
    <input type="submit" name="tambah_penulis" value="tambah penulis" />
</form>